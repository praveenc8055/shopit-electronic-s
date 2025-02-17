<html>
<?php include "php/head.php"?>
    <body>
        <?php include "php/nav.php"?>
        <?php include "php/nav-slide.php"?>
            <div class="body1" align="center" style="margin-top:30px text-align:left;" >        
            <div class="container5" >

        <br>
        <br>    
    <form action="php/contact.php" method="POST">
    <h1 align="center">CONTACT US</h1>
    <hr style="margin-top: -20px "><br>
    <label for="name" required >Name:</label>
      <input class="input" type="text" id="name" name="name" required><br><br>

      <label for="email" required >email:</label>
      <input class="input" type="text" id="email" name="email" required><br><br>
      
      <label for="message" required >message:</label>
      <textarea class="input" type="text-area" id="message" name="message" required>
           
</textarea>    <br><br>
 <input class="reg-button" type="submit" value="SUBMIT" name="contact"><br>
<br>
     
 <label>
      
      
     
   </label> 
   </form>
            </div>    
            
</div>

<?php include "php/footer.php"?>
        
    <body>
</html>