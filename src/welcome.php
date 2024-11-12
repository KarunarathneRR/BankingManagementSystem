
<!DOCTYPE html>

<?php

	session_start();
	
?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/formStyles.css">
    <script src="js/myScript.js"></script>
</head>
<body>
<img class="logo" src="images/cart.png" width="200" height="200" alt="Shopping Cart Image">
<center>
    <h1>Shopping Cart</h1>
    <h3 id="header">The Online Shopping Store</h3>
<hr id="test"/>
</center>
<ul class="menu">
    <li class="menu"><a href="index.html">Home</a></li>
    <li class="menu"><a href="news.html">News</a></li>
    <li class="menu"><a href="#">Contact</a></li>
    <li class="menu"><a href="https://courseweb.sliit.lk/">About Us</a></li>
</ul>
<br>
<center>
    <h2>Welcome</h2>
</center>
	<form action="logout.php" method="POST">
		<input type="submit" value="logout"/>
	</form>
<center><h1>
	<?php

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$username=$_POST["uname"];
			$pass=$_POST["pwd"];
		}
		if($username=="test"&&$pass=="1234"){
			$_SESSION['logged_user']=$username;
			echo "Username is : ".$_SESSION['logged_user'];
		}
		else{
			echo"<script>alert('Wrong Inputs')</script>";
		}
	
	?>
</h1></center>
<br>
<hr id="test"/>
<center>
<h3 style="font-weight: bold; font-style: italic;">Created By :Mihiri Samaraweera</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>
