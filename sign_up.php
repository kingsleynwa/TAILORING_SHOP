<?php
    include('connection.php');
    
    $Email=$_POST['email'];
    $Password=$_POST['psw'];
    $repeatPassword=$_POST['psw_repeat'];

    $stmt="INSERT INTO users(user_id, Email, Password)
    values('$user_id','$Email','$Password')";
    if ($db -> query($stmt)===true){
        echo "Sign Up Successful!!";
    }else{
        echo"ERROR: complete empty fields $stmt." .$db->error;
    }
    
    $db->close();
    
?>
