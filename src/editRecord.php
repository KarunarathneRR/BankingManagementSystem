<?php
	require'config.php';
	updateData();
	
	function updateData()
	{
		global $conn;
		$sql="update item 
			set item_id='1012',item_name='SLIIT updated' 
			where item_id='1'";
		
		if($conn->query($sql))
		{
			echo "Edited successfully";
		}
		else
		{
			echo "Error: ".$conn->error;
		}
	}
?>
