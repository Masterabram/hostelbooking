<?php include 'header.php'; ?>	
		<!-- Begin Main -->
		<div id="main" class="shell">
			
			
			
			
			
			
			<!-- Begin Content -->
			<div id="content">
			
			<br><br>
			
			<div id="kcontent">
			<?php if ($cred){ ?>
            <h2> Pay Via Mpesa Till Number 12345 </h2>
            <div id="wwrapper">
            	
                <div id="steps">
				
                    <form id="formElem" name="formElem"  action="booking.php" method="POST" class="myForm">
					
					
                        <fieldset class="step">
                            <legend>Personal Details
							</legend>
                            <p>
                                <label for="username">Full Name</label>
                                <input id="fullname" readonly="readonly" name="name" value="<?php echo $cred['name']; ?>" />
                            </p>
                            <p>
                                <label for="email">Email</label>
                                <input id="email" name="email" readonly="readonly" value="<?php echo $cred['email']; ?>"  placeholder="jananalibritish@gmail.com" type="email" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">Telephone Number</label>
                                <input id="pcode" name="tell" readonly="readonly" type="text" value="<?php echo $cred['tell']; ?>" AUTOCOMPLETE=OFF />
                            </p>

                        </fieldset>
                        <fieldset class="step">

                         <legend>More Details
						 			 
						 </legend>
                           <p>
                                <label for="phone"> Gender:</label>
                                		<select name="gender" id="select" readonly="readonly">
	
												  <option value="Male" countrynum="93">Male</option>
												  <option value="Female" countrynum="358">Female</option>

										</select>
                            </p>
                            <p>
                                <label for="country">County</label>
                                		<select name="county" id="select" readonly="readonly">
										<?php $result=mysqli_query($mysqli,"select county_name from counties ORDER BY county_name ASC") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>				
										<option value="<?php echo $row['county_name']?>"><?php echo $row['county_name']?></option>			
										<?php } ?>

										</select>    

                        </p>
                             <p>
                                <label for="phone"> Year and Semester of Study:</label>
                                		<select name="study" id="select">
	
												  <option value="Year 1 Semester 1" >Year 1 Semester 1</option>
												  <option value="Year 1 Semester 2" >Year 1 Semester 2</option>
												  <option value="Year 2 Semester 1" >Year 2 Semester 1</option>
												  <option value="Year 2 Semester 2" >Year 2 Semester 2</option>
												  <option value="Year 3 Semester 1" >Year 3 Semester 1</option>
												  <option value="Year 3 Semester 2" >Year 3 Semester 2</option>
												  <option value="Year 4 Semester 1" >Year 4 Semester 1</option>
												  <option value="Year 4 Semester 2" >Year 4 Semester 2</option>

										</select>
                            </p>														 

							<p> 
								 <label for="Address"> student Number:</label>
                                <input id="phone" name="student_id" readonly="readonly" placeholder="e.g. ci/00096/014" value="<?php echo $cred['studentId'];?>" AUTOCOMPLETE=OFF />
                            </p>
							
                        </fieldset>
                        <fieldset class="step">
                            <legend>Booking Duration 		
							</legend>
							
							 <p>
                                <label for="name"> Booking Duration </label>
									    <select name="duration" id="select">
	
												  <option value="3" countrynum="93"> Per Semester</option>
												  <option value="12" countrynum="358"> 1 Year </option>

										</select>
                            </p>
							

 			</fieldset>
<?php
$hostel = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM hostel WHERE hostelId='{$_GET['id']}' "));

?>
<input type="hidden" name="hostelid" value="<?php echo $hostel['hostelId']; ?>"  />
<input type="hidden" name="landlordid" value="<?php echo $hostel['landlordId']; ?>"  />
<input type="hidden" name="price" value="<?php echo $hostel['price']; ?>"  />
<input type="hidden" name="tenantid" value="<?php echo $cred['tenantId']; ?>"  />

						<fieldset class="step">
                            <legend>Confirm Payment
							</legend>
							<p>
								Remember Sir/Madam Please user your number <strong> <?php echo $cred['tell']; ?> </strong> to pay
								 <strong> KSHS: <?php echo $hostel['price']; ?> </strong>
								procced with payment to dully finish your booking. You will get an sms confirmation from us.
								We will not be liable be liable for any transaction done with a diffrent line.
							</p>
                            <p class="submit">
							
                                <button id="registerButton" type="submit" name="submit"  title="Click On Payment Method"> Proceed</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="nav" style="display:none;">
                    <ul>
                        <li class="doortay">
                            <a href="#">Details</a>
                        </li>
                        <li>
                            <a href="#">More Details</a>
                        </li>
                        <li>
                            <a href="#">Booking</a>
                        </li>
                        <li>
                            <a href="#">Payment Confirmation</a>
                        </li>
						
                    </ul>
                </div>
            </div>

<?php }else{ ?>

<div id="wwrapper">

	    <div id="login" class="animate form">
	        <form  action="userValidate.php" method="post" autocomplete="on"> 
	            <h1>Please Login First</h1><?php echo errors();?> 
	            <p> 
	                <label for="username" class="uname" > Your Email </label>
	                <input type="text" id="shout" name="email" required="required" type="text" placeholder="jananalibritish@gmail.com"/>
	            </p>
	            <p> 
	                <label for="password" class="youpasswd" > Your Password </label>
	                <input type="password" id="shout" name='password' required="required" type="password" placeholder="*********" /> 
	                <input type="hidden" value="<?php echo $_GET['id']; ?>" id="shout" name='id'/> 
	            </p>
	            <p class="keeplogin"> 
				</p>
	            <p class="login button"> 
	                <input id="shout" type="submit"  name="logg"  value =" Login ">
				</p>

	        </form>
	    </div>

</div>

<?php } ?>
        </div>
		
		
		
 <script>
<script type="text/javascript">

$(document).ready(function(){ 
    $("#registerButton").click(function() { 
     
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'InsertPayment.php',
        data: $(".myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>	
		
			</div>
			
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>Top Recent Hostels</h2>
						<div class="brands">
							<ul>
								<?php $result=mysqli_query($mysqli,"select * from hostel where qty!=bkqty order by hostelId desc Limit 3") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>
								<!-- <li><a href="warehouse_1.php" title="Brand 1"><img src="images/k.png" width="103" height="51" alt="Brand 1" /></a></li> -->
					<li>
						<a href="view_cart.php?id=<?php echo $row['hostelId']; ?>" title="Product Link"><img src="landlord/hostel_image/<?php echo $row['img1']?>" height='100px' width='230px' alt="IMAGES" /></a>
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
			<br><br>
	        <div class="post">
					<h2>Welcome!</h2>
					<img src="images/post-img.jpg" alt="Post Image" />
					<p>Lestibulum vel libero posuere velit faucibus pellentesque. Duis eleifend libero vitae justo porta eget interdum ligula porta. Fusce tristique, ante sit amet hendrerit suscipit, leo metus vehicula sem, eget scelerisque felis leo id magna. Proin imperdiet ullamcorper tellus sed consectetur. Aliquam erat volutpat. Integer orci urna, posuere sed bibendum id, tincidunt non augue. </p>
					<p>Cras mauris sem, posuere vel semper sed, condimentum non dui. Suspendisse vestibulum ligula eget urna posuere sagittis. Suspendisse sed nisl massa. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
		</div>
		<!-- End Main -->

<?php include 'footer.php'; ?>		