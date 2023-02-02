<!-- Login Connectivity -->
<?php
require 'config.php';
if(isset($_POST["login"]))
{
$useremail=$_POST["email"];
$password=$_POST["password"];
$location=$_POST["location"];
$result= mysqli_query($conn, "SELECT * FROM `registration` WHERE Email='$useremail' AND Password='$password'");
$row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0)
    {
    header("Location:Addbook.php");
    }
    else{
        echo "<script>alert('email or password is wrong..'); </script>";

    }
}

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Login.css">
        <link rel="stylesheet" type="text/css" href="registration.css"> 

    
    </head>
<title>Login Page</title>
<body>
<div class="Login">
    <div class="form">
        <form method="POST" autocomplete="off">
        <h2> Login Here</h2>
        <div class="form_element"> 
            <label for="email">Email</lable>
            <input type="text" id="email" name="email" placeholder="Enter Email"><br>
            <label for="password">Password</lable>
            <input type="password" id="password" name= "password" placeholder="Enter Password"><br>
            <input type="hidden" name="location" value="<?php if(!empty($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; else echo'';?>" onclick= hidden()>
            <input type="submit" value="Login" name="login"><br>  
            <label for="already">Don't have an account? <button class="show_reg">sign up
                    <i class="fa fa-download"></i></button>
 
                <a href="javascript:history.back()" class="show_reg">Back to Main Page</a></lable>   
        </div>
        </form>
    </div>
</div>


<!-- for registration page -->

<div class="popup">
    <div class="popup-content">
        <div class="close_btn">&times</div>
        <div class="form">
        <form method="POST">
            <h2> Registration</h2>
            <div class="form_element">
            <label for="full_name">Full Name</lable>
            <input type="text" id="fullname" placeholder="Enter Name"><br>
            <label for="email">Email</lable>
            <input type="text" id="email" placeholder="Enter Email"><br>
            <label for="mobile no">Mobile No</lable>
            <input type="number" id="mobileno" placeholder="Enter Mobile No"><br>
            <label for="password">Password</lable>
            <input type="password" id="password" placeholder="Enter Password"><br>
            <input type="submit" value="submit"><br>
            <label for="already">Already have an account? <a href="Login.php">Login</a>
            </div>
</form>
        </div>
        </div>
    </div>
</div>



<script src="registration.js"></script> 

</body>

</html>