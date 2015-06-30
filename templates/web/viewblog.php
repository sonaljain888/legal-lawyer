
	<!--/header-->
	<?php include 'header.php';?>


	<section>
		<div class="container">
			<div class="row">
				<?php include 'include/sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab" ><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="welcome">My Home</a></li>
								<li><a href="account">My Account</a></li>
								<li><a href="question">My Question</a></li>
								<li><a href="my_lawyers">My Lawyer</a></li>
								<li class="active"><a href="blog">My Blogs</a></li>
                                                                <li><a href="my profile">My Profile</a></li>
                                                                  <li><a href="answers">Clients  Q/A</a></li>
							</ul>
						</div>
                                            
                                            
                                    <table align="center" width="800" style="margin-top:-10%;">
                                       
                                        <tr><td style="color: #000;font-family: 'Indie Flower', cursive;font-size: 20px;height: 150px;border-bottom: 1px black dotted;"><?php  echo $query2['heading'];?></td></tr>
                                            <tr style="float: left;color:#FE980F;margin-top: 2%"><td>Author:>>
   

 <?php// echo $query2['state']; ?><a class="feed-link" href="#back" style="float:right;">

    Post Comment 

</a></td></tr>
                                            <tr style="margin-top: 4%"><td style="font-size: 15px; color: #000;margin-top: 4%"><img src="admin/images/blog.jpg" width="35px" height="30px;" style="margin-left:1%;"/><br>
                                                                                          </td></tr>
                                         
                                        </table>
                                            <form method="POST" action="" style="margin-top:10%;width:70%;margin-left: 15%;">
                  		Post Comment
				   		<a href="#back"><span class="label"><b>Post Comment</b></span></a><br>
					    <textarea rows="4" style="width:100%; border:1px solid #CCC;" name="comment" id="comment"></textarea><br><br>

                        <br>

                    
                        <a href="blog.php"> <input name="back"  value="Back" id="back"  type="button" style="background: gray;width: 10%;height: 10%;color: white;"></a>
			            <input name="submit" style="background:red;color: white;" value="Submit"  type="submit">
				  </form>
                                            
  
					</div><!--/category-tab-->
					<?php //include 'include/recommended.php';?>
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
	<!--/Footer-->


