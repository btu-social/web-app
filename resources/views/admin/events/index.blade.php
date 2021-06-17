@include('admin/header', array('paramName' => 'value'))
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  @include('admin/sidebar', array('paramName' => 'value'))
  <!-- partial -->
  <!-- main-panel ends -->
  <div class="container mt-5 mw-100">
    @include('admin/content-header', array(
      'title' => 'Etkinlikler',
      'links' => '<nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Etkinlikler</li>
              </ol>
            </nav>' ))
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <table id="data-table">
              <thead>
                <tr>
                  <th width="20"></th>
                  <th width="20"></th>
                  <th>Başlık</th>
                  <th>İçerik</th>
                  <th>Başlangıç</th>
                  <th>Bitiş</th>
                  <th>Oluşturma</th>
                  <th>Güncelleme</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="events/update?e=3" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Event 1</td>
                  <td>BTÜ Alp Sönmez Konseri</td>
                  <td>12 May 2017</td>
                  <td>12 May 2017</td>
                  <td>05 May 2017</td>
                  <td>07 May 2017</td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="events/update?e=3" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Yardım Günü</td>
                  <td>BTÜ Geleneksel Yardım Günü</td>
                  <td>12 May 2017</td>
                  <td>12 May 2017</td>
                  <td>05 May 2017</td>
                  <td>07 May 2017</td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="events/update?e=3" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Tanıtım</td>
                  <td>TMTAL Öğrencilerine Okul Tanıtımı</td>
                  <td>12 May 2017</td>
                  <td>12 May 2017</td>
                  <td>05 May 2017</td>
                  <td>07 May 2017</td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="events/update?e=3" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Webinar</td>
                  <td>Alper Sönmez Konuşması</td>
                  <td>12 May 2017</td>
                  <td>12 May 2017</td>
                  <td>05 May 2017</td>
                  <td>07 May 2017</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- page-body-wrapper ends -->
</div>
@include('admin/footer', array('paramName' => 'value'))