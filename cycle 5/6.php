<html>
<head>
<title>php counter</title>
</head>
<body bgcolor="green">
 <?php
session_start();
if(isset($_SESSION['counter']))
{
 $_SESSION['counter'] += 1;
}
else
{
 $_SESSION['counter'] = 1;
}
echo "You have visited this page</h1> ".$_SESSION['counter']." time in this session";
 ?>
</body>
</html>