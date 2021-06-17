<x-app-layout>

    <x-slot name="header">
    <div class="col md-5">
                    @livewire('search')
                </div>
    
    </x-slot>
    @foreach($users as $user)
    @if($user->id != Auth::user()->id)
    <div class="sm:flex sm:flex-wrap">
            <a href="{{route('profiles.show', $user->id)}}">
                <div
                    class="flex items-center bg-gray-50 px-2 py-3 border-1 border-gray-500 mt-5 hover:bg-gray-400 hover:text-blue:800">
                    @if($user->profile_photo_path != NULL)
                    <div class="flex flex-shrink-0">
                        <img src="http://localhost:8000/storage/{{ $user->profile_photo_path }}" alt="{{ $user->name }}"
                            class="h-8 w-8 rounde-full object-cover">
                    </div>
                    @endif
                    <div class="flex flex-grow overflow-hidden">
                        <span class="text-lg ml-3">
                            {{$user->name}}
                        </span>
                    </div>
                </div>
            </a>
        </div>
    <form action="/addFriends" method="post">
                                @csrf
                                <input type="hidden" id="user" name="user_id" value="{{ Auth::user()->id }}" required>
                                <input type="hidden" id="friend_id" name="friend_id" value="{{ $user->id }}" required>


                                <button type="submit" class="btn btn-primary">Arkadaş Ekle</button>
                            </form>

    @endif                        
    @endforeach
    


    
    
                
</x-app-layout>
