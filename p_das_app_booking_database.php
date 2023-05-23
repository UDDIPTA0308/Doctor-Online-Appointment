<?php
include 'database.php';
if(isset($_POST['hiddendata'])){
    $uniqueid=$_POST['hiddendata'];
    
   
    $adate=$_POST['a_date'];
    $atime=$_POST['a_time'];
    $pt_id=$_POST['a_c_id'];
    $do_id=$_POST['pop_techid'];
    $tran_id=$_POST['pay_meth'];
    $cha_id=$_POST['a_text'];
   
    
    



   $sql=("insert into appointment(p_id,d_id,ch_id,app_date,app_time,transaction_id) values ('$pt_id','$do_id','$cha_id','$adate','$atime','$tran_id')");
   if(mysqli_query($con, $sql)){
    echo "<script>alert('your appiontment booking succes full')</script>";

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
}

?>