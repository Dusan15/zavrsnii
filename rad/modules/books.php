<?php
       $category=1;
       $q= mysqli_query($conn,"select * from books where category = $category");
		   
       while($rw=mysqli_fetch_object ($q)){
?>
<div class="bestitems" id="kategorisani">
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