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
        <h2><i class="glyphicon glyphicon-user"></i> </h2>    
    </div>
    <div class="box-content">
        <a class="btn btn-info" href="add_menu.php">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Add
            </a>
        <br/><br/>
 <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Menu Name</th>
        <th>Category Name</th>
        <th>Parent Id</th>
         <th>Url</th>
          <th>Status</th>
          <th>Access Type</th>
          <th>Menu Order</th>>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
            include 'db.php';
            $result = mysql_query('SELECT * FROM menu', $conn);
            while ($rows = mysql_fetch_array($result)) {
                ?>
    <tr>
        <td class="center"><?php echo $rows['id'];?></td>
        <td><img src="images/" name="image" rel="logo" style="width: 50px;height: 50px; border: 2px #022241 solid;"/></td>
        <td class="center"><?php echo $rows['name'];?></td>
        <td class="center" style=""><?php echo $rows['category_id'];?></td>
        <td class="center" style=""><?php echo $rows['parent_id'];?></td>
        <td class="center" style=""><?php echo $rows['url'];?></td>
        <td class="center"><span class="label-success label label-default"><?php if($rows['is_active']==1){ echo "Active";} else {echo "Not Active";} ?></span></td>

        <td class="center" style=""><?php echo $rows['access_type'];?></td>
        <td class="center" style=""><?php echo $rows['menu_order'];?></td>
        <td class="center" style="width: 200px;">
              <a class="btn btn-info" href="" name="edit"><i class="glyphicon glyphicon-edit icon-white"></i>Edit</a>
              <a class="btn btn-danger" href="" name="delete">
                <i class="glyphicon glyphicon-trash icon-white"></i>Delete</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>  
</div>
<?php include 'footer.php';?>