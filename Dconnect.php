<?php
include 'database.php';
if(isset($_POST['submit']))
{
    
    $d_registration=$_POST['d_registration'];
    $d_qualification=$_POST['d_qualification'];
    $d_specialization=$_POST['d_specialization'];
    $d_name=$_POST['d_name'];
    $d_age=$_POST['d_age'];
    $d_gender=$_POST['d_gender'];
    $d_mobile=$_POST['d_mobile'];
    $d_email=$_POST['d_email'];
    $d_password=$_POST['d_password'];
    

    
   $sql="insert into doctor (d_registration,d_qualification,d_specialization,d_name,d_age,d_gender,d_mobile,d_email,d_password)values('$d_registration','$d_qualification','$d_specialization','$d_name','$d_age','$d_gender','$d_mobile','$d_email','$d_password')";
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