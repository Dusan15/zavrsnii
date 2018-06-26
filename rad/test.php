<<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</div>


<div id="velikibaner">
<img src="modules/images/baner3.jpg" alt="vest">
</div>
<div class="sredina" id="najnovije">
<h2>Najnovije</h2>
<?php
/*$category = $_GET['cid'];
$q= mysqli_query($conn,"select * from books where category = $category");
*/		   
       
?>
<div class="sredina" id="random">
<h2>Najprodavanije</h2>
<?php
 
       $q= mysqli_query($conn,"select * from books limit 3");
		   
       while($rw=mysqli_fetch_object ($q)){
?>
<div class="bestitems">
<h4><?php echo $rw->title; ?></h4>
<img src="images/<?php echo $rw->image; ?>" alt="koeljo">
<h5>Autor:</h5>
<p><?php echo $rw->author; ?></p>
<h5>Izdavac:</h5>
<p><?php echo $rw->publisher; ?></p>
<h5>Kategorija:</h5>
<p><?php echo $rw->category; ?></p>	
<h5>Cena:</h5>
<p><?php echo $rw->price; ?> rsd</p>
	<button name="u korpu"><i class="fa fa-shopping-cart" aria-hidden="true">dodaj u korpu</i></button>	

	
</div>


<?php
 }
?>


<?php
	/*
       $q= mysqli_query($conn,"select * from books");
		   
       while($rw=mysqli_fetch_object ($q)){
?>
<div class="newitems">
<h4><?php echo $rw->title; ?></h4>
<img src="images/<?php echo $rw->image; ?>" alt="koeljo">
<h5>Autor:</h5>
<p><?php echo $rw->author; ?></p>
<h5>Izdavac:</h5>
<p><?php echo $rw->publisher; ?></p>
<h5>Kategorija:</h5>
<p><?php echo $rw->category; ?></p>	
<h5>Cena:</h5>
<p><?php echo $rw->price; ?> rsd</p>
	<button name="u korpu"><i class="fa fa-shopping-cart" aria-hidden="true">dodaj u korpu</i></button>	

	
</div>


<?php
	   }*/
?>



</div>
<?php

?>
