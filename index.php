<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Diagnosa Gangguan Layanan Jaringan IndiHOME</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/mdbootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/mdbootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="assets/mdbootstrap/css/style.min.css" rel="stylesheet">
  <link href="assets/mdbootstrap/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/mdbootstrap/DataTables/datatables.min.css" />
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header {
        height: 100vh;
      }
    }

    .menu ul {
      list-style: none;
      /*menghilangkan dot list*/
    }

    li a {
      text-decoration: none;
      /*menghilangkan garis bawah*/
      color: #ffffff;
      /*memberi warna hitam*/
      font-weight: bold;
      /*menebalkan font menu*/
    }

    .menu li {
      display: inline;
      /*membuat menu menjadi Horizontal*/
      /* float: left; */
      /*bikin nempel ke kiri biar ga ada spasi kosong*/
      padding: 14px;
      /*ngasi jarak atas bawah kiri kanan di menu*/
    }

    .menu li:hover {
      color: #000000;
      background-color: #e8e3e3;
    }

    .menu li:last-child {
      border-right: none;
      /*untuk ngilangin border kanan di list menu yg pallingn akhir*/
    }
  </style>
</head>

<body style="background-color: #ededed;">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1" style="background-color: #ffffff;">
        <!--Main Navigation-->
        <header>
          <div class="view" style="background-image: url('assets/mdbootstrap/img/img.jpeg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h3 class="mb-4">
                  <strong>SISTEM PAKAR DIAGNOSA GANGGUAN/KERUSAKAN LAYANAN JARINGAN INDIHOME MENGGUNAKAN METODE CASE BASED REASONING (CBR)</strong>
                </h3>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>

          <div class="row">
            <div class="col-md-12 primary-color-dark py-1 pt-3">
              <ul class="menu">
                <li class="menu-list"><a href="index.php?top=home.php">HOME</a></li>
                <li class="menu-list"><a href="index.php?top=pasien_add_fm.php">Diagnosa Gangguan</a></li>
                <li class="menu-list"><a href="index.php?top=info-kerusakan.php">Info Gangguan</a></li>
                <li class="menu-list"><a href="index.php?top=daftar-kerusakan.php">Jenis Gangguan</a></li>
                <li class="menu-list"><a href="index.php?top=about.php">About</a></li>
                <li class="menu-list"><a href="admin/index.php">Login Admin</a></li>
              </ul>
            </div>
          </div>
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main>
          <!--Section: Jumbotron-->
          <br>
          <section>
            <!-- Content -->

            <div class="row mt-5">
              <?php
              $top = $_GET['top'];
              if (empty($top)) {
                $on_top = "home.php";
                echo "<meta http-equiv='refresh' content='0; url=index.php?top=home.php'>";
              } else {
                $on_top = $top;
                include "$on_top";
                //include "proses_diagnosa.php"; 
              }
              ?>
            </div>

            <!-- Content -->
          </section>
          <!--Section: Jumbotron-->
        </main>
        <!--Main layout-->

        <!--Footer-->
        <footer class="page-footer text-center font-small mdb-color darken-2">
          <div class="footer-copyright py-2">
            Copyright © 2020. All Rights Reserved: Ade Suryadi
          </div>
          <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="assets/mdbootstrap/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/mdbootstrap/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/mdbootstrap/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/mdbootstrap/js/mdb.min.js"></script>
        <script type="text/javascript" src="assets/mdbootstrap/DataTables/datatables.min.js"></script>
        <!-- Initializations -->
        <script type="text/javascript">
          function direct_link() {
            var heder = <?php echo $_GET['top']; ?>
            alert(heder);
            //window.location.href="index.php?top=home.php";
            return false;
          }
        </script>
        <script type="text/javascript">
          // Animations initialization
          new WOW().init();
        </script>
      </div>
    </div>
</body>

</html>