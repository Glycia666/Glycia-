<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<center>
 
		<h2>DATABASE APPLICATION WITH PHP<br/><a href="index.php">Inventory System</a></h2>
 
 
		<?php 
		include "connect_db.php";
		?>
 
		<table border="1">
			<tr>
				<th>No</th>
				<th>Product Code</th>
				<th>Item Name</th>
				<th>Starting Inventory</th>
				<th>Price</th>
				<th>Total Inventory Ordered</th>
				<th>Inventory Balance</th>
				
				
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
				<td><?php echo $data['TotalInvOrdered']; ?></td>
				<td><?php echo $data['InvBalance']; ?></td>
				
			</tr>
			<?php 
			}
			?>
		</table>
 
		<br/>
 
		<button onclick="window.location.href=  'index.php';" target="_blank">Home</button>
		<button onclick="window.location.href = 'order.html';">Order</button>
		<button onclick="window.location.href=  'print.php';" target="_blank">Print</button>
		
 
	</center>
</body>
</html>