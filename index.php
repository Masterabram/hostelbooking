<?php include 'header.php'; ?>
		<!-- End Navigation -->
<!-- Begin Slider -->
		<div id="slider"> 
			<!-- Begin Shell -->
			<div class="shell">
				<ul class="slider-items">
					<li>
						<img src="images/6.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h2><span> Clean </span> Big Swimming pool </h2>
					
							<a href="#" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/1.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span></span><span class="small"></span> &nbsp; Nice study Room</h4>
							
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/2.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span></span><span class="small"> </span>Waiting<span class="small"> Room </span></h3> 
					
						
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
							<li>
						<img src="images/3.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span> Clean </span><span class="small"> Back</span>Yeard</h3> 
							
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/4.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>Constant</span><span class="small">&amp;</span><span>Water</span>supply</h4>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/5.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span></span><span class="small">of </span> Big Bath trough </h3> 
					
							
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/7.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h2><span>Ample</span>Playgroung</h2>
						
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/8.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>New</span><span class="small"></span> &nbsp;<span> Specious </span> Living room </h4>
							
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						<img src="images/9.jpg" width="1000px" alt="Slide Image" />
						<div class="slide-entry">
					
							<h4 class="short"><span></span> Clean Washrooms </h4>
							
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
				</ul>
				<div class="cl">&nbsp;</div>
				<div class="slider-nav">
					
				</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<h2>Welcome!</h2>
					<img src="images/logo.png" alt="Post Image" height="160" width="260"/>
					You can be confident when you're booking hostel online with us. Our Secure online booking website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<div >
                        <div id="" class="animate form">
                            <form  action="search.php" method="post" autocomplete="on"> 
                                <h3>Custom Serch Area</h3> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Location </label>
                                    <select id='shout' name="location" required="required">
									<?php $result=mysqli_query($mysqli,"select distinct location from hostel") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>				
									<option value="<?php echo $row['location']?>"><?php echo $row['location']?></option>			
									<?php } ?>
									</select>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Price Below  </label>
                                    <input type="text" id='shout' name='price' required="required" type="text" placeholder="eg. 10000" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" class="button" name="submit"  value =" Search ">
								</p>

                            </form>
                        </div>
                </div>        

			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
			<!-- Begin Products -->
			<div id="products">
				<h2>New  Hostels</h2>

	      <div class="section group">
		  
		  <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM hostel WHERE qty!=bkqty ORDER BY hostelId DESC LIMIT 12");
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
			$result=mysqli_query($mysqli,"select * from hostel where qty!=bkqty ") or die (mysqli_error());
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