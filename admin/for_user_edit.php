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

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

                
            </div>
              <div class="box-content" >

                <form action="" method="post" enctype="multipart/form-data">
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Page Category Name</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="name" value="" class="form-control" placeholder="Page Category Name" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Page URL</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="url" value="" class="form-control" placeholder="Page URL" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Keywords</label></td>
                             <td>
                                 <textarea style="width: 50%" class="form-control" value="" name="description"  placeholder="Keywords" required=""><?php echo $query2['description']?></textarea>  
                   </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Date</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="created_date" value="" class="form-control" placeholder="Date" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">Active</label></td>
                            <td><input type="checkbox" value=""name="isactive"/> 
                         </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">User</label></td>
                            <td><input type="checkbox" name="isuser" value=""/>
                         </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">Lawyer</label></td>
                            <td><input type="checkbox"  name="islawyer" value=""/>  
                         </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputFile">Admin Lawyer</label></td>
                            <td><input type="checkbox" name="islawyeradmin" value="" name="isactive"/> 
                         </td>
                        </tr>
                        <tr>
                            <td style="text-align: center" colspan="2"><button type="submit" name="edit" style="background: black;color: white;" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="for_user.php"><button type="button" style="background: black;color: white;" class="btn btn-default">cancel</button></a></td>
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
   
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
   

</div><!--/.fluid-container-->
<?php include 'footer.php';?>