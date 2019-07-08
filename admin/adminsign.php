<html>
    <head>
        <title>K-SPORTS</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <script type="text/javascript" href="js/text.js"></script>
        <link rel="shortcut icon" href="css/Images/_ico-2.png" type="image/x-icon">
        </head>
        <body>
            <div class="loginbox">
                <img src="images/avatar.png" class="avatar">
                <h1>Login</h1>
                <form method="POST" action="adminverify.php" >
                    <p>Admin name</p>
                    <input type="text" name="adminname" placeholder="Enter admin name" required pattern="[a-z]{1,15}"title="Admin name should only contain lowercase letters. ">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter password" 
                           required pattern="[a-z]{1,15}" name="pwd1" 
                           onchange="form.pwd2.pattern = RegExp.escape(this.value);" 
                           title="Password should contain small letter example john with character between 1 and 2"
                           required>
                    <input type="submit" name=""  value="Login">
                   
                    
                </form>
            </div>
        </body>
</html>