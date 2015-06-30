<!--/header-->
			<?php 
include 'header.php';?>
	


	<section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab" ><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="user">My Home</a></li>
								<li><a href="useraccount">My Account</a></li>
								<li><a href="userquestion">My Question</a></li>
								<li><a href="userlawyers">My Lawyer</a></li>
								<li class="active"><a href="userblog">My Blogs</a></li>
                                                                <!--<li><a href="userprofile">My Profile</a></li>-->
                                                                      <li><a href="#">Upcomming 1</a></li>
                                                                      <li><a href="#">Upcomming 2</a></li>
							</ul>
						</div>
                                            
                                            
                                    <table align="center" width="800" style="margin-top:-10%;">
                                       
                                        <tr><td style="color: #000;font-family: 'Indie Flower', cursive;font-size: 20px;height: 150px;border-bottom: 1px black dotted;"><?php  echo $query2['heading'];?></td></tr>
                                            <tr style="float: left;color:#FE980F;margin-top: 2%"><td>Author: >>
   


    Post Comment 

</a></td></tr>
                                            <tr style="margin-top: 4%"><td style="font-size: 15px; color: #000;margin-top: 4%"><img src="admin/images/blog.jpg" width="35px" height="30px;" style="margin-left:1%;"/><br>
                                                                                          </td></tr>
                                         
                                        </table>
                                            <form method="POST" action="" style="margin-top:10%;width:70%;margin-left: 15%;">
                  		Post Comment
				   		<a name="myComment"><span class="label"><b>Post Comment</b></span></a><br>
					    <textarea rows="4" style="width:100%; border:1px solid #CCC;" name="comment" id="comment"></textarea><br><br>

                        <br>

                    
				        <input name="back" class="cancel_button_common" value="Back" onclick="history.go(-1);"  type="button" style="background: gray;width: 10%;height: 10%;color: white;">
			            <input name="submit" style="background:red;color: white;" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;" class="submit-red cancel_fo" type="submit">
				  </form>
                                            
  
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
	<!--/Footer-->
