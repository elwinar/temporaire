<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> TeamDash - Login  </title>
        <link rel="icon" type="image/png" href="/images/logo.png">
        
        <!-- import stylesheets -->                
        <link rel="stylesheet" href="/scss/login_register">

        <!-- import fonts --> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 

        <!-- import icons -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 

        <!-- import scripts -->
        <script type="text/javascript" src="/js/login_focus.js"  defer></script>      
        <script type="text/javascript" src="/js/login_error.js"  defer></script> 
    </head>    
    <body>
        <!-- background components -->
        <img id="wave" src="/images/wave.png">
        <div class="container">             
            <div class="login-img">
                <img id="img" class="float-left" src="/images/login_img.svg">
            </div>
            <!-- login form -->
            <div class="login">
                <form action="viewLogin.php">
                    <!-- form header -->                   
                    <img src="/images/male_avatar.svg">
                    <!-- mail input -->
                    <div class="input-section first">
                        <div class="icon">
                            <i class="fa fa-user" ></i> 
                        </div>
                        <div>
                            <h5> Email </h5>
                            <input class="input" type="email" required>
                        </div>
                    </div>
                    <!-- password input --> 
                    <div class="input-section second">
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div>
                            <h5> Password </h5>
                            <input class="input" type="password" required>
                        </div>       
                    </div>
                    <!-- form footer -->
                    <a href="#"> Forgot Password ? </a>
                    <input type="submit" class="btn" value="Login"> 
                 </form>
            </div>
        </div>      
    </body>
</html>
