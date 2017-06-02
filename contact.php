 <?php include 'header.php';?>

		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
		<!-- Begin Slider -->
		<div id="slider">
		
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
              <div class="support_desc">
  				<h2>Live Support</h2>
  				<p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Welcome To Live Technical Support</span></p>
  				<p> Admin On behalf on <b>Mcogol</b> company we have welcome you 24/7 live support 
				  you can ask what ever you think about our Company.</p>
  			</div>

				<div id="form_wrapper" class="form_wrapper">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="POST" action="feedback_processor.php" id="frmcontact">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="name" id="name"value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" name="email" id="email"value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="phone" id="phone"value=""></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="msg"  id="textarea"> </textarea   maxlength="100"></span>
						    </div>
						   <div>
						   		<span><input type = "submit" name = "submit" id = "submit" value="SUBMIT"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				
									
<script type="text/javascript">

$(document).ready(function(){ 
    $("#submit").click(function() { 
 
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'feedback_processor.php',
        data: $("#frmcontact").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>
				

			</div>
			<!-- End Content -->

	 
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h2>Find Us Here</h2>
					    	  <div class="map">
					    	  <!-- <img id="small-map" height="198" width="254" alt="Google Map" src="https://maps.google.com/maps?q=-0.0038450999999999997,34.6137253" /> -->
							   	    <iframe width="120%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_">
				     	<h2>Company Information :</h2>
						    	<p><big>Hostel Booking</big> Is A Online Hostel Booking originally for Maseno environment </p>
						   		<p>  </p>
						   		
								 <BIG>PHONE</BIG>
				   		          <p>+254-(7)-90463533</p>
				   		          <BIG>EMAIL</BIG>
				 	 	          <p>hostelsystem17@gmail.com</p>
								  <p>abramogol@gmail.com</p>
								  <BIG>FOLLOW US</BIG>
				   		          <p>Facebook , Twitter </p>
				   </div>
				 </div>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
			<!-- Begin Products -->
		</div>
		<!-- End Main -->
					
							 <div class="shout_box">
     <div class="header"> Hostel Booking Live Chart<div class="close_btn">&nbsp;</div></div>
     <div class="toggle_chat">
     <div class="message_box">
     </div>
     <div class="user_info">
     <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="25" />
     <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="200" /> 
     </div>
     </div>
	 </div>
	</div>
	<!-- End Wrapper -->	
</body>
</html>