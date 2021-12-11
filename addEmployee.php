<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<?php require "connect.php";

date_default_timezone_set("Asia/Dhaka");
session_start();
if(!isset($_SESSION['userName'])){
  header("location:Login.php");  
}

?>

<script type="text/javascript">
    function CheckEmail() {
        var UserEmail = $("#useremail").val();
        $.ajax({
            url: "employeeexits.php",
            method: "POST",
            dataType: "html",
            data: {
                email: UserEmail
            },
            success: function(data) {
                if ($.trim(data) == 1) {
                    $("#useremail").css("border", "3px solid red");
                    $("#user").css("color", " red");
                    $("#user").html("User email already exists!");
                } else {
                    $("#useremail").css("border", "3px solid green");
                    $("#user").css("color", " green");
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
                <form action="" method="post" enctype="multipart/form-data" id="myform">

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
                                    <input class="form-control" type="text" name="employ_name" id="employ_name" placeholder="Employee Name" onkeyup="change(this.id,'erremploy_name')" onblur="change(this.id,'erremploy_name')" ><br>
                                    <span id="erremploy_name"></span>

                                    <select class="form-select" name="gen" id="gen" onkeyup="change(this.id,'errgen')" onblur="change(this.id,'errgen')" >
                                        <span id="errgen"></span>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><br>

                                    <label class="form-control" for="marital_status">Marital Status: <select name="marital_status" id="marital_status" class="form-select" onkeyup="change(this.id,'errmarital_status','data')" onblur="change(this.id,'errmarital_status','data')" >
                                            <span id="errmarital_status"></span>
                                            <option value="">Select</option>
                                            <option value="married">Married</option>
                                            <option value="unmarried">Unmarried</option>
                                        </select> </label><br>
                                    <label class="form-control" for="">Birth Date: <input autocomplete="off" class="form-control datepickers" type="text" name="employ_date_of_birth" id="employ_date_of_birth" onkeyup="change(this.id,'erremploy_date_of_birth')" onblur="change(this.id,'erremploy_date_of_birth')" ></label><br>
                                    <span id="erremploy_date_of_birth"></span>
                                    <label class="form-control" for="">Photo: <input type="file" name="employmet_picture" id="employmet_picture" onkeyup="change(this.id,'erremploymet_picture')" onblur="change(this.id,'erremploymet_picture')" > </label><br>
                                    <span id="erremploymet_picture"></span>
                                    <input class="form-control" type="text" name="employ_religion" id="employ_religion" placeholder="Employee Religion" onkeyup="change(this.id,'erremploy_religion')" onblur="change(this.id,'erremploy_religion')" ><br>
                                    <span id="erremploy_religion"></span>
                                    <input class="form-control" type="text" name="employ_district" id="employ_district" autocomplete="off" placeholder="Employee District" onkeyup="change(this.id,'erremploy_district')" onblur="change(this.id,'erremploy_district')" ><br>
                                    <span id="erremploy_district"></span>
                                    <input class="form-control coun" type="text" name="employ_countris" id="employ_countris" placeholder="Employee Countris" onkeyup="change(this.id,'erremploy_countris')" onblur="change(this.id,'erremploy_countris')" ><br>
                                    <span id="erremploy_countris"></span>
                                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Employee Phone" onkeyup="change(this.id,'errphone','mobile')" onblur="change(this.id,'errphone','mobile')" ><br>
                                    <span id="errphone"></span>
                                    <input class="form-control" type="text" name="employ_postal_code" id="employ_postal_code" placeholder="Employee Postal Code" onkeyup="change(this.id,'erremploy_postal_code')" onblur="change(this.id,'erremploy_postal_code')" ><br>
                                    <span id="erremploy_postal_code"></span>
                                    <input class="form-control coun" type="text" name="employ_nationality" id="employ_nationality" placeholder="Employee Nationality" onkeyup="change(this.id,'erremploy_nationality')" onblur="change(this.id,'erremploy_nationality')" ><br>
                                    <span id="erremploy_nationality"></span>
                                    <textarea class="form-control" name="present_address" id="present_address" placeholder="Present Address" cols="" rows="" onkeyup="change(this.id,'errpresent_address')" onblur="change(this.id,'errpresent_address')" ></textarea><br>
                                    <span id="errpresent_address"></span>
                                    <textarea class="form-control" name="permanent_address" id="permanent_address" placeholder="Permanent Address" cols="" rows="" onkeyup="change(this.id,'errpermanent_address')" onblur="change(this.id,'errpermanent_address')" ></textarea><br>
                                    <span id="errpermanent_address"></span>
                                    <input class="form-control" type="text" name="employ_nid" id="employ_nid" placeholder="Pasport/NID" onkeyup="change(this.id,'erremploy_nid')" onblur="change(this.id,'erremploy_nid')" ><br>
                                    <span id="erremploy_nid"></span>
                                    <input class="form-control" type="text" name="employment_status" id="employment_status" placeholder="Employment Status" onkeyup="change(this.id,'erremployment_status')" onblur="change(this.id,'erremployment_status')" ><br>
                                    <span id="erremployment_status"></span>
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
                                    <input class="form-control" type="text" name="employ_email" class="email" id="useremail" onkeyup="CheckEmail(),change(this.id,'erruseremail')" onchange="CheckEmail()" placeholder="Employee Email"  onblur="change(this.id,'erruseremail')">
                                    <span id="user"></span>
                                    <span id="erruseremail"></span>
                                    <input class="form-control mt-3" type="password" name="employeepass" id="employeepass" placeholder="Employee Password" onkeyup="change(this.id,'erremployeepass')" onblur="change(this.id,'erremployeepass')" >
                                    <span id="erremployeepass"></span>
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
                                    <select class="form-select" name="employment_id" id="employment_id" onkeyup="change(this.id,'erremployment_id','data')" onblur="change(this.id,'erremployment_id','data')" >
                                        <span id="erremployment_id"></span>

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
                                    <select class="form-select" name="department_id" id="department_id" onkeyup="change(this.id,'errdepartment_id','data')" onblur="change(this.id,'errdepartment_id','data')" >
                                        <span id="errdepartment_id"></span>

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
                                    <select class="form-select" name="designation" id="designation" onkeyup="change(this.id,'errdesignation','data')" onblur="change(this.id,'errdesignation','data')" >
                                        <span id="errdesignation"></span>

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
                                    <input class="form-control datepickers" type="text" name="appointment_date" id="appointment_date" autocomplete="off" placeholder="Select Date" onkeyup="change(this.id,'errappointment_date')" onblur="change(this.id,'errappointment_date')" ><br>
                                    <span id="errappointment_date"></span>
                                    <label for="">Joining Date: </label>
                                    <input class="form-control datepickers" type="text" name="joining_date" id="joining_date" autocomplete="off" placeholder="Select Date" onkeyup="change(this.id,'errjoining_date')" onblur="change(this.id,'errjoining_date')" ><br>
                                    <span id="errjoining_date"></span>
                                    <?php 
                                    $xyz="SELECT * FROM employee  
                                    ORDER BY employee_id DESC limit 1";
                                    
                                  $zxy=mysqli_query($conn,$xyz);
                                    $x=mysqli_fetch_array($zxy);
                                    $a=$x['employee_code'];
                                    $format="Emp";
                                    $res=substr($a,3);
                                    $result=$format.$res+1;
                                    
                                    ?>
                                    <input class="form-control" type="hidden" name="employee_code" id="" placeholder="Employee Code" value="<?php echo $result?>">
                                    <input class="form-control" type="text" name="" id="" placeholder="Employee Code" value="<?php echo $result?>" disabled><br>
                                    <input class="form-control" type="text" name="employee_status" id="employee_status" placeholder="Employee Status" onkeyup="change(this.id,'erremployee_status')" onblur="change(this.id,'erremployee_status')" ><br>
                                    <span id="erremployee_status"></span>

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
            
<script type="text/JavaScript">
   $("#myform").submit(function(){
        var Employ_name= $("#employ_name").val();
        var Gen= $("#gen").val();
        var Marital_status= $("#marital_status").val();
        var Employ_date_of_birth= $("#employ_date_of_birth").val();
        var Employmet_picture= $("#employmet_picture").val();
        var Employ_religion= $("#employ_religion").val();
        var Employ_district= $("#employ_district").val();
        var Employ_countris= $("#employ_countris").val();
        var Phone= $("#phone").val();
        var Employ_postal_code= $("#employ_postal_code").val();
        var Employ_nationality= $("#employ_nationality").val();
        var Present_address= $("#present_address").val();
        var Permanent_address= $("#permanent_address").val();
        var Employ_nid= $("#employ_nid").val();
        var Employment_status= $("#employment_status").val();
        var Email= $(".email").val();
        var Employeepass= $("#employeepass").val();
        var Employment_id= $("#employment_id").val();
        var Department_id= $("#department_id").val();
        var Designation= $("#designation").val();
        var Appointment_date= $("#appointment_date").val();
        var Joining_date= $("#joining_date").val();
        var Employee_status= $("#employee_status").val();
        
        
        if(Employ_name==""){
            $("#employ_name").attr("style","border: 3px solid red");
            $("#erremploy_name").html("This field must not be empty!");
            return false;
        }else{
            $("#employ_name").attr("style","border:");
            $("#erremploy_name").html("");
        }
      if(Gen==""){
            $("#gen").attr("style","border: 3px solid red");
            $("#errgen").html("This field must not be empty!");
            return false;
        }
       else{
           $("#gen").attr("style","border:");
           $("#errgen").html("");
       }
      if(Marital_status==""){
            $("#marital_status").attr("style","border: 3px solid red");
            $("#errmarital_status").html("This field must not be empty!");
            return false;
        }
        else{
            $("#marital_status").attr("style","border:");
            $("#errmarital_status").html("");
        }
        if(Employ_date_of_birth==""){
            $("#employ_date_of_birth").attr("style","border: 3px solid red");
            $("#erremploy_date_of_birth").html("This field must not be empty!");
            return false;
        }else{
            $("#employ_date_of_birth").attr("style","border:");
            $("#erremploy_date_of_birth").html("");
        }
      if(Employmet_picture==""){
            $("#employmet_picture").attr("style","border: 3px solid red");
            $("#erremploymet_picture").html("This field must not be empty!");
            return false;
        }
       else{
           $("#employmet_picture").attr("style","border:");
           $("#erremploymet_picture").html("");
       }
      if(Employ_religion==""){
            $("#employ_religion").attr("style","border: 3px solid red");
            $("#erremploy_religion").html("This field must not be empty!");
            return false;
        }
        else{
            $("#employ_religion").attr("style","border:");
            $("#erremploy_religion").html("");
        }
      if(Employ_district==""){
            $("#employ_district").attr("style","border: 3px solid red");
            $("#erremploy_district").html("This field must not be empty!");
            return false;
        }
       else{
           $("#employ_district").attr("style","border:");
           $("#erremploy_district").html("");
       }
     if(Employ_countris==""){
            $("#employ_countris").attr("style","border: 3px solid red");
            $("#erremploy_countris").html("This field must not be empty!");
            return false;
        }
        else{
            $("#employ_countris").attr("style","border:");
            $("#erremploy_countris").html("");
        }
      if(Phone==""){
            $("#phone").attr("style","border: 3px solid red");
            $("#errphone").html("This field must not be empty!");
            return false;
        }
       else{
           $("#phone").attr("style","border:");
           $("#errphone").html("");
       }
       
       if(Employ_postal_code==""){
            $("#employ_postal_code").attr("style","border: 3px solid red");
            $("#erremploy_postal_code").html("This field must not be empty!");
            return false;
        }else{
            $("#employ_postal_code").attr("style","border:");
            $("#erremploy_postal_code").html("");
        }
      if(Employ_nationality==""){
            $("#employ_nationality").attr("style","border: 3px solid red");
            $("#erremploy_nationality").html("This field must not be empty!");
            return false;
        }
       else{
           $("#employ_nationality").attr("style","border:");
           $("#erremploy_nationality").html("");
       }
      if(Present_address==""){
            $("#present_address").attr("style","border: 3px solid red");
            $("#errpresent_address").html("This field must not be empty!");
            return false;
        }
        else{
            $("#present_address").attr("style","border:");
            $("#errpresent_address").html("");
        }
        if(Permanent_address==""){
            $("#permanent_address").attr("style","border: 3px solid red");
            $("#errpermanent_address").html("This field must not be empty!");
            return false;
        }else{
            $("#permanent_address").attr("style","border:");
            $("#errpermanent_address").html("");
        }
      if(Employ_nid==""){
            $("#employ_nid").attr("style","border: 3px solid red");
            $("#erremploy_nid").html("This field must not be empty!");
            return false;
        }
       else{
           $("#employ_nid").attr("style","border:");
           $("#erremploy_nid").html("");
       }
      if(Employment_status==""){
            $("#employment_status").attr("style","border: 3px solid red");
            $("#erremployment_status").html("This field must not be empty!");
            return false;
        }
        else{
            $("#employment_status").attr("style","border:");
            $("#erremployment_status").html("");
        }
      if(Email==""){
            $(".email").attr("style","border: 3px solid red");
            $("#erruseremail").html("This field must not be empty!");
            return false;
        }else{
           $(".email").attr("style","border:");
           $("#erruseremail").html("");
       }
      if(Employeepass==""){
            $("#employeepass").attr("style","border: 3px solid red");
            $("#erremployeepass").html("This field must not be empty!");
            return false;
        }
       else{
           $("#employeepass").attr("style","border:");
           $("#erremployeepass").html("");
       }
     if(Employment_id==""){
            $("#employment_id").attr("style","border: 3px solid red");
            $("#erremployment_id").html("This field must not be empty!");
            return false;
        }
        else{
            $("#employment_id").attr("style","border:");
            $("#erremployment_id").html("");
        }
      if(Department_id==""){
            $("#department_id").attr("style","border: 3px solid red");
            $("#errdepartment_id").html("This field must not be empty!");
            return false;
        }
       else{
           $("#department_id").attr("style","border:");
           $("#errdepartment_id").html("");
       }
       
       if(Designation==""){
            $("#designation").attr("style","border: 3px solid red");
            $("#errdesignation").html("This field must not be empty!");
            return false;
        }else{
            $("#designation").attr("style","border:");
            $("#errdesignation").html("");
        }
      if(Appointment_date==""){
            $("#appointment_date").attr("style","border: 3px solid red");
            $("#errappointment_date").html("This field must not be empty!");
            return false;
        }
       else{
           $("#appointment_date").attr("style","border:");
           $("#errappointment_date").html("");
       }
      if(Joining_date==""){
            $("#joining_date").attr("style","border: 3px solid red");
            $("#errjoining_date").html("This field must not be empty!");
            return false;
        }
        else{
            $("#joining_date").attr("style","border:");
            $("#errjoining_date").html("");
        }
        if(Employee_status==""){
            $("#employee_status").attr("style","border: 3px solid red");
            $("#erremployee_status").html("This field must not be empty!");
            return false;
        }else{
            $("#employee_status").attr("style","border:");
            $("#erremployee_status").html("");
        }
       
    });
    
    function change(id,msg,type=null){
        var get=$("#"+id).val();
        
        if(type==null){
            if(get==""){
            $("#"+id).attr("style","border: 3px solid red");
            $("#"+msg).html("This field must not be empty!");
            
        }else{
            $("#"+id).attr("style","border:");
            $("#"+msg).html("");
        }
        
        }
        if(type=="mobile"){
            if(get==""){
            $("#"+id).attr("style","border: 3px solid red");
            $("#"+msg).html("This field must not be empty!");
            
        }else if(get.length!==11){
            $("#"+id).attr("style","border: 3px solid red");
            $("#"+msg).html("Mobile number must be 11 digit");
        }
        else{
            $("#"+id).attr("style","border:");
            $("#"+msg).html("");
        }
        
        }
      if(type=="data"){
            if(get==""){
            $("#"+id).attr("style","border: 3px solid red");
            $("#"+msg).html("Please select any option");
            
        }
        else{
            $("#"+id).attr("style","border:");
            $("#"+msg).html("");
        }
        
        }
     
    }
    
</script>    
            
            
            
            

            <?php 
    if(isset($_POST['submit'])){
        
    date_default_timezone_set("asia/dhaka");
    $today=date("Y-m-d");
    $fullname=$_POST['employ_name'];
    $email=$_POST['employ_email'];
    $gender=$_POST['gen'];
    $marital_status=$_POST['marital_status'];
    $DOB=$_POST['employ_date_of_birth'];
//    $picture=$_POST['employmet_picture'];
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
//    $Empemail=$_POST['employeeemail'];
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
    echo "<script>alert('Employee Added')</script>";
    } 
    
    $s="SELECT * FROM user_table WHERE email='$email'";
    $result=mysqli_query($conn,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo "<script>alert('User  Already Exits')</script>";
    }else{
       $sqls="INSERT INTO `user_table` ( `user_name`, `full_name`, `email`, `phone`, `password`, `role_id`, `account_creation_date`, `status`) VALUES ('$fullname', '$fullname', '$email', '$phone', '$Emppass', '', '$today', '$Empstatus')";
    $query=mysqli_query($conn,$sqls);
        if($query){
            
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
                 yearRange: "1900:2050",
                dateFormat: 'yy-mm-dd'

            });
        });
        

    </script>
    

<script>
    $(document).ready(function(){
    $('#distc').autocomplete({
        source:'get_distric.php',
        minLength:1,
        delay:500
    })
    
    
})
    
    
    
    </script> 
    
    <script>
    $(document).ready(function(){
    $('.coun').autocomplete({
        source:'getCountry.php',
        minLength:1,
        delay:500
    })
    
    
})
    
    
    
    </script> 


</body>

</html>
