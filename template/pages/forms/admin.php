<?php 
include '../../conn.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:http://localhost/projekayah/template/index.php");
}
 
// menampilkan pesan selamat datang
// echo "Hai, selamat datang ". $_SESSION['username'];
 
?>

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
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/mja.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/mja.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces-clipart/pic-3.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                  <span>Admin</span>
                </div>
              </div>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Menu</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../forms/admin.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Input Karyawan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/datakaryawan.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Karyawan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/satpam.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Satpam</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/kabag.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Kabag & OP</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/driver.php" >
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Driver</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/admin.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Admin</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/qc.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">QC</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/bahanbaku.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Bahan Baku</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/slider.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Slider</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link"  href="../tables/hidrolis.php" >
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Hidrolis</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/ovengesek.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Oven Gesek</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/ayak.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Ayak</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/washing.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Washing</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/pelet.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Pelet</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link"  href="../tables/saringan.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Saringan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/gudang.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Gudang</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/bengkel.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Bengkel</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/laspotong.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Las Potong</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/slider.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Slider</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link"  href="../tables/gudang.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Gudang</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/bengkel.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Bengkel</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Mixer</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/extruder.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Extuder</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/slop.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Slop</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="../tables/ball.php" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Ball</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/pengiriman.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Pengiriman</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/sortit.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Sorting/Bolwing</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/sablon.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Sablon</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/jumlah.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Jumlah Bagian</span>
            </a>
          </li>
        </ul>
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
                    <form class="forms-sample" action="../forms/datakaryawan.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" style="color: aliceblue;" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Id Karyawan</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" style="color: aliceblue;" name="kodekaryawan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Bagian</label>
                        <select class="js-example-basic-single" style="width:100%" name="bagian">
                          <option value="Kabag">Kabag</option>
                          <option value="Driver">Driver</option>
                          <option value="Admin">Admin</option>
                          <option value="QC">QC</option>
                          <option value="Bahan Baku">Bahan Baku</option>
                          <option value="Slider">Slider</option>
                          <option value="Hidrolis">Hidrolis</option>
                          <option value="Oven Gesek">Oven Gesek</option>
                          <option value="Ayak">Ayak</option>
                          <option value="Washing">Washing</option>
                          <option value="Pelet">Pelet</option>
                          <option value="Saringan">Saringan</option>
                          <option value="Gudang">Gudang</option>
                          <option value="Bengkel">Bengkel</option>
                          <option value="Mixer">Mixer</option>
                          <option value="Extruder">Extruder</option>
                          <option value="Las Potong">Las Potong</option>
                          <option value="Slop">Slop</option>
                          <option value="Ball">Ball</option>
                          <option value="Pengiriman">Pengiriman</option>
                          <option value="Satpam">Satpam</option>
                          <option value="Sortir/Blowing">Sortir/Blowing</option>
                          <option value="Sablon">Sablon</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Kategori</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="kategori">
                          <option>Pelet</option>
                          <option>Las Potong</option>
                          <option>Ekstuder</option>
                          <option>Slop</option>
                          <option>Tidak Ada</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Nomer Rekening</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nomer Rekening" style="color: aliceblue;" name="no_rekening">
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
                        <label for="exampleInputCity1">Nama Ibu Kandung</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Ibu Kandung" style="color: aliceblue;" name="ibu">
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
                        <label for="exampleInputCity1">Status Perpajakan</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Ststus Perpajakan" style="color: aliceblue;" name="status_perpajakan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Telepon</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Telepon" style="color: aliceblue;" name="telepon">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">No BPJS</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="No BPJS" style="color: aliceblue;" name="no_bpjs">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Keterangan</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Keteranan" style="color: aliceblue;" name="keterangan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Referensi</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Referensi" style="color: aliceblue;" name="referensi">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">JKK</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="jkk">
                          <option>Ada</option>
                          <option>Tidak Ada</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">JKM</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="jkm">
                          <option>Ada</option>
                          <option>Tidak Ada</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">JHT</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="jht">
                          <option>Ada</option>
                          <option>Tidak Ada</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">JP</label>
                        <select class="form-control" id="exampleSelectGender" style="color: aliceblue;" name="jp">
                          <option>Ada</option>
                          <option>Tidak Ada</option>
                        </select>
                      </div>
                      <input class="btn btn-primary mr-2" type="submit" value="submit">
                      <button class="btn btn-dark" name="cancel">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
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