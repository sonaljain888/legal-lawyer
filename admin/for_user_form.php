<?php include 'header.php';?>
<?php include 'sitebar.php';?>
<div class="ch-container">
    <div class="row">
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>
           
<div class="row" >
    <div class="box col-md-12" >
        <div class="box-inner" >
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

                
            </div>
            <div class="box-conten" >
                <form action="" method="post" enctype="multipart/form-data">
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Page Category Name</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="name" class="form-control" placeholder="Page Category Name" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Page URL</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="url" class="form-control" placeholder="Page URL" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Keywords</label></td>
                             <td>
                                 <textarea style="width: 50%" class="form-control" value="" name="description"  placeholder="Keywords" required=""></textarea>  
                   </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Date</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="date" name="created_date" class="form-control" placeholder="Date" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">Logo</label></td>
                            <td><input type="file" name="photo" id="exampleInputFile" required="">
                        <p class="help-block">Example block-level help text here.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">Active</label></td>
                            <td><input type="checkbox" value="1" name="isactive"> 
                         </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">User</label></td>
                            <td><input type="checkbox" value="1" name="isuser"> 
                         </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">Lawyer</label></td>
                            <td><input type="checkbox" value="1" name="islawyer"> 
                         </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">Admin Lawyer</label></td>
                            <td><input type="checkbox" value="1" name="islawyeradmin"> 
                         </td>
                        </tr>
                        <tr>
                            <td style="text-align: center" colspan="2"><button type="submit" name="submit" style="background: black;color: white;" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="for_user.php"><button type="button" style="background: black;color: white;" class="btn btn-default">cancel</button></a></td>
                        </tr>
                    </table> 
                    </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
</div><!--/.fluid-container-->

<?php include 'footer.php';?>