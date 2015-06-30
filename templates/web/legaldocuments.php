
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
margin-top: -120px;
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

	<!--/header-->
	<?php include 'header.php';?>

	<section>
		<div class="container">
			<div class="row">
				<?php include 'sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
                                                            	<li class="" style="padding-left: 15%;"><a href="#tshirt" data-toggle="tab"></a></li>
                                                                
<!--								<li><a href="#blazers" data-toggle="tab">For Lawyer</a></li>
								<li><a href="#sunglass" data-toggle="tab">Top Lawyers</a></li>-->
<!--								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>-->
							</ul>
						</div>
                                            <div class="tab-content" style="height: 100%;">
							<div class="tab-pane fade active in" id="tshirt" >
                                                            <table style="margin-left: 10%;float:left;">
                                         
                                                                <tr>
                                                                    <td><img src="images/home/folder.png" name="" rel=""/>
                                                                        <a href="?cat_id="></a>
                                                                   </td>
                                                                  </tr>
                                                                  
                                                                </table>  
							
							<table  style="margin-left: 15%;float:left;">
                                          
                                                               <tr>
                                                                    <td><img src="images/home/folder.png" name="" rel=""/>
                                                                        <a href="?cat_id="></a>
                                                                   </td>
                                                                  </tr>
                                                               
                                                            </table> 
                                                            
                                                            <table style="margin-left: 20%;float:left;">
                                           
                                                                <tr>
                                                                    <td><img src="images/home/folder.png" name="" rel=""/>
                                                                        <a href="?cat_id="></a>
                                                                   </td>
                                                                  </tr>
                                                                
                                                            </table>  
								<div class='popup'>
                                            <div class='cnt223'style="border: 1px #000 solid">
                                                <a href='legaldocument.php' ><img src='images/home/cancel.png' alt='quit'style="position:  absolute;margin-left: 96%;margin-top: -3%" /></a> 
                                            <table id="" style="border: 1px #000 solid; overflow: scroll;margin-left: 9%;margin-top: 7%">
                                                
                                            
                                               
                                            <tr>
                                                <td><img src="images/home/file.png"/>
                                                    <a href="download-docunent.php?id="></a
                                                </td>
                                            </tr>
                                           
                                            </table>
                                            </div>
                                            </div>
								
                                                           </div>
						</div>
					</div><!--/category-tab-->
                                       
                                        
                                        
                                        
                                        
                                        
					<?php include 'recommended.php';?>
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>
	<!--/Footer-->
	