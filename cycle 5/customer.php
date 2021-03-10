<html>
<head></head>
<title>customer information</title>
<body>
<h1 style="text-align:center"><u>CUSTOMER INFORMATION</u></h1>
<form method="post" action="customer.php">
<table align="center">

<tr>
<td>Name of the Customer</td>
<td>:</td>
<td><input type="text" name="c_name"></td></tr>
<tr>
<td>Item Purchased</td>
<td>:</td>
<td><input type="text" name="item_purchased"></td></tr>
<tr>
<td>Mobile Number</td>
<td>:</td>
<td><input type="text" name="mobile_number"></td></tr>
<tr>
<td colspan="2" style="text-align:center"><input type="submit" name="insert" value="insert"></td>

<td colspan="2" style="text-align:center"><input type="submit" name="view" value="view"</td></tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","20mca054","2787","20mca054");
if(isset($_POST["insert"]))
{
if($con)
{
$c_no=$_POST["c_no"];
$c_name=$_POST["c_name"];
$item_purchased=$_POST["item_purchased"];
$mobile_number=$_POST["mobile_number"];

$qry="insert into customer(c_name,item_purchased,mobile_number) values('$c_name','$item_purchased','$mobile_number')";
if(mysqli_query($con,$qry))
{
echo "inserted";
}
}
}
if(isset($_POST["view"]))
{
$qry="select*from customer";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>CUSTOMER DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>Customer Number</th>
<th>Customer Name</th>
<th>Item Purchased</th>
<th>Mobile Number</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res[c_no];?></td>
<td><?php echo $res[c_name];?></td>
<td><?php echo $res[item_purchased];?></td>
<td><?php echo $res[mobile_number];?></td>
</tr>
<?php
}
}
?>
</body>
</html>