 <!--W3schools
    date 19/03/2021
    title: SignUp Form 
    code version: 4.15 December 2020
    Url: https://www.w3schools.com/howto/howto_css_signup_form.asp
 -->

 <?php
<<<<<<< HEAD
require_once('connection.php');

    $email = "";
    $psw = "";
    $psw_repeat = "";

  if(isset($_POST['SignUp'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $psw = mysqli_real_escape_string($conn, $_POST['psw']);
    $psw_repeat = mysqli_real_escape_string($conn, $_POST['psw_repeat']);


      if($psw != $psw_repeat){
        echo "Passwords do not match!";
      }

      $select = mysqli_query($conn, "SELECT * FROM users WHERE email_address = '$email' LIMIT 1");

      $num = mysqli_num_rows($select);

      if($num == 1){
        echo "Sorry, user already exists on our database!";
      }else{
        
        if($num != 1 && $psw == $psw_repeat){
        mysqli_query($conn, "INSERT INTO usertable(email_address, password)VALUES('$email', '$psw')");
        echo "Congratulations, user was registered successfully!";
        }
      }

  }
=======
include('connection.php');
 if(isset($_POST ['SignUp'])){
    $email = $_POST['email_address'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    $sql = "INSERT INTO users (email_address, password, repeat_password) VALUES ('$email
    ', '$password', '$repeat_password')";
    mysqli_query($con, $sql);
    if (mysqli_query($con,$sql)) {
      $message2 = "SignUp Successful";
    }
    else {
      echo "Error:" .$sql . mysqli_error($con);
    }
>>>>>>> 8ea50a58441e776c8f0db9c839dae43d3adef1a2
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
</head>
<body>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="GetMeasured.php">Get Measured</a></li>
                <li><a href="Home.php">Home</a></li>
                <li><a href="GALLERY.php">Gallery</a></li>
                <li><a href="ABOUTUS.php">About Us</a></li>
                <li><a href="LOGIN.php">Log In</a></li>
                <li><a href="SignUp.php">Sign Up</a></li>
            </ul>
        </nav>

    </header>
    <main>
        <img src="assets/images/img1.jpeg" width="100" height="100"alt="CSDM" id="logo">

        <h2>Tailoring Shop Sign Up Portal</h2>
    <hr>
    </main> 
    

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Click Here To Access The Tailoring Shop Sign Up Portal</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
<<<<<<< HEAD


  <form class="modal-content" action="" method="POST">
=======
  <form class="modal-content" >
   <?php if(isset($message2)){ echo $message2; }?> 
   <form action="" method="post" enctype="multipart/form-data">
   
>>>>>>> 8ea50a58441e776c8f0db9c839dae43d3adef1a2
    <div class="container">
      
      <h1>Sign Up</h1>
      <hr>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

<<<<<<< HEAD
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
=======
      <label for="repeat_pssword"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repeat_password" required>
>>>>>>> 8ea50a58441e776c8f0db9c839dae43d3adef1a2
      
      
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="signup">Sign Up</button>
      </div>



    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>


<footer>
  <div class="grid-container8">
      <p  class="grid-50"><b>Contact Us:</b>

          <br><br>

         +44 07587665524   <br>  +44 07587665524</p>

      <p  class="grid-50"><b>Email:</b>

          <br><br>

         Kingsley20th@gmail.com   <br>  Kingswo257@gmail.com</p>
     

  </div>    

  <br><br>
  
  <h4>Connect With Us</h4>
<nav>
<ul>
<li><a href="http://www.facebook.com">
    <img src="assets/images/nw/fk.jpg" width=20 alt="Facebook"></a></li>
<li><a href="http://www.twitter.com">
    <img src="assets/images/nw/tw.jpg" width=20 alt="Twitter"></a></li>
<li><a href="http://www.linkedin.com">
    <img src="assets/images/nw/in.jpg" width=20 alt="linkedin"></a></li>
<li><a href="http://www.google+community.com">
    <img src="assets/images/nw/g+.jpg" width=20 alt="Google Community"></a></li>
<li><a href="http://www.pinterest.com">
    <img src="assets/images/nw/pt.jpg" width=20 alt="pinterest"></a></li>
<li><a href="http://www.instagram.com">
    <img src="assets/images/nw/inst.jpg" width=20 alt="instagram"></a></li>
</ul>
</nav>
  
</footer>


</body>

</html>