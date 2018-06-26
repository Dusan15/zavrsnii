<sidebar>
 <div class="sidebarov" id="kategorije"> 
   <h4>Kategorije</h4>
	   <ul>
	   <?php
		   
       
       $q= mysqli_query($conn,"select * from categories");
		   
       while($rw=mysqli_fetch_object ($q)){
		   
			   
		?>
      <li><a href="index.php?cid=<?php echo $rw->id ; ?>"><?php echo $rw->name ; ?></a></li>
       <?php
	   }
            ?>   
	   
	</ul>
	</div>
	
	
	
	
</sidebar>  