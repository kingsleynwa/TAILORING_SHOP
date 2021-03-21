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
                <li><a href="SIGNUP.php">Sign Up</a></li>
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
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <form action="SignUp.php" method="post" enctype="multipart/form-data">
      <h1>Sign Up</h1>
      <hr>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
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