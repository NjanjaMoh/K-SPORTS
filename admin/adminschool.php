<?php
session_start();
include("adminfunctions.php");
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    echo"<script>window.open('login.php', '_self')</script>";
}
 $con=mysqli_connect("localhost","root","","classmates")or
die("connection not established");

?>
<!doctype html>
<html lang="en">
<head>
<title>Find Classmates</title>
       <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/carol.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   
    </head>
   
    <header id="header">
				<div class="inner">
					<a href="home.html" class="logo">Classmates</a>
					<nav id="nav">
                        <a href="adminhome.php">Home</a>
                         <a href="adminnewsfeed.php">Posts</a>
                         <a href="adminfriends.php">Users</a>
                        <a href="adminschool.php">Schools</a>
                        <a href="usersreport.php">Reports</a>
                            <a href='logout.php'>Logout</a>
					</nav>
				</div>
			</header>
    <style>
        #find_people{
            border: 5px solid #e6e6e6;
            padding: 40px 50px;
        }
        #result_posts{
            border: 5px solid #e6e6e6;
            padding: 40px 50px;
            
        }
        form.search_form input[type=text]{
            padding: 10px;
            font-size: 17px;
            border-radius: 4px;
            border: 1px solid grey;
            float: left;
            width: 40%;
            background: #f1f1f1;
        }
        form.search_form button{
            float: left;
            width: 20%;
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }
        form.search_form button:hover{
            
        }
        form.search-form:after{
            content: "";
            clear: both;
            display: table;
        }
    </style>
        
    <body>
        <?php
      //delete user
      if(isset($_GET['deleteid'])){
      	$deleteid =$_GET['deleteid'];
        $query = "DELETE FROM school WHERE school_id = $deleteid";
        $result = mysqli_query($con, $query);
        header("Location: adminschool.php");

      }
?>
    <div class="row">
        <div class="col-sm-12">
    <br>
            <div class="row">
            <div class="col-sm-4">
                </div>
                 <div class="col-sm-4">
                     <form class="search-form" action="">
                     <input type="text" placeholder="Search user" name="search_user">
                         <button class="btn btn-info" type="submit" name="search_user_btn">Search</button>
                         <button class="btn btn-info" style="margin-right:50px;"><a href="add-school.php">Add School</a></button>
                     </form>
                </div>
                <div class="col-sm-4">
                </div>
                
            </div><br><br>
            <?php search_school(); ?>
        </div>
        </div>    
        
        
        
        
        
    </body>
</html>