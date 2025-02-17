<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="products";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo '<script>alert("connection ok")</script>';
}
else
{
    echo '<script>alert("connection failed")</script>';
}
$data= "SELECT itemid, name, price, info, pic FROM product WHERE category = 'mobile' ";


$result = $conn->query($data);

// Step 3: Process the results and display them
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<div class='product-left'>";
        echo "<img src='pic/". $row["pic"] . "'>";
        echo "</div>";
        echo "<div class='product-right'>";
        echo "<div class='title'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "</div>";
        echo "<div class='price'>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "</div>";
        echo "<div class='description'>";
        echo "<p>Description: " . $row["info"] . "</p>";
        echo "</div>";
        echo "</div>";
        
    }
} 
else {
    echo "0 results";
    }
    
$conn->close();
?>

