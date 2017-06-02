<?php include 'header.php'; ?>

		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				
				
				<div class="post">
				
					<h1 align="center"><font color="blue">Blog</font></h1><br>
					<h2>Customer</h2>
					<img src="images/abram.jpg" alt="Post Image" width="140" height="159" />
					<p>Abraham Otieno Ogol. </p>

					You can be confident when you're Booking your Hostel online with us. Our Secure online hostel booking website ensures that you book your hostel at your perfect spot without having to travel in person. We use industry standard 128-bit encryption. Our website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. 

					<p>. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>Customer</h2>
					<img src="images/abram.jpg" alt="Post Image" width="140" height="159" />
					<p>Abraham Otieno Ogol. </p>

					You can be confident when you're Booking your Hostel online with us. Our Secure online hostel booking website ensures that you book your hostel at your perfect spot without having to travel in person. We use industry standard 128-bit encryption. Our website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. 

					<p>. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>Customer</h2>
					<img src="images/abram.jpg" alt="Post Image" width="140" height="159" />
					<p>Abraham Otieno Ogol. </p>

					You can be confident when you're Booking your Hostel online with us. Our Secure online hostel booking website ensures that you book your hostel at your perfect spot without having to travel in person. We use industry standard 128-bit encryption. Our website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. 

					<p>. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>Customer</h2>
					<img src="images/abram.jpg" alt="Post Image" width="140" height="159" />
					<p>Abraham Otieno Ogol. </p>

					You can be confident when you're Booking your Hostel online with us. Our Secure online hostel booking website ensures that you book your hostel at your perfect spot without having to travel in person. We use industry standard 128-bit encryption. Our website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. 

					<p>. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>Customer</h2>
					<img src="images/abram.jpg" alt="Post Image" width="140" height="159" />
					<p>Abraham Otieno Ogol. </p>

					You can be confident when you're Booking your Hostel online with us. Our Secure online hostel booking website ensures that you book your hostel at your perfect spot without having to travel in person. We use industry standard 128-bit encryption. Our website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. 

					<p>. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>													
			</div>
			<!-- End Content -->
			
			
<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>Top Recent Hostels</h2>
						<div class="brands">
							<ul>
								<?php $result=mysqli_query($mysqli,"select * from hostel order by hostelId desc Limit 4") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>
								<!-- <li><a href="warehouse_1.php" title="Brand 1"><img src="images/k.png" width="103" height="51" alt="Brand 1" /></a></li> -->
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
						<a href="index.php" class="more" title="More Brands">All Products</a>
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
	
      <!-- Begin Products Slider -->
		<div id="product-slider">
				<h2>Our Hostels</h2>
				<ul>
				
		  	    <?php $result=mysqli_query($mysqli,"select * from hostel") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>
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

			<div class="boxes">
			
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="carts">
								<div class="shout_box">
      <div class="header"> live Discussion <div class="close_btn">&nbsp;</div></div>
     <div class="toggle_chat">
     <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
	</div>
	
					</div>	<p align="center">&copy;Mcogol.com. Group <a href="index.php"><i><font color="fefefe"> Welcome To <strong></strong> Online Hostel Booking Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
		</div>

	<!-- End Wrapper -->
</body>
</html>