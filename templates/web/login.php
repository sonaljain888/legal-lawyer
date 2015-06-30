<section class="login-form">

    <div class="row">
        <div class="col-sm-3 ">
            
            <h2>Login </h2>
                    <form action="" method="post" >

                        <input type="hidden" name="action" value="login">
                        <input type="hidden" name="type" value="user">
                        <input type="email" name="email" placeholder="Email Address" required=""/>

                        <input type="password" name="password" placeholder="Password" required="" />
                        <span>
                            <input type="checkbox" class="checkbox" required="required"> 
                            Keep me signed in
                        </span>
                        <button type="submit"name="submit" class="btn btn-default" >Login</button>
                    </form>

        </div>
        <div class="col-sm-1">
            <h2 class="or">OR</h2>
        </div>
        <div class="col-sm-8">
            <script>
  function validate()
{
	if(document.getElementById("txtname").value.length==0)
	{
		alert('username is required');
		return false;
	}
        
          if(document.getElementById("txtmail").value.length==0)
            {
              alert('Mail is required'); 
              return false;
	}
        if(document.getElementById("txtpwd").value.length==0)
	{
		alert('Passwored is required');
		return false;
	}
        if(document.getElementById("txtcpwd").value.length==0)
	{
		alert('Conf Passwored is required');
		return false;
	}
        if(document.getElementById("txtpwd").value!=document.getElementById("txtcpwd").value)
	{
		alert('Passwored is not Match');
		return false;
	}
	if(document.getElementById("txtmobiloe").value.length==0)
	{
		alert('mobile is required');
		return false;
	}
	if(isNaN(document.getElementById("txtmobiloe").value))
	{
		alert('mobile should be numeric');
		return false;
	}
	if(document.getElementById("txtmobiloe").value.length<10 || document.getElementById("txtmobiloe").value.length>12 )
	{
		alert('mobile number must be 10 digit');
	}
        if(document.getElementById("txturl").value.length==0)
            {
              alert('URL is requird'); 
              return false;
            }
         if(document.getElementById("txtadd").value.length==0)
            {
              alert('Address is queries'); 
              return false;
            }
            if(document.getElementById("txtcity").value.length==0)
            {
              alert('City is queries'); 
              return false;
            }
            if(document.getElementById("txtlocation").value.length==0)
            {
              alert('Location is queries'); 
              return false;
            }
            if(document.getElementById("txtexp").value.length==0)
            {
              alert('Experience is queries'); 
              return false;
            }
            if(document.getElementById("txtedu").value.length==0)
            {
              alert('Education is queries'); 
              return false;
            }
            if(document.getElementById("txtspec").value.length==0)
            {
              alert('Specalization is queries'); 
              return false;
            }
             if(document.getElementById("txtcourts").value.length==0)
            {
              alert('courts is queries'); 
              return false;
            }
             if(document.getElementById("txtcourts").value.length==0)
            {
              alert('Practicing Courts is queries'); 
              return false;
            }
	
}
</script>
           <h2>Registration </h2>
            <form id="form_background" action="#" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="action" value="registration">
                <input type="hidden" name="type" value="user">
                
                                   <table height="680" align="center" width="80%">
                            <tr>
                                <td id="label">Name:</td>
                                <td><input id="txtname" type="text" name="name" placeholder="Name"/></td>
                            </tr>
                             <tr>
                                <td id="label">Email:</td>
                                <td><input type="email"  id="txtmail" name="email" placeholder="Valid Email"/></td>
                            </tr>
                             <tr>
                                <td id="label">Password:</td>
                                <td><input id="txtpwd"type="password" name="password" placeholder="Password"/></td>
                            </tr>
                            <tr>
                                <td id="label">Confirm Password:</td>
                                <td><input id="txtcpwd"type="password" name="c_password" placeholder="Password" /></td>
                            </tr>
                            <tr>
                                <td id="label">Mobile No:</td>
                                <td><input id="txtmobiloe"type="text" name="mobile" placeholder="Mobile No" /></td>
                            </tr>
                            <tr>
                                <td id="label">Website:</td>
                                <td><input id="txturl" type="url" name="website" placeholder="Website" /></td>
                            </tr>
                            <tr>
                                <td id="label">Address:</td>
                                <td><input id="txtadd" type="text" name="add" placeholder="Address" /></td>
                            </tr>
                            
                            <tr>
                                <td id="label">Practicing City:</td>
                                <td><input id="txtcity" type="text" name="city" placeholder="Type city(Ex.:Indore)" /></td>
                            </tr>
                            <tr>
                                <td id="label">Area / Locality:</td>
                                <td><input id="txtlocation"  name="location" type="text" placeholder=""/></td>
                            </tr>
                            <tr>
                                <td id="label">Experience (in years):</td>
                                <td><input id="txtexp"  name="experience" type="text" placeholder="" /></td>
                            </tr>
                            <tr>
                                <td id="label">Educational Details:</td>
                                <td><input id="txtedu"  name="education" type="text" placeholder="" /></td>
                            </tr>
                            <tr>
                                <td id="label">Specialization:</td>
                                <td><input id="txtspec"  name="specialization" type="text" placeholder="" /></td>
                            </tr>
                            <tr>
                                <td id="label">Practicing Courts:</td>
                                <td><input id="txtcourts"  name="pra_court" type="text" placeholder=""/></td>
                            </tr>
                               <tr>
                            <td><label id="label">Image</label></td>
                            <td><input type="file" name="photo" ></td>
                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><input type="submit" value="Submit" name="submit" style="float: left;margin-left: 200px; width:130px;background: red;height: 45px;color: white " />
                                              <input type="button" value="Cancel" style="margin-right: 20px;width:130px;background: gray;height: 45px;color: white" />  
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </form>


        </div>
    </div>
</section>