<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['name'];
       $Email = $_POST['email'];
       $Msg = $_POST['message'];

       if(empty($Name) || empty($Email) || empty($Msg))
       {
           header('location:newcontact.php?error');
       }
       else
       {
        $mailheader="From:".$Name."<".$Email.">\r\n";
        $receipant = "shwetakesarkar08011999@gmail.com";
        
        if(mail($receipant, $Msg, $mailheader))
           {
               header("location:newcontact.php?success");
           }
       }
    }
    else
    {
        header("location:newcontact.php");
    }




?>