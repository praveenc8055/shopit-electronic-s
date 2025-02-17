
<html>
<?php include "php/head.php"?>
<body class="font">
<?php include "php/nav.php"?>
<?php include "php/header.php"?>

<main>
<?php include "php/sidebar.php"?>
  <div class="right" >
    <h2>additem</h2>
  
    <form class="" action="php/add.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>

      <label for="itemid">itemid</label>
      <input type="text" id="itemid" name="itemid"><br><br>
      
      <label for="pic">pic</label>
      <input type="text" id="pic" name="pic"><br><br>
      
      <label for="info">details</label>
      <input type="text" id="info" name="info"><br><br>

      <label for="price">price</label>
      <input type="text" id="price" name="price"><br><br>
      

      
      <input type="submit" value="add item" name="additem">
      <br>
      <br> 
    </form>
  </div>
</main>
<?php include "php/footer.php"?>
</body>
</html>
