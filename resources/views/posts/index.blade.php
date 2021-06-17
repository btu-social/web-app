
<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
               
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Kim Tarafından Oluşturuldu</th>
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Tip</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->posted_by }}</td>
                            <td><img src="{{ Storage::url($post->file) }}" height="75" width="75" alt="" /></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->type }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                            <td> 
                            <!-- <a href="post/{{$post->id}}" class="btn btn-primary">Show</a> -->
                            <a href="{{ route('post.show',$post->slug) }}"  class="btn btn-primary">Gönderiyi Görüntüle</a>
                            <a href="post/{{$post->id}}/edit" class="btn btn-primary">Gönderiyi Düzenle</a>
                            <form action="post/{{$post->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Gönderiyi Sil</button>
                            </form>
                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
</x-app-layout>
