<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 <div class ="wrapper">
	<center>
    <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
				
                </div>
            </div>
		<h2>DATABASE APPLICATION WITH PHP<br/><a href="index.php">Inventory System</a></h2>
		<link rel="stylesheet" href="mystyle.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php 
		include "connect_db.php";
		?>
 
		<table border="1">
			<tr>
				<th>No</th>
				<th>Product Code</th>
				<th>Item Name</th>
				<th>Quantity</th>
				<th>Price</th>
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
				<td><?php echo "<a href=\"delete.php?productID=" . $data['productID'] . "\"" . ">Delete</a>"; ?>
				<?php echo "/" . "<a href =\"edit.php?productID=" . $data['productID'] . "\"" . ">Edit</a>"; ?> </td>
			</tr>
			<?php 
			}
			?>
		</table>
 
		<br/>
 
		
		<button onclick="window.location.href = 'order.html';">Order</button>
		<button onclick="window.location.href=  'print.php';" target="_blank">Print</button>
		<button onclick="window.location.href=  'total.php';" target="_blank">Total Price</button>
		<button onclick="window.location.href=  'balance.php';" target="_blank">Balance</button>

	</center>
	
	     <div class="sidebar">
         <div class="profile">
          
            <ul>
   <li> <a href = "F.html"> Pilot</a></li>
   <li> <a href = "M.html"> Fibre Castel</a></li>
   <li> <a href = "C.html">Stabilo</a></li>
    </ul>
	<div></div>
	<div></div>
<h4><mark>LIKE US NOW !!<mark></h4>
<p>Be our <a href="http://www.facebook.com"> FACEBOOK </a> TOP FANS!</p>
        </div>
        
    </div>
	</div>
  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>