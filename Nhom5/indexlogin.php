
<?php
    session_start();

if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}
?>






<!DOCTYPE HTML>
<html>
<head>
<title>Car Showroom</title>
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
		 <div>
             <h3 style="color: white;"> Welcome  <?=$_SESSION['s_name'];?> !! </h3> 
		 </div>
		 
			
            
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					 <li class="active"><a href="indexlogin.php">Home</a></li>
                     <li><a href="services.php">Brands</a></li>
                     <li><a href="booking.php">Book</a></li>
                     <li><a href="orders.php">Orders</a></li>
                     <li><a href="logout.php">logout</a></li>
                     
                     
		     	</ul>
                
			 <div class="clear"></div>
			</div>	
						
		</div>	
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>








<div class="main-content">
	<div class="wrap">
		<div class="main-box">
		   <div class="box_wrapper"><h1>Welcome to your Account!</h1></div>
					
		</div>
	</div>
</div>



<br><br>

</body>
</html>
        
        
        
 
        
        
        
        
        
        
        
        
        
        

    	
    	
            