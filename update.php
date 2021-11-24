<?php
include "connect_db.php";

$update1 = $_POST['noOfRequest'];
$update2 = $_POST['ProductName'];

$sql = "UPDATE products SET quantity = quantity + '$update1' WHERE ProductName= '$update2' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql2 = "UPDATE products SET InvBalance = quantity - TotalInvOrdered ";

if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
	

} else {
    echo "Error updating record: " . $conn->error;
}


//$sql = "INSERT INTO Entries (myoption1) VALUES (".$_POST['myselectbox'].")";

$conn->close();

//Set Refresh header using PHP.
header( "refresh:1;url=balance.php" );

?>