<!DOCTYPE html>    
<html>    
<head>    
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">

    <title>Reg Form</title>    
    <style type="text/css">    
        body{    
            font-family: Calibri;    
        }    
        input[type="text"] {                             
            width: 250px;    
        }    
        input[type="submit"], input[type="reset"] {    
            width: 77px;    
            height: 27px;    
            position: relative;left: 180px;    
        }    
        form{    
            text-align: center;    
            font-family: Calibri;    
            font-size: 20px;    
            border: 3px solid black;    
            width: 600px;    
            margin: 20px auto;    
        }    
        td {    
            padding: 10px;    
        }    
        td:first-child {    
            text-align: right;    
            font-weight: bold;    
        }    
        td:last-child {    
            text-align: left;    
        
    </style>    
   
</head>    
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


    <center><h1>patient Registration Form</h1></center>    
    <hr>    
    <form name="patiensregister" action="connect.php" method="post">    
        <h2>Registration Form</h2>    
        <table>    

            <tr>    
                <td><label>Name: </label></td>    
                <td>    
                    <input type="text" name="p_name" placeholder="Name">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Age:</label></td>    
                <td>    
                    <input type="text" name="p_age" placeholder="age">    
                </td>    
            </tr>    
           
            <tr>    
                <td><label>Gender: </label></td>    
                <td>    
                    <input type="radio" name="p_gender" value="M">Male    
                    <input type="radio" name="p_gender" value="F">Female    
                </td>    
            </tr>    
            <tr>    
                <td><label>Email Id: </label></td>    
                <td>    
                    <input type="text" name="p_email" placeholder="example@gmail.com">    
                </td>    
            </tr>    
            <tr>    
                <td><label>Mobile: </label></td>    
                <td>    
                    <input type="text" name="p_mobile">    
                </td>    
            </tr>    
            
            <tr>    
                <td><label> Make Password: </label></td>    
                <td>    
                    <input type="password" name="p_password" placeholder="Enter a password">    
                </td>    
            </tr>   


            
            <tr>    
                <td>    
                    <input type="submit" name="submit" value="Submit">    
                    <input type="reset" name="reset" value="Reset">    
                </td>    
            </tr>             
        </table>    
    </form>    
</body>    
</html>    