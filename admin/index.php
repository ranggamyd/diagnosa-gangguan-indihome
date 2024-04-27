<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login Admin</title>
  <link href="../favicon.ico" rel='shortcut icon'>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/4ae0b1e8c1.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="../assets/mdbootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../assets/mdbootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../assets/mdbootstrap/css/style.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/images_login/icon.png" />
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
  </style>
  <script type="text/javascript">
    function validasi(form) {
      if (form.username.value == "") {
        alert("Masukkan Username..!");
        form.username.focus();
        return false;
      } else if (form.password.value == "") {
        alert("Masukkan Password Anda..!");
        form.password.focus();
        return false;
      }
      form.submit();
    }
  </script>
</head>

<body>



  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('../assets/mdbootstrap/img/bg.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">SISTEM PAKAR DIAGNOSA GANGGUAN LAYANAN JARINGAN INDIHOME</h1>

            <hr class="hr-light">

            <!-- <p>
              <strong>Best & free guide of responsive web design</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p> -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body" style="background-color: #0d0c24;">

                <!-- Form -->
                <form name="form1" method="post" onSubmit="return validasi(this)" action="cekpswd.php">
                  <!-- Heading -->
                  <h3 class="text-light text-center">
                    <strong>LOGIN</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input name="username" type="text" id="username" class="form-control text-light">
                    <label for="username" class="text-light">Username</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input name="password" type="password" id="password" class="form-control text-light">
                    <label for="password" class="text-light">Password</label>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-indigo" name="Submit" type="image" id="submit">Login</button>
                  </div>

                </form>
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Footer-->
  <footer class="page-footer text-center font-small wow fadeIn" style="background-color: #120d30;">


    <!--Copyright-->
    <div class="footer-copyright py-3">
      Copyright &copy; 2016
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../assets/mdbootstrap/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../assets/mdbootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../assets/mdbootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../assets/mdbootstrap/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>