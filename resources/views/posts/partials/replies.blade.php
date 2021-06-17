<div class="comment-sec display-comment">
    <ul class="display-comment">
        @foreach($comments as $comment)
            <li>
                <div class="comment-list">
                    <div class="bg-img">
                        <img src="/assets/images/resources/bg-img1.png" alt="">
                    </div>
                    <div class="comment">
                        <h3>{{ $comment->user->name }}</h3>
                        <p>{{ $comment->comment }}</p>
                    </div>
                </div>
                <div class="post-comment">
                    <div class="comment_box">
                        <form method="post" action="{{ route('reply.add') }}">
                            @csrf
                            <input type="text" name="comment" placeholder="Yorum yaz...">
                            <input type="hidden" name="post_id" value="{{ $post_id }}" />
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                            <button type="submit">Gönder</button>
                        </form>
                    </div> 
                </div>
            </li>
            @isset($comment->replies)
                <li>
                    @include('posts.partials.replies', ['comments' => $comment->replies])
                    
                </li>
            @endisset
        @endforeach
    </ul>
</div>



