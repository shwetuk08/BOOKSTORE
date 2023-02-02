<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
        $mailheader="From:".$Username."<".$Email.">\r\n";
        $receipant = "shwetakesarkar08011999@gmail.com";
        
        if(mail($receipant, $Subject, $Msg, $mailheader))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }




?>