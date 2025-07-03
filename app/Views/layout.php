<?php
$hlm = "Home";
if(uri_string()!=""){
    $hlm=ucwords(uri_string());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Toko - <?php echo $hlm ?></title>
  <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport"
  />
  <link
    rel="icon"
    href="<?= base_url()?>kaiadmin-lite-1.2.0/assets/img/kaiadmin/favicon.ico"
    type="image/x-icon"
  />

  <!-- Fonts and icons -->
  <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["<?= base_url()?>kaiadmin-lite-1.2.0/assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?= base_url()?>kaiadmin-lite-1.2.0/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url()?>kaiadmin-lite-1.2.0/assets/css/plugins.min.css" />
  <link rel="stylesheet" href="<?= base_url()?>kaiadmin-lite-1.2.0/assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="<?= base_url()?>kaiadmin-lite-1.2.0/assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
    <?= $this->include('components/sidebar') ?>

    <div class="main-panel">
      <?= $this->include('components/header') ?>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Data Tables _</h3>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Home</li>
                  <?php
                  if($hlm!="Home"){
                    ?>
                    <li class="breadcrumb-item"><?php echo $hlm?></li> 
                    <?php
                  }
                  ?> 
                </ol>
              </nav>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $hlm?></h5>
                    <?= $this->renderSection('content') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?= $this->include('components/footer') ?>
    </div>
    </div>
    
    <!--   Core JS Files   -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/setting-demo.js"></script>
    <script src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>