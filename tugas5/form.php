<?php
  include_once 'layout/header.php';
  include_once 'layout/sidebar.php';  
?>
  <!-- Content Wrapper. Contains page content -->
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Berat & Tinggi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="proses.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama :</label>
                    <div class="col-sm-5">
                      <input type="text" name="nama" class="form-control" id="" placeholder="Input Nama">
                    </div>
                      
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Berat Badan :</label>
                    <div class="col-sm-2">
                      <div class="input-group" id="" >
                        <input type="number" name="berat"  min="20" class="form-control"/>
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="far fa-user"></i></div>
                        </div>
                      </div>
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Kg</label>
                  </div>
                  
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tinggi Badan :</label>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="number" name="tinggi"  class="form-control"/>
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="far fa-user"></i></div>
                        </div>
                      </div>
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Cm</label>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php
  include_once 'layout/footer.php';
  ?>

<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        nama: {
          required: true,
          nama: true,
        },
        berat: {
          required: true,
          berat: true,
        },
        tinggi: {
          required: true,
          tinggi: true,
        },
        
      },
      messages: {
        nama: {
          required: "Nama harus diisi",
          nama: "Please enter a valid name"
        },
        berat: {
          required: "Berat Badan harus diisi",
          nama: "Please enter a valid weight"
        },
        tinggi: {
          required: "Tinggi Badan harus diisi",
          nama: "Please enter a valid height"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>