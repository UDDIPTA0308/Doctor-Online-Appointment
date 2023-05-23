<?php 

session_start(); 

include "database.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: d_login.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: d_login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM doctor WHERE d_id='$uname' AND d_password='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['d_id'] === $uname && $row['d_password'] === $pass) {

                 if($row['d_block']==0)
                 {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['d_id'];

                $_SESSION['name'] = $row['d_name'];


                header("Location: d_dashboard.php");

                exit();
                 }
                 else
                 { 
                    header("Location: d_login.php?error=Your ID is Blocked. Please Contact Admin");
                 }

            }else{

                header("Location: d_login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: d_login.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}