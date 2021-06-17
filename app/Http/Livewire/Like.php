<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Like extends Component
{
    public Post $post;
    public  $count;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->count = $post->likes_count;
    }

    public function like(): void
    {
        if ($this->post->isLiked()) {
            $this->post->removeLike();

            $this->count--;
        } elseif (auth()->user()) {
            $this->post->likes()->create([
                'user_id' => auth()->id(),
            ]);

            $this->count++;
        } elseif (($ip = request()->ip()) && ($userAgent = request()->userAgent())) {
            $this->post->likes()->create([
                'ip' => $ip,
                'user_agent' => $userAgent,
            ]);

            $this->count++;
        }
    }

    public function render()
    {
        return view('livewire.like');
    }
}
