<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div class="ch-container">
    <div class="row">
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Home</a>
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
                                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
                                        <tr>
                                            <td><label class="control-label" for="selectError">Category </label></td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-addon"></span>
                                                    <select required="" name="cat_id" class="form-control">
                                                        <option value="">--Select --</option>
                                                        <option value=""</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label" for="selectError">Name</label> </td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="pagename" class="form-control" placeholder="Page Name" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Url</label> </td>
                                            <td>
                                                <div class="input-group">
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
                                                <div class="input-group">
                                                    <textarea  id="description" name="desc_top">
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('desc_top');
                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label class="control-label" for="selectError">Bottom Description</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group">
                                                    <textarea  id="description" name="desc_bottom">
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('desc_bottom');
                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="control-label" for="selectError">Keyword</label> </td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="keyword" class="form-control" placeholder="Keyword" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Title</label> </td>
                                            <td>
                                                <div class="input-group" >
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
                                                <div class="input-group" >
                                                    <textarea  id="description" name="pagedescp">
                                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace('pagedescp');
                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Status</label> </td>
                                            <td>
                                                <div class="input-group" >
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="status" class="form-control" placeholder="Status" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="control-label" for="selectError">Access Type</label> </td>
                                            <td>
                                                <div class="input-group" >
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" name="accesstype" class="form-control" placeholder="Access Type" required="">
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  colspan="2"> 
                                                <button  type="submit" name="submit"  class="btn btn-default">Submit</button>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="description.php"><button  type="button" class="btn btn-default">cancel</button></a>
                                            </td>
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

<?php include 'footer.php'; ?>