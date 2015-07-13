<?php include 'header.php';?>
<?php include 'sitebar.php';?>
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
                <h2><i class="glyphicon glyphicon-edit"></i>Type Of Document Form</h2>

                
            </div>
            <div class="box-content">
                <form action="#" method="POST">
                    <table style="margin-left: 20%;" width="100%" >
                        <tr>
                            <td><label class="control-label" for="selectError">Type Of Document</label></td>
                            <td><div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="DocumentType" class="form-control" placeholder="Type Of Document" required="">
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Active</label></td>
                            <td><input type="checkbox" name="IsActive" value="1"></td>
                        </tr>
                        <tr>
                            <td  colspan="2"> <button  type="submit" name="submit" style="background: black;margin-left: 20%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="type_document.php"><button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
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