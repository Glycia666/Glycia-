<?php
include "connect_db.php";
$productID = $_GET['productID'];
$sql = "DELETE FROM products WHERE productID = $productID";
$query = $conn->query($sql)or
die ("Problem in deleting the item data");
if($query)
{
?>
<script language="JavaScript">document.location="index.php"</script>
<?php
}
?>