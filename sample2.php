<html>
<?php include "php/head.php"?>
    <body>
        <?php include "php/nav.php"?>
        <?php include "php/nav-slide.php"?>
        <div class="slide active">
            <img src="bgi/bg13.png" alt="Slide 1" width="100%" height="700px">
            
            
                <div class="overlay1" >

                <div class="n1">
                        <h1 style="color:#ffffff; font-size: 40px; ">Welcome to Our Store</h1>
                        <a class="button3" href="#" >CONTINUE SHOPPING</a>    
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
        echo '<a href="#" id=' . $row["itemid"] . 'onclick="showOverlay(' . $row["itemid"] . ')">';
        echo "<img src='pic/". $row["pic"] . "'>";
        echo "<div class='overlay21'>quick view</div>";
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
        echo '<div class="overlay" id="overlay-' . $row["itemid"] . '">';
        echo "<div class='container'>";
        echo "<div class='product-left'>";
        echo "<img src='pic/". $row["pic"] . "'>";
        echo "</div>";
        echo "<div class='product-right'>";
        echo "<h2>" . $row["name"] . "</h2>";
        
        echo "<p>Price: $" . $row["info"] . "</p>";
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
.button3 {
    padding: 10px; 
    border: 5px;  
    background-color:rgba(0, 139, 238, 0.54);  
    color: white;  
    font-size : 20px;  
    cursor: pointer;
    border-radius: 10px; 
    text-decoration: none;

     
  
}

.button3:hover {
    background-color: #0057b357; 
}
</style>
<style>

        .overlay {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            justify-content: center;
            align-items: center;
            z-index: 1000; /* On top of other elements */
        }
        .container {
            width: 800px;
            height: 500px;
            background-color: white;
            display: flex;
        }
        .product-left {
            flex: 1; /* Takes up remaining space */
            position: relative;
        }
        .product-right {
            flex: 1; /* Takes up remaining space */
            padding: 20px;
        }
        .overlay21 {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 5px;
            border-radius: 5px;
        }
    </style>

<script>
    function showOverlay(id) {
        document.getElementById('overlay-' + id).style.display = 'flex';
    }

    function closeOverlay(id) {
        document.getElementById('overlay-' + id).style.display = 'none';
    }
</script>