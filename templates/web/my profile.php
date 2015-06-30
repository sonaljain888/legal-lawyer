

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
								<li><a href="account">My Account</a></li>
								<li><a href="question">My Question</a></li>
								<li><a href="my_lawyers">My Lawyer</a></li>
								<li><a href="blog">My Blogs</a></li>
                                                                <li class="active"><a href="my profile">My Profile</a></li>
                                                                  <li><a href="answers">Clients  Q/A</a></li>
							</ul>
						</div>
                                            
                                             <a href="add_firm_judge" style="margin-left: 10%"><input type="button"  name="button" value="Law Firm" style="background:  #a91b0c;color: white;"/></a>
                                             <a href="add_firm_judge" style="margin-left: 2%"><input type="button"  name="button" value="Judge" style="background:  #a91b0c;color: white;"/></a>
                                            <div style="width:70%;height:5%;background:#40403E;margin-top: 3%;margin-left: 2%"><h1 style="color:white;font-family: 'Indie Flower', cursive;"align="center">My Account</h1></div>
                                            <div style="width:100%;height:100%;background:white;margin-top: 5%;margin-left:2%">
                                             
                                             <table style=" text-align:center;width:90%;"border="1">
                                  
                                    <tbody>
                <tr>
           
                 <tr> <td style=" width:100px;color: black;">Email</td><td style=" width:150px;color:black;"></td> </tr>
                 <tr> <td style=" width:100px;color: black;">mobile</td><td style=" width:150px;color: black;"></td></tr>
                <tr> <td style=" width:100px;color:black;">website</td><td style=" width:150px;color: black;"></td></tr>
                 <tr> <td style=" width:100px;color: black;">experience</td><td style=" width:150px;color: black;"></td> </tr>
                   <tr> <td style=" width:100px;color:black;">address</td><td style=" width:150px;color: black;"></td> </tr>
                   <tr> <td style=" width:100px;color:black;">category</td><td style=" width:150px;color: black;"></td> </tr>
                 <tr rowspan="2"><td colspan="2"style=" width:250px;">
                         <!--<a href="delete?id=//<?php // echo $rows['id']; ?>"class="btn btn-default" name="delete" onClick="return confirm('Are you sure want to delete record')">Delete</a>-->
                <a href="update_profile?id=" class="btn btn-default" style="background:red;color: white; " name="edit">Edit</a>
               </td></tr>
              
            </tr>
            
                   </tbody>
                                </table>
                                            </div>
                                            

					</div><!--/category-tab-->
					  <div style="margin-top: 10%">
                                           
					<!--/recommended_items-->
                                        </div>
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
	<!--/Footer-->
	