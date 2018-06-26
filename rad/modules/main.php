
<div id="velikibaner">
<img src="images/baner3.jpg" alt="vesti">
</div>
<div class="sredina" id="najnovije">


<div class="sredina" id="random">

<?php
       $category= isset($_GET['cid']) && is_numeric($_GET['cid'])?$_GET['cid']:1;
       $q= mysqli_query($conn,"select * from books where category = $category");
		   
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
	<a href="?page=5&bid=<?php echo $rw->id; ?>"><button name="u korpu" ><i class="fa fa-shopping-cart" aria-hidden="true">dodaj u korpu</i></button></a>

	
</div>


<?php
 }
?>
</div>




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

