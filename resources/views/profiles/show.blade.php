<x-app-layout>
    <x-slot name="header">

    <div class="col-lg-6">
                                <div class="main-ws-sec">
                                    <div class="user-tab-sec">
                                    @if($user->id != Auth::user()->id)
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{$user->name}}'in Profili

                    </h2>
                    @else
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Profilin: {{$user->name}}
                    </h2>
                    @endif
                </div>
                                        <div class="star-descp">
                                        </div>
        
    </x-slot>

    

   

    <p>Resim: <img src="{{ Storage::url($user->profile_photo_path) }}" height="75" width="75" alt="" /></p>

    <p>Adı: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    @foreach($posts as $post)

    <div class="product-feed-tab current" id="feed-dd">
                                        <div class="posts-section">
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                    <div class="sm:flex sm:flex-wrap">
            <a href="{{route('profiles.show', $post->getUser->id)}}">
                <div
                    class="flex items-center bg-gray-50 px-2 py-3 border-1 border-gray-500 mt-5 hover:bg-gray-400 hover:text-blue:800">
                    <div class="flex flex-shrink-0">
                    <img src="http://localhost:8000/storage/{{ $post->getUser->profile_photo_path }}" alt="{{ $post->getUser->name }}"
                            class="h-8 w-8 rounde-full object-cover">
                    </div>
                    <div class="flex flex-grow overflow-hidden">
                        <span class="text-lg ml-3">
                            {{$post->getUser->name}}
                        </span>
                    </div>
                </div>
            </a>
        </div>
        
    <p>Gönderi İçeriği: {{ $post->title }}</p>
            <p>Kim Tarafından Oluşturuldu: {{$post->posted_by}}</p>
            <p>Oluşturulma Zamanı: {{date('Y-m-d', strtotime($post->created_at))}}</p>
            <p>Tip: {{ $post->type}}</p>
            

            <p><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
</svg> <img src="{{ Storage::url($post->file) }}" height="100" width="100" alt="" /></p>





<div class="card-body">
                <h5>Yorumlar</h5>
            
                @include('posts.partials.replies', ['comments' => $post->comments, 'post_id' => $post->id])

                <hr />
               </div>

            <div class="card-body">
                <h5>Yorum Bırak</h5>
                <form method="post" action="{{ route('comment.add') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="comment" class="form-control" />
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Yorum Ekle" />
                    </div>
                </form>
               </div>

               @if($post->getUser->id==Auth::user()->id)
                    <form action="post/{{$post->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Gönderiyi Sil</button>
                            </form>
                            @endif

                         
               
    @endforeach


    @foreach ($places as $place)
            

            <div class="sm:flex sm:flex-wrap">
            <a href="{{route('profiles.show', $place->Getuser->id)}}">
                <div
                    class="flex items-center bg-gray-50 px-2 py-3 border-1 border-gray-500 mt-5 hover:bg-gray-400 hover:text-blue:800">
                    <div class="flex flex-shrink-0">
                    <img src="http://localhost:8000/storage/{{ $place->getUser->profile_photo_path }}" alt="{{ $place->getUser->name }}"
                            class="h-8 w-8 rounde-full object-cover">
                    </div>
                    <div class="flex flex-grow overflow-hidden">
                        <span class="text-lg ml-3">
                            {{$place->getUser->name}}
                        </span>
                    </div>
                </div>
            </a>
        </div>
            <p>Mekan Adı: {{ $place->title }}</p>
            <p>Kim Tarafından Oluşturuldu: {{$place->posted_by}}</p>
            <p>Oluşturulma Zamanı: {{date('Y-m-d', strtotime($place->created_at))}}</p>
            <p>Mekan Hakkındaki Düşünceleriniz: {{ $place->type}}</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
</svg> <img src="{{ Storage::url($place->file) }}" height="75" width="75" alt="" /></p>

            


            
            

            <div class="card-body">
                <h5>Yorumlar</h5>
            
                @include('places.partials.replies', ['comments' => $place->comments, 'place_id' => $place->id])

                <hr />
               </div>

            <div class="card-body">
                <h5>Yorum Bırak</h5>
                <form method="post" action="{{ route('commentplace.add') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="comment" class="form-control" />
                        <input type="hidden" name="place_id" value="{{ $place->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Yorum Ekle" />
                    </div>
                </form>
               </div>

               @if($place->getUser->id==Auth::user()->id)
            <form action="place/{{$place->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Mekan Paylaşımını Sil</button>
                            </form>
                            @endif
               
            @endforeach
            



    



   


</x-app-layout>