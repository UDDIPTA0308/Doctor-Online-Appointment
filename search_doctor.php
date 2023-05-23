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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                <a href="p_profile.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=></i>Check My Profile</a>
                <a href="search_doctor.php"
                 class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=></i>Search Doctor</a>
                <a href="view_app.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">Patient Dashboard</h2>
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
            <section class="p_dashboard ty-auto">
  <div class="">

  <form action="" method="POST" >

<div class="row mb-3">
    <!-- 1st box -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <div class="text-mb font-weight-bold text-uppercase mb-1">Select Date</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4">
                        <!-- enter date-->
                        <div class="input-group mb-3">
             <span class="input-group-text">date</span>
                  <div class="form-floating">
                     <input type="text" class="form-control" id="floatingInputGroup1" name="a_date">
                     <label for="floatingInputGroup1">dd/mm/yyyy</label>
                  </div>
                      </div>

                        
                    </div>
                </div>    
            </div>
        </div>
      </div>
    </div>
    <!-- 2nd box -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-mb font-weight-bold text-uppercase mb-1">Select Time</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4">
                <div class="">
                    <!-- enter time-->
                    <select class="form-select" aria-label="Default select example" name="a_time">
               <option selected>Time</option>
                 <option value="9am - 10am">9am - 10am</option>
                <option value="10am - 11am">10am - 11am</option>
              <option value="11am - 12pm">12am - 1pm</option>
                        <option value="1pm - 2pm">1pm - 2pm</option>
                  </select>


                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 3rd box -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-mb font-weight-bold text-uppercase mb-1">Select doctor cetogary</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 mt-4">
                    <!-- enter type doctor-->
                    <select class="form-select" aria-label="Default select example" name="d_type">
                       <option selected>doctor catogory</option>
               <option value="gyno">gyno</option>
              <option value="nyro">nyro</option>
             <option value="dentis">dentis</option>
                </select>

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>    



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
          
          
          
          <!-- Modal -->
              <div class="modal fade" id="popupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  <div class="modal-body">
                  
                    
                    
         <div class="row g-2">
             <div class="col-md">
                <div class="mb-3">
                  <label for="a_date" class="form-label">Appointment Date</label>
                  <input type="text" id="a_date" class="form-control" value="<?php echo $_POST['a_date']; ?>" disabled readonly>
                </div>
              </div>

             <div class="col-md">
             <div class="mb-3">
                  <label for="a_time" class="form-label">Appointment Time</label>
                  <input type="text" id="a_time" class="form-control" value="<?php echo $_POST['a_time']; ?>" disabled readonly>
                </div>
             </div>

                <div class="col-md">
                <div class="mb-3">
                  <label for="a_type" class="form-label">Doctor Specialization</label>
                  <input type="text" id="a_type" class="form-control" value="<?php echo $_POST['d_type']; ?>" disabled readonly>
                </div>
                </div>
          </div>


          <div class="row g-2">
             <div class="col-md">
                <div class="mb-3">
                  <label for="a_c_id" class="form-label">Patient ID</label>
                  <input type="text" id="a_c_id" class="form-control" value="<?php echo $_SESSION['user_name']; ?>" disabled readonly>
                </div>
              </div>

             <div class="col-md">
             <div class="mb-3">
                  <label for="a_c_name" class="form-label">Patient Name</label>
                  <input type="text" id="a_c_name" class="form-control" value="<?php echo $_SESSION['name']; ?>" disabled readonly>
                </div>
             </div>
          </div>

          
          <div class="row g-2">
             <div class="col-md">
                <div class="mb-3">
                  <label for="pop_techid" class="form-label">Doctor ID</label>
                  <input type="text" id="pop_techid" class="form-control" disabled readonly>
                </div>
              </div>

             <div class="col-md">
             <div class="mb-3">
                  <label for="pop_techname" class="form-label">Doctor Name</label>
                  <input type="text" id="pop_techname" class="form-control" disabled readonly>
                </div>
             </div>
             <div class="col-md">
              <div class="mb-3">
                  <label for="disabledTextInput" class="form-label">Doctor Fees</label>
                  <input type="text" id="disabledTextInput" class="form-control"  disabled readonly>
                </div>
             </div>
          </div>

          <div class="row g-2">
             <div class="col-md">
                <div class="mb-3">
                <label class="form-check form-check-inline mb-0 me-4">Payment Method:- </label>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio"  id="pay_meth"
                      value="Cash" />
                    <label class="form-check-label" for="pay_meth">Cash</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio"  id="pay_meth"
                        value="Online" disabled/>
                      <label class="form-check-label" for="pay_meth">Online</label>
                  </div>

              </div>
          </div>

          <div class="mb-3">
              <label for="a_text" class="form-label">Chamber ID</label>
              <input type="text"  class="form-control" id="a_text"  disabled readonly>
          </div>
                  
                  
                    
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" id="hiddendata">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="updateDetails()">Confirm Booking</button>
                  </div>
                </div>
              </div>
            </div>

        </div>
        <div class="card-footer"></div>
      </div>
    </div>
  <!--Row-->


  <script>
            // This script code for modal doctor data pass
            
            function GetDetails(updateid){
              $('#hiddendata').val(updateid);
              $.post("p_das_bookap_popup.php",{updateid:updateid},function(data,status){
                var userid=JSON.parse(data);
                $('#pop_techid').val(userid.d_id);
                $('#pop_techname').val(userid.d_name);

              });

              $('#popupmodal').modal("show");
            }

            // This script code for modal form save to appointment table in database

            function updateDetails(){
              var a_date=$('#a_date').val();
              var a_time=$('#a_time').val();
              var a_c_id=$('#a_c_id').val();
              var pop_techid=$('#pop_techid').val();
              var pay_meth=$('#pay_meth').val();
              var a_text=$('#a_text').val();
              var hiddendata=$('#hiddendata').val();


              $.post("p_das_app_booking_database.php",{

                a_date:a_date,
                a_time:a_time,
                a_c_id:a_c_id,
                pop_techid:pop_techid,
                pay_meth:pay_meth,
                a_text:a_text,
                hiddendata:hiddendata

              },function(data,status){
                $('#popupmodal').modal("hide");
                 
              });
              
            }



          </script>

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

}else{

     header("Location: index.php");

     exit();

}


 ?>