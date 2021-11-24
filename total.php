<?php
include "connect_db.php";
//$productID = $_GET['productID'];
$sql = "UPDATE products SET TotalPrice = price * quantity;";
$query = $conn->query($sql)or
die ("Problem in deleting the item data");
if($query)
{
	
?>
<!--<script language="JavaScript">document.location="index_total.php"</script>-->
	<center>
		<h2>DATABASE APPLICATION WITH PHP<br/><a href="index.php">Inventory System</a></h2>
		<link rel="stylesheet" href="mystyle.css">
		<table border="1">
			<tr>
				<th>No</th>
				<th>Product Code</th>
				<th>Item Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total Price</th>
				<th>Action</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($conn,"select * from products");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['productCode']; ?></td>
				<td><?php echo $data['ProductName']; ?></td>
				<td><?php echo $data['quantity']; ?></td>
				<td><?php echo $data['price']; ?></td>
				<td><?php echo $data['TotalPrice']; ?></td>
				<td><?php echo "<a href=\"delete.php?productID=" . $data['productID'] . "\"" . ">Delete</a>"; ?>
				<?php echo "/" . "<a href =\"edit.php?productID=" . $data['productID'] . "\"" . ">Edit</a>"; ?> </td>
			</tr>
			<?php 
			
			}
			?>
		</table>
	</center>
	

<?php
include "button.html";
}
?>