<!-- <?php
// include"../forms/datakaryawan.php";
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Input Karyawan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Karyawan</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" action="../forms/datapelamar.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" style="color: aliceblue;" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Nomer KTP</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Nomer KTP/NIK" style="color: aliceblue;" name="no_ktp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Nomer Kartu Keluarga</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Nomer Kartu Keluarga" style="color: aliceblue;" name="nokk">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Alamat Lengkap</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" style="color: aliceblue;" name="alamat_lengkap"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">RT</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="RT" style="color: aliceblue;" name="rt">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">RW</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="RW" style="color: aliceblue;" name="rw">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Dusun</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Dusun" style="color: aliceblue;" name="dusun">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Kecamatan</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Kecamatan" style="color: aliceblue;" name="kecamatan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Kota/Kabupaten</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Kota/Kabupaten" style="color: aliceblue;" name="kota">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Tempat Lahir</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Tempat Lahir" style="color: aliceblue;" name="tempat_lahir">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleInputCity1" placeholder="Tanggal Lahir" style="color: aliceblue;" name="tanggal_lahir">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Usia</label>
                        <input type="number" class="form-control" id="exampleInputCity1" placeholder="Usia" style="color: aliceblue;" name="usia">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Pendidikan</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="pendidikan">
                          <option>SD</option>
                          <option>SMP</option>
                          <option>SMA</option>
                          <option>SMK</option>
                          <option>MA</option>
                          <option>D3</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Nama Ibu Kandung</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Ibu Kandung" style="color: aliceblue;" name="ibu">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Jenis Kelamin</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="jenis_kelamin">
                          <option>Pria</option>
                          <option>Wanita</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="stts">
                          <option>Kawin</option>
                          <option>Belum Kawin</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Telepon</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Telepon" style="color: aliceblue;" name="telepon">
                      </div>
                      <!-- <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="image" class="form-control file-upload-info" id="image" accept="gambar/*" value=""> 

                        <div class="input-group col-xs-12">
                          <input type="file" name="image" class="form-control file-upload-info" id="foto" accept=".jpg, .jpeg, .png" value=""> 
                          <span class="input-group-append">
                          </span>
                        </div>
                      </div> -->
                      <!-- <div class="form-group">
                        <label>Foto Kartu Keluarga</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="foto_kk" class="form-control file-upload-info" placeholder="Upload Image">
                          <span class="input-group-append">
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Apload CV</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="cv" class="form-control file-upload-info" placeholder="Upload Image">
                          <span class="input-group-append">
                          </span>
                        </div>
                      </div> -->
                      
                      <input class="btn btn-primary mr-2" type="submit" name="upload" value="submit">
                      <!-- <button class="btn btn-dark" name="submit" type="submit">Submit</button> -->
                    </form>
                  </div>
                </div>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>