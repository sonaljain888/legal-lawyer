
        <!--/header-->
        <?php include 'header.php'; ?>
        <section>
            <div class="container">
                <div class="row">
                    <?php include 'sitebar.php'; ?>
                    <div class="col-sm-9 padding-right">
                        <div class="category-tab" ><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="welcome">My Home</a></li>
                                    <li><a href="account">My Account</a></li>
                                    <li><a href="question">My Question</a></li>
                                    <li><a href="my_lawyers">My Lawyer</a></li>
                                    <li><a href="blog">My Blogs</a></li>
                                    <li><a href="my profile">My Profile</a></li>
                                    <li><a href="answers">Clients  Q/A</a></li>
                                </ul>
                            </div>
                            <div style="margin-top: 5%; color: blue; text-align: left;">
                                <table align="center" width="800">
                                

                                        <tr><td style="font-size: 15px; color: #000;font-weight: bold;"><img src="admin/images/heding.jpg" width="25px" height="25px;" style="margin-left:1%;"/><br>
                                        <tr style="float: left;color:#FE980F"><td> >>
                                                </td></tr><tr>
                                            <td><a href="">View All the Communications related to this Question</a>
                                            </td>
                                        </tr>
                                        <tr><td><img src="admin/images/qu.jpg" width="30px" height="30px;" style="margin-left:1%;"/>Hello,
                                            <br>
                                        </td></tr>
                                    </table>
                                </div><!--/category-tab-->
                                <?php // include 'include/recommended.php';  ?>
                                <!--/recommended_items-->
                               <span style="margin-top: 20%;"><a href=""><img src="admin/images/contact.jpg" width="30"height="30"> <font face="Comic Sans MS" color="#EA8C00" size="2">Get the Client's Contact Detail</font></a>
                                        <a href=""><img src="admin/images/contact1.jpg" width="30"height="30"> <font face="Comic Sans MS" color="#EA8C00" size="2">Get Premier Membership & Add Contact detail</font></a></span>
                                <form id="form_background" action="" method="POST">
                                    <table style="width: 80%;margin-left:10%;text-align: center;margin-top:5%;">
                                      
                                        <textarea id="teatarea_td" name="ans"  style="height:150px;font-weight:bold;color:#000;border:#000 solid 1px;"placeholder="type your Answer...." ><?Php echo $query2['ans']; ?></textarea></td>
     
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="center"><input type="button" value="Submit Answer" name="edit" style="width:110px;background: red;height: 40px;color: white;margin-top: 2%;" /> &nbsp;&nbsp;&nbsp;&nbsp;<a href="answers.php"><input type="button" value="cancel" name="edit" style="width:80px;background: silver;height: 40px;color: white;margin-top: 2%;" /></a></td></tr>
                                    </table>
                                </form>
                               
                                <p style="margin-top: 10%;color: #000;font-weight: bold;">Note:- Note:- Legal Layer has no control over the questions/answers provided by the user/expert/lawyer. PathLegal will not be responsible incase of any issues/discrepancies with the questions and answers.<h style="color:blue;">Disclaimer</h></p>
                            </div>
                        </div>

                    </div>
            </section>

            <?php include 'footer.php'; ?>
            <!--/Footer-->

    