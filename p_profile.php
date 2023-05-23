<?php 
include "database.php";
session_start();

if(isset($_SESSION['name']) && isset($_SESSION['user_name'])) {

//if (isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">

<head>
    <title>HOME</title>

<body>

<nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="login_section.php">Log in</a></li>
            <li class="item"><a href="reg_section.php">Register</a></li>
        </ul>
    </nav>


     <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=></i>Docter Appointment system</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class=></i>Check My Profile</a>
                <a href="search_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=></i>Search Doctor</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=></i>View Appointment</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=></i> FeedBack</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=></i>Logout</a>
                
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Patient Profile</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
                                <h1>Your ID, <?php echo $_SESSION['user_name']; ?></h1>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

           

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>



</body>

</html>

<?php 


$uname = $_SESSION['user_name'];

$sql = "SELECT * FROM patient WHERE p_id='$uname'";


$result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) 
        {

            $row = mysqli_fetch_assoc($result);

            
               

        }
    }        

else

{ 

     header("Location: index.php");

     exit();

}


 ?>

 <div>
    <form action="#" method="POST">

   Name:  
   <input value="<?php echo $row['p_name']?>
        "type="text"name="p_name"placeholder=""><br><br>
        
    Age:
      <input value="<?php echo $row['p_age']?>
        "type="text" name="p_age"placeholder="p_age"><br><br>

    Gender:
    <input value="<?php echo $row['p_gender']?>
        "type="text" name="p_gender"placeholder="p_gender"><br><br>

    Mobile:
    <input value="<?php echo $row['p_mobile']?>
        "type="text" name="p_mobile"placeholder="p_mobile"><br><br>

    Email:
    <input value="<?php echo $row['p_email']?>
        "type="text" name="p_email"placeholder="p_email"><br><br>

    Password:
    <input value="<?php echo $row['p_password']?>
        "type="text" name="p_password"placeholder="p_password"><br><br>

        <input type="submit" name= "update_btn"  value="Update" >

    </form>

 </div>

 <?php
include 'database.php';
 $row = mysqli_fetch_assoc($result);

if(isset($_POST['update_btn']))
{
    $p_name=$_POST['p_name'];
    $p_age=$_POST['p_age'];
    $p_gender=$_POST['p_gender'];
    $p_mobile=$_POST['p_mobile'];
    $p_email=$_POST['p_email'];
    $p_password=$_POST['p_password'];
    
   $update="UPDATE patient SET p_name='$p_name',p_age='$p_age',p_gender='$p_gender',p_mobile='$p_mobile',P_email='$p_email',p_password='$p_password'  WHERE p_id='$uname'"; 
   if(mysqli_query($con,$update))
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