<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="p_login.css">
   
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
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



     <form action="p_login_ver.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>