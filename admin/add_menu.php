<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div class="ch-container">
    <div class="row">
        <div id="content" class="col-lg-10 col-sm-10">
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="display_menu.php">Manage Menus</a>
                    </li>
                    <li>
                        <a href="#">Add Menu</a>
                    </li>
                </ul>
            </div>

            <div class="row" >
                <div class="box col-md-12" >
                    <div class="box-inner" >
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i> Add Menu</h2>               
                        </div>
                        <div class="box-conten" >
                            <form action="" method="post" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">                       
                                    <tr><td><label class="control-label" for="selectError">Menu Name</label></td>
                                    <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="name" class="form-control" placeholder="Menu Name" required="required">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Menu Category</label> </td>

                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="category" class="form-control" placeholder="Menu Category" required="required">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Parent Id</label> </td>
                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="title" class="form-control" placeholder="Parent Id" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">URL</label> </td>

                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="url" class="form-control" placeholder="URL" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="exampleInputFile">image Upload</label></td>
                                        <td><input type="file" name="image" id="exampleInputFile" required="">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Access Type</label> </td>

                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="keywords" class="form-control" placeholder="Access Type" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><label class="control-label" for="selectError">Menu Order</label> </td>

                                        <td>
                                            <div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="keywords" class="form-control" placeholder="Menu Order" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="exampleInputFile">Active</label></td>
                                        <td><input type="checkbox" value="1" name="isactive"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center" colspan="2">
                                            <button type="submit" name="submit"  class="btn btn-default">Submit</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="display_menu.php"><button type="button" class="btn btn-default">cancel</button></a>
                                        </td>
                                    </tr>
                                </table> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</div>

<?php include 'footer.php'; ?>