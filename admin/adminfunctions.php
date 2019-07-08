 <?php
$con= mysqli_connect("localhost","root","","classmates");
        function insertPost(){
            if(isset($_POST['post'])){
                global $con;
                global $user_id;
                
                $content = htmlentities($_POST['post_txt']);
                $upload_image= $_FILES['upload_img']['name'];
             $image_tmp= $_FILES['upload_img']['tmp_name'];
                $ran_number= rand(1,100);
                
                if(strlen($content) > 250){
                    echo "<script>alert('Please use 250 or less than 250 words!')</script>";
                    echo "<script>window.open('adminnewsfeed.php','_self')</script>";
                }else{
                    if(strlen($upload_image) >= 1 && strlen($content) >= 1){
                        move_uploaded_file($image_tmp, "cover/$upload_image.$ran_number");
                         $insert= "insert into posts(user_id, post_content, upload_image,post_date) values('$user_id','$content','$upload_image.$ran_number',NOW())";
                        $run=mysqli_query($con,$insert);
                        
                        if($run){
                             echo "<script>alert('Your post has been updated')</script>";
                    echo "<script>window.open('newsfeed.php','_self')</script>";
                            $update= "update users set posts='yes' where user_id='$user_id'";
                            $run_update= mysqli_query($con,$update);
                        }
                        exit();
                    }else{
                        if($upload_image== '' && $content == ''){
                             echo "<script>alert('Error occurred while uploading')</script>";
                    echo "<script>window.open('adminnewsfeed.php','_self')</script>";
                        }else{
                            if($content==''){
                         move_uploaded_file($image_tmp, "cover/$upload_image.$ran_number");
                      $insert= "insert into posts(user_id, post_content, upload_image,post_date) values('$user_id','No','$upload_image.$ran_number',NOW())";
                     $run=mysqli_query($con,$insert);
                        
                        if($run){
                             echo "<script>alert('Your post has been updated')</script>";
                    echo "<script>window.open('newsfeed.php','_self')</script>";
                $update= "update users set posts='yes' where user_id='$user_id'";
                            $run_update= mysqli_query($con,$update);
                        }
                        exit();
                            }else{
                     $insert= "insert into posts(user_id, post_content,post_date) values('$user_id','$content',NOW())";
                     $run=mysqli_query($con,$insert);
                        
                        if($run){
                             echo "<script>alert('Your post has been updated')</script>";
                    echo "<script>window.open('newsfeed.php','_self')</script>";
                $update= "update users set posts='yes' where user_id='$user_id'";
                            $run_update= mysqli_query($con,$update);
                            }
                        }
                    }
                }
                
            }
            
        }
        }

//display classmates


//end

