<style>
    .display-comment .display-comment {
        padding-left: 10px;
        padding-bottom: 5px;
    }
</style>



<div>
    @if(!$posts->count())
    <p>Anasayfada Görüntülenecek Bir Şey Yok.</p>
    @else
    @foreach ($posts as $post)
    <div class="post-bar mb-0 border-0">
        <div class="post_topbar">
            <div class="usy-dt w-100">
                <div class="usy-name w-100 m-0">
                    @if($post->getUser->profile_photo_path == null)
                        <a href="{{route('profiles.show', $post->getUser->id)}}">
                            <img width="64" height="64" src="{{ $post->getUser->profile_photo_url }}" alt="{{ $post->getUser->name }}" class="rounded-circle h-20 w-20 object-cover">
                        </a>
                    @endif
                    @if($post->getUser->profile_photo_path != null)
                        <a href="{{route('profiles.show', $post->getUser->id)}}">
                            <img width="64" height="64" src="http://localhost:8000/storage/{{ $post->getUser->profile_photo_path }}" alt="{{ $post->getUser->name }}" class="rounded-circle h-20 w-20 object-cover">
                        </a>
                    @endif
                    <h3>{{ $post->getUser->name }}</h3>
                    <span><img src="/assets/images/clock.png" alt="">{{date('Y-m-d', strtotime($post->created_at))}}</span>
                </div>
                <img src="{{ Storage::url($post->file) }}" height="250" width="100%" alt="" /></p>
            </div>
        </div>
        <div class="job_descp">
            <p>{{ $post->title }}</p>
        </div>
        <hr>
    </div>

    <div class="comment-section mb-4">
        <h6>Yorumlar</h6>
        <br>
        @include('posts.partials.replies', ['comments' => $post->comments, 'post_id' => $post->id])
        <div class="post-comment">
            <div class="comment_box">
                <form method="post" action="{{ route('comment.add') }}">
                    @csrf
                    <input type="text" name="comment" placeholder="Yorum yaz...">
                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    <button type="submit">Gönder</button>
                </form>
            </div>
        </div>
    </div>



    <div>
    @if($post->getUser->id==Auth::user()->id)
<form action="post/{{$post->id}}" method="post" class="d-inline">
    {{ csrf_field() }}
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Gönderiyi Sil</button>
</form>
@endif
    </div>


@endforeach
</div>
{{$posts->onEachSide(1)->links('livewire-pagination')}}
@endif