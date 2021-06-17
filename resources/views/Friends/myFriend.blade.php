<x-app-layout>

    <x-slot name="header">
    <div class="col md-5">
                    @livewire('search')
                </div>
    
    </x-slot>
    @if (session('deleteFriend'))
                    <div class="alert alert-success" role="alert">
                        <b>Arkadaşlıktan çıktınız!</b>
                    </div>
                    @endif
    @foreach($friendships as $friend)
    <div class="sm:flex sm:flex-wrap">
            <a href="{{route('profiles.show', $friend->id)}}">
                <div
                    class="flex items-center bg-gray-50 px-2 py-3 border-1 border-gray-500 mt-5 hover:bg-gray-400 hover:text-blue:800">
                    <div class="flex flex-shrink-0">
                        <img src="{{ $friend->profile_photo_url }}" alt="{{ $friend->name }}"
                            class="h-8 w-8 rounde-full object-cover">
                    </div>
                    <div class="flex flex-grow overflow-hidden">
                        <span class="text-lg ml-3">
    {{$friend->name}}

    <form action="/deletefriendship" method="post" class="d-inline">
                                {{ csrf_field() }}
                                <input type="hidden" id="user" name="user_id" value="{{ Auth::user()->id }}" required> 
                            <input type="hidden" id="user" name="friend_id" value="{{ $friend->id }}" required>
                                <button class="btn btn-danger" type="submit">Arkadaşlıktan Çıkar</button>
                            </form>
                            
                        </span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    </x-app-layout>