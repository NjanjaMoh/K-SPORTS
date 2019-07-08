<?php
session_start();
include("adminfunctions.php");

if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
   echo"<script>window.open('login.php','_self')</script>";
}

?>
<?php

$con=mysqli_connect("localhost","root","","classmates")or
       die("connection not established");

   ?>
<!doctype html>
<html lang="en">
<head>
<title>News Feed</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/carol.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/footer.css"/>
    
    <style>
        body{
            overflow-x: hidden;
        }
        input[type="file"]{
            display: none;
            background-image: url(images/add%20img.png);
        }

        #posts{
            border: 5px solid #e6e6e6;
            padding: 40px 50px;
        }
        #posts-img{
            padding-top: 5px;
            padding-right: 10px;
            min-width: 102%;
            max-width: 50%;
        }
        #single_posts{
            border: 5px solid #e6e6e6;
            padding: 40px 50px;
        }
    </style>
<?php
      //delete posts
      if(isset($_GET['post_id'])){
      	$deleteid =$_GET['post_id'];
        $query = "DELETE FROM posts WHERE post_id = $deleteid";
        $result = mysqli_query($con, $query);
        header("Location: adminnewsfeed.php");

      }
?>
    </head>
    <body>
        <!--header-->
        <header id="header">
				<div class="inner">
					<a href="home.html" class="logo">Classmates</a>
					<nav id="nav">
                        <a href="adminhome.php">home</a>
                         <a href="adminnewsfeed.php">Posts</a>
                         <a href="adminfriends.php">Users</a>
                        <a href="adminschool.php">Schools</a>
                         <a href="usersreport.php">Reports</a>
                            <a href='adminlogout.php'>Logout</a>
					</nav>
				</div>
			</header>
            <div class="content">   
    <?php echo get_posts(); ?>
    <!-- End Middle Column -->
    </div>
  
 
        
        <!--scripts-->
        <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>'
        <section>
        </section>
    </body>
</html>
