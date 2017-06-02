<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li><a href="index.php" title="index.php"> Home </a></li>
					<li><a href="all_hostels.php"> All Hostels </a></li>
					<li>
						<a href="all_hostels.php">Location</a>
						<div class="dd">
							<ul>
							<?php $result=mysqli_query($mysqli,"select distinct location from hostel") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>
								<li>
									 <a href="location.php?location=<?php echo $row['location']?>"><?php echo $row['location']?></a>
									<div class="dd">
										<ul>
											<li><a href="more.php?location=<?php echo $row['location']?> & price=20000"> Price Below KSHS 20,000</a></li>
                                            <li><a href="more.php?location=<?php echo $row['location']?> & price=100000"> Price Above KSH 20,000</a></li>
										</ul>
									</div>
								</li>
							<?php } ?>								
							</ul>
						</div>
					</li>
					<li>
						<a href=""> Price </a>
						<div class="dd">
							<ul>
								<li><a href="price.php?price=<10">Less than 10,000</a></li>
								
								<li><a href="price.php?price=10-20">Between 10,000 - 20,000</a></li>
								
								<li><a href="price.php?price=20-30">Between 20,000 - 30,000</a></li>
								
								<li><a href="price.php?price=30>">Above 30,000</a></li>
								
							</ul>
						</div>
					</li>
					<li>
						<a href=""> Type </a>
						<div class="dd">
							<ul>
								<li><a href="type.php?type=Self Contain">Self Contain</a></li>
								
								<li><a href="type.php?type=Bed Sitter">Bed Sitter</a></li>
								
								<li><a href="type.php?type=Single room">Single room</a></li>
								
							</ul>
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
					  <li><a href="blog.php" title="Blog">Blog</a></li>
					  <li><a href="news.php" title="News ">News</a></li>
					  <?php if(!isset($_SESSION['user_id'])){ ?>
					  <li><a href="customer.php">Free Sign Up</a> </li>
					  <?php } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>