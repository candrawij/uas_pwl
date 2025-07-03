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

  <main>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              

              <?= $this->renderSection('content') ?>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>NiceAdmin/assets/js/main.js"></script>

</body>

</html>