<?php
include("header.php");
include("adminfunctions.php");

if(!isset($_SESSION['email'])){
    header("location:adminhome.php");
}

?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Account Settings</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/main.css" />
     <link rel="stylesheet" href="assets/css/carol.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="timeline.css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="userprofile.css"/>
  
      
</head>
    <body>
   
        <!--header-->
         <?php
                $user=$_SESSION['email'];
                $getusers=mysqli_query($con,"select * from users where email='$user'");
            
            $row = mysqli_fetch_array($getusers);
                
                $user_id=$row['user_id'];
                $first_name=$row['first_name'];
                $sir_name=$row['sir_name'];
                $school=$row['school'];
                $profile_pic=$row['profile_pic'];
    
             ?>
        <header id="header">
				<div class="inner">
                 
					<a href="home.html" class="logo">Classmates</a>
					<nav id="nav">
						<a href="home.php">Home</a>
						<a href="newsfeed.php">News Feed</a>
						<a href="timeline.php">Timeline</a>
                        <a href="settings.php">Settings</a>
						<div class="dropdown">
						<img src="images/usericon.png" style="width:40px;height:40px
" />
                        <?php
                            echo"
                        <div class='dropcontent'>
                           
                            <a href='newsfeed.php?u_id=$user_id'>My Posts<span class='badge badge-secondary'> $posts</span></a><br>
                             <a href='editprof.php?u_id=$user_id'>Edit Profile</a><br>
                            <a href='logout.php'>Logout</a>
                            </div>
                    ";
                            ?>
                        </div>
					</nav>
				</div>
			</header>
        <?php
        $user=$_SESSION['email'];
                $getusers=mysqli_query($con,"select * from users where email='$user'");
            
            $row = mysqli_fetch_array($getusers);
                
                $user_id=$row['user_id'];
        ?>
        
        <div class="row">
        <div class="col-sm-2">
            </div>
        <div class="col-sm-8">
            <form action="" method="post" enctype="multipart/form-data">
            <table class="table table-bordered table-hover">
                <tr align="center">
                <td colspan="6" class="active"><h2>Edit your profile</h2></td>
                </tr>
                <tr>
                <td style="font-weight:bold;">Change your first name</td>
                    <td>
                    <input class="form-control" type="text" name="f_name" required value="<?php echo $first_name; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Change your last name</td>
                    <td>
                    <input class="form-control" type="text" name="l_name" required value="<?php echo $sir_name; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Change your user name</td>
                    <td>
                    <input class="form-control" type="text" name="u_name" required value="<?php echo $username; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Description</td>
                    <td>
                    <input class="form-control" type="text" name="description" required value="<?php echo $description; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Change your school</td>
                    <td>
                    <input class="form-control" type="text" name="school" required value="<?php echo $school; ?>">
                    </td>
                </tr>
                <tr>
                <td style="font-weight:bold;">Change your graduation year</td>
                    <td>
                    <input class="form-control" type="text" name="gradyear" required value="<?php echo $gradyear; ?>">
                    </td>
                </tr>
                <tr>
                <td style="font-weight:bold;">Email</td>
                    <td>
                    <input class="form-control" type="text" name="email" required value="<?php echo $email; ?>">
                    </td>
                </tr>
                <tr>
                <td style="font-weight:bold;">Change your phone number</td>
                    <td>
                    <input class="form-control" type="text" name="number" required value="<?php echo $number; ?>">
                    </td>
                </tr>
                <tr>
                <td style="font-weight:bold;">Password</td>
                    <td>
                    <input class="form-control" type="password" name="password" required value="<?php echo $pass; ?>">
                    <input type="checkbox" onclick="show_password()"><strong>Show Password</strong>
                    </td>
                </tr>
                
                <tr>
                <td style="font-weight:bold;">Date of birth</td>
                    <td>
                    <input class="form-control" type="text" name="dob" required value="<?php echo $dob; ?>">
                    </td>
                </tr>
                <tr>
                <td style="font-weight:bold;">Gender</td>
                    <td>
                    <select class="form-control" name="gender">
                        <option><?php echo $gender;?></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                        </select>
                    </td>
                    
                </tr>
                    <tr>
                <td style="font-weight:bold;">City</td>
                    <td>
                    <input class="form-control" type="text" name="city" required value="<?php echo $city; ?>">
                    </td>
                </tr>            
            <tr>
                <td style="font-weight:bold;">Country</td>
                    <td>
                    <input class="form-control" type="text" name="country" required value="<?php echo $country; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Work</td>
                    <td>
                    <input class="form-control" type="text" name="work1" required value="<?php echo $work1; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Year</td>
                    <td>
                    <input class="form-control" type="text" name="year1" required value="<?php echo $year1; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Work</td>
                    <td>
                    <input class="form-control" type="text" name="work2" required value="<?php echo $work2; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Year</td>
                    <td>
                    <input class="form-control" type="text" name="year2" required value="<?php echo $year2; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Interest 1</td>
                    <td>
                    <input class="form-control" type="text" name="interest1" required value="<?php echo $interest1; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Interest 2</td>
                    <td>
                    <input class="form-control" type="text" name="interest2" required value="<?php echo $interest2; ?>">
                    </td>
                </tr>
                 <tr>
                <td style="font-weight:bold;">Interest 3</td>
                    <td>
                    <input class="form-control" type="text" name="interest3" required value="<?php echo $interest3; ?>">
                    </td>
                </tr>
