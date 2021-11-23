<?php require "connect.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/loginStyle.css">
    <script src="jquary.js" charset="utf-8"></script>
    <script src="main.js" charset="utf-8"></script>

</head>

<body>
    <div class="login-div">
        <h1>Hr Payroll</h1>
        <p>Design By<span>Abdus Samad</span></p>
        <img src="img/apple icon.png" alt="logo" class="logo">
        <h2>Login</h2>

    </div>
    <form class="#" action="#" method="post">
        <div class="input-div">
            <input type="email" name="email" value="" placeholder="UserName" required><br>
            
            <input type="password" name="password" value="" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Login">

        </div>
    </form>
   

</body>

</html>


    <?php 
    session_start();
    if(isset($_POST['submit'])){
        $emails=$_POST['email'];
        $pass=$_POST['password'];
        
        $sql="Select * from user_table where email='$emails' && password='$pass'";
        $query=mysqli_query($conn,$sql);
        
        $num=mysqli_num_rows($query);
        if($num==1){
             $_SESSION['userName']=$emails;
            header("location:Desboard.php");
        }else{
            echo "Email and Password not match";
        }
    }
    
    
    ?>




</body>

</html>