function get_posts(){
    global $con;
    $per_page = 4;
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }
    $start_from=($page-1) * $per_page;
    $get_posts = "select * from posts ORDER by 1 DESC LIMIT $start_from, $per_page";
    $run_posts=mysqli_query($con, $get_posts);
    while($row_posts = mysqli_fetch_array($run_posts)){
        $post_id=$row_posts['post_id'];
        $user_id=$row_posts['user_id'];
        $content=substr($row_posts['post_content'],0,40);
        $upload_image=$row_posts['upload_image'];
        $post_date=$row_posts['post_date'];
        
        $user="select * from users where user_id='$user_id' AND posts='yes'";
        $run_user=mysqli_query($con,$user);
        $row_user=mysqli_fetch_array($run_user);
        
        $user_name=$row_user['user_name'];
        $user_image=$row_user['profile_pic'];
        $first_name=$row_user['first_name'];
        $sir_name=$row_user['sir_name'];
        
        //displaying posts from database
        if($content=="No" && strlen($upload_image) >=1){
            echo"
            <div class='row'>
            <div class='col-sm-3'>
            </div>
            <div id='posts' class='col-sm-6'>
            <div class='row'>
            <div class='col-sm-3'>
            <p><img src='cover/$user_image' class='img-circle' style='width:100px; height:100px;'></p>
            </div>
            <div class='col-sm-6'>
            <h3><a href='user_profile.php?u_id=$user_id' style='text-decoration:none; cursor:pointer; color:#3897f0;text-transform:lowercase;'>$first_name  $sir_name</a></h3><br>
            <h4><small style='color:black;text-transform:lowercase;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-8'>
            <img id='posts-img' src='cover/$upload_image' style='height:350px;'>
            </div>
            </div><br>
            <a href='newsfeed.php?post_id=$post_id' style='float:right; background-color:grey;'onclick='return confirm('Delete?');'><button class='btn btn-info'>Delete</button></a><br>
            </div>
            <div class='col-sm-3'>
            </div>
            </div><br><br>
            ";
        }
        else if(strlen($content) >=1 && strlen($upload_image)){
              echo"
               <div class='row'>
            <div class='col-sm-3'>
            </div>
            <div id='posts' class='col-sm-6'>
            <div class='row'>
            <div class='col-sm-3'>
            <p><img src='cover/$user_image' class='img-circle' style='width:100px; height:100px;'></p>
            </div>
            <div class='col-sm-6'>
            <h3><a href='user_profile.php?u_id=$user_id' style='text-decoration:none; cursor:pointer; color:#3897f0;text-transform:lowercase;'>$first_name  $sir_name</a></h3><br>
            <h4><small style='color:black;text-transform:lowercase;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-12'>
            <p style='text-transform:lowercase;'>$content</p>
            <img id='posts-img' src='cover/$upload_image' style='height:350px;'>
            </div>
            </div><br>
            <a href='newsfeed.php?post_id=$post_id' style='float:right; background-color:grey;'><button class='btn btn-info' onclick='return confirm('Delete?'); '>Delete</button></a><br>
            </div>
            <div class='col-sm-3'>
            </div>
            </div><br><br>
            ";
        }
        else{
              echo"
             <div class='row'>
            <div class='col-sm-3'>
            </div>
            <div id='posts' class='col-sm-6'>
            <div class='row'>
            <div class='col-sm-3'>
            <p><img src='cover/$user_image' class='img-circle' style='width:100px; height:100px;'></p>
            </div>
            <div class='col-sm-6'>
            <h3><a href='user_profile.php?u_id=$user_id' style='text-decoration:none; cursor:pointer; color:#3897f0;text-transform:lowercase;'>$first_name  $sir_name</a></h3><br>
            <h4><small style='color:black;text-transform:lowercase;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-12'>
            <h3><p style='text-transform:lowercase;'>$content</p></h3>
            </div>
            </div><br>
            <a href='newsfeed.php?post_id=$post_id' style='float:right; background-color:grey;'><button class='btn btn-info' onclick='return confirm('Delete?'); '>Delete</button></a><br>
            </div>
            <div class='col-sm-3'>
            </div>
            </div><br><br>
            ";
        }
    }
    //include("pagination.php");
}
//view post
     function single_post(){
         if(isset($_GET['post_id'])){
             global $con;
             $get_id=$_GET['post_id'];
             $get_posts="select * from posts where post_id='$get_id'";
             $run_posts=mysqli_query($con, $get_posts);
             $row_posts=mysqli_fetch_array($run_posts);
             $post_id=$row_posts['post_id'];
             $user_id=$row_posts['user_id'];
             $content=$row_posts['post_content'];
             $upload_image=$row_posts['upload_image'];
             $post_date=$row_posts['post_date'];
             
             $user="select * from users where user_id='$user_id' AND posts='yes'";
             $run_user=mysqli_query($con, $user);
             $row_user=mysqli_fetch_array($run_user);
             $first_name=$row_user['first_name'];
             $sir_name=$row_user['sir_name'];
             $user_name=$row_user['user_name'];
             $user_image=$row_user['profile_pic'];
             $user_com=$_SESSION['email'];
             $get_com="select * from users where email='$user_com'";
             $run_com=mysqli_query($con, $user); $row_com=mysqli_fetch_array($run_user);
             $user_com_id=$row_com['user_id'];
             $user_com_name=$row_com['user_name'];
             
             if(isset($_GET['post_id'])){
                 $post_id=$_GET['post_id'];
             }
             $get_posts="select post_id from users wher post_id='$post_id'";
             $run_user=mysqli_query($con, $get_posts);
             $post_id=$_GET['post_id'];
             $get_user="select * from posts where post_id='$post_id'";
             $run_user=mysqli_query($con,$get_user);
             $row=mysqli_fetch_array($run_user);
             
             $p_id=$row['post_id'];
             
             if($p_id != $post_id){
                 echo"<script>alert('ERROR')</script>";
                 echo"<script>window.open('adminnewsfeed.php','_self')</script>";
             }
             else{
                 if($content=="No" && strlen($upload_image) >=1){
            echo"
            <div class='row'>
            <div class='col-sm-3'>
            </div>
            <div id='posts'>
            <div class='row'>
            <div class='col-sm-3'>
            <p><img src='cover/$user_image' class='img-circle' style='width:100px; height:100px;'></p>
            </div>
            <div class='col-sm-6'>
            <h3><a href='user_profile.php?u_id=$user_id' style='text-decoration:none; cursor:pointer; color:#3897f0;text-transform:lowercase;'>$first_name  $sir_name</a></h3><br>
            <h4><small style='color:black;text-transform:lowercase;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-12'>
            <img id='posts-img' src='cover/$upload_image' style='height:350px;'>
            </div>
            </div><br>
            </div>
            <div class='col-sm-3'>
            </div>
            </div><br><br>
            ";
        }
        else if(strlen($content) >=1 && strlen($upload_image)){
              echo"
               <div class='row'>
            <div class='col-sm-3'>
            </div>
            <div id='posts'>
            <div class='row'>
            <div class='col-sm-3'>
            <p><img src='cover/$user_image' class='img-circle' style='width:100px; height:100px;'></p>
            </div>
            <div class='col-sm-6'>
            <h3><a href='user_profile.php?u_id=$user_id' style='text-decoration:none; cursor:pointer; color:#3897f0;text-transform:lowercase;'>$first_name  $sir_name</a></h3><br>
            <h4><small style='color:black;text-transform:lowercase;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-12'>
            <p style='text-transform:lowercase;'>$content</p>
            <img id='posts-img' src='cover/$upload_image' style='height:350px;'>
            </div>
            </div><br>
            </div>
            <div class='col-sm-3'>
            </div>
            </div><br><br>
            ";
        }
        else{
              echo"
             <div class='row'>
            <div class='col-sm-3'>
            </div>
            <div id='posts'>
            <div class='row'>
            <div class='col-sm-3'>
            <p><img src='cover/$user_image' class='img-circle' style='width:100px; height:100px;'></p>
            </div>
            <div class='col-sm-6'>
            <h3><a href='user_profile.php?u_id=$user_id' style='text-decoration:none; cursor:pointer; color:#3897f0;text-transform:lowercase;'>$first_name  $sir_name</a></h3><br>
            <h4><small style='color:black;text-transform:lowercase;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
            </div>
            <div class='row'>
            <div class='col-sm-12'>
            <h3 style='text-tranform:lowercase;'><p>$content</p></h3>
            </div>
            </div><br>
            </div>
            <div class='col-sm-3'>
            </div>
            </div><br><br>
            ";
        }
                 include('comments.php');
                 
                 echo"
                 <div class='row'>
                 <div class='col-md-6 col-md-offset-3'>
                 <div class='panel panel-info'>
                 <div class='panel-body'>
                 <form action='' method='post' class='form-inline'>
                 <textarea placeholder='Write your comment here' class='pb-cmnt-textarea' name='comment'></textarea>
                 <button class='btn btn-info pull-right' name='reply'>Comment</button>
                 </form>
                 </div>
                 </div>
                 </div>
                 </div>
                 ";
                 
                 if(isset($_POST['reply'])){
                     $comment=htmlentities($_POST['comment']);
                     if($comment == ""){
                         echo"
                         <script>alert('Enter your comment')</script>";
                          echo"<script>window.open('single.php?post_id=$post_id','_self')</script>";
                     }else{
                         $insert="insert into comments (post_id,user_id,comment,comment_author,date) values('$post_id','$user_id','$comment','$user_name',NOW())";
                         
                         $run=mysqli_query($con,$insert);
                         
                          echo"<script>alert('Your comment added!')</script>";
                          echo"<script>window.open('single.php?post_id=$post_id','_self')</script>";
                     }
                 }
             }
         }
     }   


