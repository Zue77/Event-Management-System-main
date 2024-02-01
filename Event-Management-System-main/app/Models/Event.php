<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'startTime',
        'endTime',
        'city',
        'state',
        'country',
        'description',
        'price',
        'user_id'
    ];

    // // Many to 1 relationship with user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
