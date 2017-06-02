<?php include 'header.php'; ?>
		<!-- End Navigation -->
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">

			<div class="cl">&nbsp;</div>
			<!-- Begin Products -->
			<div id="products">
				<h2>Search Results</h2>  


	      <div class="section group">
		  
		  <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM hostel WHERE (location='{$_GET['location']}' AND qty!=bkqty ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid_1_of_4 images_1_of_4">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img width="200px" height="200px" src="landlord/hostel_image/'.$obj->img1.'"></div>';
            echo '<div class="product-content"><h2><b>'.$obj->name.'</b> </h2>';
            echo '<div class="product-desc">'.$obj->location.'</div>';
            echo '<div class="product-info">';
			echo '<p><span class="price"> Price:<big style="color:green">'.$obj->price.'</big></span></p>';
            echo '<input type="hidden" name="product_qty" value="1" size="3" />';
			echo '<div class="button"><span><img src="images/cart.jpg" alt="" /><button class="cart-button"  class="add_to_cart">Book Now</button></span> </div>';
			echo '</div></div>';
            echo '<input type="hidden" name="Product_ID" value="'.$obj->hostelId.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }else
    {
    	echo '<h1>OOOPS!! No hostel for that specific search </h1>';
    }
    ?>
    </div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->
			
			
      <!-- Begin Products Slider -->
			<div id="product-slider">
				<h2>Our Hostels</h2>
				<ul>
				
		  	<?php
			$result=mysqli_query($mysqli,"select * from hostel where qty!=bkqty") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
					<li>
						<a href="view_cart.php?id=<?php echo $row['hostelId']; ?>" title="Product Link"><img src="landlord/hostel_image/<?php echo $row['img1']?>" alt="IMAGES" /></a>
						<div class="info">
							<h4><b><?php echo $row['name']?></b></h4>
							<span class="number"><span>Price:<big style="color:green">$<?php echo $row['price']?></big></span></span>
					
							<div class="cl">&nbsp;</div>
							 
						</div>
					</li>
					 <?php } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products Slider -->
			
		</div>
		<!-- End Main -->
		
		<?php include 'footer.php'; ?>