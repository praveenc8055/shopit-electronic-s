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
$dbname="carts";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
}
else
{
    echo '<script>alert("connection failed")</script>';
}
$data= "SELECT itemid, name, price, info, pic FROM cart WHERE category = 'mobile'  ";


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
        
        echo "<div class='rprice'>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "</div>";
        echo "<div class='price'>";
        echo "<p>Shopit Price: $" . $row["price"] . "</p>";
        echo "</div>";

        echo "</div>";
        echo "<div class='button-box'>";

        echo "<h2><a href='#'>   cancel order</a></h2>";
        echo "</div>";
        echo "<div class='price-box'>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "<h2><a href='#'>   buy now</a></h2>";
        
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
    
}
.container24 img{
    height: 400px;
    width: 400px;
}
.product-left{
    margin-left:30px;
    max-width: 400px;
}
.product-right{
    margin-left:30px;
    max-width: 450px;
}
.body1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space;
            margin: 10px;
        }
        .container24 {   
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
.button-box{
    min-width: 250px;
    justify-content: center;
    display: block;
    margin-right: 50px;

}
.price-box a {
    padding: 10px; 
    border: 5px;  
    background-color:rgba(0, 139, 238, 0.68);  
    color: white;  
    font-size : 20px;  
    cursor: pointer;
    border-radius: 10px; 
    text-decoration: none;

     
  
}

.price-box a:hover {
    background-color: #0057b357; 
}

.button-box a {
    padding: 10px; 
    border: 5px;  
    background-color:rgba(219, 110, 216, 0.71);  
    color: white;  
    font-size : 20px;  
    cursor: pointer;
    border-radius: 10px; 
    text-decoration: none;

     
  
}

.button-box a:hover {
    background-color: #0057b357; 
}

</style>

