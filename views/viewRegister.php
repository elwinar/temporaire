<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> TeamDash - Register  </title>
        <link rel="icon" type="image/png" href="../src/images/logo.png">
        
        <!-- import stylesheets -->                
        <link rel="stylesheet" href="../src/stylesheets/login_style.css">

        <!-- import fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 

        <!-- import icons -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 

        <!-- import scripts -->
        <script type="text/javascript" src="../src/scripts/login_focus.js"  defer></script>      
        <script type="text/javascript" src="../src/scripts/login_error.js"  defer></script> 
    </head>    
    <body>
        <!-- background components -->
        <img id="wave" src="../src/images/wave.png">
        <div class="container">             
            <div class="login-img">
                <img id="img" class="float-left" src="../src/images/login_img.svg">
            </div>
            <!-- register form -->
            <div class="login">
                <form action="viewRegister.php">
                    <!-- form header -->                   
                   <img src="../src/images/male_avatar.svg">
                    <!-- mail input -->
                    <div class="input-section first">
                        <div class="icon">
                            <i class="fa fa-user" ></i> 
                        </div>
                        <div>
                            <h5> Email </h5>
                            <input class="input" type="email" autofocus required>
                        </div>
                    </div>
                    <!-- first name input -->
                    <div class="input-section second">
                        <div class="icon">
                            <i class="fa fa-user" ></i> 
                        </div>
                        <div>
                            <h5> First Name </h5>
                            <input class="input" type="fname" autofocus required>
                        </div>
                    </div>
                    <!-- last name input -->
                    <div class="input-section third">
                        <div class="icon">
                            <i class="fa fa-user" ></i> 
                        </div>
                        <div>
                            <h5> Last Name </h5>
                            <input class="input" type="lname" autofocus required>
                        </div>
                    </div>
                    <!-- username input -->
                    <div class="input-section fourth">
                        <div class="icon">
                            <i class="fa fa-user" ></i> 
                        </div>
                        <div>
                            <h5> Username </h5>
                            <input class="input" type="uname" autofocus required>
                        </div>
                    </div>
                    <!-- password input --> 
                    <div class="input-section fifth">
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div>
                            <h5> Password </h5>
                            <input class="input" type="password" required>
                        </div>       
                    </div>
                    <!-- confirm password input --> 
                    <div class="input-section sixth">
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div>
                            <h5> Confirm Password </h5>
                            <input class="input" type="cpassword" required>
                        </div>       
                    </div>
                    <!-- form footer -->
                    <input type="submit" class="btn" value="Register"> 
                 </form>
            </div>
        </div>      
    </body>
</html>