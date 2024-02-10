<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection" >
            <h1>Online Voting System</h1>  
            </div>


            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="text" name="username" placeholder="Enter your username" required><br><br>
                    <input type="tel" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" placeholder="hello">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    Don't have an account <a href="routes/register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>