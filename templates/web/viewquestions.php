
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
                                    <li ><a href="welcome">My Home</a></li>
                                    <li><a href="account">My Account</a></li>
                                    <li class="active"><a href="question">My Question</a></li>
                                    <li><a href="my_lawyers">My Lawyer</a></li>
                                    <li><a href="blog">My Blogs</a></li>
                                    <li><a href="my profile">My Profile</a></li>
                                    <li><a href="answers">Clients  Q/A</a></li>
                                </ul>
                            </div>

                            <div style="color:red; font-size:13px; font-weight:bold; margin-top:10%;  border:1px  dashed #CCC; padding:3px;">         
                                
                    

                        
                            <div style="margin-top: 5%; color: blue; text-align: left;">
                                   <!--<a href="ask_legal.php?id=<?php// echo $query2['fee_id']; ?>"><button  type="button" style="background:#054F73;margin-left: 2%; color: white" class="btn btn-default">Replay</button></a>-->
<!--                                <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;"><img src="admin/images/paynow.png" width="80px" height="40px;"/></a> <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;">Why Paid Service?</a><br><br>-->
                               
                                <table align="center" width="800">
 
                                  
                                   <tr><td style="font-size: 15px; color: #000;"><img src="admin/images/hed.jpg" width="25px" height="25px;" style="margin-left:1%;"/><?php echo $query2['heading'];?><br><br>
                                   <h style="color:#FE980F"></h>>><br><br><br>
                               
                                   <img src="admin/images/qu.jpg" width="30px" height="30px;" style="margin-left:1%;"/>
                                
                                   <!--<a href="ask_legal?id=<?php// echo $query2['fee_id']; ?>"><button  type="button" style="background:#054F73;margin-left: 2%;float: right; color: white;"class="btn btn-default">Replay</button></a>-->
<!--                                <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;float: right"><img src="admin/images/paynow.png" width="80px" height="40px;"/></a> <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;float: right;margin-top: 1%;font-size: 15px;">Why Paid Service?</a><br><br>-->
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


                        <p style="margin-top: 10%;color: #000;">Note: - We try our level best to avoid any kind of abusive content posted by users. Kindly report to us if you notice any, legallawyer OR proceed with hide button. <h style="color:blue;">Disclaimer</h>
                 <a href=""><button  type="button" style="background:#054F73;margin-left: 2%;float: right; color: white;"class="btn btn-default">Hide</button></a></p>

                            </div>
                </div>

            </div>
        </section>

        <?php include 'footer.php'; ?>
        <!--/Footer-->
