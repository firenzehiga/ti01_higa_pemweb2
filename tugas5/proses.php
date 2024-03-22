<?php
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $nama   = $_POST[ 'nama' ];   
    $berat  = $_POST[ 'berat' ]; 
    $tinggi = $_POST[ 'tinggi' ]; 

    include 'function.php';

    $beratIdeal   = new beratIdeal($nama,$berat,$tinggi);
    $kategori     = $beratIdeal->kategori();
    $targetBerat  = $beratIdeal->targetBerat();
    $ketWarna     = 'warning';
    
    if ($kategori == 'Berat Normal') {
        
      $ketWarna = 'success';

    } elseif ($kategori == 'Obesitas') {

      $ketWarna = 'danger';
    }
    
}

?>

<?php
  include_once 'layout/header.php';
  include_once 'layout/sidebar.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Berat Badan Ideal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Berat Badan Ideal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Berat (Kg)</th>
                    <th>Tinggi (Cm)</th>
                    <th>Keterangan</th>
                    <th>Target Ideal</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr align="center">
                    <td>1</td>
                    <td><?= $nama?></td>
                    <td><?= $berat?></td>
                    <td><?= $tinggi?></td>
                    
                    <td><span class="badge badge-<?= $ketWarna?>"><?= $kategori?></span></td>
                    <td><?= $targetBerat?></td>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php
  include_once 'layout/footer.php';
  ?>