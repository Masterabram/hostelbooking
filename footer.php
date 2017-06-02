<!-- Begin Footer -->
		<div id="footer">
			<div class="boxes">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="box post-box">
						<h2>About Online Hostel Booking</h2>
						<div class="box-entry">
							<img src="images/logo.png" alt="SomStore" width="160" height="80"/>
							<p>You can be confident when you're shopping online with us. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                             such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted. </p>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<div class="box social-box">
						<h2>We are Social</h2>
						<ul>
							<li><a href="https://www.facebook.com/Hostel-Booking-179654609209580/" target="_blank" title="Facebook"><img src="images/social-icon1.png" alt="Facebook" /><span>Facebook</span><span class="cl">&nbsp;</span></a></li>
							<li><a href="https://twitter.com/HostelBooking" target="_blank" title="Twitter"><img src="images/social-icon2.png" alt="Twitter" /><span>Twitter</span><span class="cl">&nbsp;</span></a></li>							
							<li><a href="https://www.pinterest.com/hostelsystem17/" target="_blank" title="PIntrest"><img src="images/social-icon4.png" alt="Pintrest" /><span>RSS</span><span class="cl">&nbsp;</span></a></li>
							<li><a href="https://mcogol.blogspot.co.ke" target="_blank" title="Blogger"><img src="images/social-icon7.png" alt="Blogger" /><span>Blogger</span><span class="cl">&nbsp;</span></a></li>
						</ul>
						<div class="cl">&nbsp;</div>
					</div>
					<div class="box">
						<h2>Information</h2>
						<ul>
							<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
							<li><a href="about.php" title="About Us">About Us</a></li>
							<li><a href="landlord_registration.php" title="Be part of us"> I am Landlord</a></li>
							<li><a href="contact.php" title="Contact Us">Contact Us</a></li>
							<li><a href="blog.php" title="Blog">Blog</a></li>
							<li><a href="news.php" title="News ">News</a></li>
							<?php
							if (isset($_SESSION['user_id'])){
							?>
							<li><a href="logout.php" title="Log In">Log Out( <?php echo $cred['name'];?> )</a></li>
							<?php }else{ ?>
							<li><a href="sign in.php" title="Log In">Log In</a></li>
							<li><a href="customer.php" title="Account">Account</a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="box last-box">
						<h2>Locations</h2>
						<ul>
							<li><a href="more.php?location=<?php echo "Luanda";?> & price=<?php echo "100000";?>" title="Luanda">Luanda</a></li>
							<li><a href="more.php?location=<?php echo "Market";?> & price=<?php echo "100000";?>" title="Market">Market</a></li>
							<li><a href="more.php?location=<?php echo "Nyawita";?> & price=<?php echo "100000";?>" title="Nyawita">Nyawita</a></li>
							<li><a href="more.php?location=<?php echo "Mabungo";?> & price=<?php echo "100000";?>" title="Mabungo">Mabungo</a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="carts">
						<ul>
							<li><span>We accept</span></li>
							<li><a href="#" title="MPESA"><img src="images/zaad.png" alt="Zaad Service" /></a></li>
							<li><a href="#" title="cASH"><img src="images/suncart.png" alt="Somstore" /></a></li>
				
						</ul>
					</div>	<p>&copy; Hostel Booking <a href="index.php"><i><font color="fefefe"> Welcome To Online Hostel Booking Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2017 Abraham Mcogol All rights reserved. 
				</div>
				<!-- End Shell -->
			</div>
		</div>
		<!-- End Footer -->
		
<div class="shout_box">
    <div class="header"> live Discussion  <div class="close_btn">&nbsp;</div></div>
    <div class="toggle_chat">
	    <div class="message_box">
	    </div>
	    <div class="user_info">
	    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
	    <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
	    </div>
    </div>
</div>
	
	</div>
	<!-- End Wrapper -->
</body>
</html>