<?php
  $page_title = "Users";
?>
<?php
     session_start();
$con=mysqli_connect("localhost","root","","classmates")or
die("connection not established");

?>
<?php
      //delete user
      if(isset($_GET['deleteid'])){
      	$deleteid =$_GET['deleteid'];
        $query = "DELETE FROM users WHERE user_id = $deleteid";
        $result = mysqli_query($con, $query);
        header("Location: adminusers.php");

      }
?>
<?php 
    

?>
<div class="row">
	<div class="col-md-12">
		<a href="add-user.php" class="btn btn-primary pull-right">Add User</a>
	</div>

</div>
<table id="Table1" class="table table-striped table-bordered table-hover">  
        <thead>  
          <tr>  
            <th style="text-align: center;">NO</th>  
            <th>First Name</th>  
            <th>Last Name</th>  
            <th>Mobile</th>
            <th style="text-align: center;">Action</th>   
          </tr>  
        </thead>  
        <tbody>  
        	<?php 
                 //fetch
        $query =  "SELECT * FROM users";
        $result = mysqli_query($con, $query);
        $count = 1;
        while($row=mysqli_fetch_array($result)){
        	?>
          <tr>  
            <td style="text-align: center;"><?php echo $count; ?></td>  
            <td><?php echo $row['first_name']; ?></td>  
            <td><?php echo $row['sir_name']; ?></td>  
            <td><?php echo $row['number']; ?></td>
            <td style="text-align: center;"><a href="user-edit.php?id=<?php echo $row['user_id']; ?>">Edit</a> <a href="users.php?deleteid=<?php echo $row['user_id']; ?>" style="color:#f03;" onclick="return confirm('Delete?'); ">Delete</a></td>  
          </tr>  
        <?php

        $count++;
             }
        ?>
           </tbody>  
      </table>  
 			

<!-- 		</div> col-md-8-->
 		<div class="col-md-2"></div>
 	</div>
 </div>

</body>
</html>
<script>
$(document).ready(function(){
    $('#Table1').dataTable();
});
</script>