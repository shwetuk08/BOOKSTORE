<!DOCTYPE html>
<html lang="en">
  <?php
require_once('header.php');
    ?>

<head>
  <link rel="Stylesheet" type="text/css" href="Addbook.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<title>Add Book</title>

<body>
<br>
<br>

<div class="container">
  <form action="add.php" method="post" autocomplete="off" enctype="multipart/form-data">

    <div class="row">
        <div class="col-25">        
          <label for="bookname">Type of Book :</label>

        </div>
        <div class="col-75">
          <select id="typebook" name="typebook" required>
            <option value="Novel">Novel</option>
            <option value="spiritual">Spiritual</option>
            <option value="horror">Horror</option>
            <option value="comedy">Comedy</option>

            <option value="suspense">Suspense</option>

          </select>
        </div>
      </div>

    <div class="row">
      <div class="col-25">
        <label for="bookname">Name of Book :</label>
        </div>
        <div class="col-75">
        <input type="text" id="bname" name="bookname" placeholder="Enter Book Name.." required>
        </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="bookname">Cover Image :</label>
        </div>
        <div class="col-75">
          <input type="file" id="imagefile" accept="image/png, image/jpg, image/jpeg" name="Bookimage" required/>

        </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Author Name :</label>
      </div>
      <div class="col-75">
       <input type="text" id="aname" name="authorname" placeholder="Enter Author name.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Browse File :</label>
      </div>
      <div class="col-75">
        <input type="file" id="myFile" name="pdf_file" accept=".pdf" title="Upload PDF" required/>

      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="subject">Description of Book :</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="data_desc" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>


<!-- get data through php -->

<?php
$conn=new mysqli("localhost","root","","addbook");
if($conn==TRUE)
{

}

else
{
echo("not connected");
}



if (isset($_POST['submit']))
{
$typeofbook=$_POST['typebook'];
$bookname=$_POST['bookname'];
$imagefile=$_FILES['Bookimage']['name'];
$authorname=$_POST['authorname'];
$pdffile=$_FILES['pdf_file']['name'];
$datadesc=$_POST['data_desc'];

if(!(strtoupper(substr($_FILES['Bookimage']['name'],-4))==".JPG"
|| strtoupper(substr($_FILES['Bookimage']['name'],-5))==".JPEG"
|| strtoupper(substr($_FILES['Bookimage']['name'],-4))==".GIF"
|| strtoupper(substr($_FILES['Bookimage']['name'],-4))==".PNG")) 
{ 
  echo "<script>alert('Invalid file type. only allow .jpg,.jpeg,.png,gif.');</script>";

}


  else if(file_exists("Saved/".$_FILES["Bookimage"]["name"]))
    {

   echo "<script>alert('Images already exist');</script>";
   
}

    else if(file_exists("PDF/".$_FILES["pdf_file"]["name"]))
{
  echo "<script>alert('File already exist'); </script>";
}
    else
    {
    $query="INSERT INTO `bookpost`(`TypeOfBook`, `BookName`, `ImageFile`, `AuthorName`, `PdfFile`, `Description`) VALUES ('$typeofbook','$bookname','$imagefile','$authorname','$pdffile','$datadesc')";
    $run=mysqli_query($conn,$query);
        if($run==TRUE)
        { 
        move_uploaded_file($_FILES["Bookimage"]["tmp_name"], "Saved/".$_FILES["Bookimage"]["name"]);
        move_uploaded_file($_FILES["pdf_file"]["tmp_name"], "PDF/".$_FILES["pdf_file"]["name"]);

        echo "<script> swal('Thank You! ', 'Your data has been uploaded', 'success'); </script>";
        }
        else
        {
        echo '<script>alert("Error in submitting data")</script>';
        }
    }

}
$conn->close();
?>

</body>
</html>
