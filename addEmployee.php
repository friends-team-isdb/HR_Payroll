<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<?php require "connect.php";

date_default_timezone_set("Asia/Dhaka");
session_start();
if(!isset($_SESSION['userName'])){
  header("location:Login.php");  
}

?>

<script type="text/javascript">
    function CheckEmail(){
        var UserEmail=$("#useremail").val();
        $.ajax({
            url:"employeeexits.php",
            method:"POST",
            dataType:"html",
            data:{email:UserEmail},
            success: function(data){
                if($.trim(data)==1){
                    $("#useremail").css("border","3px solid red");
                    $("#user").css("color"," red");
                    $("#user").html("User email already exists!");
                }
                else{
                    $("#useremail").css("border","3px solid green");
                    $("#user").css("color"," green");
                    $("#user").html("User email is not exists!");
                }
            }
            
        });
    }
</script>
|

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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
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
                            <h3 style="margin:10px;">Add Employee</h3>
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
                                    <input class="form-control" type="text" name="employ_email" id="useremail" onkeyup="CheckEmail()" onchange="CheckEmail()" placeholder="Employee Email"><br>
                                    <span id="user"></span>
                                    <select class="form-control" name="gen" id="">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><br>

                                    <label class="form-control" for="marital_status">Marital Status: <select name="marital_status">
                                            <option value="">Select</option>
                                            <option value="married">Married</option>
                                            <option value="unmarried">Unmarried</option>
                                        </select> </label><br>
                                    <label class="form-control" for="">Birth Date: <input class="form-control datepickers" type="text" name="employ_date_of_birth"></label><br>
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
                                    <input class="form-control" type="text" name="employeeemail" id="" placeholder="Employee Email"><br>
                                    <input class="form-control" type="password" name="employeepass" id="" placeholder="Employee Password">
                                </div>
                            </div>
                            <hr>
                            <!-- Login information  End-->
                            <!-- Company information Start-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-info">Company Details</h4>
                                </div>
                                <div class="modal-body">
                                    <?php 
    
                                                $sql="SELECT employee_type FROM employee_type";
                                                $query=mysqli_query($conn,$sql);
            $rowcount=mysqli_num_rows($query);
            ?>
                                    <select class="form-control" name="employment_id" id="">

                                        <option value="">Select Employee Type</option>

                                        <?php 
                for($i=1;$i<=$rowcount;$i++){
                    $row=mysqli_fetch_array($query);
                    ?>
                                        <option value="<?php echo $row['employee_type'];?>"><?php echo $row['employee_type'];?></option>
                                        <?php
                }
                
                ?>

                                    </select><br>
                                    <?php 
    
                                                $sql="SELECT department_Name FROM department";
                                                $query=mysqli_query($conn,$sql);
            $rowcount=mysqli_num_rows($query);
            ?>
                                    <select class="form-control" name="department_id" id="">

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

                                    <?php 
    
                                                $sql="SELECT designation FROM designation";
                                                $query=mysqli_query($conn,$sql);
            $rowcount=mysqli_num_rows($query);
            ?>
                                    <select class="form-control" name="designation" id="">

                                        <option value="">Select Designaton</option>

                                        <?php 
                for($i=1;$i<=$rowcount;$i++){
                    $row=mysqli_fetch_array($query);
                    ?>
                                        <option value="<?php echo $row['designation'];?>"><?php echo $row['designation'];?></option>
                                        <?php
                }
                
                ?>

                                    </select><br>



                                    <label for="">Appointment Date:</label>
                                    <input class="form-control datepickers" type="text" name="appointment_date"><br>
                                    <label for="">Joining Date: </label>
                                    <input class="form-control datepickers" type="text" name="joining_date"><br>
                                    <input class="form-control" type="text" name="employee_code" id="" placeholder="Employee Code"><br>
                                    <input class="form-control" type="text" name="employee_status" id="" placeholder="Employee Status"><br>

                                </div>
                                <div class="modal-footer">
                                    <input class="btn btn-secondary" type="reset" name="reset" id="" value="Reset">
                                    <input class="btn btn-primary" type="submit" name="submit" id="" value="Add Employee">
                                </div>
                            </div>
                            <!-- Company information End -->
                        </div>
                    </div>

                </form>
            </div>

            <?php 
    if(isset($_POST['submit'])){
        
    date_default_timezone_set("asia/dhaka");
    $today=date("Y-m-d");
    $fullname=$_POST['employ_name'];
    $email=$_POST['employ_email'];
    $gender=$_POST['gen'];
    $marital_status=$_POST['marital_status'];
    $DOB=$_POST['employ_date_of_birth'];
    $picture=$_POST['employmet_picture'];
    $religion=$_POST['employ_religion'];
    $distic=$_POST['employ_district'];
    $country=$_POST['employ_countris'];
    $phone=$_POST['phone'];
    $postCode=$_POST['employ_postal_code'];
    $nationality=$_POST['employ_nationality'];
    $presentAddress=$_POST['present_address'];
    $nationality=$_POST['employ_nationality'];
    $preaddress=$_POST['present_address'];
    $peraddress=$_POST['permanent_address'];
    $passNid=$_POST['employ_nid'];
    $status=$_POST['employment_status'];
    $Empemail=$_POST['employeeemail'];
    $Emppass=$_POST['employeepass'];
    $EmptypeId=$_POST['employment_id'];
    $deptId=$_POST['department_id'];
    $designationId=$_POST['designation'];
    $appointdate=$_POST['appointment_date'];
    $joindate=$_POST['joining_date'];
    $Empcode=$_POST['employee_code'];
    $Empstatus=$_POST['employee_status'];
        $dir='uploads/';
    $path=$dir.basename($_FILES['employmet_picture']['name']);
    $temp=$_FILES['employmet_picture']['tmp_name'];
    if(move_uploaded_file($temp,$path)){
        
        
    }
    $sq="SELECT * FROM employee WHERE email='$email'";
    $results=mysqli_query($conn,$sq);
    $nums=mysqli_num_rows($results);
    if($nums==1){
        echo "Employee  Already Exits";
    }else{
    $sql="INSERT INTO employee (employee_type_id,department_id,designation_id,employee_name, appointment_date, date_of_birth, employee_code, email, joining_date, employee_status, religion, nationality, district, Countries, postal_code, Passport_or_NID, gender, maritial_Status, present_address, permanent_address, picture, phone, employement_status) VALUES ( '$EmptypeId', '$deptId','$designationId', '$fullname', '$appointdate', '$DOB', '$Empcode', '$email', '$joindate', '$status', '$religion', '$nationality', '$distic', '$country', '$postCode', '$passNid', '$gender', '$marital_status', '$preaddress', '$peraddress', '$path', '$phone', '$Empstatus');";
    $query= mysqli_query($conn, $sql);
    header("location:employeeManage.php");
    } 
    
    $s="SELECT * FROM user_table WHERE email='$email'";
    $result=mysqli_query($conn,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo "User  Already Exits";
    }else{
       $sqls="INSERT INTO `user_table` ( `user_name`, `full_name`, `email`, `phone`, `password`, `role_id`, `account_creation_date`, `status`) VALUES ('$fullname', '$fullname', '$email', '$phone', '$Emppass', '', '$today', '$Empstatus')";
    $query=mysqli_query($conn,$sqls);
        if($query){
            header("location:userManage.php");
        }else{
            echo "<script>alert('Not Add Employee')</script>";
        }
        
    }
    
    }
    
  ?>







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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <!--app-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/index.js"></script>

    <script>
        new PerfectScrollbar(".best-product")
        new PerfectScrollbar(".top-sellers-list")

    </script>

    <script>
        $(function() {
            $(".datepickers").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:'yy-mm-dd'
                
            });
        });

    </script>

</body>

</html>
