<?php
	require 'config.php';
	deleteData();
	function deleteData()
	{
		global $conn;
		$sql="delete 
			from item
			where item_name='sliit malabe'";
		$result=$conn->query($sql);
		
		if($conn->query($sql))
		{
			echo"Deleted Successfully";
		}
		else
		{
			echo"Error: ".$conn->error;
		}
		$conn->close();
	}
	
?>