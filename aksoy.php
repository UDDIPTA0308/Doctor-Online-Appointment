<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="main_css/style.css">
    <title>Home Page</title>
 </head>
    <body>
<section class="p_dashboard">
  <div class="">





  </div>
</section>

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
                  if(isset($_POST['search_tec'])){
                                    
                    $state=$_POST['state_s'];
                    $dist=$_POST['district_s'];
                    $city=$_POST['city_s'];
                    $type=$_POST['type_s'];

                    $sql="select * from technician where t_state='$state' and t_district='$dist' and t_city like '%$city%' and t_type='$type'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                       
                        if(mysqli_num_rows($result)>0){

                        echo '<thead class="thead-light">
                         <tr>
                            <th>Technician Name</th>
                            <th>Technician Type</th>
                            <th>Technician Experience</th>
                            <th>Status</th>
                         <th>Action</th>
                        </tr>
                        </thead>';
                        while($row=mysqli_fetch_assoc($result)){
                          $id=$row['t_id'];
                        echo '<tbody>
                        <tr>
                            <td>'.$row['t_name'].'</td>
                            <td>'.$row['t_type'].'</td>
                            <td>'.$row['t_exp'].'</td>
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
                            ...
                            
                            
                 <div class="row g-2">
                     <div class="col-md">
                        <div class="mb-3">
                          <label for="a_date" class="form-label">Appointment Date</label>
                          <input type="text" id="a_date" class="form-control" value="<?php echo $_POST['app_date']; ?>" disabled readonly>
                        </div>
                      </div>

                     <div class="col-md">
                     <div class="mb-3">
                          <label for="a_time" class="form-label">Appointment Time</label>
                          <input type="text" id="a_time" class="form-control" value="<?php echo $_POST['app_time']; ?>" disabled readonly>
                        </div>
                     </div>

                        <div class="col-md">
                        <div class="mb-3">
                          <label for="a_type" class="form-label">Technician Type</label>
                          <input type="text" id="a_type" class="form-control" value="<?php echo $_POST['type_s']; ?>" disabled readonly>
                        </div>
                        </div>
                  </div>


                  <div class="row g-2">
                     <div class="col-md">
                        <div class="mb-3">
                          <label for="a_c_id" class="form-label">Customer ID</label>
                          <input type="text" id="a_c_id" class="form-control" value="<?php echo $_SESSION['user_id']; ?>" disabled readonly>
                        </div>
                      </div>

                     <div class="col-md">
                     <div class="mb-3">
                          <label for="a_c_name" class="form-label">Customer Name</label>
                          <input type="text" id="a_c_name" class="form-control" value="<?php echo $_SESSION['user_name']; ?>" disabled readonly>
                        </div>
                     </div>
                  </div>

                  
                  <div class="row g-2">
                     <div class="col-md">
                        <div class="mb-3">
                          <label for="pop_techid" class="form-label">Technician ID</label>
                          <input type="text" id="pop_techid" class="form-control" disabled readonly>
                        </div>
                      </div>

                     <div class="col-md">
                     <div class="mb-3">
                          <label for="pop_techname" class="form-label">Technician Name</label>
                          <input type="text" id="pop_techname" class="form-control" disabled readonly>
                        </div>
                     </div>
                     <div class="col-md">
                      <div class="mb-3">
                          <label for="disabledTextInput" class="form-label">Technician Minimum Fees</label>
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
                      <label for="a_text" class="form-label">Appointment Description</label>
                      <textarea class="form-control" id="a_text" rows="3" placeholder="Write Your Problems"></textarea>
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
                    // This script code for modal tecnician data pass
                    
                    function GetDetails(updateid){
                      $('#hiddendata').val(updateid);
                      $.post("cust_das_bookap_popup.php",{updateid:updateid},function(data,status){
                        var userid=JSON.parse(data);
                        $('#pop_techid').val(userid.t_id);
                        $('#pop_techname').val(userid.t_name);

                      });

                      $('#popupmodal').modal("show");
                    }

                    // This script code for modal form save to appointment table in database

                    function updateDetails(){
                      var a_date=$('#a_date').val();
                      var a_time=$('#a_time').val();
                      var a_type=$('#a_type').val();
                      var a_c_id=$('#a_c_id').val();
                      var pop_techid=$('#pop_techid').val();
                      var pay_meth=$('#pay_meth').val();
                      var a_text=$('#a_text').val();
                      var hiddendata=$('#hiddendata').val();


                      $.post("cust_das_app_booking_database.php",{

                        a_date:a_date,
                        a_time:a_time,
                        a_type:a_type,
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

           

    <body>
</html>