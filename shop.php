<html>
<?php include "php/head.php"?>
    <body>
        <?php include "php/nav.php"?>
        <?php include "php/nav-slide.php"?>
        <div class="slide active">
            <img src="bgi/bg11.jpg" alt="Slide 1" width="100%" height="700px">
            
            
                <div class="overlay1" >

                <div class="n1">
                        <h1 style="color:#ffffff; font-size: 70px; ">Welcome to Our Store</h1>
                        <a class="button2" href="" >CONTINUE SHOPPING</a>    
                    </div>
                    </div>
            
        </div>
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
$data= "SELECT itemid, name, price, info, pic FROM product ";


$result = $conn->query($data);

// Step 3: Process the results and display them
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='container24'>";
        echo "<div class='product-left'>";
        echo "<div class='container41' >";
        echo '<a href="#">';
        echo "<img src='pic/". $row["pic"] . "'>";
        echo "<div class='overlay21' id=" . $row["itemid"] . " >quick view</div>";
        echo '</a>';
        echo '</div>';
        echo "</div>";
        echo "<div class='product-right'>";
        echo "<div class='title'>";
        echo "<h2>" . $row["name"] . "</h2>";
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
    min-width: 450px;
    max-width : 500px
}
.container24 img{
    height: 300px;
    min-width: 300px
    
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
            display: block;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .container41 {
    position: relative;
    width: 400px; /* Adjust as needed */
    height: 500px; /* Adjust as needed */
}

.container41 img {
    width: 400px;
    height: 400px;
}

.overlay21 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    color: white;
    padding: 10px;
    border-radius: 5px;
    display: none; /* Initially hidden */
    font-size: 30px;
    
}

.container41:hover .overlay21 {
    display: block; /* Show overlay on hover */
}

</style>

