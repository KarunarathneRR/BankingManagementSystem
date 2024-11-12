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
    <li class="menu"><a href="index.html">Home</a></li>
    <li class="menu"><a href="news.html">News</a></li>
    <li class="menu"><a href="register.html">Contact</a></li>
    <li class="menu"><a href="#">About Us</a></li>
</ul>

<center>
<?php
    
    define("companyName","Shopping Cart");
    echo "<h2>About ".companyName."</h2><br>";

    echo "<h4>This page ia mainly about the ".companyName." website</h4><br>";

    $sold=75;
    $total=100;

    echo "The Shopping Cart<br>";
    echo "Number of Sold Items: ".$sold."<br>";
    echo "Number of Total Items: ".$total."<br>";

    
    echo "<h2><table border='1' width='75%'><tr><td>Number of Sold Items</td><td>".$sold."</td></tr><tr><td>Number of Total Items</td><td>".$total."</td></tr></table></h2>";

    function findPercentage(){
        
        $GLOBALS['percentage']=($GLOBALS['sold']/$GLOBALS['total'])*100;;
        
    }

    findPercentage();

    echo "<h3>Percentage of Sold Items: ".$percentage."%</h3><br>";


    $today="Today is ".date("l");
    echo "<h2>".$today."</h2><br>";

    //getting the date format
    $c = date("Y-m-d");

    //Assign the currect date
    $currentDay = date_create($c);

    //Assign the ship date
    $shipDay = date_create("2019-09-21");

    //Get the difference between two dates
    $diff=date_diff($currentDay,$shipDay);

    //Printing the output
    echo "<h4>Number of days remaining for shipping - ".$diff->format("%R%a days")."</h4>";

    //Checking the status
    if($diff->format("%R%a") > 0){
        $status = "To be Shipped";
    }
    else{
        $status = "Shipped";
    }

    //Print the output
    echo "<h4><br>For ".$c." 24 items has ".$status."</h4>";

    function loopUsingFor(){
        
    $items = array("Iphone Xs"=>"27", "Iphone X"=>"30", "Iphone XS Max"=>"12","Iphone XR"=>"29");
        
    $keys = array_keys($items);
        
    echo "<h2>Output Using For Loop</br></h2>";
        
    echo  "<h2><table border = '2' width='75%'><tr><th><center>Item Name</center></th><th><center>Number of Items<center></th></tr>";
        
    for($x = 0;$x < count($keys);$x++){
        echo "<tr><td><center>".$keys[$x] ."</center></td><td><center>".$items[$keys[$x]]."</center></td></tr>";
    }
        
    echo "</table>";
        
    }

    loopUsingFor();

?>
</center>
<hr id="test"/>
<center>
<h3 style="font-weight: bold; font-style: italic;">Created By :Mihiri Samaraweera</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>