<!--                Recover Password-->
                 <tr>
                <td style="font-weight:bold;">Forgotten Password</td>
                    <td>
                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal" style="background-color:gray;">Turn on</button>
                        <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" style="color:black;">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                <form action="recovery.php?u_id=<?php echo $user_id; ?>" method="post" id="f">
                                    <strong>What is your school best friend name?</strong>
                                    <textarea class="form-control" cols="83" rows="4" name="content" placeholder="Someone"></textarea><br>
                                    <input class="btn btn-default" type="submit" name="sub" value="Submit" style="width:100px;"><br><br>
                                    <pre>Answer the above question we will ask this question if you forget your <br>password.</pre><br><br>
                                    </form>
                                    <?php
                                    if(isset($_POST['sub'])){
                                        $btn=htmlentities($_POST['content']);
                                        if($btn == ''){
                                            echo"<script>alert('Please enter something')</script>";
                                             echo"<script>window.open('editprof.php?u_id=$user_id','_self')</script>";
                                            exit();
                                        }
                                        else{
                                            $update= "update users set recovery_account='$btn' where user_id='$user_id'";
                        $run=mysqli_query($con, $update);
                        
                        if($run){
                            echo"<script>alert('working...')</script>";
                        echo"<script>window.open('editprof.php?u_id=$user_id','_self')</script>";
                        }
                                        }
                                    }
                                    
                                    ?>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:gray;">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr align="center">
                <td colspan="6">
                    <input type="submit" name="update" class="btn btn-info" style="width:250px" value="Update">
                    </td>
                </tr>
                </table>
            
            </form>
            </div>
        
        </div>
 
  <div id="footer">
    <p>Footer</p>
  </div>
    
        
        <!--scripts-->
        <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
        <script  src="/js/js/index.js"></script>
         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    </body>
</html>
<?php

if(isset($_POST['update'])){
    $firstname=htmlentities($_POST['f_name']);
    $lastname=htmlentities($_POST['l_name']);
    $username=htmlentities($_POST['u_name']);
    $school=htmlentities($_POST['school']);
    $gradyear=htmlentities($_POST['gradyear']);
    $email=htmlentities($_POST['email']);
    $number=htmlentities($_POST['number']);
    $pass=htmlentities($_POST['password']);
    $password=md5($pass);
    $dob=htmlentities($_POST['dob']);
    $gender=htmlentities($_POST['gender']);
    $city=htmlentities($_POST['city']);
    $country=htmlentities($_POST['country']);
    $work1=htmlentities($_POST['work1']);
    $year1=htmlentities($_POST['year1']);
     $work2=htmlentities($_POST['work2']);
    $year2=htmlentities($_POST['year2']);
     $interest1=htmlentities($_POST['interest1']);
    $interest2=htmlentities($_POST['interest2']);
    $interest3=htmlentities($_POST['interest3']);
    
    $update="update users set first_name='$firstname', sir_name='$lastname', school='$school', gradyear='$gradyear', email='$email', number='$number', password='$password', user_name='$username', dob='$dob', gender='$gender', city='$city', country='$country', work1='$work1', year1='$year1', work2='$work2', year2='$year2' , interest1='$interest1',interest2='$interest2',interest3='$interest3' where user_id='$user_id'";
    
    $run=mysqli_query($con,$update);
    if($run){
        echo "<script>alert('Your profile updated')</script>";
         echo "<script>window.open('editprof.php?u_id='$user_id','_self')</script>";
    }
    
    
}


?>