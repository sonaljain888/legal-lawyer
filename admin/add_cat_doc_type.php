<?php include 'header.php';?>
<?php include 'sitebar.php';?>
<div class="ch-container">
    <div class="row">
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Forms</a></li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Type Of Document Category</h2>

                
            </div>
            <div class="box-content">
                <div class="control-group">
                   <form action="#" method="POST">
                    <table style="margin-left: 20%;" width="100%" >
                        <tr>
                            <td>
                                <label class="control-label" for="selectError">Type Of Document</label>
                                </td>
                                <td>
                                <div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <select required="" name="doc_id" class="form-control">
                        <option value="">--Select Document--</option>
                      
                        <option value="> </option>
                         
                    </select>
                   
                    <!--<input type="text" value="" class="form-control" placeholder="Country" required="">-->
                </div>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">type of Document Category</label></td>
                            <td><div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="name" class="form-control" placeholder="type of Document Category" required="">
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Active</label></td>
                            <td><input type="checkbox" name="isactive_doc_cat" value="1" required=""></td>
                        </tr>
                        <tr>
                            <td  colspan="2"> <button  type="submit" name="submit" style="background: black;margin-left: 20%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="type_doc_cat.php"><button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
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

</div><!--/.fluid-container-->

<?php include 'footer.php';?>