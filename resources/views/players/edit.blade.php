<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Players') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach

                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <form action=" {{ route('players.update', $player) }}" method="POST">
                        @method('put')
                         @csrf 
                         <x-text-input type="text" 
                         name="first_name" 
                         field="First Name" 
                         placeholder="First Name" 
                         class="w-full"  
                         autocomplete="off"
                         :value="@old('first_name', $player->first_name)"></x-text-input>

                         

                         <x-text-input type="text" 
                         name="last_name" 
                         field="Last Name" 
                         placeholder="Last Name" 
                         class="w-full"  
                         autocomplete="off"
                         :value="@old('last_name', $player->last_name)"></x-text-input>

                         
                         <x-text-input type="date" 
                         name="dob" 
                         field="Date of Birth" 
                         placeholder="Date of Birth" 
                         class="w-full"  
                         autocomplete="off"
                         :value="@old('dob', $player->dob)"></x-text-input>

                         
                         <x-text-input type="number" 
                         name="player_number" 
                         field="Player Number" 
                         placeholder="Player Number" 
                         class="w-full"  
                         autocomplete="off"
                         :value="@old('player_number', $player->player_number)"></x-text-input>

                         
                         
                     
                         <x-primary-button class="mt-6">Save Note</x-primary-button>
                    </form>
     
                </div>
            
                
            </div>
        </div>
    </div>
</x-app-layout>