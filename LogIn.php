<!--  W3schools
    date 19/03/2021
    title: Login Form 
    code version: 4.15 December 2020
    Url: https://www.w3schools.com/howto/howto_css_login_form.asp
 -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
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
    <header>
<main>
  <img src="assets/images/img1.jpeg" width="100" height="100"alt="CSDM" id="logo">

  <h2>Tailoring Shop Login Portal</h2>
<hr>
</main> 

    </header>
    

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Click Here To Access The Tailoring Shop Login Portal</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="assets/images/img1.jpeg" alt="Avatar" class="display">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    
    <div class="container" style="background-color:cornflowerblue">
      <span class="psw">Forgot <a href="ForgotPassword.php">password?</a></span>
    </div>
</div>
</form>

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