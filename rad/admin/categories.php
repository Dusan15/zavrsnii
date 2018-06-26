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
       $selected_id= 0;
       $selected_name="";

     if(isset($_GET['cid'])){
		 $q=mysqli_query($conn,"select * from categories where id={$_GET['cid']}");
		 $rw = mysqli_fetch_object($q);
		 if($rw){
			 $selected_id= $rw->id;
             $selected_name=$rw->name;
		 }
	 }

     if(isset($_POST['btn_insert'])){
		 $selected_name= $_POST['tb_name'] ;
		 mysqli_query($conn,"insert into categories values(null,'{$selected_name}') ") ;
		 $selected_id= mysqli_insert_id($conn);
		 
	 }  

     if(isset($_POST['btn_update'])){
		 $selected_name= $_POST['tb_name'] ;
		 $selected_id= $_POST['selCategory'];
		  mysqli_query($conn,"update categories set name='{$selected_name}' where id={$selected_id} ") ;
		 
	 }  


        ?>
       
		   
    <a href="../?page=2"><h1 id="kategoricni" style=" text-decoration: none; font-size: 70px;text-align: center;color: #f9fffa">Vasa knjizara</h1></a>
<div id="boxtwo">
<h1>Manipulisi kategorijama</h1>
<div class="pomocni">   
      
 <form class="forma" id="formadva" method="post" action="">
 <?php $q= mysqli_query($conn,"select * from categories");?>
 	<select onchange="window.location='?cid='+this.value" name="selCategory">
 		
 		<?php
	
		
 		while($rw=mysqli_fetch_object($q)){
	       echo "<option ".($selected_id==$rw->id?"selected":"")." value='{$rw->id}'>{$rw->name} </option>";  }
 			  
		?>
	 </select>
	 </br>
Name:</br>
	<input type="text" name="tb_name" value="<?php echo $selected_name; ?>" />
</br></br>
	<input type="submit" name="btn_insert" value="Dodaj novu">
	<input type="submit" name="btn_update" value="Izmeni">
	<input type="submit" name="btn_delete" value="Obrisi">
 	
 	 </form>

 	    </div>
    <div class="pomocni">
    	<a href="index.php"><h2 id="drugih">Povratak na pocetnu</h2></a>
    </div>
   </div>
</body>
</html>