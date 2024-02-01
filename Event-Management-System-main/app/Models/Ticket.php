<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Event;

class Ticket extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'userID',
        'eventID',
        'qty',
    ];

    // Many to 1 relationship with user
    public function user() {
        return $this->belongsTo(User::class, 'userID');
    }  

    // Many to 1 relationship with event
    public function event() {
        return $this->belongsTo(Event::class, 'eventID');
    }  


}
