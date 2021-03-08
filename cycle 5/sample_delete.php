<?php
$con=mysqli_connect("localhost","20mca054","2787","20mca054");
$id=$_GET["id"];
if($con)
{
$qry1="delete from student where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
}
}
?>