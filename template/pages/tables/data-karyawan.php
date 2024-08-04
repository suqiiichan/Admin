<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-excel.xls"); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Karyawan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
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
        <!-- partial -->
      
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Jumlah Karyawan : </h4>
                    </p>
		                <!-- <a target="_blank" href="export_excel.php">EXPORT KE EXCEL</a> -->
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr class="table-warning">
                            <th> No </th>
                            <th> Nama </th>
                            <th> Kode Karyawan </th>
                            <th> Bagian </th>
                            <th> Kategori </th>
                            <th> Nomer Rekening </th>
                            <th> NIK/ No KTP </th>
                            <th> No Kartu Keluarga</th>
                            <th> Alamat Lengkap </th>
                            <th> RT </th>
                            <th> RW </th>
                            <th> Dusun </th>
                            <th> Kecamatan </th>
                            <th> Kota/Kabupaten </th>
                            <th> Tempat Lahir </th>
                            <th> Tanggal Lahir </th>
                            <th> Nama Ibu Kandung</th>
                            <th> Usia </th>
                            <th> Pendidikan </th>
                            <th> Jenis Kelamin </th>
                            <th> Status </th>
                            <th> Status (Perpajakan) </th>
                            <th> Telepon </th>
                            <th> No BPJS </th>
                            <th> Keterangan </th>
                            <th> Referensi </th>
                            <th> JKK </th>
                            <th> JKM</th>
                            <th> JHT</th>
                            <th> JP</th>
                          </tr>
                        </thead>
                        <tbody>
                 <?php 
                    include "../../conn.php";
                    $no = 1;
                    $data = mysqli_query($conn,"SELECT * FROM  karyawan");
                    $jumlah_data = mysqli_num_rows($data);
                    while($d = mysqli_fetch_array($data)):
                      ?>
                    <tr class="table-info">
                      <td><?php echo $no++; ?> </td>
                      <td><?php echo $d['nama']; ?></td>
                      <td><?php echo $d['kodekaryawan']; ?></td>
                      <td><?php echo $d['bagian']; ?></td>
                      <td><?php echo $d['kategori']; ?></td>
                      <td><?php echo $d['no_rekening']; ?></td>
                      <td><?php echo $d['no_ktp']; ?></td>
                      <td><?php echo $d['nokk']; ?></td>
                      <td><?php echo $d['alamat_lengkap']; ?></td>
                      <td><?php echo $d['rt']; ?></td>
                      <td><?php echo $d['rw']; ?></td>
                      <td><?php echo $d['dusun']; ?></td>
                      <td><?php echo $d['kecamatan']; ?></td>
                      <td><?php echo $d['kota']; ?></td>
                      <td><?php echo $d['tempat_lahir']; ?></td>
                      <td><?php echo $d['tanggal_lahir']; ?></td>
                      <td><?php echo $d['ibu']; ?></td>
                      <td><?php echo $d['usia']; ?></td>
                      <td><?php echo $d['pendidikan']; ?></td>
                      <td><?php echo $d['jenis_kelamin']; ?></td>
                      <td><?php echo $d['stts']; ?></td>
                      <td><?php echo $d['status_perpajakan']; ?></td>
                      <td><?php echo $d['telepon']; ?></td>
                      <td><?php echo $d['no_bpjs']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                      <td><?php echo $d['referensi']; ?></td>
                      <td><?php echo $d['jkk']; ?></td>
                      <td><?php echo $d['jkm']; ?></td>
                      <td><?php echo $d['jht']; ?></td>
                      <td><?php echo $d['jp']; ?></td>
                  </tr>
                
                <?php 
                endwhile;
                ?>                     
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Jumlah Karyawan</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr class="table-warning">
                            <th> No </th>
                            <th> Bagian </th>
                            <th> Jumlah </th>
                          </tr>
                        </thead>
                        <tbody>
                 <?php 
                    include "../../conn.php";
                    $no = 1;
                    $get1 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Satpam'");
                    $count1 = mysqli_num_rows($get1);
                    $get2 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Kabag'");
                    $count2 = mysqli_num_rows($get2);
                    $get3 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Driver'");
                    $count3 = mysqli_num_rows($get3);
                    $get4 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'QC'");
                    $count4 = mysqli_num_rows($get4);
                    $get5 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Bahan Baku'");
                    $count5 = mysqli_num_rows($get5);
                    $get6 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Slider'");
                    $count6 = mysqli_num_rows($get6);
                    $get7 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Hindrolis'");
                    $count7 = mysqli_num_rows($get7);
                    $get8 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Oven Gesek'");
                    $count8 = mysqli_num_rows($get8);
                    $get9 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Washing'");
                    $count9 = mysqli_num_rows($get9);
                    $get10 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Pelet'");
                    $count10 = mysqli_num_rows($get10);
                    $get11 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Saringan'");
                    $count11 = mysqli_num_rows($get11);
                    $get12 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Gudang'");
                    $count12 = mysqli_num_rows($get12);
                    $get13 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Bengkel'");
                    $count13 = mysqli_num_rows($get13);
                    $get14 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Mixer'");
                    $count14 = mysqli_num_rows($get14);
                    $get15 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Extruder'");
                    $count15 = mysqli_num_rows($get15);
                    $get16 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Las Potong'");
                    $count16 = mysqli_num_rows($get16);
                    $get17 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Slop'");
                    $count17 = mysqli_num_rows($get17);
                    $get18 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Ball'");
                    $count18 = mysqli_num_rows($get18);
                    $get19 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Pengiriman'");
                    $count19 = mysqli_num_rows($get19);
                    $get20 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Sortir/Blowing'");
                    $count20 = mysqli_num_rows($get20);
                    $get21 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Sablon'");
                    $count21 = mysqli_num_rows($get21);
                    $get22 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Admin'");
                    $count22 = mysqli_num_rows($get22);
                    $get23 = mysqli_query($conn,"SELECT bagian FROM karyawan WHERE bagian = 'Ayak'");
                    $count23 = mysqli_num_rows($get23);
                    $get24 = mysqli_query($conn,"SELECT bagian FROM karyawan");
                    $count24 = mysqli_num_rows($get24);


                    ?>

                    <tr class="table-info">
                      <td>1</td>
                      <td>Satpam</td>
                      <td><?php echo $count1;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>2</td>
                      <td>Kabag</td>
                      <td><?php echo $count2;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>3</td>
                      <td>Driver</td>
                      <td><?php echo $count3;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>4</td>
                      <td>Admin</td>
                      <td><?php echo $count22;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>5</td>
                      <td>QC</td>
                      <td><?php echo $count4;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>6</td>
                      <td>Bahan Baku</td>
                      <td><?php echo $count5;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>7</td>
                      <td>Slider </td>
                      <td><?php echo $count6;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>8</td>
                      <td>Hidrolis</td>
                      <td><?php echo $count7;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>9</td>
                      <td>Oven Gesek</td>
                      <td><?php echo $count8;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>10</td>
                      <td>Ayak</td>
                      <td><?php echo $count23;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>11</td>
                      <td>Washing</td>
                      <td><?php echo $count9;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>12</td>
                      <td>Pelet</td>
                      <td><?php echo $count10;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>13</td>
                      <td>Saringan</td>
                      <td><?php echo $count11;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>14</td>
                      <td>Gudang</td>
                      <td><?php echo $count12;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>15</td>
                      <td>Bengkel</td>
                      <td><?php echo $count13;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>16</td>
                      <td>Mixer</td>
                      <td><?php echo $count14;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>17</td>
                      <td>Extruder</td>
                      <td><?php echo $count15;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>18</td>
                      <td>Las Potong</td>
                      <td><?php echo $count16;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>19</td>
                      <td>Slop</td>
                      <td><?php echo $count17;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>20</td>
                      <td>Ball</td>
                      <td><?php echo $count18;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>21</td>
                      <td>Pengiriman</td>
                      <td><?php echo $count19;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>22</td>
                      <td>Sortir/Blowing</td>
                      <td><?php echo $count20;?></td>
                    </tr>
                    <tr class="table-info">
                      <td>23</td>
                      <td>Sablon</td>
                      <td><?php echo $count21;?></td>
                    </tr> 
                    <tr class="table-info">
                      <td>24</td>
                      <td>Total Seluruh Karyawan</td>
                      <td><?php echo $count24;?></td>
                    </tr>              

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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>