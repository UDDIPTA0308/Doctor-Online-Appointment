<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $p_name=$_POST['p_name'];
    $p_age=$_POST['p_age'];
    $p_gender=$_POST['p_gender'];
    $p_mobile=$_POST['p_mobile'];
    $p_email=$_POST['p_email'];
    $p_password=$_POST['p_password'];
    
   $sql="insert into patient (p_name,p_age,p_gender,p_mobile,p_email,p_password)values('$p_name','$p_age','$p_gender','$p_mobile','$p_email','$p_password')";
   if(mysqli_query($con,$sql))
   {
    echo "<script>alert('new record inserted')</script>";
   }
   else
   {
    echo "error:".mysqli_error($con);
   }
   mysqli_close($con);

}
?>