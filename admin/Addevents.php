
<?php

	//establish connection
	$con=mysqli_connect('localhost', 'root', '','k254sports2')
	or die("Could not establish connection");
	
	mysqli_select_db($con,'k254sports2') or
		die ("Could not select the db");
		
		//create table
//	mysqli_query($con,"create table event(
//	Event_name varchar(40) primary key,
//    Location varchar(20),
//    Category varchar(40),
//    Date varchar(40),
//	Begin_Time varchar(30),
//	Finish_Time varchar(30),
//	Ticket_Price varchar(20))");

	//receive form data 
	$Event_name=$_POST['Event_name'];
    $Event_img=$_POST['Event_img'];
    /*$Event_img=$_FILES['u_image']['name'];
     $image_tmp=$_FILES['u_image']['tmp_name'];
    $rand_number=rand(1,100);
     move_uploaded_file($image_tmp,"images/$Event_img.$rand_number");*/
    $Location=$_POST['Location'];
    $Category=$_POST['Category'];
    $Date=$_POST['Date'];
    $Begin_Time=$_POST['Begin_Time'];
    $Finish_Time=$_POST['Finish_Time'];
	$Ticket_Price=$_POST['Ticket_Price'];
    
	

	
	//execute query
	$sql="INSERT INTO event (event_name,event_img,location,category,date,begin_time,finish_time,ticket_price) 
    VALUES('$Event_name','picicon.jpg', '$Location', '$Category', '$Date' ,'$Begin_Time', '$Finish_Time', '$Ticket_Price' )";
    
    /*$username = $mysqli->escape_string($_POST['username']);
    $email = $mysqli->escape_string($_POST['email']);
    $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
    $hash = $mysqli->escape_string( md5( rand(0,1000) ) );*/
    

	if($con->query($sql))
	{
	echo "success";
	header("location:events.php");
}
else{
	echo "<script>alert('error adding events');</script>";
	//echo "<script>window.location.assign('signup');</script>";

}
	//header("location:login.php");
	
	/*$result=mysql_query("select * from form
				where username ='$username' and password ='$encrypt'",$con);
				
	if (mysql_num_rows($result) > 0) {

        header("location:login.html");
    
    }else {
    
      header("location:home1.php");
    
    }*/

				
		
	
	
	//close connection
	mysqli_close($con);
	//$con.mysqli_close();
?>

