<?php include 'header.php';?>
<?php include 'sitebar.php';?>
<style type="text/css">
    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        filter:alpha(opacity=70);
        -moz-opacity:0.7;
        -khtml-opacity: 0.7;
        opacity: 0.7;
        z-index: 100;
        display: none;
    }
    .cnt223 a{
        text-decoration: none;
    }
    .popup{
        width: 100%;
        margin: 0 auto;
        display: none;
        position: fixed;
        z-index: 101;
    }
    .cnt223{
        min-width: 600px;
        width: 600px;
        min-height: 550px;
        margin-top: -620px;
        margin-left: 20%;
        /*margin: 0 auto;*/
        background: #f3f3f3;
        position: relative;
        z-index: 103;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px #000;
    }
    .cnt223 #p{
        clear: both;
        height: 500px;
        overflow: scroll;
        color: #555555;
        text-align: justify;
    }
    .cnt223 #p a{

        color: #d91900;
        font-weight: bold;
    }
    .cnt223 .x{
        float: right;
        height: 35px;
        left: 22px;
        position: relative;
        top: -25px;
        width: 34px;
    }
    .cnt223 .x:hover{
        cursor: pointer;
    }
</style>
<script type='text/javascript'>
    $(function(){
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $('.x').click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
</script>
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
                    <h2><i class="glyphicon glyphicon-user"></i> Legal Lawyer</h2>



                </div>
                <div class="box-content">

                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Topic Name </th>
                                <th>Question</th>
                                <th>From</th>

                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td></td>
                                <td class="center"></td>
                                <td> </td>
                                <td> </td>

                                <td class="center">
                                    <span class="label-success label label-default"></span>
                                </td>
                                <td class="center">
                                    <!--            <a class="btn btn-success" href="#">
                                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                    View
                                                </a>-->
                                    <a class="btn btn-info" href="">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Answer
                                    </a>
                                    <a class="btn btn-danger" href="" name="delete" onClick="return confirm('Are you sure want to delete record')">
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
<div class='popup'>
    <div class='cnt223'style="border: 1px #000 solid">
        <a href='question.php' ><img src='../images/home/cancel.png' alt='quit'style="position:  absolute;margin-left: 96%;margin-top: -3%" /></a> 
        <table id="" style="border: 1px #000 solid; overflow: scroll;margin-left: 9%;margin-top: 7%">



            <tr>
                <td><img src="../images/home/file.png"/>
                    <br/>
                    <a href="#" style="float: right;"><b style="color: #006699;"> >>:</b></a>
                </td>
            </tr>

        </table>
    </div>
</div>
<?php include 'footer.php';?>