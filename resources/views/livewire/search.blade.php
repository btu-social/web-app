<div class="col md-4">
    <input type="text" wire:model="search" placeholder="BTU Social'da Ara!"/>

    <div wire:loading>Kullanıcılar aranıyor...</div>
    <div wire:loading.remove>
        @if ($search == "")
        <div class="text-gray-500 text-sm">
            Kullanıcı aramak için yazınız..
        </div>
        @else
        @if($users->isEmpty()|| $search == " ")
        <div class="text-gray-500 text-sm">
            Arama bulunamadı...
        </div>
        @else
        @foreach($users as $user)
        <div class="sm:flex sm:flex-wrap">
            <a href="profile/{{$user->id}}">
                <div
                    class="flex items-center bg-gray-50 px-2 py-3 border-1 border-gray-500 mt-5 hover:bg-gray-400 hover:text-blue:800">
                    <div class="flex flex-shrink-0">
                        <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}"
                            class="h-8 w-8 rounde-full object-cover">
                    </div>
                    <div class="flex flex-grow overflow-hidden">
                        <span class="text-lg ml-3">
                            {{$user->name}}
                        </span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        {{$users->onEachSide(1)->links('livewire-pagination')}}
        @endif
        @endif
    </div>
</div>

