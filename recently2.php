
<!DOCTYPE html>

<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
   require_once('header.php');
   ?>

    <head>
    <link rel="stylesheet" type="text/css" href="Recently_addded.css">  


    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">          
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
<title>
Newly Added Book    </title>

   
  
<body>


<div class="container">
<h1>
<br>
New Added Books</h1>
        <section class="new_book">
            
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
    
    <div class="column">
    <img src="Saved/<?php echo $row['ImageFile']; ?>" class="hover-shadow preview" id="<?php echo $row['id']; ?>"></img>

                <p class="novel_title"> <?php echo $row['BookName']; ?> </p> 
                <p>Author Name:  <?php echo $row['AuthorName']; ?> </p>
                <a href="PDF/<?php echo $row['PdfFile']; ?>"><button>Download
                    <i class="fa fa-download"></i></button>
                </a>
                
            </div>

            
          
<!--modals start-->

<!--modal 1-->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <i class="close" data-dismiss="modal">&times;
        </i>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 
<?php
   }
    }
else{
    echo "no data found";
}
?>

</section>
</div>

<script>

    $(document).ready(function(){

        $('img').click(function(){
            id_book=$(this).attr('id')
           
           $.ajax({url: "modaldesc.php",
            method:'post',
            data:{book_id:id_book},
            success: function(result){
                $(".modal-body").html(result);
            }});

        $('#myModal').modal("show");
        })
    })
</script>


</body>
</html>
    