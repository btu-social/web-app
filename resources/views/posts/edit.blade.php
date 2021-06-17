
<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/post/{{$post->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Gönderi İçeriği</label>
                            <input type="text" name="title" class="form-control" value="{{$post->title}}">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Resim Yükle:</strong>
                 <input type="file" name="file" class="form-control" placeholder="Post Title">
                @error('file')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
              <img src="{{ Storage::url($post->file) }}" height="200" width="200" alt="" />
            </div>
        </div>



                        <!-- <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
                        </div> -->

                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d', strtotime($post->published_at)) }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
