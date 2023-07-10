<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link  rel="icon" href="<?php echo ('assets/img/favicon.png'); ?>">
  <link href="<?php echo ('assets/img/apple-touch-icon.png'); ?> " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href=" <?php echo('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href=" <?php echo ('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href=" <?php echo ('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href=" <?php echo ('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href=" <?php echo ('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href=" <?php echo ('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href=" <?php echo ('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo ('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
 
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-bar-chart"></i>
          <span>Tableau de bord</span>
        </a>
      </li><!-- End Profile Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="code.html">
          <i class="bi bi-people"></i>
          <span>Gestion des codes</span>
        </a>
      </li><!-- End Profile Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="service.html">
          <i class="bi bi-question-circle"></i>
          <span>Service</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="materiel.html">
          <i class="bi bi-tools"></i>
          <span>Materiel</span>
        </a>
      </li><!-- End Contact Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="recette_depense.html">
          <i class="bi bi-piggy-bank"></i>
          <span>Recette et Dépense</span>
        </a>
      </li><!-- End Register Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="specialite.html">
          <i class="bi bi-award"></i>
          <span>Spécialité</span>
        </a>
      </li><!-- End Register Page Nav -->
  
    </ul>
  
  </aside><!-- End Sidebar-->

  <main id="main" class="main">    
    <section class="section">
      <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Repartition des commandes reçues par service</h5>

              <!-- Donut Chart -->
              <div id="donutChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [15, 15, 30, 40, 0],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
                  }).render();
                });
              </script>
              <!-- End Donut Chart -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>