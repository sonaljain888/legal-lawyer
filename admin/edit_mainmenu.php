<?php include 'header.php';?>
<?php include 'sitebar.php';?>
    <!-- topbar ends -->
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
                            <td><label class="control-label" for="selectError">Menu Name</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                 <div class="input-group" style="width: 100%">
                   
                    <textarea  id="description"  name="menu_name"></textarea>
		<script>
			CKEDITOR.replace( 'menu_name' );
		</script>
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">URL</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="url" value="" class="form-control" placeholder="URL" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Title</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="title" value="" class="form-control" placeholder="Title" required="">
                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label class="control-label" for="selectError">Keywords</label> </td>
                       
                            <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="keywords" value="" class="form-control" placeholder="Keywords" required="">
                </div> 
                            </td>
                        </tr>

                        <tr>
                            <td><label for="exampleInputFile">Active</label></td>
                            <td><input type="checkbox" value=""name="isactive"/> 
                         </td>
                        </tr>
                       <tr>
                            <td style="text-align: center" colspan="2"><button type="submit" name="edit" style="background: black;color: white;" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="main_menu_show.php"><button type="button" style="background: black;color: white;" class="btn btn-default">cancel</button></a></td>
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
