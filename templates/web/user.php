<?php include 'header.php';?>
	<section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab" ><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">My Home</a></li>
								<li><a href="useraccount">My Account</a></li>
								<li><a href="userquestion">My Question</a></li>
								<li><a href="userlawyers">My Lawyer</a></li>
								<li><a href="userblog">My Blogs</a></li>
                                                                <!--<li><a href="userprofile">My Profile</a></li>-->
                                                                  <li><a href="#">Upcomming 1</a></li>
                                                                  <li><a href="#">Upcomming 2</a></li>
							</ul>
						</div>
                                            
                                            
                                            
                                            
                                            
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
                                                             
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                                                                            <img src="admin/images/<?php echo $row['logo'];?>" name="logo" rel="logo"alt=""  style="width: 100px;height: 75px"/>
												<a href="<?php if($row['url']!="0"){ echo $row['url']; }else {?>India?name=<?php echo $row['name'];}?>" style="width:171px;" class="btn btn-default add-to-cart"><?php echo $row['name'];?></a>
											</div>
											
										</div>
									</div>
								</div>
                                                             
							</div>					
							<div class="tab-pane fade" id="sunglass" >
<!--								
                                                           </div>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
	<!--/Footer-->
	

  
