<?php
//include("header.php");
include("adminfunctions.php");

//if(!isset($_SESSION['email'])){
//    header("location:home.php");
//}

?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Account Settings</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/main.css" />
     <link rel="stylesheet" href="assets/carol.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="timeline.css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  
      
</head>
    <body>
   
        <header id="header">
				<div class="inner">
                 
					<a href="home.html" class="logo">Classmates</a>
					<nav id="nav">
						<a href="adminhome.php">Home</a>
						<a href="adminfriends.php">Users</a>
						<a href="adminnewsfeed.php">posts</a>
                            <a href='logout.php'>Logout</a>
                            
                            
                    </nav>
				</div>
			</header>
        <?php
//        $user=$_SESSION['email'];
        if(isset($_GET['id'])){
            $u_id=$_GET['id'];
        }
                $getusers=mysqli_query($con,"select * from users where user_id='$u_id'");
            
            $row = mysqli_fetch_array($getusers);
                
               $userid=$row['user_id'];
$username=$row['user_name'];
$first_name=$row['first_name'];
$sir_name=$row['sir_name'];
$school=$row['school'];
$gradyear=$row['gradyear'];
$email=$row['email'];
$number=$row['number'];
$pass=$row['password'];
$dob=$row['dob'];
$gender=$row['gender'];
$country=$row['country'];
$profpic=$row['profile_pic'];
$coverpic=$row['cover_pic'];
$description=$row['description'];
$reg_date=$row['user_reg_date'];
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
                <td style="font-weight:bold;">Country</td>
                    <td>
                    <input class="form-control" type="text" name="country" required value="<?php echo $country; ?>">
                    </td>
                </tr>
<!--                Recover Password-->
                
                <tr align="center">
                <td colspan="6">
                    <input type="submit" name="update" class="btn btn-info" style="width:250px" value="Update">
                    </td>
                </tr>
                </table>
            
            </form>
            </div>
        
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
    $country=htmlentities($_POST['country']);
    
    $update="update users set first_name='$firstname', sir_name='$lastname', school='$school', gradyear='$gradyear', email='$email', number='$number', password='$password', user_name='$username', dob='$dob', gender='$gender', country='$country' where user_id='$u_id'";
    
    $run=mysqli_query($con,$update);
    if($run){
        echo "<script>alert('Your profile updated')</script>";
         echo "<script>window.open('adminfriends.php','_self')</script>";
    }
    
    
}


?>