//find user
function search_user(){
    global $con;
    if(isset($_GET['search_user_btn'])){
        $search_query=htmlentities($_GET['search_user']);
        $get_user="select * from users where first_name like '%$search_query%' OR sir_name like '%$search_query' OR user_name like '%$search_query%'";
    }
    else{
        $get_user="select * from users";
    }
    $run_user=mysqli_query($con, $get_user);
    while($row_user=mysqli_fetch_array($run_user)){
        $user_id=$row_user['user_id'];
        $user_name=$row_user['user_name'];
        $user_image=$row_user['profile_pic'];
        $first_name=$row_user['first_name'];
        $sir_name=$row_user['sir_name'];
        
        echo "
        <div class='row'>
        <div class='col-sm-3'>
        </div>
        <div class='col-sm-6'>
        <div class='row' id='find_people'>
        <div class='col-sm-4'>
        <a href='user_profile.php?u_id=$user_id'>
        <img src='cover/$user_image' width='150px' height='140px' title='$user_name' style='float:left; margin:1px;' />
        </a>
    
        </div><br><br>
        <div class='col-sm-6'>
        <a style='text-decoration:none; cursor:pointer;color=#3897f0' href='user_profile.php?u_id=$user_id'>
        <strong><h2 style='text-transform:lowercase'>$first_name $sir_name</h2></strong>
        </a><br>
         <button class='btn btn-info'>
        <a href='adminuser-edit.php?id=$user_id'>Edit</a> </button>
        
        <button class='btn btn-danger'><a href='adminfriends.php?deleteid=$user_id' style='color:#f03;' onclick='return confirm('Delete?'); '>Delete</a></button>
                
        </div>
        <div class='col-sm-3'></div>
        </div>
        </div>
    
        </div><br>
        ";
    }
}

