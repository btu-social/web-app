
<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>
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
                    <p>Posted by: {{$post->posted_by}}</p>
                   
                    <h2>{{$post->title}}</h2>

                    
                    <p>Created At: {{date('Y-m-d', strtotime($post->created_at))}}</p>
                    <br>
                    <div>
                        {{$post->body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
