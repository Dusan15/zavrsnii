<?php
		   
       $conn = mysqli_connect("localhost","root","","bookstore");
       $q= mysqli_query($conn,"select * from categories");
       var_dump($q) ;
		   
       while($rw= mysqli_fetch_object($q)){
		   prunt_r($rw);
	   }
		?>
	
	
	