<!-- Stewart Massie 
   date: 1/26/2021
   title: unsemantic-grid-responsive-tablet
   code version: mobile/desktop version
   type: web development
   Url: http://campusmoodle.rgu.ac.uk/pluginfile.php/5367556/mod_resource/content/0/unsemantic-grid-responsive-tablet.css


    W3schools
    date 19/03/2021
    title: file upload botton 
    code version: 4.15 December 2020
    Url: https://www.w3schools.com/howto/howto_html_file_upload_button.asp
-->

<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get measured</title>
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
    <main>
    <img src="assets/images/img1.jpeg" width="100" height="100"alt="CSDM" id="logo">

    <h2> Get Measured </h2>
    <hr>

<form action="/action_page.php">

  <div class="grid-container1">  
  <select class="grid-45" name="height" id="height">
    <option value="Height">Height</option>
    <option value="4.5ft-5ft">4.5ft-5ft</option>
    <option value="5.5ft-6ft">5.5ft-6ft</option>
    <option value="6ft-6.5ft">6ft-6.5ft</option>
    <option value="6.5ft-7ft">6.5ft-7ft</option>
  </select>

  <select class="grid-45" name="Shoulder" id="Shoulder">
    <option value="Shoulder">Shoulder</option>
    <option value="16inch-17inch">16inch-17inch</option>
    <option value="17inch-18inch">17inch-18inch</option>
    <option value="18inch-19inch">18inch-19inch</option>
    <option value="19inch-20inch">19inch-20inch</option>
    <option value="20inch-21inch">20inch-21inch</option>
  </select>
  </div>


  <div class="grid-container2">  
    <select class="grid-45" name="Sleeves" id="Sleeves">
      <option value="Sleeves ">Sleeves </option>
      <option value="17cm">17cm</option>
      <option value="17.5cm">17.5cm</option>
      <option value="18cm">18cm</option>
      <option value="18.5cm">18.5cm</option>
      <option value="19cm">19cm</option>
    </select>
  
   
    <select class="grid-45" name="Chest" id="Chest">
      <option value="Chest">Chest</option>
      <option value="34cm">34cm</option>
      <option value="36cm">36cm</option>
      <option value="38cm">38cm</option>
      <option value="40cm">40cm</option>
      <option value="42cm">42cm</option>
    </select>
    </div>


    <div class="grid-container3">  
        <select  class="grid-45" name="Back" id="Back">
          <option value="back">Back</option>
          <option value="17cm">17cm</option>
          <option value="17.5cm">17.5cm</option>
          <option value="18cm">18cm</option>
          <option value="18.5cm">18.5cm</option>
          <option value="19cm">19cm</option>
        </select>
      
        
        <select  class="grid-45" name="Tigh" id="Tigh">
          <option value="Tigh">Tigh</option>
          <option value="34cm">34cm</option>
          <option value="36cm">36cm</option>
          <option value="38cm">38cm</option>
          <option value="40cm">40cm</option>
          <option value="42cm">42cm</option>
        </select>
        </div>

        <div class="grid-container4">  
          <select  class="grid-45" name="Waist" id="Waist">
            <option value="Waist">Waist</option>
            <option value="28cm">28cm</option>
            <option value="30cm">30cm</option>
            <option value="32cm">32cm</option>
            <option value="34cm">34cm</option>
            <option value="36cm">36cm</option>
            <option value="38cm">38cm</option>
            <option value="40cm">40cm</option>
          </select>
          
        
          <select  class="grid-45" name="Collar" id="Collar">
            <option value="Collar">Collar</option>
            <option value="31cm">31cm</option>
            <option value="32cm">32cm</option>
            <option value="33cm">33cm</option>
            <option value="34cm">34cm</option>
            <option value="35cm">35cm</option>
            <option value="36cm">36cm</option>
            <option value="37cm">37cm</option>
            <option value="38cm">38cm</option>
          </select>
          </div>
          <br><br>
          
          
            <input type="file" id="myFile" name="filename">
            <hr>
  <input type="submit" value="Submit">
</form>
   
<br><br><hr>

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