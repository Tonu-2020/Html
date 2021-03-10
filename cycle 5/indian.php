<html>
<head></head>
<body>
<?php
$my_array = array( "Virat Kohli (Captain)", "Rohit Sharma (vice-captain)", "KL Rahul", "Shikhar Dhawan", "Shreyas Iyer", "Suryakumar Yadav"," Hardik Pandya"," Rishabh Pant (wicket-keeper)"," Ishan Kishan (wicket-keeper)"," Yuzvendra Chahal", "Varun Chakravarthy"," Axar Patel"," Washington Sundar", "Rahul Tewatia", "T Natarajan", "Bhuvneshwar Kumar"," Deepak Chahar", "Navdeep Saini", "Shardul Thakur");

?>
<h1 style="text-align:center"><u>Indian Cricket Players</u></h1>
<table border=”1” align="center">
<tr>
<th>Si.no</th>
<th> Players</th>

</tr>
<?php
$arraysize=sizeof($my_array);
for($i=0;$i<$arraysize;$i++)
{
?>
<tr>
<td><?php echo $i+1; ?></td>
<td><?php echo $my_array[$i];?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>