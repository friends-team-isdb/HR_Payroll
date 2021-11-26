<?php
    require 'connect.php';
    
    if(isset($_POST['update'])){
        $Id=$_POST['Id'];
        $leavetype=$_POST['leavetype'];
        $sql="UPDATE  leave_type SET leave_type='$leavetype' WHERE leave_type_id='$Id'";
        $query= mysqli_query($conn, $sql);
        header('Location:leaveTypeManage.php');
        
    }

?>