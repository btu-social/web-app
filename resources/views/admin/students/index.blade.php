@include('admin/header', array('paramName' => 'value'))
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  @include('admin/sidebar', array('paramName' => 'value'))
  <!-- partial -->
  <!-- main-panel ends -->
  <div class="container mt-5 mw-100">
    @include('admin/content-header', array(
      'title' => 'Öğrenciler',
      'links' => '<nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Öğrenciler</li>
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
                  <th>Ad Soyad</th>
                  <th>E-posta</th>
                  <th>Kayıt Tarihi</th>
                  <th>Hesap Durumu</th>
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
                    <a href="students/update?u=3" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Jacob</td>
                  <td>19360859074@ogrenci.btu.edu.tr</td>
                  <td>12 May 2017</td>
                  <td>
                    <label class="badge badge-success">Aktif</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="students/update?u=4" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Messsy</td>
                  <td>19360859687@ogrenci.btu.edu.tr</td>
                  <td>15 May 2017</td>
                  <td>
                    <label class="badge badge-warning">Askıda</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="students/update?u=5" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>John</td>
                  <td>19360859455@ogrenci.btu.edu.tr</td>
                  <td>14 May 2017</td>
                  <td>
                    <label class="badge badge-warning">Askıda</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="students/update?u=6" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Peter</td>
                  <td>19360859123@ogrenci.btu.edu.tr</td>
                  <td>16 May 2017</td>
                  <td>
                    <label class="badge badge-success">Aktif</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-light text-danger text-danger text-danger btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-trash"></i>
                    </button>
                  </td>
                  <td>
                    <a href="students/update?u=7" type="button" class="btn btn-light text-success btn-icons btn-rounded btn-secondary">
                      <i class="ion-md-create"></i>
                    </a>
                  </td>

                  <td>Dave</td>
                  <td>19360859543@ogrenci.btu.edu.tr</td>
                  <td>20 May 2017</td>
                  <td>
                    <label class="badge badge-success">Aktif</label>
                  </td>
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