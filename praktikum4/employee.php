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
            <span class="h4">Kelola Pegawai</span>
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
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
                <h3 class="card-title">Data Pegawai Nurul Fikri</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Aktif</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr align="center">
                    <td>1</td>
                    <td>Shafhan</td>
                    <td>Direktur</td>
                    <td>Bogor</td>
                    <td>2000-10-11</td>
                    <td>
                      <input type="checkbox" name="" id="">
                    </td>
                    <td>
                      <a href="">View</a> | <a href="">Edit</a>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>2</td>
                    <td>Nicky </td>
                    <td>Manajer</td>
                    <td>Surabaya</td>
                    <td>2000-05-21</td>
                    <td>
                      <input type="checkbox" name="" id="">
                    </td>
                    <td>
                      <a href="">View</a> | <a href="">Edit</a>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>3</td>
                    <td>Satria</td>
                    <td>Staff</td>
                    <td>Cilacap</td>
                    <td>1999-07-15</td>
                    <td>
                      <input type="checkbox" name="" id="">
                    </td>
                    <td>
                      <a href="">View</a> | <a href="">Edit</a>
                    </td>
                  </tr>
                  <tr align="center">
                    <td>4</td>
                    <td>Ryandra </td>
                    <td>Staff</td>
                    <td>Depok</td>
                    <td>2003-01-04</td>
                    <td>
                      <input type="checkbox" name="" id="">
                    </td>
                    <td>
                      <a href="">View</a> | <a href="">Edit</a>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <a href="createPegawai.html" class="btn btn-primary">Create Pegawai <i class="fas fa-plus fa-sm"></i></a>
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