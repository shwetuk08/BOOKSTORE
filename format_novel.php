
<!DOCTYPE html>

<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
   require_once('header.php');
   ?>

    <head>
    <link rel="stylesheet" type="text/css" href="novel.css"> 


    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">          
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
<title>Novel</title>

<body>
  
<div class="container">
<h1><br><br>Novels
</h1>
        <section class="novels">

        <?php
$con=new mysqli("localhost","root","","AddBook");
$query= "SELECT * FROM `bookpost`";
$query_run=mysqli_query($con, $query);
$check_faculty=mysqli_num_rows($query_run)>0;
if($check_faculty)
{
while($row=mysqli_fetch_array($query_run))
{
    ?>
    
<!--colums of images with data-->
            <div class="column">
            <img src="Saved/<?php echo $row['ImageFile']; ?>" class="modal-open hover-shadow preview" data-modal="modal" alt="1984"></img>

                <p class="novel_title"> <?php echo $row['BookName']; ?> </p> 
                <p>Author Name:  <?php echo $row['AuthorName']; ?> </p>
                <a href="./Classic Novels/1984.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                </a>
                
            </div>

            
          
<!--modals start-->

<!--modal 1-->
<div class="modal" id="modal">
    <div class="modal-content">
        <div class="modal-header">
            <i class="fa fa-close" id="modal-close"></i>
            </i>
        </div>

        <div class="modal-body">
        <img src="Saved/<?php echo $row['ImageFile']; ?>"></img>
            <p><?php echo $row['Description']; ?></p>
        </div>
        <div class="modal-footer">
            <button id="modal-close">Close</button>
        </div>
    </div>    
</div>
 
   
<?php
   }
    }
else{
    echo "no faculty found";
}
?>

</section>
</div>

<script src="modal.js"></script> 

</body>
</html>
    