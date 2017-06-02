<?php include 'header.php';?>

	<!-- Begin Slider -->
		<div id="slider">
		
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
           
	
<script type="text/javascript">
// $(document).ready(function() { 

//     $('#btnSubmit').click(function() {  

//         $(".error").hide();
//         var hasError = false;
//         var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

//         var emailaddressVal = $("#email").val();
//         if(emailaddressVal == '') {
//             $("#email").after('<span class="error">Please enter your email address.</span>');
//             hasError = true;
//         }

//         else if(!emailReg.test(emailaddressVal)) {
//             $("#email").after('<span class="error">Enter a valid email address.</span>');
//             hasError = true;
//         }

//         if(hasError == true) { return false; }

//     });
// });

</script>

					
<div id="form_wrapper" class="form_wrapper">
	 <table>
					<form class="register active"  id="myForm" method="POST" action="insertLandlord.php">

   
       <th colspan="3"><h2>LANDLORD REGISTRATION:</h2> </th> 
						
						
						   
   
   <tr>
    <td>  

		<label> FullName:</label>
		<input type="text" name="name" />
		<span class="error">This is an error</span>

	
	</td>
    <td>   


        <label> Email:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>
		
							
   </td>


   </tr>
   
    <tr>
    <td>  

		<label>Password:</label>
		<input type="password" name="password1" id="password1" />

	</td>
	
   <td>   
     	  <label> Ownership Type:</label>
			<select name="ownership">
				<option value="Male"> Individual Property </option>
				<option value="Female"> Group Investment </option>
			</select>
			<span class="error">This is an error</span>

	</td>

   </tr>
   
   <tr>
    <td>  

		<label> Re-Password:</label>
		<input type="password" name="password2"id="password2" />  
		<div id="pass-info"> </div>
	</td>
	
   <td>   
     
			<label> Phone:</label>
			<input type="text" name="tell" id="tell"/>
			<span class="error">This is an error</span>

   </td>
   
   
   </tr>
   
    <tr>
    <td>   
	
            <label> Natiomal ID No:</label>
			<input type="text" name="nationalId" id="nationalId"/>
			<span class="error">This is an error</span>

   </td>
   
    <td>   

        <label>Gender:</label>
		<select name="sex">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		<span class="error">This is an error</span>   
		

   </td>
   
   
   </tr>
   
   
   <tr>
      <td class="keeplogin">   
  
			<input type="checkbox" name="terms" id="loginkeeping" value="agree" /> 
			<label for="loginkeeping">I Agree to Terms and Conditions </label>
	
    </td>
    <td class="keeplogin">   
  
	
    </td>
   

   
   </tr>
   
   
  <tr>
						<div class="bottom">

						<td colspan="3">	
						<button  id="btnSubmit" type="submit" name="submit"> Register</button>
							
							<div class="clear"></div>
						</div>
						
		
   </tr>
					</form>

					</table>
					
					
<script type="text/javascript">

// $(document).ready(function(){ 
//     $("#btnSubmit").click(function() { 
//     alert("Are You Want To Save A New Customer !!!");
//         $.ajax({
//         cache: false,
//         type: 'POST',
//         url: 'insertCustomer.php',
//         data: $("#myForm").serialize(),
//         success: function(d) {
//             $("#someElement").html(d);
//         }
//         });
//     }); 
// });

</script>

					
				</div>
	   			

			</div>
			<!-- End Content -->
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h2>Find Us Here</h2>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h2>Company Information :</h2>
						    	<p><big>Hostel Booking</big> Is A Online Hostel Booking originally for Maseno environment </p>
						   		<p>  </p>
						   		
								 <BIG>PHONE</BIG>
				   		          <p>+254-(7)-90463533</p>
				   		          <BIG>EMAIL</BIG>
				 	 	          <p>hostelsystem17@gmail.com</p>
								  <p>abramogol@gmail.com</p>
								  <BIG>FOLLOW US</BIG>
				   		          <p>Facebook , Twitter </p>, <span>Twitter</span></p>
				   </div>
				 </div>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div> 
			<!-- Begin Products -->

			
	
		</div>
		<!-- End Main -->
		<?php include 'footer.php'; ?>