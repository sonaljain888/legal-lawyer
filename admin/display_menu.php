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
        <h2><i class="glyphicon glyphicon-user"></i> Datatable Legal Lawyer</h2>
       
        
        
        
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
        <th>Menu_Name</th>
        <th>Category_Name</th>
        <th>Parent_Id</th>
         <th>Url</th>
          <th>Status</th>
          <th>Access_Type</th>
          <th>Menu_Order</th>>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="center"></td>
        <td><img src="images/" name="image" rel="logo" style="width: 50px;height: 50px; border: 2px #022241 solid;"/></td>
        <td class="center"></td>
        <td class="center" style=""></td>
        <td class="center" style=""></td>
        <td class="center" style=""></td>
        <td class="center" style=""></td>
        <td class="center" style=""></td>
       <td class="center"><span class="label-success label label-default"></span></td>
        <td class="center" style="width: 200px;">
              <a class="btn btn-info" href="" name="edit"><i class="glyphicon glyphicon-edit icon-white"></i>Edit</a>
              <a class="btn btn-danger" href="" name="delete" onClick="return confirm('Are you sure want to delete record')">
                <i class="glyphicon glyphicon-trash icon-white"></i>Delete</a>
        </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
</div><!--/fluid-row-->  
</div><!--/.fluid-container-->
<?php include 'footer.php';?>