<?php
include 'database.php';

?>

<?php 

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
    <section class="p_dashboard">
  <div class="">





  </div>
</section>

     <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=></i>Docter Appointment system</div>
            <div class="list-group list-group-flush my-3">
                <a href="p_profile.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=></i>Check My Profile</a>
                <a href="search_doctor.php"
                 class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">dcotor Dashboard</h2>
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

}else{

     header("Location: index.php");

     exit();

}


 ?>

 <!--son aye ta akhon hat dibi na ok -->


<div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
            <button type="submit" class="btn btn-lg btn-success" name="search_doc">Search Doctor</button>
          </div>
      </div>
    </div>
        <br>
        <br>
        <br>

    <!-- Invoice Example -->

   <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Doctor List</h6>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
          <?php
          if(isset($_POST['search_doc'])){
                            
            //$date=$_POST['a_date'];
            //$time=$_POST['a_time'];
            $type=$_POST['d_type'];
            $sql="select * from doctor where d_specialization='$type'";
            $result=mysqli_query($con,$sql);
            if($result){
               
                if(mysqli_num_rows($result)>0){

                echo '<thead class="thead-light">
                 <tr>
                    <th>Doctot Name</th>
                    <th>Doctor Specialization</th>
                    <th>Doctor Qualification</th>
                    <th>Gender</th>
                    <th>Status</th>
                     <th>Action</th>
                </tr>
                </thead>';
                while($row=mysqli_fetch_assoc($result)){
                  $id=$row['d_id'];
                echo '<tbody>
                <tr>
                    <td>'.$row['d_name'].'</td>
                    <td>'.$row['d_specialization'].'</td>
                    <td>'.$row['d_qualification'].'</td>
                    <td>'.$row['d_gender'].'</td>
                    <td><span class="badge badge-success">Delivered</span></td>
                    <td><button type="button" class="btn btn-warning" onclick="GetDetails('.$id.')">Book</button></td>
                </tr>
                </tbody>';
        
                }
                                    }else{
                                        echo '<h2 class="alert alert-danger text-center" role="alert">!--Data Not Found--!</h2>';
                                    }
                            }
                    }

            ?>
          </table>
          
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
  <!--Row-->



</form>



  </div>
</section>





           

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

