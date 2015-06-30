<?php
include('admin/db.php');
session_start();
$user_check=@$_SESSION['login_user'];

$ses_sql=mysql_query("select email from lawyer_registration where email='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['email'];

if(!isset($login_session))
{
header("Location: login.php");
}
?>
<?php
//session_start();
$email = $_SESSION['login_user'];
$query1=mysql_query("SELECT * 
FROM lawyer_registration
WHERE email =  '$email'");
$query2=mysql_fetch_array($query1);
$id=$query2['id'];
//echo $id;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | welcome</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        
    </head><!--/head-->

    <body>
        <!--/header-->
        <?php include 'header1.php'; ?>

        <!--	Welcome<?php //echo $login_session;   ?>
                              <a href="logout">Sign Out</a>-->
        <section>
            <div class="container">
                <div class="row">
                    <?php include 'include/sitebar.php'; ?>
                    <div class="col-sm-9 padding-right">


                        <div class="category-tab" ><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li><a href="user">My Home</a></li>
                                    <li><a href="useraccount">My Account</a></li>
                                    <li class="active"><a href="userquestion">My Question</a></li>
                                    <li><a href="userlawyers">My Lawyer</a></li>
                                    <li><a href="userblog">My Blogs</a></li>
                                   
                                    <li><a href="#">Upcomming 1</a></li>
                                                                  <li><a href="#">Upcomming 2</a></li>
                                </ul>
                            </div>
                           <div style="width: 100%;  overflow: hidden;  overflow-y: scroll;border-bottom:black;">

                                  <div style="height: 50px;border-bottom:black 1px dotted;" >
                                <div style="float:left;width:300px;margin-left: 4%;cursor:pointer;"><a href="Online-Legal-Advice.php?id=<?php echo $id; ?>">Ask Question</a></div>
                                <div style="float:left"><a href="?asked">Recently Asked</a> | <a href="?answered">Recently Answered</a></div> </div>

                          <table align="center" width="800">
                             
                                  <?php
                                  $query1=mysql_query("SELECT topic.*,online_f_a.*,state.*
                                                           FROM online_f_a
                                                            JOIN topic
                                                           ON topic.topic_id=online_f_a.topic_id
                                                          JOIN state   
                                                         ON state.state_id =online_f_a.city_id 
                                                         where reg_id=$id ");
                                 while ($query2=mysql_fetch_array($query1)){?>
                               <tr style="float: left;color:#FE980F"><td><?php  echo $query2['topic'];?> >>
                                  <?php  echo $query2['state'];?></td></tr>
                                   <tr style="height: 150px;border-bottom: 1px black dotted;">
                                  
                                  <td style="color: #0063DC;font-family: 'Indie Flower', cursive;font-size: 25px;"><?php  echo $query2['heading'];?></td>
                                 
                                  <td>
                                      <a href="userviewquestion?id=<?php echo $query2['fee_id']; ?>"><input type="button" name="button" value="view" style="background:red;color: white;float: right;margin-right: 10%;float:right"/></a>
                                  <a href="userviewquestion?id=<?php echo $query2['fee_id']; ?>" style="font-family: 'Indie Flower', cursive;margin-left: 5%;">View Group</a><br><br>
                        <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 5%;"><img src="admin/images/paynow.png" width="80px" height="40px;"/></a> <a href="" style="font-family: 'Indie Flower', cursive;margin-left: 2%;">Why Paid Service?</a><br><br>
                                   </td>
                                
                              </tr>
                              <?php   
                                }
                                ?>
                          </table> 
                        </div>
                        
                        
                  
                    <!--/category-tab-->
                    <!--                        <div style="margin-top:-01%;">
                    <?php //include 'include/recommended.php'; ?></div>-->
                    <!--/recommended_items-->

                </div>
            </div>

        </section>
        <?php include 'include/footer.php'; ?>
        <!--/Footer-->



        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>