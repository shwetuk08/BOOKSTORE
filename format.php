<html>
<head>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

</head>
<title>format</title>
<body>


<div class="container py-5">
    <div class="row mt-4">

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
        <div class="col-md-3 mt-3">
            <div class="card">
            <img src="Saved/<?php echo $row['ImageFile']; ?>" width="200px" height="200px" alt="faculty-images">

                <div class="card-body">
                    <h4 class="card-title"> <?php echo $row['BookName']; ?> </h4>
                    <h3 class="card-title"> <?php echo $row['AuthorName']; ?> </h4>
                    <p class="card-text">
                        Dummy data</p>
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
         </div>
</div>
</body>
</html>