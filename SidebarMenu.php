<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <!--start sidebar -->
    <div class="sidebar-header">
            <div>
              <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">HR PAYROLL</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Emlopyee Management</div>
              </a>
              <ul>
                <li> <a href="addEmployee.php"><i class="bi bi-arrow-right-short"></i>Add Employee</a>
                </li>
                <li> <a href="addEmployee.php"><i class="bi bi-arrow-right-short"></i>Manage Employee</a>
                </li>
                <li> <a href="employeeDocument.php"><i class="bi bi-arrow-right-short"></i>Employee Document</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Department Management</div>
              </a>
              <ul>
                <li> <a href="addDepartment.php"><i class="bi bi-arrow-right-short"></i>Add Department</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bi bi-arrow-right-short"></i>Manage Department</a>
                </li>
                
              </ul>
            </li>
            
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-award"></i>
                </div>
                <div class="menu-title">Attendance Managment</div>
              </a>
              <ul>
                <li> <a href="dailyAttendance.php"><i class="bi bi-arrow-right-short"></i>Daily Attendance</a>
                </li>
                <li> <a href="attendanceReport.php"><i class="bi bi-arrow-right-short"></i>Attendance Report</a>
                </li>
                <li> <a href="attendanceSchedule.php"><i class="bi bi-arrow-right-short"></i>Attendance Schedule</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-bag-check"></i>
                </div>
                <div class="menu-title">Leave Management</div>
              </a>
              <ul>
                <li> <a href="addLeave.php"><i class="bi bi-arrow-right-short"></i>Add Leave</a>
                </li>
                <li> <a href="#"><i class="bi bi-arrow-right-short"></i>Manage Leave</a>
                </li>
                <li> <a href="addLeaveType.php"><i class="bi bi-arrow-right-short"></i>Add Leave Type</a>
                </li>
                <li> <a href="#"><i class="bi bi-arrow-right-short"></i>Manage Leave type</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-bookmark-star"></i>
                </div>
                <div class="menu-title">Payroll Management</div>
              </a>
              <ul>
                <li> <a href="createPaySlip.php"><i class="bi bi-arrow-right-short"></i>Create Pay Slip</a>
                </li>
                <li> <a href="paySlipList.php"><i class="bi bi-arrow-right-short"></i>Pay Slip List</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down"></i>
                </div>
                <div class="menu-title">Salary Management</div>
              </a>
              <ul>
                <li> <a href="addSalary.php"><i class="bi bi-arrow-right-short"></i>Add Salary</a>
                </li>
                <li> <a href="addSalaryType.php"><i class="bi bi-arrow-right-short"></i>Add Salary Type</a>
                </li>
                
              </ul>
            </li>
            
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break"></i>
                </div>
                <div class="menu-title">User Management</div>
              </a>
              <ul>
                <li> <a href="addUser.php"><i class="bi bi-arrow-right-short"></i>Add User</a>
                </li>
                <li> <a href="userRole.php"><i class="bi bi-arrow-right-short"></i>User Role</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet"></i>
                </div>
                <div class="menu-title">Tables</div>
              </a>
              <ul>
                <li> <a href="table-basic-table.html"><i class="bi bi-arrow-right-short"></i>Basic Table</a>
                </li>
                <li> <a href="table-advance-tables.html"><i class="bi bi-arrow-right-short"></i>Advance Tables</a>
                </li>
                <li> <a href="table-datatable.html"><i class="bi bi-arrow-right-short"></i>Data Table</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Pages</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-lock"></i>
                </div>
                <div class="menu-title">Authentication</div>
              </a>
              <ul>
                <li> <a href="authentication-signin.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Sign In</a>
                </li>
                <li> <a href="authentication-signup.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Sign Up</a>
                </li>
                <li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Sign In with Header & Footer</a>
                </li>
                <li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Sign Up with Header & Footer</a>
                </li>
                <li> <a href="authentication-forgot-password.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Forgot Password</a>
                </li>
                <li> <a href="authentication-reset-password.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Reset Password</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="pages-user-profile.html">
                <div class="parent-icon"><i class="bi bi-person-check"></i>
                </div>
                <div class="menu-title">User Profile</div>
              </a>
            </li>
            <li>
              <a href="pages-timeline.html">
                <div class="parent-icon"><i class="bi bi-collection-play"></i>
                </div>
                <div class="menu-title">Timeline</div>
              </a>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-error"></i>
                </div>
                <div class="menu-title">Errors</div>
              </a>
              <ul>
                <li> <a href="pages-errors-404-error.html" target="_blank"><i class="bi bi-arrow-right-short"></i>404 Error</a>
                </li>
                <li> <a href="pages-errors-500-error.html" target="_blank"><i class="bi bi-arrow-right-short"></i>500 Error</a>
                </li>
                <li> <a href="pages-errors-coming-soon.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Coming Soon</a>
                </li>
                <li> <a href="pages-blank-page.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Blank Page</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="pages-faq.html">
                <div class="parent-icon"><i class="bi bi-exclamation-triangle"></i>
                </div>
                <div class="menu-title">FAQ</div>
              </a>
            </li>
            <li>
              <a href="pages-pricing-tables.html">
                <div class="parent-icon"><i class="bi bi-credit-card-2-front"></i>
                </div>
                <div class="menu-title">Pricing Tables</div>
              </a>
            </li>
            <li class="menu-label">Charts & Maps</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-graph-down"></i>
                </div>
                <div class="menu-title">Charts</div>
              </a>
              <ul>
                <li> <a href="charts-apex-chart.html"><i class="bi bi-arrow-right-short"></i>Apex</a>
                </li>
                <li> <a href="charts-chartjs.html"><i class="bi bi-arrow-right-short"></i>Chartjs</a>
                </li>
                <li> <a href="charts-highcharts.html"><i class="bi bi-arrow-right-short"></i>Highcharts</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-pin-map"></i>
                </div>
                <div class="menu-title">Maps</div>
              </a>
              <ul>
                <li> <a href="map-google-maps.html"><i class="bi bi-arrow-right-short"></i>Google Maps</a>
                </li>
                <li> <a href="map-vector-maps.html"><i class="bi bi-arrow-right-short"></i>Vector Maps</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Others</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-list-task"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
              </a>
              <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-arrow-right-short"></i>Level One</a>
                  <ul>
                    <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-arrow-right-short"></i>Level Two</a>
                      <ul>
                        <li> <a href="javascript:;"><i class="bi bi-arrow-right-short"></i>Level Three</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="https://codervent.com/skodash/documentation/index.html" target="_blank">
                <div class="parent-icon"><i class="bi bi-file-earmark-code"></i>
                </div>
                <div class="menu-title">Documentation</div>
              </a>
            </li>
            <li>
              <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bi bi-headset"></i>
                </div>
                <div class="menu-title">Support</div>
              </a>
            </li>
          </ul>
          <!--end navigation-->
    <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->
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
