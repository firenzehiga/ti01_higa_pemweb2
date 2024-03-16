<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Manajemen Pegawai | Log in</title>
  <link rel="icon" type="image/x-icon" href="assets/dist/img/nf.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="assets/dist/css/adminlte.css">
</head>
<body class="hold-transition login-page" style="background-image: url('assets/dist/img/bg-9.jpg');">

<div class="container">
  <div class="col-lg-6" style="margin-left:25%;" >
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>FORM LOGIN</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>
  
        <form>
          <div class="input-group mb-3">
            <input type="text" id="username" class="form-control" placeholder="Username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <button type="button" onclick="login()"  class="btn btn-primary btn-block">Sign In</button>
            <p class="mb-1">
            username : pemweb
            </p>
            <p class="mb-1">
            password : 12345
            </p>
          </div>
        </form>
        
      </div>
      <!-- /.card-body -->
  </div>
</div>
</div>
</div>
</div>


<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>


  function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username.trim() === "" || password.trim() === "") {
                // Jika belum diisi, tampilkan SweetAlert untuk validasi form
                Swal.fire({
        icon: "warning",
        title: "Oops...",
        text: "Username atau Password wajib diisi!",
        showConfirmButton: false,
        timer: 1500
      });
    } else {
      if (username === 'pemweb' && password === '12345') {
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Login berhasil😊",
        showConfirmButton: false,
        timer: 800
      }).then(() => {
        setTimeout(function() {
          window.location.href = 'home.php';
        }, 500)
      })
      // Di sini, Anda dapat mengarahkan pengguna ke halaman berikutnya atau melakukan tindakan lainnya.
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Username atau Password Salah",
        showConfirmButton: false,
        timer: 1500
      });
    }
  }
}
</script>



</body>
</html>
