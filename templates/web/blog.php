<!--/header-->

<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">


                <div class="category-tab" ><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="">My Home</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">My Question</a></li>
                            <li><a href="">My Lawyer</a></li>
                            <li class="active"><a href="">My Blogs</a></li>
                            <li><a href="">My Profile</a></li>
                            <li><a href="">Clients  Q/A</a></li>
                        </ul>
                    </div>
                    <div style="width: 100%;  overflow: hidden;  overflow-y: scroll;border-bottom:black;">
                        <a href="" style="margin-left: 40%;color: blue;"> Add / New / Blogs</a>
                        <table align="center" width="800">
                            <tr style="float: left;color:#FE980F"></tr>
                            <tr style="height: 150px;border-top: 1px black dotted;">
                                <td style="color: #0063DC;font-family: 'Indie Flower', cursive;font-size: 25px;"></td>
                                <td><a class="btn btn-danger" href="" name="delete" >
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a></td>
                                <td><a href=""><input type="button" name="button" value="view" style="background:red;color: white;float: right;margin-right: 10%;float:right"/></a></td>


                            </tr>

                        </table> 
                    </div>
                </div><!--/category-tab-->


            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<!--/Footer-->
