<?php require "connect.php";
date_default_timezone_set("Asia/Dhaka");

?>


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


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
                                    <div class="row">
                                        <div class="col-md-3">


                                            <?php 
    
                                                $sql="SELECT department_Name FROM department";
                                                $query=mysqli_query($conn,$sql);
                                            $rowcount=mysqli_num_rows($query);
                                            ?>
                                            <select class="form-select" name="dep" id="dep" onchange="department()">

                                                <option value="">Select Department</option>

                                                <?php 
                                                    for($i=1;$i<=$rowcount;$i++){
                                                        $row=mysqli_fetch_array($query);
                                                ?>
                                                <option value="<?php echo $row['department_Name'];?>"><?php echo $row['department_Name'];?></option>
                                                <?php
                }
                
                ?>

                                            </select><br>

                                        </div>
                                        <div class="col-md-3">
<<<<<<< HEAD
                                            <select class="form-select" name="empnam" id="empt">
=======
                                            <select class="form-control selects" data-live-search="true" name="empnam" id="empt">
>>>>>>> 3bfebdd96712ef89cf90edab4886b277082a54a8
                                            </select>

                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-select" name="year" id="">
                                                <?php 
                                                for($i=1900;$i<=date("Y");$i++){
                                                
                                                ?>
                                                <option value="<?php echo $i;?>" selected><?php echo $i;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="dob-month" class=" form-select">
                                                <option value="">Select Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-primary" name="submit" id="" value="Find">
                                        </div>

                                    </div>





                                </div>

                            </div>
                        </div><!-- col-md-12 end -->
                    </div><!-- row end -->
                    <hr>
                    <div class="row">

                        <div class="col-md-4">

                            <?php 
                            if(isset($_POST['submit'])){
                            @$empName=$_POST['empnam'];
                            @$Year=$_POST['year'];
                            @$Month=$_POST['dob-month'];
                            $s="Select MonthName(attendancedate) as mnth,
Year(attendancedate) as yar, 
COUNT(attendaneStatus)as ct
from attendance WHERE attendaneStatus='Present' && employee_id='$empName' Group BY Month(attendancedate) && Year(attendancedate) HAVING mnth='$Month' AND yar='$Year'";
                            @$t=mysqli_query($conn,$s);
                            @$u=mysqli_fetch_array($t);
                            
                          }  
                        ?>


                            Present Count:<input class="form-control" type="text" name="" id="" disabled value="<?php echo @$u['ct'] ?>">

                        </div>

                        <div class="col-md-4">
                            <?php 
                            if(isset($_POST['submit'])){
                            @$empName=$_POST['empnam'];
                            @$Year=$_POST['year'];
                            @$Month=$_POST['dob-month'];
                            @$w="Select MonthName(attendancedate) as mnth,
                                Year(attendancedate) as yar, 
                                COUNT(attendaneStatus)as ct
                                from attendance WHERE attendaneStatus='Absent' && employee_id='$empName' Group BY Month(attendancedate) && Year(attendancedate) HAVING mnth='$Month' AND yar='$Year'";
                            @$x=mysqli_query($conn,$w);
                            @$z=mysqli_fetch_array($x);
                            
                          }  
                        ?>
                            Absent Count:<input class="form-control" type="text" name="" id="" disabled value="<?php echo @$z['ct'];?>">
                        </div>
                        <div class="col-md-4">
                            <?php 
                            if(isset($_POST['submit'])){
                            @$empName=$_POST['empnam'];
                            @$Year=$_POST['year'];
                            @$Month=$_POST['dob-month'];
                            @$h="Select MonthName(attendancedate) as mnth,
Year(attendancedate) as yar, 
COUNT(attendaneStatus)as ct
from attendance WHERE attendaneStatus='On Leave' && employee_id='$empName' Group BY Month(attendancedate) && Year(attendancedate) HAVING mnth='$Month' AND yar='$Year'";
                            @$i=mysqli_query($conn,$h);
                            @$j=mysqli_fetch_array($i);
                            
                          }  
                        ?>
                            Leave Count:<input class="form-control" type="text" name="" id="" disabled value="<?php echo @$j['ct'];?>">
                        </div>
                    </div>

                    <hr>
                </form>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h6 class="modal-title text-primary">Allownes</h6>
                                    <hr>

                                    <div class="addmores_div">


                                        <div class="row">



                                            <div class="col-md-5">
                                                <select class="form-control" name="deductions" id="">
                                                    <option value="" selected> Select Allownes</option>
                                                    <option value=""> Home Allownes</option>
                                                    <option value=""> Medical Allownes</option>
                                                    <option value=""> Rent Allownes</option>

                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <input class="form-control" type="text" name="" id="">

                                            </div>

                                            <div class="col-md-2">
                                                <p class="btn btn-primary" id="addnew">+</p>
                                            </div>





                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 style="margin:10px;" class="modal-title text-primary padding-top">Other Allownes</h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Title" name="title" id="">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="amount" name="amount" id="">
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h6 class="modal-title text-primary">Deductions</h6>
                                    <hr>
                                    <div class="row" id="doublehobe">
                                        <div class="col-md-5">
                                            <select class="form-control" name="deductions" id="">
                                                <option class="form-control" value="" selected> Select Deductions</option>

                                            </select>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control" type="text" name="" id="">

                                        </div>
                                        <div class="col-md-2">
                                            <p class="">+</p>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 style="margin:10px;" class="modal-title text-primary padding-top">Other Deductions</h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Title" name="title" id="">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="amount" name="amount" id="">
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>


                    <hr>
                    <div class="modal-content">
                        <div class="forms-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="margin:10px;">Summary</h3>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">

                                    <input type="text" placeholder="Basic" class="form-control" name="" id=""><br>
                                    <input type="text" placeholder="Total Allowances" class="form-control" name=""><br>
                                    <input type="text" placeholder="Total Deductions" class="form-control" name="" id=""><br>
                                    <input type="text" placeholder="Net Salary" class="form-control" name="" id=""><br>
                                    <select class="form-select" name="deductions" id="">
                                        <option class="form-control" value="" selected> Payment Method</option>
                                        <option class="form-control" value="">Item</option>
                                    </select><br>
                                    <select class="form-select" name="deductions" id="">
                                        <option class="form-control" value="" selected> Status</option>
                                        <option class="form-control" value="">Item</option>
                                    </select><br>


                                </div>

                                <div class="col-md-3"></div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
    <!--app-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/index.js"></script>

    <script>
        new PerfectScrollbar(".best-product")
        new PerfectScrollbar(".top-sellers-list")

    </script>

    <script type="text/javascript">
        $("#addnew").click(function() {
            var add = '<div class="row"><div class="col-md-5"><select class="form-control" name="deductions" id=""><option value="" selected> Select Allownes</option><option value=""> Home Allownes</option><option value=""> Medical Allownes</option><option value=""> Rent Allownes</option></select></div><div class="col-md-5"><input class="form-control" type="text" name="" id=""></div><div class="col-md-2"><p class="btn btn-primary remove">-</p></div></div>';

            $(".addmores_div").append(add);

            $(".remove").on("click", function() {
                $(this).parent(".row").remove();
            });

        });

    </script>
    <script>
        function department() {
            var departmentName = $('#dep').val();
            //            console.log(departmentName);
            $.ajax({
                url: 'payrollEmployeSelectAjax.php',
                method: 'POST',
                dataType: 'html',
                data: {
                    departmentName: departmentName
                },
                success: function(data) {
                    $('#empt').html(data);

                }



            });
        }

    </script>
    
    

</body>

</html>
