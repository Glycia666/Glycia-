<!DOCTYPE html>
<html>
<head>
	<title>Database Applicayion with PHP</title>
</head>
<body>
 
	<center>
 
		<h2>Report on Inventory</h2>
 
	</center>
 
	<?php 
	include "connect_db.php";
	?>
	<link rel="stylesheet" href="mystyle.css">
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th width="6%">Product Code</th>
			<th width="15%">Item Name</th>
			<center> <th width="5%">Quantity</th> </center>
			<th width="6%">Price</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($conn,"select * from products");
		while($data = mysqli_fetch_array($sql)){
		?>
		 
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td><?php echo $data['productCode']; ?></td>
			<td><?php echo $data['ProductName']; ?></td>
			<td align="center"> <?php echo $data['quantity']; ?></td>
			<td align="center"> <?php echo $data['price']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
    <?php include "button.html"; ?>
	<script>
		window.print();
	</script>
 
</body>
</html>