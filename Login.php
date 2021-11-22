<?php require "connect.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">



        <form action="#" method="post">
            <div class="row line-margin">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <input class="form-control" type="email" name="email" id="" required placeholder="Enter Your Email"><br>
                    <input class="form-control" type="password" name="password" id="" placeholder="Enter Your Password"><br>
                    <input class="btn btn-primary pull-right" type="submit" name="submit" id="" value="Login">


                </div>
                <div class="col-md-3"></div>
            </div>


        </form>




    </div>

    <?php 
    session_start();
    if(isset($_POST['submit'])){
        $emails=$_POST['email'];
        $pass=$_POST['password'];
        
        $sql="Select * from user_table where email='$emails' && passwords='$pass'";
        $query=mysqli_query($conn,$sql);
        
        $num=mysqli_num_rows($query);
        if($num==1){
             $_SESSION['userName']=$emails;
            echo $_SESSION['userName'];
            header("location:Desboard.php");
        }else{
            echo "Email and Password not match";
        }
    }
    
    
    ?>




</body>

</html>
