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
        <h1>Matarial Design</h1>
        <p>Design By<span>Abdus Samad</span></p>
        <img src="apple icon.png" alt="logo" class="logo">
        <h2>Login</h2>

    </div>
    <form class="#" action="index.html" method="post">
        <div class="input-div">
            <input type="email" name="" value="" placeholder="UserName" required><br>
            
            <input type="password" name="" value="" placeholder="Password" required><br>
            <input type="submit" name="" value="Login">

        </div>
    </form>
    <div class="footer">
        <p>Not Registration? <span><a href="#">Create an account</a></span></p>

    </div>

</body>

</html>


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
            header("location:Desboard.php");
        }else{
            echo "Email and Password not match";
        }
    }
    
    
    ?>




</body>

</html>
