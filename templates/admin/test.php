<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$pageDetails[0]['description']?>">
        <meta name="author" content="<?=$pageDetails[0]['author']?>">
        <meta name="keywords" content="<?=$pageDetails[0]['Keyword']?>">
        <title><?=$pageDetails[0]['title']?> | <?=SITE_NAME?></title>
        <?php include 'admin_csslinks.php'; ?>
        <?php include 'admin_jslinks.php'; ?>
        <!--[if lt IE 9]>
        <script src="<?=USER_JS_URL?>/js/html5shiv.js"></script>
        <script src="<?=USER_JS_URL?>/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?=USER_IMG_URL?>/ico/favicon.ico">
    <body>
        
<div class="ch-container">
    
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Legal Lawyer</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            
            <form class="form-horizontal" name="login" action="" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" name="UserName" required="required" class="form-control" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="Password" required="required" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" required="required" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/.fluid-container-->

<!-- external javascript -->
    </body>
</head>
</html>