<!doctype html>
<?php session_start();
if(!isset($_SESSION['status'])||$_SESSION['status']!=3){
	header("location:index.html");
}
?>
<head>
	
	<link rel="stylesheet" type="text/css" href="../css/style2.css">

</head>
<body>
<?php

require "../config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);

$selected_id = -1;
$selected_title = "";
$selected_author =  "";
$selected_publisher= "";
$selected_category=   0;
$selected_price=  "";
$selected_image=    "";

if(isset($_GET['bid'])){
		 $q=mysqli_query($conn,"select * from books where id={$_GET['bid']}");
		 $rw = mysqli_fetch_object($q);
		 if($rw){
			$selected_id = $rw->id;
            $selected_title = $rw->title;
            $selected_author = $rw->author;
            $selected_publisher= $rw->publisher;
            $selected_category=  $rw->category;
            $selected_price= $rw->price;
            $selected_image=  $rw->image; 
		 }
	 }

 if(isset($_POST['btn_insert'])){
		 $selected_title= ($_POST['tb_title']) ;
	     $selected_author = ($_POST['tb_author']);
         $selected_publisher=($_POST['tb_publisher']);
         $selected_category= ($_POST['sel_category']);
         $selected_price=  ($_POST['tb_price']);
	 
	     if(isset($_FILES['fup_image'])){
			move_uploaded_file($_FILES['fup_image']['tmp_name'],"../images/".$_FILES['fup_image']['name']);
			$selected_image = $_FILES['fup_image']['name'];
		} 
        
	 
		 mysqli_query($conn,"insert into books values(null,'{$selected_title}','{$selected_author}','{$selected_publisher}',{$selected_category},{$selected_price},'{$selected_image}') ") ;
		 $selected_id= mysqli_insert_id($conn);
		 
	 }  
?>
<a href="../?page=2"><h1 style=" text-decoration: none; font-size: 70px;text-align: center;color: #f9fffa">Vasa knjizara</h1></a>
<div id="boxtwo">
<h1>Manipulisi knjigom</h1>
<div class="pomocni">
<form class="forma" action="" method="post" enctype="multipart/form-data">
 	<select onchange="window.location='?bid='+this.value" name="selBook">
 		<option value="-1">Izaberi knjigu</option>
 		<?php $q= mysqli_query($conn,"select * from books");
 		?>
 		<?php
 		while($rw=mysqli_fetch_object($q)){
	       echo "<option ".($selected_id==$rw->id?"selected":"")." value='{$rw->id}'>{$rw->title} </option>";  }
 			  
		?>
		</select>
			 </br>
Naslov:</br>
	<input type="text" name="tb_title" value="<?php echo $selected_title; ?>" />
				 </br>
Autor:</br>
	<input type="text" name="tb_author" value="<?php echo $selected_author; ?>" />
 				 </br>
Izdavac:</br>
	<input type="text" name="tb_publisher" value="<?php echo $selected_publisher; ?>" />
 				 </br>
 				
	
Kategorija:</br>
	<?php 
	$q= mysqli_query($conn,"select * from categories");
	?>
 	<select name="sel_category">
 	<option value="-1">Izaberi kategoriju</option>
 		
 		<?php
 		while($rw=mysqli_fetch_object($q)){
	       echo "<option ".($selected_category==$rw->id?"selected":"")." value='{$rw->id}'>{$rw->name} </option>"; 
	        }
 			  
		?>
	 </select>
	 </br>
 				 </br>
Cena:</br>
	<input type="text" name="tb_price" value="<?php echo $selected_price; ?>" />
				 </br>
Slika:</br>
 	
 	
 	<img src="../images/<?php echo $selected_image; ?>" width="90px" height="130px">
 	<input type="file" name="fup_image">
</br>
 	<input type="submit" name="btn_insert" value="Dodaj novu"> </br>
	<input type="submit" name="btn_update" value="Izmeni"> </br>
	<input type="submit" name="btn_delete" value="Obrisi"> </br>
 	
   </form>
    </div>
    <div class="pomocni">
    	<a href="index.php"><h2>Povratak na pocetnu</h2></a>
    </div>
   </div>
</body>
</html>