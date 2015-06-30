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
                                                                    <a href="#details" data-toggle="tab">User Update Account</a>
                                                                </li>

							</ul>
						</div>
					<form id="form_background" action="" method="POST">
                        <table height="400" align="center" width="80%">
                          
                                <td id="label">Name:</td>
                                <td><input id="text" type="text" name="name" placeholder="Name" required="" value=""/></td>
                            </tr>
                             <tr>
                                <td id="label">Email:</td>
                                <td><input id="text"type="text" name="email" placeholder="Email" required="" value=""/></td>
                            </tr>
                           
                            <tr>
                                <td id="label">Mobile No:</td>
                                <td><input id="text"type="text" name="mobile" placeholder="Mobile No" value=""/></td>
                            </tr>
                           <tr>
                                <td id="label">website:</td>
                                <td><input id="text"type="text" name="mobile" placeholder="Mobile No" value=""/></td>
                            </tr
                      <tr>
                                <td id="label">Experience:</td>
                                <td><input id="text"type="text" name="mobile" placeholder="Mobile No" value=""/></td>
                            </tr
                            <tr>
                                <td id="label">Address:</td>
                                <td><input id="text"type="text" name="mobile" placeholder="Mobile No" value=""/></td>
                            </tr
                             <tr>
                                <td id="label">Practicing Courts:</td>
                                <td><input id="text"type="text" name="mobile" placeholder="Mobile No" value=""/></td>
                            </tr
                             <tr>
                                 <td colspan="4" align="center"><input type="submit" value="update" name="edit" style="width:150px;background: red;height: 45px;color: white" onClick="return confirm('Are you sure want to Edit some data')" />&nbsp;&nbsp;&nbsp;<a href="account"><input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></a></td>
                            </tr>
                        </table>
                    </form>
					</div>
					
					
					
				</div>
					</div>
                                        
                                          
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
