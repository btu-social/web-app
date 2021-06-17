<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           BTU Social
        </h2>
    </x-slot>

 <style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
{{ session('content') }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Gönderi Görünümü') }}</div>
                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p>Gönderi İçeriği: {{ $post->title }}</p>
                    <p>Kim Tarafından Oluşturuldu: {{$post->posted_by}}</p>
                    <p>Oluşturulma Zamanı: {{date('Y-m-d', strtotime($post->created_at))}}</p>
                    <p>Tip: {{ $post->type}}</p>
                    <p>Resim: <img src="{{ Storage::url($post->file) }}" height="75" width="75" alt="" /></p>


                </div>

      
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

            </div>
        </div>
    </div>
    
</div>
</x-app-layout>
