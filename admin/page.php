<?php include 'header.php'; ?>
<?php include 'sitebar.php'; ?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <!--<a href="#">Tables</a>-->
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Description</h2>
                </div>
                <div class="box-content">
                    <div>
                        <a class="btn btn-info" href="add_page.php">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Add Data
                        </a>
                    </div>
                    <div>&nbsp;</div>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                            <tr>
                                <th style="vertical-align: top">Id</th>
                                <th style="vertical-align: top">Category</th>
                                <th style="vertical-align: top">Name</th>
                                <th style="vertical-align: top">Url</th>
                                <th style="vertical-align: top">Top Desc</th>
                                <th style="vertical-align: top">Bottom Desc</th>
                                <th style="vertical-align: top">Keyword</th>
                                <th style="vertical-align: top">Title</th>
                                <th style="vertical-align: top">Head Desc</th>
                                <th style="vertical-align: top">Author</th>
                                <th style="vertical-align: top">Date</th>
                                <th style="vertical-align: top">Modified By</th>
                                <th style="vertical-align: top">Status</th>
                                <th style="vertical-align: top">Access Type</th>
                                <th style="vertical-align: top">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center">
                                    <a class="btn btn-info" href="">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>

                                    <a class="btn btn-danger" href="" onClick="return confirm('Are you sure want to delete record')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
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