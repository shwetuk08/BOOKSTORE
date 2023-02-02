<html>
    <head></head>
<title>display</title>
<body>

<table border="2" style="width:40%; float:left" >
<tr>

<th>Image</th>
<th>Book Name</th>
<th>Author name</th>
<th>pdf file</th>
</tr>
<?php
$conn=new mysqli("localhost","root","","AddBook");
error_reporting(0);
if($conn==TRUE)
{

}

else
{
echo("not connected");
}


$query= "SELECT * FROM `bookpost`";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data)){
        echo "
        <tr>
<td>".$result['ImageFile']."</td>
<td>".$result['BookName']."</td>
<td>".$result['AuthorName']."</td>
<td>".$result['PdfFile']."</td>
        </tr>";
    }
}

else{
    echo "No records found";
}
?>
</table>
</body>
</html>