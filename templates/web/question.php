
        <?php include 'header1.php'; ?>

        <!--	Welcome<?php //echo $login_session;   ?>
                              <a href="logout">Sign Out</a>-->
        <section>
            <div class="container">
                <div class="row">
                    <?php include 'sitebar.php'; ?>
                    <div class="col-sm-9 padding-right">


                        <div class="category-tab" ><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li><a href="welcome">My Home</a></li>
                                    <li><a href="account">My Account</a></li>
                                    <li class="active"><a href="question">My Question</a></li>
                                    <li><a href="my_lawyers">My Lawyer</a></li>
                                    <li><a href="blog">My Blogs</a></li>
                                    <li><a href="my profile">My Profile</a></li>
                                    <li><a href="answers">Clients  Q/A</a></li>
                                </ul>
                            </div>
                         <div style="width: 100%;  overflow: hidden;  overflow-y: scroll;border-bottom:black;">

                                 <div style="height: 50px;border-bottom:black 1px dotted;" >
                                <div style="float:left;width:300px;margin-left: 4%;cursor:pointer;"><a href="Online-Legal-Advice?id=<?php echo $id; ?>">Ask Question</a></div>
                                <div style="float:left"><a href="?question">Recently Asked</a> | <a href="?answered">Recently Answered</a></div></div>

                        
                        
                        
                          <table align="center" width="800">
                             
                                 
                               <tr style="float: left;color:#FE980F"><td> 
                                 </td></tr>
                                   <tr style="height: 150px;border-bottom: black 1px dotted;">
                                  
                                  <td style="color: #0063DC;font-family: 'Indie Flower', cursive;font-size: 25px;"></td>
                                 
                                  <td>
                                      <a href="viewquestion?id="><input type="button" name="button" value="view" style="background:red;color: white;float: right;margin-right: 10%;float:right"/></a>
                                  <a href="viewquestion?id=" style="font-family: 'Indie Flower', cursive;margin-left: 5%;">View Group</a><br><br>
                        <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 5%;"><img src="admin/images/paynow.png" width="80px" height="40px;"/></a> <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;">Why Paid Service?</a><br><br>
                                   </td>
                                
                              </tr>
                             
                          </table> 
                          
                          </div>
                         
                </div>
            </div>

        </section>
        <?php include 'footer.php'; ?>
        <!--/Footer-->
