<?php include 'admin-config.php';?>
<?php
 $name = $url = $pagecategory_status = $error = "";
if(strlen(Request::post("submit"))){
    $name = Request::post("name");
     $url = Request::post("url");
    $pagecategory_status = Validation::getStautsTinyVal(Request::post("active"));
    $pagecategoryObj = new pagecategory();
     $pagecategoryObj->set("name", $name);
      $pagecategoryObj->set("url", $url);
   $pagecategoryObj->set("active", $pagecategory_status);
    if( $pagecategoryObj->save()){
        General::redirectUrl("page_category.php");
    }else{
        $error = "pagecategory Name alreday exist !";
    }
}
?>
<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <!--/span-->
        <!-- left menu ends -->

       

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
                <h2><i class="glyphicon glyphicon-edit"></i>Add Menu Category </h2>

                
            </div>
            <div class="box-content">
                 <?php
                            $id = Request::get("id");
                            if(is_numeric($id) && $id > 0){
                                $pagecategoryObj = new pagecategory();
                              $pagecategoryObj->set("id", $id);
                                $result = $pagecategoryObj->getName();
                                if(count($result)){
                                    $row = $result[0];
                                    $id = $row['id'];
                                    $name = $row['name'];
                                     $url = $row['url'];
                                    $pagecategory_status =$row['active'];
                                }
                            }
                            ?>
                <form action="" name="pagecategory" method="POST">
                    <table style="margin-left: 20%;" width="100%" >
                        <tr>
                            <td><label class="control-label" for="selectError"> Category_Name</label></td>
                            <td><div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="name" class="form-control" placeholder="Category_Name" required="" >
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError"> Url</label></td>
                            <td><div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="url" class="form-control" placeholder="Url" required="" >
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Active</label></td>
                            <td><input type="checkbox" name="active"<?php
                                        if ($pagecategory_status == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                        </tr>
                        <tr>
                            <td  colspan="2"> <button  type="submit" name="submit" value="submit" style="background: black;margin-left: 20%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="page_category.php">
                                    <button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
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

<!-- external javascript -->

<?php include 'footer.php';?>