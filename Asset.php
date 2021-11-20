<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>HR PAYROLL SOFTWARE</title>
  <style>
    .forms-body {
      margin: 10px;
    }
  </style>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">
      <?php require "headers.php" ?>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
      <?php require "SidebarMenu.php" ?>
    </aside>
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">

      <!--           Enter Your Code here-->
      <div class="modal-content">
        <div class="forms-body">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="row">
              <div class="col-md-12">
                <h3 style="margin:10px;">Add Asset</h3>
                <hr>
                <input type="text" placeholder="Asset Code" class="form-control" name="assets_code" id=""><br>
                <input type="text" placeholder="Asset Name" class="form-control" name="assets_name" id=""><br>
                <input type="text" placeholder="Invice No" class="form-control" name="invice_no" id=""><br>
                <input type="text" placeholder="Manufacturee" class="form-control" name="manufacturee" id=""><br>
                <input type="text" placeholder="Serial" class="form-control" name="serial" id=""><br>
                <select class="form-control" name="department" id="">
                  <option class="form-control" value="" selected>Select Department</option>
                  <option class="form-control" value="it">IT</option>
                </select><br>
                <label class="form-control" for="">Purchase Date: <input class="form-control" type="date" name="purchase_date"></label><br>
                <select class="form-control" name="product_wrrenty" id="">
                  <option class="form-control" value="" selected>Select Product Wrrenty</option>
                  <option class="form-control" value="it">1 year</option>
                </select><br>
                <select class="form-control" name="salary_status" id="">
                  <option class="form-control" value="" selected>Select Salary Status</option>
                  <option class="form-control" value="it">pade</option>
                </select><br>
                <button type="submit" style="min-width:130px;" class="btn btn-outline-primary btn-sm bx-pull-right" name="submit">Save</button>
              </div>
            </div>
            <hr>



          </form>
        </div>
      </div>









    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/easyPieChart/jquery.easypiechart.js"></script>
  <script src="assets/plugins/peity/jquery.peity.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <!--app-->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/index.js"></script>

  <script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
  </script>

</body>

</html>