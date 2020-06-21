<?php
session_start();
include("db_con.php");
$query="SELECT * from inventory";
$res=$con->query($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>items for user</title>
</head>
<body>
	<table align="center" border="1px" style="width: 600px; line-height: 40px;" >
		<tr>
			<th colspan="6"> <h2> items for user </h2></th>
		</tr>
		<tr>
			<th>uid</th>
			<th>product id</th>
			<th>product name</th>
			<th>description</th>
			<th>cost</th>
			<th>in stock</th>
		</tr>
	<?php
		while($rows=$res->fetch_assoc())
		{
	?>
		<tr>
			<td><?php echo $rows['uid']; ?></td>
			<td><?php echo $rows['pid']; ?></td>
			<td><?php echo $rows['pname']; ?></td>
			<td><?php echo $rows['des']; ?></td>
			<td><?php echo $rows['cost']; ?></td>
			<td><?php echo $rows['instock']; ?></td>
		</tr>
	<?php
		}
	?>
	</table>

</body>
</html>
