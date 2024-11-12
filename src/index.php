<?php
include_once 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<img class="logo" src="images/cart.png" width="200" height="200" alt="Shopping Cart Image">
<center>
    <h1>Shopping Cart</h1>
    <h3 id="header">The Online Shopping Store</h3>
<hr id="test"/>
</center>
<ul class="menu">
    <li class="menu"><a href="#">Home</a></li>
    <li class="menu"><a href="news.html">News</a></li>
    <li class="menu"><a href="register.html">Contact</a></li>
    <li class="menu"><a href="About.php">About Us</a></li>
</ul>

<br>
<button> <a href="addItems.html">Add New Item</a> </button>
<br>
<center>
    
<div class="productData tbl" style="border-style: groove; border-color: DarkBlue">
    <table border="1" width="100%">
    <tr>
        <th class="col1">Item Name</th>
        <th style="text-align:left">Description</th>
    </tr>
   <?php
   $sql ="select * from items";
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) 
					{
						
						while($row = $result->fetch_assoc()) 
						{
							echo "<tr>";
							echo "<td>".$row["item_name"]."</td>";
							echo "<td>
									<ul type='square'>
										<li>Description - ".$row['item_description']."</li>
										<li>Price - ".$row['price']."</li>
									</ul>
								  </td>";
							
							echo "</tr>";
						}
					}
					else 
					{
						echo "No results";
					}
					$conn->close();
   ?>
    </table>
	<form method="post" action="editRecord.php">
		<input type="submit" value="Edit">
	</form><br><br>
	
	<form method="post" action="delete.php">
		<input type="submit" value="Delete">
	</form><br><br>
</div>
</center>
<hr id="test"/>
<center>
<h3 style="font-weight: bold; font-style: italic;">Created By :Mihiri Samaraweera</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>
