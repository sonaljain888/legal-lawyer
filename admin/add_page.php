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
            <a href="#">Add Page</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Page </h2>

                
            </div>
            <div class="box-content">
                <div class="control-group">
                    <form action="#" method="POST">
                    <table style="" width="100%" >
                        <tr>
                            <td><label class="control-label" for="selectError">Page_Category </label></td>
                            <td>
                                <div class="input-group" style="width: 50%;">
                    <span class="input-group-addon"></span>
                    <select required="" name="cat_id" class="form-control">
                        <option value="">--Select --</option>
                     
                        <option value=""</option>
                         
                    </select>
                   
                    <!--<input type="text" value="" class="form-control" placeholder="Country" required="">-->
                </div>
                                    
                            </td>
                        </tr>
                        <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Page_Name</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="pagename" class="form-control" placeholder="Page Name" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Page_Url</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="url" class="form-control" placeholder="Page Url" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    
                        <tr>
                            <td colspan="2"><label class="control-label" for="selectError">Top Description</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                 <div class="input-group" style="width: 100%">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>-->
                    <textarea  id="description" name="desc_top">
			
		</textarea>
		<script>
			CKEDITOR.replace( 'desc_top' );
		</script>
                    <!--<textarea class="form-control"name="description" description placeholder="Description" required=""></textarea>-->
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label class="control-label" for="selectError">Bottom Description</label></td>
                        </tr>
                         <tr>
                            <td colspan="2">
                                 <div class="input-group" style="width: 100%">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>-->
                    <textarea  id="description" name="desc_bottom">
			
		</textarea>
		<script>
			CKEDITOR.replace( 'desc_bottom' );
		</script>
                    <!--<textarea class="form-control"name="description" description placeholder="Description" required=""></textarea>-->
                </div>
                            </td>
                        </tr>
                        <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Keyword</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="keyword" class="form-control" placeholder="Keyword" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Title</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="title" class="form-control" placeholder="Title" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                            <td colspan="2"><label class="control-label" for="selectError">Description</label></td>
                        </tr>
                         <tr>
                            <td colspan="2">
                                 <div class="input-group" style="width: 100%">
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>-->
                    <textarea  id="description" name="pagedescp">
			
		</textarea>
		<script>
			CKEDITOR.replace( 'pagedescp' );
		</script>
                    <!--<textarea class="form-control"name="description" description placeholder="Description" required=""></textarea>-->
                </div>
                            </td>
                        </tr>
                             <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Author</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="author" class="form-control" placeholder="Author" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Date</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="date" class="form-control" placeholder="Date" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Modified_by</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="modified" class="form-control" placeholder="Modified by" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Status</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="status" class="form-control" placeholder="Status" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Access_Type</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="accesstype" class="form-control" placeholder="Access Type" required="">
                                            </div> 
                                        </td>
                                    </tr>
                         <tr>
                            <td  colspan="2"> <button  type="submit" name="submit" style="background: black;margin-left: 40%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="description.php"><button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
                        </tr>
                    </table>
                
                    </form>
                     </div>
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