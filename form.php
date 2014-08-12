<!DOCTYPE HTML>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/header.css"></link>
<link rel="stylesheet" type="text/css" href="/css/recruit.css"></link>

<title>UCLA Beta</title>
</head>


<body>
<div class="loader"></div>
<div id="pagewrap">
<div id="header">

<div id="headerwrap">
<div id="logo"><img src="/jpg/Logo.png"></img></div>

<div id="navbar">
<ul>
<li><a href="index.html"> Home</a> </li>
<li><a> Recruitment </a>

<ul>
<li><a href="recruit.html">Becoming a Member<br></a></li>
<li><a href="letter.html">Letter From Recruitment Chair<br></a></li>
<li><a href="parents.html">Parents<br></a></li>
<li><a href="#">Recruitment Interest Form</a></li>
</ul>

</li>
<li><a>About</a>
<ul>
<li><a href="officers.html">Chapter Officers<br></a></li>
<li><a href="gammanu.html">Gamma Nu Chapter<br></a></li>
<li><a href="general.html">General Fraternity<br></a></li>
</ul>

</li>
<li><a href="http://www.betathetapi.org/home/about/newsletters/">Newsletter</a></li>
<li><a href="photos.html">Photos</a></li>

</ul>
</div>

</div>

</div>
<div id="recruitpage">
<h1>RECRUITMENT INTEREST FORM</h1>
<h3>Please fill out the following form if you are interested in becoming a member of the Gamma Nu Chapter at UCLA.</h3>


<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form name="recruits" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	First name: <input type="text" name="firstname"><br><br>
	Last name: <input type="text" name="lastname"><br><br>
	Email: <input type="text" name="email"><br><br>
	Legacy?: <input type="radio" name="legacy" value="yes"> yes
	<input type="radio" name="legacy" value="no"> no <br><br>
	<input type="submit">
</form>
  <?php 
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["firstname"])) {
    $firstname = $_POST["from"]; // sender
    $lastname = $_POST["lastname"];
    
    // send mail
    $mail= mail("www.jgbenito7@gmail.com","Beta Theta Pi 2014 Recruitment",$firstname + $lastname,"From: $Firstname $Lastname\n");
    if($mail)
    {
    console.log($mail);
    echo "Thank you for sending us your information";
    }
    else
    {
    echo "Mail sending failed.";
    }
  }
}
?>

</div>
<div class='footer'>
<div class='footwrap'>
&copy UCLA Beta Theta Pi 2014
</div>
</div>
</body>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");                                    
})
</script>
</html>