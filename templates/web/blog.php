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
                                    <li><a href="welcome">My Home</a></li>
                                    <li><a href="account">My Account</a></li>
                                    <li><a href="question">My Question</a></li>
                                    <li><a href="my_lawyers">My Lawyer</a></li>
                                    <li class="active"><a href="blog">My Blogs</a></li>
                                    <li><a href="my profile">My Profile</a></li>
                                    <li><a href="answers">Clients  Q/A</a></li>
                                </ul>
                            </div>
                              <div style="width: 100%;  overflow: hidden;  overflow-y: scroll;border-bottom:black;">
                            <a href="" style="margin-left: 40%;color: blue;"> Add /New/Blogs</a>

                            <table align="center" width="800">

                                    <tr style="float: left;color:#FE980F"><td>
    <?php // echo $query2['state']; ?></td></tr>
                                    <tr style="height: 150px;border-top: 1px black dotted;">

                                        <td style="color: #0063DC;font-family: 'Indie Flower', cursive;font-size: 25px;"></td>
                                        <td><a class="btn btn-danger" href="" name="delete" onClick="return confirm('Are you sure want to delete record')">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a></td>
    <!--                                  <td>
                                        -->                                     <td><a href=""><input type="button" name="button" value="view" style="background:red;color: white;float: right;margin-right: 10%;float:right"/></a></td><!--
                                                                          <a href="viewquestion?id=<?php // echo $query2['fee_id'];  ?>" style="font-family: 'Indie Flower', cursive;margin-left: 5%;">View Group</a><br><br>
                                                                <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 5%;"><img src="admin/images/paynow.png" width="80px" height="40px;"/></a> <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;">Why Paid Service?</a><br><br>
                                                                           </td>-->

                                    </tr>
                                  
                            </table> 
                           </div>
                        </div><!--/category-tab-->
                        <?php //include 'include/recommended.php';?>
                        <!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <!--/Footer-->
