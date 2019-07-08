<?php
session_start();
$con=mysqli_connect('localhost', 'root')
    or die("Could not establish connection");

mysqli_select_db($con,'k254sports2') or
    die ("Could not select the db");

if(isset($_POST['admin_name']) && isset($_POST['password'])){
    
    $admin_name=$_POST['admin_name'];
    $password=($_POST['password']);
    
   $_SESSION['admin_name']=$admin_name;
    $_SESSION['password']=$password;
    
    
    $sql=mysqli_query($con, "SELECT * FROM admin WHERE admin_name = '$admin_name' AND password= '$password'");
    //echo "SELECT * FROM register WHERE adminname = '$adminname' AND password= '$password'";
    
    $rows = mysqli_num_rows($sql);
   
   
    if($sql && $rows > 0){
        $arr_result = mysqli_fetch_array($sql);
     header ("location:update.php");
        
    }else{
        echo "Login failed".mysqli_error($con);
        
    }
    

}

?>