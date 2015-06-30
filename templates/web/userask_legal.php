
        <!--/header-->
        <?php include 'header.php'; ?>

        <!--	Welcome<?php //echo $login_session;   ?>
                              <a href="logout.php">Sign Out</a>-->
        <section>
            <div class="container">
                <div class="row">
                    <?php include 'sitebar.php'; ?>
                    <div class="col-sm-9 padding-right">


                        <div class="category-tab" ><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li><a href="user">My Home</a></li>
                                    <li><a href="useraccount">My Account</a></li>
                                    <li class="active"><a href="userquestion">My Question</a></li>
                                    <li><a href="userlawyers">My Lawyer</a></li>
                                    <li><a href="userblog">My Blogs</a></li>
                                      <li><a href="#">Upcomming 1</a></li>
                                      <li><a href="#">Upcomming 2</a></li>
                                </ul>
                            </div>

                            <div style="color:#000; font-size:13px; font-weight:bold; margin-top:10%;  border:1px  dashed #CCC; padding:3px;">         
                               Fully Paid Questions can only do Reply, proceed with Pay Now button to continue. 
                    

                        
                            <div style="margin-top: 5%; color: blue; text-align: left;">
                                <!--<button  type="button" style="background:#054F73;margin-left: 2%; color: white" class="btn btn-default">Replay</button></a>-->
                                <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 1%;"><img src="admin/images/paynow.png" width="80px" height="40px;"/></a> <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;">Why Paid Service?</a><br><br>
                               
                                <table align="center" width="800">
 
                                    <tr>
                                        <td>Topic:</td>
                                            
                                       
                                    </tr>
                                    <tr style="float: left;color:#FE980F"><td><br><br><br>
<!--                                 <?php  //echo $query2['state'];?></td></tr>-->
                                             <td style="color:blue;">Heading:</td></tr>
                                   <tr><td style="font-size: 15px; color: #000;margin-left: 10%;color:#FE980F"><br>
                                   <?php //echo $query2['question'];?>
                                   <h style="color: #000; margin-top:10% ">Describe your Question/Problem:</h>
                                 
                                <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;float: right"><img src="admin/images/paynow.png" width="80px" height="40px;"/></a> <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;float: right;margin-top: 1%;font-size: 15px;">Why Paid Service?</a><br><br>
                                </td></tr></table>
                              
                                
                                

                        </div><!--/category-tab-->
                        <?php // include 'include/recommended.php'; ?>
                        <!--/recommended_items-->



<!--                        <form id="form_background" action="#" method="POST" enctype="multipart/form-data">
                            <table style="width: 50%;margin-left:10%;background: #CCC;text-align: center;">
                                <tr>
                                    <td><label id="label" style="margin-top: 50%;color: blue;">Upload supporting files: (Max I MB)</label></td>
                                    <td><input type="file" name="photo" required="" style="margin-top: 20%;"></td>
                                </tr>
                                <tr>
                                    <td><label id="label" style="margin-top: 26%;color: blue;">Only Paid:(Max I MB)</label></td>
                                    <td><input type="file" name="photo" required="" style="margin-top: 10%;"></td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="center"><input type="button" value="delete" name="edit" style="width:80px;background: red;height: 40px;color: white;margin-top: 2%;" />
                                                                        &nbsp;&nbsp;&nbsp; <button  type="button" style="background:#054F73;margin-left: 2%; color: white;float: right;margin-top: 30%;float: right;" class="btn btn-default">Replay</button></a></td>
                                </tr>
                            </table>
                        </form>-->

                        <!--<p style="color: blue;margin-top: 5%;margin-left:7%; ">Your Question is not answered by a Lawyer in 48 hours? then do a Repost</p><a href=""><button  type="button" style="background:#054F73;margin-right: 35%; color: white;float: right;margin-top: -4%;"  class="btn btn-default">Repost</button></a>--> 


                        <p style="margin-top: 10%;color: black;">Ask your legal question( Average response time is 40 mins ) & start chatting with the lawyers. Answer will notify to your given email id/Phone. Please login to PathLegal and check your answer incase if you are not received an email notification. How does it work?
No Answers yet <h style="color:blue;">Disclaimer</h></p>
                    </div>
                </div>

            </div>
        </section>

        <?php include 'footer.php'; ?>
        <!--/Footer-->
           