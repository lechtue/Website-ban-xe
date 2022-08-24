
<?php
    session_start();
if(!isset($_SESSION["admin_name"]))
{
    header("location: adminlogin.php");
}

?>







<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>





<body>


<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.html"><img src="images/logo.png" alt="" style="width:450px; height: 160px;"></a>
		 </div>
		 
		 
		 <div class="cart">
			
            
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					<li class="active"><a href="admin.php">Home</a></li>
					 <li><a href="admincars.php">cars</a></li>
                     <li><a href="adminaddcar.php">Car++</a></li>
                     <li><a href="adminorders.php">Orders</a></li>
                     <li><a href="adminlogout.php">Logout</a></li> 
		     	</ul>
               
               
                
			 <div class="clear"></div>
			 
			</div>	
                    
						
		</div>	
        <h1 style="margin-left: 500px; margin-top: 220px; color: aliceblue; font-size: 20px;"><u>ADMINISTRATOR</u></h1>
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>



<div class="main">
	<div class="content-box1">
		<div class="wrap">
			<div class="banner2">
		                
	      			</div>
			</div>
	</div>
</div>







<br><br>

</body>
</html>
        
        
        
 
        
        
        
        
        
        
        
        
        
        

    	
    	
            