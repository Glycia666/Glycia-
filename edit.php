<?php
include "connect_db.php";
$productID = $_GET['productID'];
$sql = "SELECT * FROM products WHERE productID = '$productID'";
$query = $conn->query ($sql);
if ($row = $query->fetch_array())
{
	$productCode = $row['productCode'];
	$ProductName = $row['ProductName'];

}
?>

<html>
<body>
<h1>Update Database</h1>
<form method="post"
action="update_rec.php?productID=<?php echo $productID ?>">
<br>
<table>
<tr>
<td>productCode</td><td>:</td>
<td><input type="text" name="productCode"
value="<?php echo $productCode?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>ProductName</td>
<td>:</td>
<td><input type="text" name="ProductName"
value="<?php echo $ProductName?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" name="submit" value="Update"/></td>
</tr>
</table>
<form>
</body>
</html>