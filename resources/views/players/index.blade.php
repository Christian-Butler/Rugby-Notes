<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Players') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <x-alert-success>
                {{ session('success') }}
            </x-alert-success> --}}
            {{-- Creates the route link to the player create view page --}}
            <a href="{{ route('players.create') }}" class="btn-link btn-lg mb-2">Add a Player</a>
            @forelse ($players as $player)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        {{-- Creates the route link to the player show view page --}}
                    <a href="{{ route('players.show', $player->id) }}">{{ $player->player_number }}</a>
                    </h2>
                    {{-- pulls and displays the players first name from the database --}}
                    <p class="mt-2">
                        {{ $player->first_name }}
                    </p>
                     {{-- pulls and displays the players last name from the database --}}
                    <p class="mt-2">
                        {{$player->last_name}}
                    </p>
                     {{-- pulls and displays the players date of birth from the database --}}
                    <p class="mt-2">
                        {{$player->dob}}
                    </p>
                </div>
                 {{--  Displays the message No players when no players have been created in the database --}}
            @empty
            <p>No Players</p>
            @endforelse
            <!-- This line of code adds the pagination for the index page-->
            {{$players->links()}}
        </div>
    </div>
</x-app-layout>