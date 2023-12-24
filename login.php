

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Keuangan</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block">sasas</div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Selamat Datang
                                        </h1>

                                        <img src="assets/img/kuceng2.gif" alt="" style="width: 150px; margin-bottom: 20px; " >
                                    </div>


   <?php
      require_once 'config.php'; // koneksi ke database.

      /**
       * Cegah akses ke halaman login saat sedang login.
       */
      

      if(isset($_POST['submit'])) {
        /**
         * Mendapatkan data dari formulir login.
         * Data: Email, Kata Sandi, dan Ingat Saya.
         */
        $email    = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        $remember = (!empty($_POST['remember_me']) ? $_POST['remember_me'] : '');

        if(empty($email) || empty($password)) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo '<b>Warning!</b> Silahkan isi semua data yang diperlukan.';
        } elseif(count((array) $connect->query('SELECT username FROM users WHERE username = "'.$email.'"')->fetch_array()) == 0) {
          /**
           * Cek jika email tidak terdaftar.
           */
          echo '<b>Warning!</b> Username tidak terdaftar.';
        } else {
          /**
           * Mengecek data mahasiswa.
           */
          $mahasiswa = $connect->query('SELECT password, nama FROM users')->fetch_assoc();
          if(password_verify($password, $mahasiswa['password'])) {
            $_SESSION['is_login'] = $mahasiswa['nama'];

            /**
             * Cek apakah tombol remember me diklik.
             */
            if($remember) {
              if(!isset($_COOKIE['is_logged'])) {
                /**
                 * Atur cookie selama 1 hari.
                 * Rumus: 60 * 60 * 24 = 1 hari.
                 */
                setcookie('_logged', substr(md5($email), 0, 10), time() + (60 * 60 * 24), '/');
              }
            }
            header('location: /UASLAB/index.html'); // Alihkan ke halaman index.
          } else {
            echo '<b>Warning!</b> Kata sandi salah.';
          }
        }
      }
    ?>

                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password">
                                        </div>
                                        <input type="checkbox" name="remember_me"> Ingat Saya
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <!-- <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label> -->
                                            </div>
                                        </div>
                                        <button type="submit" value="Login" name="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <a href="/UASLAB/register.php">Register</a>
                                        <hr>

                                    </form>

                                    <div class="text-center">
                                        <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                    </div>
                                    <div class="text-center">
                                        <!-- <a class="small" href="register.html">Create an Account!</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>