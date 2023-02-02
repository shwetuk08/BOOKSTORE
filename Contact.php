
<html>
<?php
require_once('header.php');
    ?>
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="Cont.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>
  <body>

   

    <!--contact section start-->
    <div class="contact-section">

    <?php
$conn=new mysqli("localhost","root","","contact");
if($conn==TRUE)
{

}

else
{
echo("not connected");
}
 error_reporting(0);
if (isset($_POST['submit']))
{

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['mobile'];
  $msg=$_POST['message'];
  $From_email="shwetuk08@gmail.com";
  $Reply_to=$email;
  $to_email= "shwetakesarkar08011999@gmail.com";
  $message='Name: '.$name.'<br>Email: '.$email.'<br>Mobile No: '.$phone.'<br>Message: '.$msg;
  $header = "From: " . $name . "<". $email .">\r\n";
  $sql= mysqli_query($conn, "SELECT * FROM `contactform` WHERE Email='$email'");

if(mysqli_num_rows($sql)>0)
  {
    echo "<script> swal('Error.. ', 'Email Id has been alredy registred. Please try different..', 'error'); </script>";
  }
  
else
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err= "Invalid email address";
    } 
    else if(mail($to_email, $message, $header,'-f'.$From_email)) 
    {
    $query="INSERT INTO `contactform`(`Name`, `Email`, `MobileNo`, `Message`) VALUES ('$name','$email','$phone','$msg')";
    $run=mysqli_query($conn,$query);
        if($run==TRUE)
        { 
        echo "<script> swal('Thank You! ', 'Your message has been sent.', 'success'); </script>";
        }
        else
        {
        echo "<script> swal('Sorry.. ', 'Please fill data correctly', 'error'); </script>";
        }
    }
  }
  
}
?>

      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Mumbai, Maharashtra, India</div>
        <div><i class="fas fa-envelope"></i>shwetuk08@email.com</div>
        <div><i class="fas fa-phone"></i>+91 8425024506</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="POST" autocomplete="off">
          <input type="text" name="name" class="textfield" placeholder="Your Name" required>
          <input type="email" name="email" class="textfield" placeholder="Your Email" required>
          <input type="number" name="mobile" class="textfield" placeholder="Your Mobile No" required>

          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send_btn" value="Send"/>
          <span style="color:red;"><?php echo $err ?></span>

         
</form>
      </div>
         

    </div>
    

  </body>
</html>