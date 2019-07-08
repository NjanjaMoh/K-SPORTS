<!DOCTYPE html>
<html lang="en" >

<head>
   <title>News Feed</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="carol.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
     <style>
        body{
            /*background-color: #ba8989;*/
/*            height: 1000px;*/
        }
        .form_div{
            margin-left: 30%;
            height: 50%;
            width: 500px;
            background-color: black;
            opacity: 0.9;
            box-shadow: 2px;
            margin-top: 70px;
        }
        h1{
            text-align: center;
            text-transform: lowercase;
        }
        .form{
            padding-left: 50px;
            padding-top: 20px;
        }
        input{
            width: 90%;
            height: 40px;
            margin-bottom: 20px;
            box-sizing: border-box;
            background-color: transparent;
        }
        input:focus {
    border: 3px solid #555;
        }
         ::placeholder{
             color: white;
         }
    
    </style>

   <body>
    <header id="header">
				<div class="inner">
					<a href="admin/adminhome.php" class="logo">K-SPORTS</a>
					<nav id="nav">
						<center><h1 style="color: #ba8989;">Admin</h1></center>
					</nav>
				</div>
			</header>

    <div class="form_div">
        <h1>Login</h1>
        <form method="POST" action="adminvalidate.php" name="form" class="form">
            
              <input type="text" placeholder="Username"  name="username" required/><br>
              <input type="password" placeholder="Password"  name="password" required/><br>
           
            <input type="submit" value="Login" >
        
            
    </form>
    </div>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


</body>

</html>
