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
            <a href="{{ route('players.create') }}" class="btn-link btn-lg mb-2">Add a Player</a>
            @forelse ($players as $player)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('players.show', $player) }}">{{ $player->title }}</a>
                    </h2>
                    <p class="mt-2">
                        {{ $player->first_name }}
                        {{$player->last_name}}
                        {{$player->player_number}}

                    </p>

                </div>
            @empty
            <p>No books</p>
            @endforelse
            <!-- This line of code simply adds the links for Pagination-->
            {{$players->links()}}
        </div>
    </div>
</x-app-layout>