//search school
function search_school(){
    global $con;
    if(isset($_GET['search_user_btn'])){
        $search_query=htmlentities($_GET['search_user']);
        $get_user="select * from school where name like '%$search_query%' OR type like '%$search_query'";
    }
    else{
        $get_user="select * from school";
    }
    $run_user=mysqli_query($con, $get_user);
    while($row_user=mysqli_fetch_array($run_user)){
        $school_id=$row_user['school_id'];
        $school=$row_user['name'];
        $type=$row_user['type'];
        
        echo "
        <div class='row'>
        <div class='col-sm-3'>
        </div>
        <div class='col-sm-6'>
        <div class='row' id='find_people'>
        <div class='col-sm-6'>
        <a style='text-decoration:none; cursor:pointer;color=#3897f0' href='schoolmembers.php?u_id=$school_id'>
        <strong><h2 style='text-transform:lowercase' title='$type'>$school</h2></strong>
         <strong><h4 style='text-transform:lowercase'>$type</h4></strong>
        </a><br>
         <button class='btn btn-info'>
        <a href='school-edit.php?id=$school_id'>Edit</a> </button>
        
        <button class='btn btn-danger'><a href='adminschool.php?deleteid=$school_id' style='color:#f03;' onclick='return confirm('Delete?'); '>Delete</a></button>
                
        </div>
        <div class='col-sm-3'></div>
        </div>
        </div>
    
        </div><br>
        ";
    }
}
        ?>
         