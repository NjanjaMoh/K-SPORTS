<?php
session_start();
if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])){
    echo"<script>window.open('adminlogin.php', '_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
   <title>News Feed</title>
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
    <link rel="stylesheet" href="css/footer.css"/>
</head>
   <body>
    <header id="header">
				<div class="inner">
					<a href="adminhome.php" class="logo">K-SPORTS</a>
					<nav id="nav">
						<a href="adminlogout.php">Logout</a>
					</nav>
				</div>
			</header>
       <style>
           body{
               height: 700px;
           }
           #left{
               margin-left: 5%;
               margin-right: 0 !important;
           }
           #left1{
               width: 100px;
               margin-right: 0px;
               padding-left:0p !important; 
           }
           hr{
               color: #e5474b;
               height: 4px;
               background-color: #e5474b;
               width: 80%;
           }
           #right{
               float: right;
               
           }
           th{
               border: 1px solid white;
           }
       </style>
       
<section>
    <center><h1 style="margin-top:80px;letter-spacing:3px;font-family:'Pacifico', cursive;">Welcome Admin</h1></center>
       <center><h3 style="margin-top:40px;font-family:'Pacifico', cursive;">Choose what to view</h3></center>
    	<div class="row" class="menu-tabs">
 			    <br>
            <br>
 			    <hr>
<br>
            <br>
<!--
 				<div class="col-md-3" id="left">
                 
 					  <a href="account.php" class="btn btn-primary menu-tab">
 					  	<h3><span class="glyphicon glyphicon-user"></span>
 					  		<br/>
 					  		My Account
 					  	</h3>
 					  </a>
                    
 				</div>
 				
 				<div class="col-md-3" id="left1">
 					 <a href="friends.php" class="btn btn-warning menu-tab">
 					  	<h3><span class="glyphicon glyphicon-list-alt"></span>
 					  		<br/>
 					  		Users
 					  	</h3>
 					  </a>

 					<a href="newsfeed.php" class="btn btn-success menu-tab">
 				    	<h3><span class="glyphicon glyphicon-list-alt"></span>
 					  		<br/>
 					  		Posts   
 					  	</h3>
 					  </a>
                  
 				</div>

 				
 				<div class="col-md-3">
 					<a href="school.php" class="btn btn-warning menu-tab">
 				  	<h3><span class="glyphicon glyphicon-grain"></span>
 					 		<br/>
 					  		School
 					  	</h3>
 					  </a>
 				</div>
 				 

 				<div class="col-md-3" id="right">
 					<a href="usersreport.php" class="btn btn-danger menu-tab">
 					  	<h3><span class="glyphicon glyphicon-stats"></span>
 				  		<br/>
 					  		Reports
 					  	</h3>
 					  </a>
 				</div>
 				
 			</div>



 		 col-md-8 
 		<div class="col-md-2"></div>
 	
-->
           <center> 
<table style="width:70%;">
  <tr>
   
    <th> <a href="account.php" class="btn btn-primary menu-tab">
 					  	<h3><span class="glyphicon glyphicon-user"></span>
 					  		<br/>
 					  		My Account
 					  	</h3>
 					  </a>
      </th> 
       <th>
        <a href="adminfriends.php" class="btn btn-warning menu-tab">
 					  	<h3 style="letter-spacing:2px;"><span class="glyphicon glyphicon-list-alt"></span>
 					  		<br/>
 					  		Users
 					  	</h3>
 					  </a>
      </th>
    <th>
        <a href="adminsports.php" class="btn btn-warning menu-tab">
 				  	<h3><span class="glyphicon glyphicon-grain"></span>
 					 		<br/>
 					  		Sports
 					  	</h3>
 					  </a>
      </th>
      <th>
      <a href="adminnewsfeed.php" class="btn btn-success menu-tab">
 				    	<h3><span class="glyphicon glyphicon-list-alt"></span>
 					  		<br/>
 					  		Posts   
 					  	</h3>
 					  </a>
      </th>
      <th>
      <a href="usersreport.php" class="btn btn-danger menu-tab">
 					  	<h3><span class="glyphicon glyphicon-stats"></span>
 				  		<br/>
 					  		Reports
 					  	</h3>
 					  </a>
      </th>
      <th>
      <a href="admin/Addevent.php" class="btn btn-danger menu-tab">
 					  	<h3><span class="glyphicon glyphicon-stats"></span>
 				  		<br/>
 					  		Events
 					  	</h3>
 					  </a>
      </th>
  </tr>
</table> 
            </center>
    </div>
       </section>
    
       
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


</body>

</html>
