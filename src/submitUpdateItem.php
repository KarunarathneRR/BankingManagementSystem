<?php
	require 'config.php';
	readData();
	function readData()
	{
		global $conn;
		$sql="select item_id, item_name 
			from item";
		$result=$conn->query($sql);
		
		if($result->num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{
				echo"item_id: ".$row["item_id"]." - item_name: ".$row["item_name"]."<br>";
			}
		}
		else
		{
			echo"No Results";
		}
		$conn->close();
	}
	
?>