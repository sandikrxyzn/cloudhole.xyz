<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default"
  data-assets-path="https://sandikrxyzn.000webhostapp.com/port/assets/assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>SandiKrxyzn</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon"
    href="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/img/favicon/favicon.ico" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet"
    href="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/css/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet"
    href="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/css/demo.css" />
  <link rel="stylesheet"
    href="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <script src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/js/helpers.js"></script>
  <script src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/js/config.js"></script>
</head>

<body>
  <nav
    class="navbar navbar-expand-xl navbar-detached navbar-example navbar-expand-lg navbar-light bg-navbar-theme layout-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Sandi Krxyzn</a>
      <!-- Menu Dropdown -->
    </div>
    <!-- Akhir Dropdown -->
  </nav>
  <!-- akhir navbar -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Welcome! 👋</h5>
              <p class="mb-4">
                Aku berharap setelah berhasil login kedalam hati kamu
                Kamu tidak akan meng-klik tombol logout,
                Dan sessionku tidak akan pernah expired.
              </p>

              <a href="/spp/index.php" class="btn btn-sm btn-outline-primary">View Projects</a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/img/illustrations/man-with-laptop-light.png"
                height="140" alt="View
Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <h5 class="card-header">Sandi From Planet Earth🌏</h5>
    <!-- Account -->
    <div id="content"></div>
  </div>
  <!-- /Account -->

  <!-- Content -->

  <!-- / Content -->


  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>
        , made with ❤️ by
        <a href="https://SandiKrxyzn.blogspot.com" target="_blank" class="footer-link fw-bolder">Sandikrxyzn</a>
      </div>
      <div>

      </div>
    </div>
  </footer>
  <!-- Akhir Footer -->


  <div class="buy-now">
    <a href="https://sandikrxyzn.blogspot.com" target="_blank" class="btn btn-danger btn-buy-now">My Blog</a>
  </div>

  <script src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/libs/popper/popper.js"></script>
  <script src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/js/bootstrap.js"></script>
  <script
    src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/vendor/js/menu.js"></script>
  <script src="https://sandikrxyzn.000webhostapp.com/port/assets/assets/assets/js/main.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script>
    $(document).ready(function () {
      $('#content').load('home.php');

      // class menu
      $('.menu').click(function (e) {
        e.preventDefault();

        var menu = $(this).attr('id');

        if (menu == "about") {
          $('#content').load('about.php');
        }

      });


    });
  </script>

</body>

</html>