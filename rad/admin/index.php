<!doctype html>

<html>

<?php session_start();
if(!isset($_SESSION['status'])||$_SESSION['status']!=3){
	header("location:index.html");
}
?>
<head>
	
	<link rel="stylesheet" type="text/css" href="../css/style2.css">

</head>
<body>
<a href="../?page=2"><h1 style=" text-decoration: none; font-size: 70px;text-align: center;color: #f9fffa">Vasa knjizara</h1></a>
<div id="box">
<div id="kategories" class="deca">
<a href="categories.php"><h1>kategorije</h1></a>
</div>

<div id="books" class="deca">
<a href="books.php"><h1>knjige</h1></a>
</div>

<div id="logaut" class="deca">
<a href="logaut.php"><h1>odjavi se</h1></a>
</div>
</div>
</body>
</html>