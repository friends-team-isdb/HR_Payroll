<?php 

    require "connect.php";
    
    
    if(isset($_POST['update'])){
        $Id=$_POST['Id'];
        $department=$_POST['department'];
        $sql="SELECT * FROM  department department_Id='$Id'";
        $query= mysqli_query($conn,$sql);
        
        $num=mysqli_num_rows($query);
        
        if($num==1){
            
            $sqls="UPDATE  department SET department_Name='$department' WHERE department_Id='$Id'";
            $sqlss="UPDATE  designation SET designation='$degination' WHERE designation_Id='$Ids'";
            $querys=mysqli_query($conn,$sqls);
            $queryss=mysqli_query($conn,$sqlss);  
            header("location:departmentManage.php");
        }
        else{
            echo 'Department Id not match!';
        }
        
    }


?>
