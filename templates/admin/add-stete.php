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
                                <a href="#">Forms</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="box col-md-12">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-edit"></i> Form State</h2>


                                </div>
                                <div class="box-content">
                                    <div class="control-group">
                                        <form action="#" method="POST">
                                            <table style="margin-left: 20%;" width="100%" >
                                                <tr>
                                                    <td>
                                                        <label class="control-label" for="selectError">Country</label>
                                                    </td>
                                                    <td>
                                                        <div class="input-group" style="width: 50%">
                                                            <span class="input-group-addon"></span>
                                                            <select required="" name="country_id" class="form-control">
                                                                <option value="">--Select Country--</option>

                                                                <option value=""> </option>

                                                            </select>

                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label class="control-label" for="selectError">State</label></td>
                                                    <td><div class="input-group" style="width: 50%">
                                                            <span class="input-group-addon"></span>
                                                            <input type="text" name="state" class="form-control" placeholder="State" required="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label class="control-label" for="selectError">Active</label></td>
                                                    <td><input type="checkbox" name="isactive_state" value="1" required=""></td>
                                                </tr>
                                                <tr>
                                                    <td  colspan="2"> <button  type="submit" name="submit" style="background: black;margin-left: 20%; color: white" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;<a href="state.php"><button  type="button" style="background: black; color: white" class="btn btn-default">cancel</button></a></td>
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
