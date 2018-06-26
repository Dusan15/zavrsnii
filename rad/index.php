<!doctype html>
<?php 
require "config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>
<html>
<head>
<meta charset="utf-8">
<title>Online knjizara</title>
<link rel="icon" type="" href="images/logo.jpg" />
<link href="css/style.css" type="text/css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body style="background: #e6f7d2;">
 <div id="wrapper">
 	
 	<div id="header">
 	<?php 
		include("header.php") ;
		?>
 	</div> <!-- end header-->
 	<div id="sidebar">
 		<?php
		include("sidebar.php");
		?>
 	</div>
 	<!--end sidebar-->
 	<div id="main">
 		<?php
		$default_page=(isset($_GET['page']))?$_GET['page']:1;
		$pages=array(
		"1"=>"main.php",
		"2"=>"pocetna.php",
		"3"=>"card.php",
		"4"=>"search.php",
		"5"=>"buy.php",
		"6"=>"chekout.php"	
		);
		if(isset($pages[$default_page])){
			include "modules/".$pages[$default_page];
		}
		?>
 	</div>
 	<!--end main-->
	<div id="desni">
		<?php
		include("desni.php")
		?>
	</div>
	<!--end desni-->
 	
 	
 	
 	<div id="footer">
 		<?php
		include("footer.php")
		?>
 	</div>
 	
 	
 </div> <!--end wrapper-->
   



</body>
</html>
