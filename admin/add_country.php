<?php include 'header.php';?>
<?php include 'sitebar.php';?>


<div class="ch-container">
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

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" >
                <h2><i ></i>Country</h2>    
            </div>
            <div class="box-content">
                <form action="#" method="POST">
                    <table style="margin-left: 20%;" width="100%" >
                        <tr>
                            <td><label  >Country</label></td>
                            <td><div class="input-group" style="width: 50%">
                    <span class="input-group-addon"></span>
                    <input type="text" name="contry" class="form-control" placeholder="Country" required="" >
                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="selectError">Active</label></td>
                            <td><input type="checkbox" name="isactive_country" value="1"></td>
                        </tr>
                        <tr>
                            <td  colspan="2"> <button  type="submit" name="submit" style="background: black;margin-left: 20%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="display_country.php">
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
</div><!--/.fluid-container-->

<!-- external javascript -->

<?php include 'footer.php';?>