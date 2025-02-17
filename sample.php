<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Overlay Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
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
</head>
<body>

<div class='container24'>
    <div class='product-left'>
        <div class='container41'>
            <a href="#" id="1001" onclick="showOverlay('1001')">
                <img src='pic/m.1.png' alt="Samsung Galaxy S24 Ultra">
                <div class='overlay21'>quick view</div>
            </a>
        </div>
    </div>
    <div class='product-right'>
        <div class='title'>
            <h2>Samsung Galaxy S24 Ultra</h2>
        </div>
        <div class='price'>
            <p>Price: ₹98,900.00</p>
        </div>
    </div>
</div>

<div class="overlay" id="overlay-1001">
    <div class="container">
        <div class="product-left">
            <img src='pic/m.1.png' alt="Samsung Galaxy S24 Ultra" style="width: 100%; height: auto;">
        </div>
        <div class="product-right">
            <h2>Samsung Galaxy S24 Ultra</h2>
            <p>Price: ₹98,900.00</p>
            <button onclick="closeOverlay('1001')">Close</button>
        </div>
    </div>
</div>

<script>
    function showOverlay(id) {
        document.getElementById('overlay-' + id).style.display = 'flex';
    }

    function closeOverlay(id) {
        document.getElementById('overlay-' + id).style.display = 'none';
    }
</script>

</body>
</html>
