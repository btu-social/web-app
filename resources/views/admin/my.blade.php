@include('admin/header', array('paramName' => 'value'))
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  @include('admin/sidebar', array('paramName' => 'value'))
  <!-- partial -->
  <!-- main-panel ends -->
  <div class="container mt-5 mw-100">
    @include('admin/content-header', array(
      'title' => 'Bilgilerim',
      'links' => '<nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bilgilerim</li>
              </ol>
            </nav>' ))
            <div class="row">
          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" enctype="multipart/form-data">
                  <div>
                    <div class="form-group col-lg-12">
                      <label for="name">Ad Soyad</label>
                      <input type="text" class="form-control" id="name" placeholder="Ad">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="email">E-posta</label>
                      <input type="email" class="form-control" id="email" placeholder="E-posta">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="username">Kullanıcı Adı</label>
                      <input type="password" class="form-control" id="username" placeholder="Kullanıcı Adı">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="password">Şifre</label>
                      <input type="password" class="form-control" id="password" placeholder="Şifre">
                    </div>      
                  </div>
                  <div class="form-group col-md-12">
                    <label>Avatar</label>
                    <input type="file" name="img" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Resim Yükle">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="button">Yükle</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="exampleTextarea1">Biyografi</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                  </div>
                  <button type="submit" class="btn btn-success mr-2">Güncelle</button>
                </form>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>

<!-- page-body-wrapper ends -->
</div>
@include('admin/footer', array('paramName' => 'value'))