<?php include 'header.php'; ?>

		<!-- Begin Main -->
		<div id="main" class="shell">
     <br>
	
<div class="viewcart">
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
 $sql = "SELECT * FROM hostel WHERE 1 AND hostelId = '{$id}' ";
 $row = mysqli_fetch_assoc(mysqli_query($connection, $sql));

   // echo $row['price'];

?>	

<div style="width:940px;height:500px;">
<div style="float:left; width:510px" class="product-image">
   <img src="landlord/hostel_image/<?php echo $row['img1'];?>" style="width:500px;height:400px;" alt="..." />
</div>
<?php 
$query= "SELECT * FROM hostel_image WHERE 1 AND hoselId = '{$id}' ";
$key = mysqli_fetch_assoc(mysqli_query($connection, $query));

if (!$key['img1'] & !$key['img2'] & !$key['img3'] & !$key['img4']){
?>

<div class="clearfix" style="float:left; width:120px;">
<h4>No Avater Images</h4>
</div>

<?php 
}
else
{
?>

<div class="clearfix" style="float:left; width:120px;">

    <ul class="" >
        <li><a><img src="landlord/hostel_image/<?php echo $key['img1']; ?>" class="avatar"  style="height:96px; width:115px;" alt="..." /></a></li>
        <li><a><img src="landlord/hostel_image/<?php echo $key['img2'];?>" class="avatar" style="height:96px; width:115px;" alt="..."  /></a></li>
        <li><a><img src="landlord/hostel_image/<?php echo $key['img3']; ?>" class="avatar"  style="height:96px; width:115px;" alt="..." /></a></li>
        <li><a><img src="landlord/hostel_image/<?php echo $key['img4'];?>" class="avatar" style="height:96px; width:115px;" alt="..."  /></a></li>
   </ul>
</div>
<?php }?>

<div style="float:right; width:300px; text-margin:35px">
        <h1 style="height:50px;"><?php echo $row['name'];?></h1>

        <div style="margin-left:30px;">
        	<h3>Located in <?php echo $row['location'];?> </h3>
        </div>

        <div style="height:250px; margin-left:30px;">
          <h2> Facilities Offered include </h2>
          	<?php echo 'Type : '. $row['type'];?> <br/>
          	<?php echo 'Size : '. $row['size'];?>
            <?php echo $row['description'];?>
        </div>
    
        <div style="height:50px; margin-left:30px;">
          
            <h1 class="price">Ksh<?php echo $row['price'];?></h1>

            <span class="price-tax">Ex Tax: Nill</span>
            <br>
         
        </div>

        <div id="slider" style="height:50px;">
            <a href="process_payment.php?id=<?php echo $id; ?>" class="button" title="Buy now"><span>BooK now</span></a>
        </div>       
</div>

</div>



    </div><br><br><br>

			
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
			<br> <br> <br> <br> 
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<h2>Welcome!</h2>
					<img src="images/logo.png" alt="Post Image" height="160" width="260"/>
					You can be confident when you're shopping online with SomStore. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->

			<div class="cl">&nbsp;</div>
			
			
		</div>
		<!-- End Main -->
<?php include 'footer.php';?>