<<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="style5.css"> 
    </head>
    <body>
        <div id="container_1">
  
            <h1 id="title">
            ONLINE VOTING SYSTEM
          </h1><!--title-->
        
            
          </div><!---container_1--->
        <div class="box">
            <h2>LOGIN</h2>
            <form action="actions\log.php" method="post">
              <div class="inputBox">
                <input type="text" name="username" required value="" >
                <label>Username</label>
              </div>
              <div class="inputBox">
                <input type="tel" name="mobile" id="Phone" pattern="[0-9]{10}"required value="">
                <label>Phone Number</label>
              </div>
              <div class="inputBox">
                <input type="password" name="password" required value="">
                <label>Password</label>
              </div>
              <div class="inputBox">
                <!-- <input type="password" name="password" required value="" 
                       onkeyup="this.setAttribute('value', this.value);"
                       pattern="{8,}"
                       title="least 8 or more characters">
                <label>Voter ID</label>-->
             
                
                <select name="group"> 
                  <!-- <option disabled="disabled" selected="selected">Group</option> -->
                  <option value="group">ca</option>
                  <option value="voter">Voter</option>
                  
                  
              </select>
              
                
              </div>
              <input type="submit" name="sign-in" value="LOGIN">
              <div class="register">
                <p>Don't have an account? <a href="reg.php">signup</a></p>
              </div>
            </form>
            
          </div>
          
    </body>
</html>
