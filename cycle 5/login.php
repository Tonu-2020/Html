<html>
<head>
<title>
login</title>
</head>
<body>
<?php
if ($_POST["username"] == "time" && $_POST["password"] == "123") {

session_start();
$_SESSION["Login"]="yes";
echo "<h1> you r logged correctly in</h1>";
echo "<p><a href='document.php'>Link to protected file</a><p/>";
}
else {

 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You are NOT logged correctly in </h1>";
 echo "<p><a href='document.php'>Link to protected file</a></p>";
}
?>
</body>
</html>