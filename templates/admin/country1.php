<?php include 'header.php';?>
<?php include 'sitebar.php';?>

       

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
        <h2><i class="glyphicon glyphicon-user"></i>All Country</h2>
       
        
        
        
    </div>
    <div class="box-content">
        <a class="btn btn-info" href="country.php">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Add Data
            </a><br/><br/>
        <!--<a href="" style="font-weight:  bold;">Add</a>-->
    <!--<div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div>-->
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Country </th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
       
    <tr>
        <td></td>
        <td class="center"></td>
        <td class="center">
            <span class="label-success label label-default"></span>
        </td>
        <td class="center">
           <a class="btn btn-info" href="">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
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

<?php include 'footer.php';?>