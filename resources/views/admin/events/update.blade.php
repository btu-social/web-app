@include('admin/header', array('paramName' => 'value'))
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  @include('admin/sidebar', array('paramName' => 'value'))
  <!-- partial -->
  <!-- main-panel ends -->
  <div class="container mt-5 mw-100">
    @include('admin/content-header', array(
      'title' => 'Etkinlik Güncelle',
      'links' => '<nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="/admin/students">Etkinlikler</a></li>
                <li class="breadcrumb-item active" aria-current="page">Güncelle</li>
              </ol>
            </nav>' ))
            <div class="row">
          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Etkinlik Bilgileri</h4>
                <form class="forms-sample" enctype="multipart/form-data">
                  <div>
                    <div class="form-group col-lg-12">
                      <label for="title">Başlık</label>
                      <input type="text" class="form-control" id="title" placeholder="Başlık">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="content">İçerik</label>
                      <input type="content" class="form-control" id="content" placeholder="İçerik">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="start_date">Başlangıç Tarihi</label>
                      <input type="date" class="form-control" id="start_date">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="due_date">Bitiş Tarihi</label>
                      <input type="date" class="form-control" id="due_date">
                    </div>      
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