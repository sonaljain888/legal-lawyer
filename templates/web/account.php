
	<!--/header-->
	<?php include 'header.php';?>	
	<section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
			
					<div class="category-tab" ><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="welcome">My Home</a></li>
								<li class="active"><a href="account">My Account</a></li>
								<li><a href="question">My Question</a></li>
								<li><a href="lawyers">My Lawyer</a></li>
								<li><a href="blog">My Blogs</a></li>
                                                                <li><a href="my profile">My Profile</a></li>
                                                                <li><a href="answers">Clients  Q/A</a></li>
                                      
							</ul>
						</div>
                                            
                                           <div class="col-sm-9 padding-right"style="margin-top: 1%;">
                                    <div class="col-sm-12">
							<ul class="nav nav-tabs" style="background: #40403E;">
								<li class="active">
                                                                    <a href="#details" data-toggle="tab">User Account</a>
                                                                </li>

							</ul>
						</div>
			<form id="form_background" action="" method="POST">
                        <table height="400" align="center" width="300px;">
                         
        
                               <tr>
                                <td id="label">Name:</td>
                                <td style=" color:#000;font-weight: bold;"></td>
                            </tr>
                             <tr>
                                <td id="label">Email:</td>
                                <td style="color:#000;font-weight: bold;"></td>
                            </tr>
                           
                            <tr>
                                <td id="label">Mobile No:</td>
                                <td style="color:#000;font-weight: bold;"></td>
                            </tr>
                             <tr>
                                <td id="label">Address:</td>
                                <td style="color:#000;font-weight: bold;"></td>
                            </tr>
                           <td id="label">Experience:</td>
                                <td style="color:#000;font-weight: bold;"></td>
                            </tr>
                          
                      </tr>
                           <td id="label">Practicing Courts:</td>
                                <td style="color:#000;font-weight: bold;"></td>
                            </tr>
                             <tr>
                                 <td colspan="4" align="center"> <a href="" class="btn btn-default" style="background:red;color: white; width:100px "  name="edit">Edit</a>
               </td></tr>
             
                        </table>
                    </form>	
					
					</div><!--/category-tab-->
					
					<!--/recommended_items-->
					
				</div>
					</div><!--/category-tab-->
                                        
                                            <?php// include 'include/recommended.php';?>
					<!--/recommended_items-->
                                        
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
	<!--/Footer-->
	
