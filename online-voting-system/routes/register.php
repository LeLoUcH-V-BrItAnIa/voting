<html>
    <head>
        <title>Online polling system - Registratrion</title>
        <link rel="stylesheet" href="../css/style1.css">
       <!-- <style>
            body,html{
                margin: 0;
                height: 100%;
                
                
            }
            body{
                background:url(https://t3.ftcdn.net/jpg/02/26/38/14/360_F_226381495_OoBDY4bZAXeXGuvlk71PiB7D1dT31YbG.jpg);
                background-size:cover;
                background-repeat:no-repeat;
                background-position:center;
                width: 100%;

            }
            #headerSection{
                text-align: center;
                background-color: rgb(28, 35, 44);
                padding-top:40px;
                padding: 10px;
                width: 100%;
                font-family:sans-serif;
                font-size: 45px;
                text-shadow:2px 2px white;
                display:flex;

            }
            input{
                width: 60%;
                padding:15px;
                margin:15px;
            }
            .child1 h2{
                text-align: left;
                padding-left: 10px;
                text-shadow: 1px 1px white;
                font-size: 40px;

            }
            .parent{
                background-color: rgb(68, 33, 95);
               
                padding: 50px;
                height: 70%;
                width: 100%;
            }
            .child1{
              
                background-color:white ;
                
            }
            form{
                height: 10px;
                background-color: aqua;
            }
            #upload{
                background:aqua;
            }
        </style> -->
    </head>
    <body>

            <div id="headerSection">
            <h1>Online Polling System</h1>  
            </div>
             
            <div class="parent">
                
                <div class="child1">
                    <h2>Register Here</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="username" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input  type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                       <p> UPLOAD IMAGE:</p> <input type="file" id="profile" name="image" required>
                     
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                            
                        </select>                  
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                  <p>Already user?<a href="../">Login here</a></p>
                </form>
                </div>
            </div>
            
            
    </body>
</html>