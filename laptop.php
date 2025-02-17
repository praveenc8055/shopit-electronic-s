<html>
<?php include "php/head.php"?>
    <body>
        <?php include "php/nav.php"?>
        <?php include "php/nav-slide.php"?>
            <div class="body1" style="margin-top:30px text-align:left; display: flex; flex-wrap; wrap;" >        
            <?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="products";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
 }
else
{
    echo '<script>alert("connection failed")</script>';
}
$data= "SELECT itemid, name, price, info, pic FROM product WHERE category = 'laptop'  ";


$result = $conn->query($data);

// Step 3: Process the results and display them
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='container24'>";
        echo "<div class='product-left'>";
        echo "<img src='pic/". $row["pic"] . "'>";
        echo "</div>";
        echo "<div class='product-right'>";
        echo "<div class='title'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "</div>";
        echo "<div class='description'>";
        echo "<p>" . $row["info"] . "</p>";
        echo "</div>";
        echo "<div class='price'>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "</div>";
       
        echo "</div>";
        echo "</div>";
        
    }

} 
else {
    echo "0 results";
    }
    
$conn->close();
?>



            
</div>

<?php include "php/footer.php"?>
        
    <body>
</html>

<style>
.container24{
    
    padding :30px;
    min-width: 650px;
    max-width : 700px
}
.container24 img{
    height: 300px;
    width: 300px;
}
.product-right{
    margin-left:30px;
}
.body1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 10px;
        }
        .container24 {   
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
</style>

