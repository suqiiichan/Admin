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
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                  <span>Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
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
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
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
                          <option value="Bahan Baku">Slider</option>
                          <option value="Bahan Baku">Hidrolis</option>
                          <option value="Bahan Baku">Oven Gesek</option>
                          <option value="Bahan Baku">Ayak</option>
                          <option value="Bahan Baku">Washing</option>
                          <option value="Bahan Baku">Pelet</option>
                          <option value="Bahan Baku">Saringan</option>
                          <option value="Bahan Baku">Gudang</option>
                          <option value="Bahan Baku">Bengkel</option>
                          <option value="Bahan Baku">Mixer</option>
                          <option value="Bahan Baku">Extruder</option>
                          <option value="Bahan Baku">Las Potong</option>
                          <option value="Bahan Baku">Slop</option>
                          <option value="Bahan Baku">Ball</option>
                          <option value="Bahan Baku">Pengiriman</option>
                          <option value="Bahan Baku">Satpam</option>
                          <option value="Bahan Baku">Sortir/Blowing</option>
                          <option value="Bahan Baku">Sablon</option>
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