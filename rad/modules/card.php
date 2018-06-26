
<div id="velikibaner">
<img src="images/baner3.jpg" alt="vesti">
</div>
<div class="sredina" id="najnovije">






<?php
session_start();
if(!isset($_SESSION['card'])){
		$_SESSION['card'] = array();
}
if(isset($_POST['bid'])&&isset($_POST['quantity'])){ 
	if(isset($_SESSION['card'][$_POST['bid']])){
		$_SESSION['card'][$_POST['bid']]+=$_POST['quantity'];
	} else {
		$_SESSION['card'][$_POST['bid']]=$_POST['quantity'];
	} 
	if($_SESSION['card'][$_POST['bid']]<=0){
		unset($_SESSION['card'][$_POST['bid']]);
	}
	
}
	/*if(empty($_SESSION['card'])){
	echo "card is empty";
	return;
}
	*/

$books_ids = array_keys($_SESSION['card']);
$books_ids_string = implode(",",$books_ids);


$q = mysqli_query($conn,"select * from books where id in ({$books_ids_string})");
while($rw=mysqli_fetch_object($q)){ 
?>
<div class="bestitems">
<h4><?php echo $rw->title; ?></h4>
<img src="images/<?php echo $rw->image; ?>" alt="slika">
<h5>Autor:</h5>
<p><?php echo $rw->author; ?></p>
<h5>Izdavac:</h5>
<p><?php echo $rw->publisher; ?></p>
<h5>Kategorija:</h5>
<p><?php echo $rw->category; ?></p>	
<h5>Cena:</h5>
<p><?php echo $rw->price; ?> rsd</p>
Kolicina: <?php echo $_SESSION['card'][$rw->id]; ?>
	<a href="?page=5&bid=<?php echo $rw->id; ?>"><button name="u korpu" ><i class="fa fa-shopping-cart" aria-hidden="true">dodaj u korpu</i></button></a>

	
</div>


<?php
 }
?>



</div>
<div id="slanjekorpa">
	<a href="?page=6">POSALJI</a>
</div>

