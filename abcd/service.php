<!--<?php
##require "header.php";
?>-->
<?php
 if(isset($_SESSION['userId'])){
 echo '
<!doctype html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="Mark Otto, Jacob Thornton, and Bo
otstrap contributors">
 <meta name="generator" content="Jekyll v3.8.5">
 <title>Main page</title>
 <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bo
otstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-
GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" cr
ossorigin="anonymous">
 <style>
 .bd-placeholder-img {
 font-size: 1.125rem;
 text-anchor: middle;
 }
 @media (min-width: 768px) {
 .bd-placeholder-img-lg {
 font-size: 3.5rem;
 }
 }
 </style>
 <!-- Custom styles for this template -->
 <style type="text/css">
 /* GLOBAL STYLES
 -------------------------------------------------- */
 /* Padding below the footer and lighter body text */
 body {
 padding-top: 3rem;
 padding-bottom: 3rem;
 color: #5a5a5a;
 width: 80%;
 margin: auto;
 }
 /* CUSTOMIZE THE CAROUSEL
 -------------------------------------------------- */
 /* Carousel base class */
 .carousel {
 margin-top: 1rem;
 margin-bottom: 1rem;
 }
 /* Since positioning the image, we need to help out the caption */
 .carousel-caption {
 bottom: 3rem;
 z-index: 10;
 }
 /* Declare heights because of positioning of img element */
 .carousel-item {
 height: 28rem;
 }
 .carousel-item > img {
 position: absolute;
 top: 0;
 left: 0;
 min-width: 100%;
 height: 32rem;
 }
 /* MARKETING CONTENT
 -------------------------------------------------- */
 /* Center align the text within the three columns below the carous
el */
 .marketing .col-lg-4 {
 margin-bottom: 1.5rem;
 text-align: center;
 }
 .marketing h2 {
 font-weight: 400;
 }
 .marketing .col-lg-4 p {
 margin-right: .75rem;
 margin-left: .75rem;
 }
 /* Featurettes
 ------------------------- */
 .featurette-divider {
 margin: 5rem 0; /* Space out the Bootstrap <hr> more */
 }
 /* Thin out the marketing headings */
 .featurette-heading {
 font-weight: 300;
 line-height: 1;
 letter-spacing: -.05rem;
 }
 .carousel-inner img {
 width: 100%;
 height: 100%;
 }
 .navbar{
 width: 90%;
 margin: auto;
 }
 /* RESPONSIVE CSS
 -------------------------------------------------- */
 @media (min-width: 40em) {
 /* Bump up size of carousel content */
 .carousel-caption p {
 margin-bottom: 1.25rem;
 font-size: 1.25rem;
 line-height: 1.4;
 }
 .featurette-heading {
 font-size: 50px;
 }
 }
 @media (min-width: 62em) {
 .featurette-heading {
 margin-top: 7rem;
 }
 }
 </style>

 </head>
 <body>
 <header>
 <div class="navbar">
 <nav class="navbar navbar-expand-md navbar-light fixed-top bglight ">
 <a class="navbar-brand" href="main.php">WeCare</a>
 <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarCollapse" ariacontrols="navbarCollapse" aria-expanded="false" arialabel="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarCollapse">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item active">
 <a class="navlink" href="main.php">Home <span class="sronly">(current)</span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="donate.php">Donate</a>
 </li>
 <li class="nav-item">
 <a class="nav-link " href="service.php">Services</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="about.php">About Us</a>
 </li>
 </ul>
 <ul class="navbar-nav nav navbar-right">
 <li class ="nav-item"><a class ="navlink" href="profile.php">Your Profile</a></li>

 <li><form action="includes/logout.inc.php" method="post">
 <button class="btn btn-primary m-2" name="logoutsubmit">Logout</button>
 </form></li>
 </ul>

 </div>
 </nav>
 </div>
 </header>
<div class="container">
 <div class="row bg-light shadow p-3 mb-5 bg-white rounded">
 <div style= "padding:20px" class="col-12 text-align">
 <p> Here you can serach for donation availble in your area
</p>
 </div>
 </div>
 <div class="row w-80 m-5">
 <div class="col">

 <form action=" " method="POST">
 <div class="form-group">
 <input type="text" class="form-control m2" id="email" name="Name" placeholder="Try Dwarka or New delhi">
 </div>
 <div class="form-group">

 <center><button type="submit" name="submit" class="btn btnprimary ">Search</button></center>
 </div>
</form>
</div>
</div>
</div>
</bodv>
 ';
}
 else{
 echo' <!doctype html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="Mark Otto, Jacob Thornton, and Bo
otstrap contributors">
 <meta name="generator" content="Jekyll v3.8.5">
 <title>Carousel Template · Bootstrap</title>
 <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bo
otstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-
GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" cr
ossorigin="anonymous">
 <style>
 .bd-placeholder-img {
 font-size: 1.125rem;
 text-anchor: middle;
 }
 @media (min-width: 768px) {
 .bd-placeholder-img-lg {
 font-size: 3.5rem;
 }
 }
 </style>
 <!-- Custom styles for this template -->
 <style type="text/css">
 /* GLOBAL STYLES
 -------------------------------------------------- */
 /* Padding below the footer and lighter body text */
 body {
 padding-top: 3rem;
 padding-bottom: 3rem;
 color: #5a5a5a;
 width: 80%;
 margin: auto;
 }
 /* CUSTOMIZE THE CAROUSEL
 -------------------------------------------------- */
 /* Carousel base class */
 .carousel {
 margin-top: 1rem;
 margin-bottom: 1rem;
 }
 /* Since positioning the image, we need to help out the caption */
 .carousel-caption {
 bottom: 3rem;
 z-index: 10;
 }
 /* Declare heights because of positioning of img element */
 .carousel-item {
 height: 28rem;
 }
 .carousel-item > img {
 position: absolute;
 top: 0;
 left: 0;
 min-width: 100%;
 height: 32rem;
 }
 /* MARKETING CONTENT
 -------------------------------------------------- */
 /* Center align the text within the three columns below the carous
el */
 .marketing .col-lg-4 {
 margin-bottom: 1.5rem;
 text-align: center;
 }
 .marketing h2 {
 font-weight: 400;
 }
 .marketing .col-lg-4 p {
 margin-right: .75rem;
 margin-left: .75rem;
 }
 /* Featurettes
 ------------------------- */
 .featurette-divider {
 margin: 5rem 0; /* Space out the Bootstrap <hr> more */
 }
 /* Thin out the marketing headings */
 .featurette-heading {
 font-weight: 300;
 line-height: 1;
 letter-spacing: -.05rem;
 }
 .carousel-inner img {
 width: 100%;
 height: 100%;
 }
 .navbar{
 width: 90%;
 margin: auto;
 }
 /* RESPONSIVE CSS
 -------------------------------------------------- */
 @media (min-width: 40em) {
 /* Bump up size of carousel content */
 .carousel-caption p {
 margin-bottom: 1.25rem;
 font-size: 1.25rem;
 line-height: 1.4;
 }
 .featurette-heading {
 font-size: 50px;
 }
 }
 @media (min-width: 62em) {
 .featurette-heading {
 margin-top: 7rem;
 }
 }
 </style>

 </head>
 <body>
 <header>
 <div class="navbar">
 <nav class="navbar navbar-expand-md navbar-light fixed-top bglight ">
 <a class="navbar-brand" href="#">WeCare</a>
 <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarCollapse" ariacontrols="navbarCollapse" aria-expanded="false" arialabel="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarCollapse">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item active">
 <a class="nav-link" href="#">Home <span class="sronly">(current)</span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="donate.php">Donate</a>
 </li>
 <li class="nav-item">
 <a class="nav-link " href="service.php">Services</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="about.php">About Us</a>
 </li>
 </ul>
 <ul class="navbar-nav nav navbar-right">
 <li><a href="pro_signup.php"><button class="btn btnsuccess m-2">Sign up</button></a></li>
 <li><a href="login.php"></span><button class="btn btnprimary m-2">Login</button> </a></li>
 </ul>

 </div>
 </nav>
 </div>
 </header>
 <div class="container">
 <div class="row bg-light shadow p-3 mb-5 bg-white rounded">
 <div style= "padding:20px" class="col-12 text-align">
 <p> Here you can serach for donation availble in your area
</p>
 </div>
 </div>
 <div class="row w-80 m-5">
 <div class="col">

 <form action=" " method="POST">
 <div class="form-group">
 <input type="text" class="form-control m2" id="email" name="Name" placeholder="Try Dwarka or New delhi">
 </div>
 <div class="form-group">

 <center><button type="submit" name="submit" class="btn btnprimary ">Search</button></center>
 </div>
</form>
</div>
</div>
</div>
</bodv>'
 ;
}
?>
<?Php
if(isset($_POST['submit']))
{
$search = $_POST['Name'];
$connection = new mysqli('localhost', 'root', 'flatno887', 'LoginSy
stem');
if ($connection->connect_errno > 0) {
die ('Unable to connect to database [' . $connection->connect_error . ']');
}
$sql = "SELECT * FROM donate1 WHERE City LIKE '%" .$search . "%' OR
State LIKE '%" .$search . "%' OR Name LIKE '%" .$search . "%' OR d
onation LIKE '%" .$search ."%' ";
if (!$result = $connection->query($sql)) {
 die ('There was an error running query[' . $connection->error . ']');
}
$rows = $result->num_rows; // Find total rows returned by database
if($rows > 0) {
$cols = 3; // Define number of columns
$counter = 1; // Counter used to identify if we need to start or end a row
$nbsp = $cols - ($rows % $cols); // Calculate the number of blank columns
$container_class = 'containerfluid'; // Parent container class name
$row_class = 'row bg-light shadow p-3 bgwhite rounded n'; // Row class name
$col_class = 'col-sm-4 '; // Column class name
 echo'<br><h1>Here are some donation</h1><br>';
 echo '<div class="'.$container_class.'">'; // Container open
while ($item = $result->fetch_array()) {
if(($counter % $cols) == 1) { // Check if it's new row
echo '<div class="'.$row_class.'">'; // Start a new row
}
echo'';

echo '<div class="'.$col_class.'"><p>'.$item['Name'].'</p> <h5>'.$item['Phone'].'</h5><p>'.$item['donation'].'</p> <p>'.$item['Address'].'</p> <p>'.$item['Address1'].'</p><p>'.$item['City'].'</p><p>'.$item['State'].'</p><p>'.$item['Zip'].'</p><hr></div>';
 // Column with content
if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
echo '</div>'; // Close the row
}
$counter++; // Increase the counter
}
$result->free();
if($nbsp > 0) { // Adjustment to add unused column in last row if they exist
for ($i = 0; $i < $nbsp; $i++) {
echo '<div class="'.$col_class.'">&nbsp;</div>';
}
echo '</div>'; // Close the row
}
 echo '</div>'; // Close the container
}
}
else{
}
?>