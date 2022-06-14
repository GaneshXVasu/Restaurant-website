<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
    
</head>

<body>
    
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="./login-img/fb.png">
                <img src="./login-img/tw.png">
                <img src="./login-img/gp.png">
            </div>

            <form id="login" action="login.php"  method="post" class="input-group">
                <input name="username" type="text" class="input-field" placeholder="Enter Username" autocomplete="off" required>
                <input name="password" type="password" class="input-field" placeholder="Enter Password" autocomplete="off" required>
                <input type="checkbox" class="check-box" ><span>Remember password</span>
           <button type="submit" name="signin" class="submit-btn">Log In</button>
            </form>



            <form action="register.php" method="post" id="register" class="input-group">
                <input name="name" type="text" class="input-field" placeholder="Username" required>
                <input name="email" type="email" class="input-field" placeholder="Email Id" required>
                <input name="password" type="password" class="input-field" placeholder="Enter password" required>
                <input name="cpassword" type="password" class="input-field" placeholder="Re-Enter password" required>
                <input type="checkbox" class="check-box" required><span>I agree to terms and condition</span>
           <button type="submit" name="signup" class="submit-btn">Register</button>
            </form>

        </div>
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");

        function register() {
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        

       function login() {
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>

</body>

</html>