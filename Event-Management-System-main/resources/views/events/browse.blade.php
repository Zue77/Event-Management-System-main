<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Browse Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between flex-col sm:flex-row">
                        {{-- Search Bar --}}
                        <form action="{{ url('/event/browse') }}" method="get" class="inline">
                            <x-text-input type="text" name="search" placeholder="Search" />
                            <x-primary-button type="submit">Search</x-primary-button>
                        </form>

                        <div>
                            {{-- Filter Location --}}
                            <x-secondary-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'filter_location')">{{ __('Filter By Location') }}
                            </x-secondary-button>
                            <x-modal name="filter_location" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form action="{{ url('/event/browse') }}" method="get" class="p-6">
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Filter By Location') }}
                                    </h2>
                                    <x-select name="location">
                                        <option value="">None</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="North Dakota">North Dakota</option>
                                    </x-select>
                                    {{-- <x-text-input type='text' id='location' /> --}}
                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('Cancel') }}
                                        </x-secondary-button>
                                        <x-primary-button class="ms-3">
                                            {{ __('Filter') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </x-modal>

                            {{-- Filter Date --}}
                            <x-secondary-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'filter_date')">{{ __('Filter By Date') }}
                            </x-secondary-button>
                            <x-modal name="filter_date" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form action="{{ url('/event/browse') }}" method="get" class="p-6">
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Filter By Date') }}
                                    </h2>
                                    <x-input-label for="start_date">Start Date:</x-input-label>
                                    <x-text-input type="date" name="start_date"
                                        value="{{ request('start_date') }}" />
                                    <x-input-label for="end_date">End Date:</x-input-label>
                                    <x-text-input type="date" name="end_date" value="{{ request('end_date') }}" />
                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('Cancel') }}
                                        </x-secondary-button>
                                        <x-primary-button class="ms-3">
                                            {{ __('Filter') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </x-modal>

                            {{-- Order By --}}
                            <x-secondary-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'order')">{{ __('Order By') }}
                            </x-secondary-button>
                            <x-modal name="order" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form action="{{ url('/event/browse') }}" method="get" class="p-6">
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Order By') }}
                                    </h2>
                                    <div>
                                        <label>
                                            <input type="radio" name="order" value="ASC" checked>
                                            Ascending
                                        </label>

                                        <label>
                                            <input type="radio" name="order" value="DESC">
                                            Descending
                                        </label>
                                    </div>
                                    <x-select name="attribute">
                                        <option value="">None</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                        <option value="date">Date</option>
                                        <option value="startTime">Time</option>
                                        <option value="city">City</option>
                                        <option value="state">State</option>
                                        <option value="country">Country</option>
                                    </x-select>
                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('Cancel') }}
                                        </x-secondary-button>
                                        <x-primary-button class="ms-3">
                                            {{ __('Sort') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </x-modal>

                            {{-- Reset --}}
                            <x-secondary-link href="{{ url('/event/browse') }}">Reset</x-secondary-link>
                        </div>
                    </div>

                    {{-- Event Table --}}
                    <table class="table-auto min-w-full mt-4 mb-4">
                        <thead>
                            <tr class="text-left">
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">State</th>
                                <th class="py-2 px-4 border-b">Date</th>
                                <th class="py-2 px-4 border-b">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $event->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $event->state }}</td>
                                    <td class="py-2 px-4 border-b">{{ $event->date }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <x-primary-link
                                            href="{{route('event.view',['event'=> $event])}}">View</x-primary-link>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Display Pagination Links --}}
                    {{ $events->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
