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
        <a class="btn btn-info" href="add_country.php">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Add 
            </a><br/><br/>
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
        <?php
            include 'db.php';
            $result = mysql_query('SELECT * FROM country', $conn);
            while ($rows = mysql_fetch_array($result)) {
                ?>
       
    <tr>
        <td><?php echo $rows['CountryId'];?></td>
        <td class="center"><?php echo $rows['CountryName'];?></td>
        <td class="center">
            <span class="label-success label label-default"><?php if($rows['IsActive']==1){ echo "Active";} else {echo "Not Active";} ?></span>
        </td>
        <td class="center">
           <a class="btn btn-info" href="">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>

        </td>
    </tr>
    <?php }?>
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
<?php include 'footer.php';?>