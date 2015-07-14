<?php include 'admin-config.php';?>
<?php
if(strlen(Request::post("submit"))){
    if(Request::get("id") == Request::post("country_id")){
        $countryObj = new Country();
    }else{
        
    }
}
?>
<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div class="ch-container">
    <div class="row">

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="country.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Add/Edit Country</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-edit"></i>Add/Edit Country</h2>


                        </div>
                        <div class="box-content">
                            <?php
                            $id = Request::get("id");
                            $countryObj = new Country();
                            $countryObj->set("country_id", $id);
                            $result = $countryObj->getName();
                            if(count($result)){
                                $row = $result[0];
                            }
                            ?>
                            <form action="" method="POST" name="country_frm" id="country_frm">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <tr>
                                        <td><label class="control-label" for="selectError">Country</label></td>
                                        <td><div class="input-group" >
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="country"  value="<?php if(isset($row['name'])){echo $row['name'];}?>" class="form-control" placeholder="Country" required="required" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="control-label" for="selectError">Active</label></td>
                                        <td><input type="checkbox" name="active" <?php
                                        if (isset($row['active']) && $row['active'] == 1){
                                            echo "checked";
                                        }
                                        ?>></td>
                                    </tr>
                                    <tr>
                                        <td  colspan="2"> 
                                            <input type="hidden" name="country_id" value="<?php if(isset($row['id'])){ echo $row['id']; } else {echo "0";}  ?>" />
                                            <button value="submit"  type="submit" name="submit"  class="btn btn-default">Submit</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="country.php">
                                                <button  type="button"  class="btn btn-default">cancel</button>
                                            </a>
                                        </td>
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

</div><!--/.fluid-container-->


<?php include 'footer.php'; ?>