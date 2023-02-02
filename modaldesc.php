<?php
if(isset($_POST["book_id"]))
{
    $output= '<div class="table_responsive">';
    $con=new mysqli("localhost","root","","AddBook");
    $query= "SELECT * FROM `bookpost` WHERE id= '".$_POST["book_id"]."'";
    $result=mysqli_query($con, $query);

    $output .='<div class="bookdata">
    ';

    while($row= mysqli_fetch_array($result))
    {
        $output .='<img src="Saved/'.$row['ImageFile'].'">
        '.$row["Description"].'';
    }
    $output.= "</div>";
    echo $output;
    }
?>

