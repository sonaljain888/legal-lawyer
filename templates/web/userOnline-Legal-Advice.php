<?php include 'header.php';?>
    <style>
        #first_td
        {
            width: 25%;
            text-align: right;
        }
        #second_td
        {
            width: 80%;
            height: 35px;
        }
        #teatarea_td
        {
            width: 80%;
            height: 200px;
            border:1px #000 solid;
        }
    </style>
    <section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
                                
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<!--<li><a href="#details" data-toggle="tab">Time line</a></li>-->
								<li class="active"><a href="#reviews" data-toggle="tab" align="center">Online-Legal-Advice</a></li>
<!--                                                                <li><a href="#companyprofile" data-toggle="tab">More</a></li>-->
								<!--<li><a href="#tag" data-toggle="tab">Tag</a></li>-->
							</ul>
						</div>
				
							
                                         <form style="border: 1px black;" action="" method="POST">
                                    <?php //   echo "<font color = 'blue' size='4' style='margin-left:100px'>$msg</font>";?>
                        <table height="650px;">
                            <tr>
<!--                                <td id="first_td">Email id : </td>-->
                                <td><input type="text" name="reg_id" value="" id="second_td" style="display:none;"/></td>
                            </tr>
                            <tr>
                                <td id="first_td">Describe your Question/Problem (Min 60 characters) : </td>
                                <td><textarea id="teatarea_td" name="question" placeholder="Describe your Question/Problem (Min 60 characters)"></textarea></td>
                            </tr>
                             <tr>
                                <td id="first_td">Heading (Min 20 characters) : </td>
                                <td><input type="text" id="second_td" name="heading" placeholder="Provide an appropriate heading for your question (minimum 20 characters)"/></td>
                            </tr>
                             <tr>
                                <td id="first_td">Topic : </td>
                                <td><select id="second_td" name="topic_id">
                                          <option value="">--Select Topic--</option>
                      
                        <option value="
                                "></option>
                         
                    </select>
                                    
                                    </td>
                               </tr>
                             <tr>
                                <td id="first_td"> City : </td>
                                <td> <select required="" name="city_id" class="form-control">
                        <option value="">--Select City--</option>
                       
                        <option value=""></option>
                         
                    </select></td>
                            </tr>
                            <tr hidden="">
                                <td id="first_td"> Status : </td>
                                <td><input type="text" name="isactive" value="1" id="second_td" placeholder=""/></td>
                            </tr>
                            

                             <tr>
                                 <td colspan="4" align="center"><input type="submit" name="submit" value="Submit" style="width:150px;background: red;height: 45px;color: white" />&nbsp;&nbsp;&nbsp;<a href="question.php"><input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></a></td>
                            </tr>
                        </table>
                    </form>
                        
                                            <a href="#"><img src="images/home/disclaimer.png" alt="disclaimer" width="30" height="30">Disclaimer</a> 
                                            <a href="#"><img src="images/home/privacy.png" alt="privacy" width="30" height="30">Need More Privacy?</a>
                                            <a href="#"><img src="images/home/help.png" alt="help" width="30" height="30">&nbsp;Need Help?</a>
                                            <p><b>Note : </b>Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below Enter the characters in the box below. </p>
				</div>
                                    
			
		</div>
	</section>
<?php include 'footer.php';?>		
    <!--/Footer-->
	
