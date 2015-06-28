
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Lawyer|Registration</title>
        <?php include '../include/user_csslinks.php'; ?>
        <?php include '../include/user_jslinks.php'; ?>
        <style>
            #text{
                width: 100%;
                height: 30px;

            }
            #label{
                width: 20%;
                text-align: right;
                position: relative;
                right: 1%;
                color: black;
                font-weight: bolder;
                /*font-size: 18px;*/
            }
            #form_background{
                width: 100%;background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));


            }
        </style>
    </head><!--/head-->

    <body>


        <section>
            <div class="container">
                <div class="row">

                    <div class="col-sm-9 padding-right">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#details" data-toggle="tab">lawyer Registration</a>
                                </li>

                            </ul>
                        </div>
                        <form id="form_background" action="../functions/userAction.php?action=registration" method="POST" enctype="multipart/form-data">
                            <table height="680" align="center" width="80%">
                                <tr>
                                    <td id="label">Name:</td>
                                    <td><input id="text" type="text" name="name" placeholder="Name"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Email:</td>
                                    <td><input id="text"type="email" name="email" placeholder="Email"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Confirm Email:</td>
                                    <td><input id="text"type="email" placeholder="Confirm Email"required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Password:</td>
                                    <td><input id="text"type="password" name="password" placeholder="Password" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Mobile No:</td>
                                    <td><input id="text"type="text" name="mobile" placeholder="Mobile No" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Website:</td>
                                    <td><input id="text" type="url" name="website" placeholder="Website" /></td>
                                </tr>
                                <tr>
                                    <td id="label">Address:</td>
                                    <td><input id="text" type="text" name="add" placeholder="Address" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Date:</td>
                                    <td><input id="text" type="date" name="date" placeholder="Address" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Practicing City:</td>
                                    <td><input id="text" type="text" name="city" placeholder="Type city(Ex.:Banglore)" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Area / Locality:</td>
                                    <td><input id="text"  name="location" type="text" placeholder="" required=""/></td>
                                </tr>
                                <tr>

                                    <td id="label">Educational Details:</td>
                                    <td><input id="text"  name="education" type="text" placeholder="" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Experience (in years):</td>
                                    <td><input id="text"  name="experience" type="text" placeholder="" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Specialization:</td>
                                    <td><input id="text"  name="specialization" type="text" placeholder="" required=""/></td>
                                </tr>
                                <tr>
                                    <td id="label">Practicing Courts:</td>
                                    <td><input id="text"  name="pra_court" type="text" placeholder="" required=""/></td>
                                </tr>
                                <tr>
                                    <td><label id="label">Image</label></td>
                                    <td><input type="file" name="image" required=""></td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="center"><input type="submit" value="Submit" name="submit" style="width:150px;background: red;height: 45px;color: white" />&nbsp;&nbsp;&nbsp;<input type="button" value="Cancel" style="width:150px;background: gray;height: 45px;color: white" /></td>
                                </tr>
                            </table>
                        </form>


                    </div>



                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>	
    <!--/Footer-->




</body>
</html>