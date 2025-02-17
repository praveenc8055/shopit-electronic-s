<html>
<?php include "php/head.php"?>
    <body>
        <?php include "php/nav.php"?>
        <?php include "php/nav-slide.php"?>
        <div class="body1" align="center" style="margin-top:30px text-align:left;">        
                    
            <div class="container5">
            
  
  <form class="" action="php/config.php" method="POST">
      <h2 align="center">Registration now</h2><br>
    <label for="name1">Frist Name:</label><br><br>

    <input class="input" type="text" id="name1" name="name1"><br><br>
    <label for="name2">Last Name</label>
    <input class="input" type="text" id="name2 " name="name2"><br><br>

    <label for="userid">Userid</label>
    <input class="input" type="text" id="userid" name="userid"><br><br>

    <label for="email">Email:</label>
    <input class="input" type="text" id="email" name="email"><br><br>


     
      <label for="password">Password:</label>
    <input class="input" type="password" id="password" name="password"><br><br>
  
    <label for="cpassword">Confirm Password:</label>
    <input class="input" type="password" id="cpassword" name="cpassword"><br><br>
  
    <label for="number">Phn number</label>
    <input class="input" type="text" id="number" name="number"><br><br>
  
    <p>
    <input type="checkbox"><span class="checkmark"></span>    Agree to terms and conditions  
      
      
</p>
    
    <input align="center" class="reg-button" type="submit" value="register" name="register">
    <br>
    <br> 
    <p>if you have an account already do  <a href="login.php">login</a></p>
  </form>
            </div>    
</div>
        <?php include "php/footer.php"?>
        
    <body>
</html>
