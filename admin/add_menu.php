<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div class="ch-container">
    <div class="row">
        <div id="content" class="col-lg-10 col-sm-10">
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
                                    <tr><td><label class="control-label" for="selectError">Menu Name</label></td></tr>
                                    <tr><td colspan="2">
                                            <div class="input-group" style="width: 100%">
                                                <textarea  id="description" name="menu_name">			
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace( 'menu_name' );
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Menu Category</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="url" class="form-control" placeholder="Menu Category" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Parent Id</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="title" class="form-control" placeholder="Parent Id" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">URL</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="keywords" class="form-control" placeholder="URL" required="">
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
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Access Type</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="keywords" class="form-control" placeholder="Access Type" required="">
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;"><label class="control-label" for="selectError">Menu Order</label> </td>

                                        <td>
                                            <div class="input-group" style="width: 50%">
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
                                        <td style="text-align: center" colspan="2"><button type="submit" name="submit" style="background: black;color: white;" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="main_menu_show.php"><button type="button" style="background: black;color: white;" class="btn btn-default">cancel</button></a></td>
                                    </tr>
                                </table> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>

<?php include 'footer.php'; ?>