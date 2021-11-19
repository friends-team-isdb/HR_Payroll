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

      <!--Enter Your Code here-->

      <div class="forms-body">
        <form action="" method="post" enctype="multipart/form-data">

          <div class="row">
            <div class="col-md-12">
              <h3  style="margin:10px;">Add Employee</h3>
            </div>
          </div>
          <hr>
          <div class="row">
            <!-- personal information Start -->
            <div class="col-md-6">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info">Personal information</h4>
                </div>

                <div class="modal-body">
                  <input class="form-control" type="text" name="employ_name" id="" placeholder="Employee Name"><br>
                  <input class="form-control" type="text" name="employ_email" id="" placeholder="Employee Email"><br>
                  <label class="form-control" for="gender" class="col-sm-2 control-label"> Gender: <input type="radio" name="gender" value="male" id="">Male
                    <input type="radio" name="gender" value="female" id="">Female</label><br>

                  <label class="form-control" for="marital_status">Marital Status: <select name="marital_status">
                      <option value="">Select</option>
                      <option value="married">Married</option>
                      <option value="unmarried">Unmarried</option>
                    </select> </label><br>
                  <label class="form-control" for="">Birth Date: <input class="form-control" type="date" name="employ_date_of_birth"></label><br>
                  <label class="form-control" for="">Photo: <input type="file" name="employmet_picture" id=""> </label><br>
                  <input class="form-control" type="text" name="employ_religion" id="" placeholder="Employee Religion"><br>
                  <input class="form-control" type="text" name="employ_district" id="" placeholder="Employee District"><br>
                  <input class="form-control" type="text" name="employ_countris" id="" placeholder="Employee Countris"><br>
                  <input class="form-control" type="text" name="phone" id="" placeholder="Employee Phone"><br>
                  <input class="form-control" type="text" name="employ_postal_code" id="" placeholder="Employee Postal Code"><br>
                  <input class="form-control" type="text" name="employ_nationality" id="" placeholder="Employee Nationality"><br>
                  <textarea class="form-control" name="present_address" placeholder="Present Address" cols="" rows=""></textarea><br>
                  <textarea class="form-control" name="permanent_address" placeholder="Permanent Address" cols="" rows=""></textarea><br>
                  <input class="form-control" type="text" name="employ_nid" id="" placeholder="Pasport/NID"><br>
                  <input class="form-control" type="text" name="employment_status" id="" placeholder="Employment Status"><br>
                </div>
               

              </div>

            </div>
            <!-- personal information End -->

            <div class="col-md-6">
              <!-- Login information Start -->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info">Login Information</h4>
                </div>
                <div class="modal-body">
                  <input class="form-control" type="text" name="" id="" placeholder="Employee Email"><br>
                  <input class="form-control" type="password" name="" id="" placeholder="Employee Password">
                </div>
              </div>
              <hr>
              <!-- Login information  End-->
              <!-- Company information Start-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" >Company Details</h4>
                </div>
                <div class="modal-body">
                <select class="form-control" name="employment_id">
                      <option value="">Select Employee Type ID</option>
                      <option value="">1</option>
                      <option value="">2</option>
                    </select> <br>
                <select class="form-control" name="department_id">
                      <option value="">Select Department ID</option>
                      <option value="">1</option>
                      <option value="">2</option>
                    </select> <br>
                <select class="form-control" name="designation_id">
                      <option value="">Select Designation ID</option>
                      <option value="">1</option>
                      <option value="">2</option>
                    </select> <br>
                  
                  
                  
                  <label class="form-control" for="">Appointment Date: <input class="form-control" type="date"name="appointment_date"></label><br>
                  <label class="form-control" for="">Joining Date: <input class="form-control" type="date"name="joining_date" ></label><br>
                  <input class="form-control" type="text" name="employee_code" id="" placeholder="Employee Code"><br>
                  <input class="form-control" type="text" name="employment_status" id="" placeholder="Employee Status"><br>

                </div>
                <div class="modal-footer">
                <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </div>
              <!-- Company information End -->
            </div>
          </div>

        </form>
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