<html>
<head></head>
<body>
<form method="post" action="sample.php" >
<input type="text" name="name">
<input type="submit" value="submit">

<?php
$con=mysqli_connect("localhost","20mca054","2787","20mca054");
if($con)
{

echo $name=$_POST["name"];

$qry="INSERT INTO student(name) VALUES ('$name')";

if(mysqli_query($con, $qry))
{
echo "";
}
}
?>
</body>
</html>

</html>