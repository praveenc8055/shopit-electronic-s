<html>
<?php include "php/head.php"?>
    <body>
        <?php include "php/nav.php"?>
        
        
        <?php include "php/nav-slide.php"?>
            <div class="body1" align="center" style="margin-top:30px text-align:left;" >        
            <div class="container5" >

        <br>
        <br>    
    <form action="php/loginco.php" method="POST">
    <h1 align="center">Login</h1>

      <label for="email" required >Email:</label>
      <input class="input" type="text" id="email" name="email" required><br><br>
      
      <label for="password" required>Password:</label>
      <input class="input" type="password" id="password" name="password" required>
      
      <br><br><input class="reg-button" type="submit" value="LOGIN" name="login"><br>
<br>
     
 <label>
      to create an account click here
      <a  href="reg.php" class="log-button" > register </a><br>
      if you forgot your password press    <a href="#">forgot password</a>
      
   </label> 
   </form>
            </div>    
            
</div>
        <?php include "php/footer.php"?>
        
    <body>
</html>

