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
                            <th>Mekan Adı</th>
                            <th>Mekan Hakkındaki Düşünceleriniz</th>
                            <th>Ne zaman Oluşturuldu</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($places as $place)
                        <tr>
                            <td>{{ $place->id }}</td>
                            <td>{{ $place->posted_by }}</td>
                            <td><img src="{{ Storage::url($place->file) }}" height="75" width="75" alt="" /></td>
                            <td>{{ $place->title }}</td>
                            <td>{{ $place->type }}</td>
                            <td>{{ date('Y-m-d', strtotime($place->created_at)) }}</td>
                            <td> 
                            <!-- <a href="post/{{$post->id}}" class="btn btn-primary">Show</a> -->
                            <a href="{{ route('place.show',$place->slug) }}"  class="btn btn-primary">Mekanı Görüntüle</a>
                            <a href="place/{{$place->id}}/edit" class="btn btn-primary">Mekanı Düzenle</a>
                            <form action="place/{{$place->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Mekanı Sil</button>
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
