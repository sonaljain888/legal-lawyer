<header id="header"><!--header-->

		<div class="header_top"><!--header_top-->
			
                    <div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +00  000 000 000</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@lawyerlegal.com</a></li>
                                                                
							
                                                    <div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									For User
									<span class="caret"></span>
								</button>
                                                            <ul class="dropdown-menu" style="min-width:845px;left: -68px;">
                                                                <li>
                                                                 <div class="tab-pane fade active in" id="tshirt" style="margin-left: 1%;">
                                                            
                                                             <?php 
                                                             include 'admin/db.php';
                                                                $select = mysql_query("SELECT * from page_manu_category where isuser=1 and isactive=1");
                                                                while($row = mysql_fetch_array($select))
                                                                {
                                                                ?>
								<div class="col-sm-3" style="width:20%">
									<div>
										<div class="single-products">
											<div style="height:61px;margin-top: 36px;">
                                                                                            <img src="admin/images/<?php echo $row['logo'];?>" name="logo" rel="logo"alt=""  style="width: 30px;height: 30px;margin-left:45px;"/>
												<a href="<?php if($row['url']!="0"){ echo $row['url']; }else {?>India?name=<?php echo $row['name'];}?>" style="width: 150px;background:none;border:1px black solid;" class="btn btn-default add-to-cart"><?php echo $row['name'];?></a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php } ?>    
							</div>
								 </li>
                                                            </ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									For Lawyer
									<span class="caret"></span>
								</button>
								 <ul class="dropdown-menu" style="min-width: 904px;left: -138px;">
                                                                <li>
                                                                <div class="tab-pane fade active in" id="tshirt" style="margin-left: 1%;">
                                                                    
                                                            <?php 
                                                             include 'admin/db.php';
                                                                $select = mysql_query("SELECT * from page_manu_category where islawyer=1 and isactive=1");
                                                                while($row = mysql_fetch_array($select))
                                                                {
                                                                ?>
                                                                    <div class="col-sm-3" style="width:20%">
									<div>
										<div class="single-products">
											<div class="productinfo text-center">
                                                                                            <img src="admin/images/<?php echo $row['logo'];?>" name="logo" rel="logo"alt=""  style="width: 30px;height: 30px;margin-left:45px;"/>
												<a href="<?php if($row['url']!="0"){ echo $row['url']; }else {?>India?name=<?php echo $row['name'];}?>" style="width: 150px;background:none;border:1px black solid;" class="btn btn-default add-to-cart"><?php echo $row['name'];?></a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php } ?>    
							</div>
								 </li>
                                                            </ul>
                                                           
							</div>
						</div>
                                                                </ul>
						</div>
                                            
					</div>
					<div class="col-sm-6">
                                              
						<div class="social-icons pull-right">
                                                   
							<ul class="nav navbar-nav">
                                                            <li><a href="#" style="padding-top: 4%;color:#FE980F;">Welcome  <?php echo $login_session; ?></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php" >
                                                            <img src="images/home/logo.png" height="60" width="70" alt="" />
                                                            <span ><font style="font-size: 48px; font-weight: bold;color: #FE980F;">L</font><span style="font-size: 32px;">egal Lawyer</span> </span></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                                           <?php 
                                                             include 'admin/db.php';
                                                                $select = mysql_query("SELECT * from menu where isactive=1 ");
                                                                while($row = mysql_fetch_array($select))
                                                                {
                                                                ?>
                                                            <li><a href="<?php if($row['url']=="0"){?> India?id=<?php echo $row['menu_id']; } else { echo $row['url'];}?>"><?php echo $row['menu_name'];?></a></li>
                                                             <?php }?>
                                                             <?php

$email = $_SESSION['login_user'];
$query1=mysql_query("SELECT * 
FROM lawyer_registration
WHERE email =  '$email'");
$query2=mysql_fetch_array($query1);
$id=$query2['role_id'];

?>
                                                            <li><a href="<?php if($query2['role_id']=="2"){?> user <?php } else { ?> welcome<?php }?>"> Register Lawyer</a></li>
                                                           
                                                            <li><a href="logout"><i class="fa fa-lock"></i>Sign Out</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	 
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
                                                    <img src="images/home/add.png" width="500" height="40"/>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header>