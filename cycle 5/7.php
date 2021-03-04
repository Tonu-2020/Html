sample
 $query = "select * from Student";
$sldt = mysql_query($query,$con);
if(!$sldt)
{
 die("data not selected".mysql_error());
}
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
</tr>";
while($row = mysql_fetch_array($sldt))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "</tr>";
}

echo "</table>";