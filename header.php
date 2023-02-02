<html>
<head>
<link rel="stylesheet" type="text/css" href="registration.css"> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">



</head>
 <style> 
 *
{
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
}

header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #ffffff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    padding: 5px 5%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
header .BookStore
{
font-weight: bolder;
font-size: 35px;
color: #333;
font-style: italic;
font-family:Arial, Helvetica, sans-serif;
}

header .navbar{
    margin: auto;
}

header .navbar ul{
    list-style: none;
    clear: both;
}

header .navbar ul li{
    position: relative;
    float: left;
}

header .navbar ul li a{
font-size: 20px;
padding: 20px;
color: #333;
display: block;
}

header .navbar ul li a:hover{
background-color:#333;
color: #ffffff;
}

header .navbar ul li ul{
    position: absolute;
    left: 0;
    width: 200px;
    background: #fff;
    display: none;
}

header .navbar ul li ul li{
    width: 100%;
    border-top: 1px solid rgba(0, 0, 0, .1);
}

header .navbar ul li ul li ul{
    left: 200px;
    top: 0;

}
header .navbar ul li:focus-within >ul,
header .navbar ul li:hover >ul{
    display: initial;
}

#add_button:link, #add_button:visited {
  background-color: #36454F;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  border: 1px solid #36454F;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 15px;
  box-sizing: border-box;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  text-align: center;
}

#add_button:hover, #add_button:active {
    background-color: initial;
  background-position: 0 0;
  color: #36454F;
  opacity: .9;

}


</style>

<header>

        <a href="#" class="BookStore">BookStore</a>

        <nav class="navbar">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Novel.php">Novel</a></li>
                <li><a href="Comedy.php">Comedy</a></li>
                <li><a href="Spiritual.php">Spiritual</a></li>
                <li><a href="Suspense.php">Suspense</a></li>
                <li><a href="Horror.php">Horror</a></li>
                <li><a href="#">More ></a>
                    <ul>
                    <li><a href="Recently_Added.php">Recently Added</a></li>
                        <li><a href="AboutUs.php">About Us</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <a href="#" id="add_button" class="show_reg">Add Book</a>



    </header>
    
    <body>
  
<?php
$conn=mysqli_connect("localhost", "root", "", "Bookstore2");
if($conn==TRUE)
{

}

else
{
echo("not connected");
}
error_reporting(0);
if (isset($_POST['Sign_Up']))
{
$fullname=$_POST['fname'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$password=$_POST['pass'];
 

if (empty($email)) 
    {
        echo "<script>alert('Email is required');</script>";
    } 
    
else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Email is Invalid');</script>";
        }

        else{
            $query= mysqli_query($conn, "SELECT * FROM `registration` WHERE Email='$email'");
            if(mysqli_num_rows($query)>0)
            {
              echo "<script> swal('Error.. ', 'Email Id has been alredy registred. Please click on Login or enter different email', 'error'); </script>";
            }
            else
            {
                $sql="INSERT INTO `registration`(`Fullname`, `Email`, `MobileNo`, `Password`) VALUES ('$fullname','$email','$mobileno','$password')";
                $run=mysqli_query($conn,$sql);
                if($run==TRUE)
                {
                require_once 'add.php';
                }
                else
                {
                echo "<script>alert('error in submitting...');</script>";
                }
            }
        }    
    }
}

$conn->close();
?>


    <div class="popup">
    <div class="popup-content">
        <div class="close_btn">&times</div>
        <div class="form">
            <form method="POST">

            <h2> Registration</h2>
            <div class="form_element">
            <label for="full_name">Full Name</lable>
            <input type="text" id="fullname" name="fname" placeholder="Enter Name" required><br>
            <label for="email">Email</lable> <span style="color:red;"><?php echo $err; ?></span>
            <input type="text" id="email" name="email" placeholder="Enter Email" required><br>
            <label for="mobile no">Mobile No</lable>
            <input type="number" id="mobileno" name="mobileno" placeholder="Enter Mobile No" required><br>
            <label for="password">Password</lable>
            <input type="password" id="password" name="pass" placeholder="Enter Password" required><br>
            <input type="submit" value="submit" name="Sign_Up"><br>
            <label for="already">Already have an account? <a href="Login.php">Login</a>
            </div>
</form>
        </div>
        </div>
    </div>
</div>


<!-- Registration connectivity -->

</body>

    <script src="registration.js"></script> 

    </html>


