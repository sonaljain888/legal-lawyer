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
            <a href="#">Description Form</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Description Form </h2>

                
            </div>
            <div class="box-content">
                <div class="control-group">

                    <form action="#" method="POST">
                    <table style="" width="100%" >
                        <tr>
                            <td><label class="control-label" for="selectError">Topic </label></td>
                            <td>
                                <div class="input-group" style="width: 50%;margin-left: 20%;">
                    <span class="input-group-addon"></span>
                    <select required="" name="cat_id" class="form-control">
                        <option value="">--Select--</option>
                       
                        <option value=""</option>
                         
                    </select>
                   
                </div>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label class="control-label" for="selectError">Top Description</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                 <div class="input-group" style="width: 100%">
                    <textarea  id="description" name="desc_top">
				</textarea>
		<script>
			
		</script>
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label class="control-label" for="selectError">Bottom Description</label></td>
                        </tr>
                         <tr>
                            <td colspan="2">
                                 <div class="input-group" style="width: 100%">
                    <textarea  id="description" name="desc_bottom">
			
		</textarea>
		<script>
				</script>
                </div>
                            </td>
                        </tr>
                         <tr>
                            <td  colspan="2"> <button  type="submit" name="edit" style="background: black;margin-left: 40%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="description.php"><button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
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

   
   

</div><!--/.fluid-container-->

<?php include 'footer.php';?>