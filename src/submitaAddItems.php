<?php
include_once 'config.php';

?>

<?php 
	$id = $_POST["itemid"];
	$name = $_POST["itemname"];
	$des = $_POST["description"];
	$price = $_POST["price"];
	$qty = $_POST["quantity"];
	
	//attempt insrt query exc
	
	$sql="insert into item(item_id,item_name,item_description,price,quantity) values ('$id','$name','$des','$price','$qty')";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Records added successfully!!!!')</script>";
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($conn);

?>