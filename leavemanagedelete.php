<?php
    require "connect.php";
    
    $Id=$_GET['aid'];
    $sql="delete from  leave_type where leave_Type_id='$Id'";
    $query= mysqli_query($conn, $sql);
    header("location:leaveTypeManage.php");
?>

