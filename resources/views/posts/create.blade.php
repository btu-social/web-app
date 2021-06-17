
@include('header', ["title"=>"create"])
<button class="post-jb">
fsdfasdf
</button>
<div class="post-popup job_post ">
    <div class="post-project ">
        <h3 class="bg-secondary">Post a job</h3>
        <div class="post-project-fields">
            <form>
                <div class="row">

                    <div class="col-lg-12">
                        <textarea name="description" placeholder="Description"></textarea>
                    </div>
                    <div>
                        <label for="formFileLg" class="form-label"></label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                    <div class="col-lg-12">
                        <ul>
                            <li><button class="active bg-secondary" type="submit" value="post">Post</button></li>
                            <li><a href="#" title="">Cancel</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div>
</div>
<div class="post-popup job_post">
    <div class="post-project">
        <h3 class="bg-secondary">Paylaşım Oluştur</h3>
        <div class="post-project-fields">
            <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
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
                <div class="col-lg-12">
                    <textarea name="title" class="form-control" placeholder="İçerik"></textarea>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="formFileLg" class="form-label">Resim Yükle</label>
                        <input type="file" name="file" class="form-control form-control-lg" placeholder="Post Title">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="type" value="1">
                <div class="col-lg-12">
                    <ul>
                        <li><button class="bg-secondary" type="submit" value="post">Paylaş</button></li>
                    </ul>
                </div>
                </div>
            </form>
        </div>
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div>
</div>

@include('footer')