<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>

    <!-- <label for="">Gönderi Oluştur</label> -->

    

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    

                   
                    <form action="/event" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Etkinlik Adı</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Etkinlikte Neler Yapılacak</label>
                            <input type="text" name="content" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Etkinlik Nerede Olacak</label>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Başlangıç Tarihi</label>
                            <input type="date" name="start_date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Bitiş Tarihi</label>
                            <input type="date" name="due_date" class="form-control">
                        </div>

                       

                        <!-- <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div> -->

                        <div class="container mt-4">
       
            @if ($msg = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $msg }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Resim Yükle:</strong>
                 <input type="file" name="file" class="form-control" placeholder="Post Title">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

           


                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>