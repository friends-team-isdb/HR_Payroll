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
      <!-- creating paySlip start -->
      <div class="forms-body">
        <form class="form-inline" action="" method="post" enctype="multipart/form-data">
          <div class="row">

            <div class="col-md-12">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 style="margin:10px;">Create Pay Slip</h3>
                </div>
                <div class="modal-body  ">
                  <select name="department" id="">
                    <option class="form-control" value="" selected>Select Department</option>
                    <option class="form-control" value="it">IT</option>
                  </select>
                  <select name="employee" id="">
                    <option class="form-control" value="" selected>Select Employee</option>
                    <option class="form-control" value="">Item</option>
                  </select>
                  <select name="year" id="">
                    <option class="form-control" value="" selected>Select Year</option>
                    <option class="form-control" value="">item</option>
                  </select>
                  <select class="" name="month" id="">
                    <option class="form-control" value="" selected>Select Month</option>
                    <option class="form-control" value="">ITem</option>
                  </select>
                  <button type="submit" style="min-width:130px;" class="btn btn-outline-primary btn-sm " name="finde">Finde</button>
                </div>

              </div>
            </div><!-- col-md-12 end -->
          </div><!-- row end -->
          <hr>
        </form>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="modal-content">
                <div class="modal-body">
                  <h6 class="modal-title text-primary">Allowances</h6>
                  <hr>
                  <select name="allowances" id="">
                    <option class="form-control" value="" selected> Select Allowances</option>
                    <option class="form-control" value="">Item</option>
                  </select>
                  <input type="text" name=""  id=""><br>
                  <h6 style="margin-top:10px;" class="modal-title text-primary padding-top">Other Allowances</h6>
                  <hr>
                  <input type="text" placeholder="Title" name="title" id="">
                  <input type="text" placeholder="amount" name="amount" id="">
                </div>


              </div>
            </div>

            <div class="col-md-6">
            <div class="modal-content">
                <div class="modal-body">
                  <h6 class="modal-title text-primary">Deductions</h6>
                  <hr>
                  <select name="deductions" id="">
                    <option class="form-control" value="" selected> Select Deductions</option>
                    <option class="form-control" value="">Item</option>
                  </select>
                  <input type="text" name=""id=""><br>
                  <h6 style="margin-top:10px;" class="modal-title text-primary padding-top">Other Deductions</h6>
                  <hr>
                  <input type="text" placeholder="Title" name="title" id="">
                  <input type="text" placeholder="amount" name="amount" id="">
                </div>


              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="text-primary" style="margin:10px;">Summary</h3>
                </div>
                <div class="modal-body">
                  <input type="text" placeholder="Basic" class="form-control" name="" id="">
                  <input type="text" placeholder="Total Allowances" class="form-control" name="">
                  <input type="text" placeholder="Total Deductions" class="form-control" name="" id="">
                  <input type="text" placeholder="Net Salary" class="form-control" name="" id="">
                  <select class="form-control" name="deductions" id="">
                    <option class="form-control" value="" selected> Payment Method</option>
                    <option class="form-control" value="">Item</option>
                  </select>
                  <select class="form-control" name="deductions" id="">
                    <option class="form-control" value="" selected> Status</option>
                    <option class="form-control" value="">Item</option>
                  </select><br>
                  <button type="submit" style="min-width:130px;" class="btn btn-outline-primary btn-sm dx-pull-right" name="finde">Create Payslip</button>
                </div>

              </div>
            </div>
          </div>
        </form>
      </div>


      <!-- creating paySlip end -->>









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