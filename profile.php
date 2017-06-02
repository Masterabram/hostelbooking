<?php include 'header.php';?>
		<!-- End Navigation --> 

		<!-- Begin Main -->
		<div id="main" class="shell">

         <br> <br>
			<!-- Begin Content -->
			<div id="content">
			<h1>Previous Booked Address/Hostels</h1>
			

			<div class="viewcart">
 	<?php
 	$result = $mysqli->query("SELECT * FROM booking  WHERE tenantId='{$cred['tenantId']}'");
 		
	if($result)
    {
	 
		  echo '<table cellspacing="0">';
		  echo   '<thead>';
		  echo '<tr>';
		  echo '<td>#:</td>';
		  echo '<td>Name:</td>';
		  echo '<td>Location:</td>';
		  echo '<td>Year/Semester:</td>';
		  echo '<td>Price:</td>';
		  echo '</tr>';
		  echo '</thead>';

          //fetch results set as object and output HTML
          while($obj = $result->fetch_object())
        {
		
		    $rest = mysqli_fetch_assoc(mysqli_query($connection, "SELECT name,price,location FROM hostel  WHERE hostelId='{$obj->hostelId}'")); 
		    // $mysqli->query("SELECT name,price,location FROM hostel  WHERE hostelId='{$obj->hostelId}'");
		    echo '<tr class="cart-itm">';
            echo '<td> # </td>';
			echo '<td><h3>'.$rest['name'].'</h3></td> ';
            echo '<td>'.$rest['location'].'</td>';
            echo '<td>'.$obj->study.'</td>';
		    echo '<td class="p-price" style="color:green"><b>'.$rest['price'].'</b></td>';
            echo '</tr>';
			
		}
	
			echo '</table>';
   }else{        
		echo '<i><h5><marquee>Your Previous booking list is empty</marquee></h5> </i>';
	}
	
    ?>
    </div><br><br><br>


				
				<div class="post">
					<h2>Welcome!</h2>
					<img src="images/logo.png" alt="Post Image" height="160" width="260"/>
					You can be confident when you're shopping online with SomStore. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. <a href="#" class="more" title="Read More">Read More</a></p>
					
					


					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
			<h2>Customer Information</h2>
						<div class="brands">
		 <div id="form_wrapper" class="form_wrapper">			
               <?php  
		$id = $_SESSION['user_id'];
		$query = mysqli_query($mysqli,"SELECT * FROM client WHERE tenantId = '$id'") or die (mysqli_error()); 
							$result = mysqli_fetch_array($query);	
														?>
			<table>	
               <form  class="register active" action="custUpdate.php" method="POST" autocomplete="off">
			     <tr>
				 
                  <td><input name="tenantId" type="hidden" id="namebox" value="<?php echo $result['tenantId']?>"/></td></tr>
				  <tr>
				 
                  <td>  <label>Full Name:</label><input name="name"  type="text" id="namebox" value="<?php echo $result['name']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Student Username:</label><input name="studentid"  type="text" id="namebox" value="<?php echo $result['studentId']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Phone:</label><input name="tell"  type="text" id="namebox" value="<?php echo $result['tell']?>"/></td></tr>
                   <tr>
				   
                  <td> <label>Email:</label><input name="email" type="text" id="namebox" value="<?php echo $result['email']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Gender:</label> <input name="sex"  type="text" id="namebox" value="<?php echo $result['sex']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Date Of Birth:</label> <input name="dob"  type="text" id="namebox" value="<?php echo $result['dob']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>National ID NO#:</label> <input name="nationalId"  type="text" id="namebox" value="<?php echo $result['nationalId']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>County:</label> <input name="county"  type="text" id="namebox" value="<?php echo $result['county']?>"/></td></tr>
				  
			
						<td colspan="3">	
						
						<button type="submit"  name="submit" value="Update" class="a-btn"><span class="a-btn-text"> Update</span> </button>
						
						</td>
					
			</form>
			</table>
		 </div>
			
		<div class="cl">&nbsp;</div>
						</div>
						
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
			
			

			
				<!-- Begin Products Slider -->
			<div id="product-slider">
				<h2>Our Hostels</h2>
				<ul>
				
		  	<?php
			$result=mysqli_query($mysqli,"select * from hostel") or die (mysqli_error());
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

											             
<?php
   $ids = $_SESSION['user_id'];
		$qry = mysqli_query($mysqli,"SELECT * FROM client WHERE tenantId = '$ids'") or die (mysqli_error()); 
							
?>

	</div>
		<!-- End Main -->

	<?php include 'footer.php'; ?>