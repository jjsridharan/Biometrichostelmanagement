<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<?php
	include('dbconnection.php');
	if(!isset($_SESSION['regno']))
	{
		$_SESSION['regno']="2014503056";
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIT Hostels</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/customsmade.css">
	
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
		
	</script>
	
	
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	<style>
	#headersectionstart {
      background-color: #6a41ed;
      height: 30%;
      position: relative;	  
      width: 100%;
    }
	h1{
		padding: 30px;
		color:white;
	}
		
		#requests 
		{
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#requests td, #requests th 
		{
			border: 1px solid #ddd;
			padding: 8px;
		}

		#requests tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}
		#requests tr:hover 
		{
			background-color: #ddd;
		}
		#requests th 
		{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: 	#8FBC8F;
			color: black;
		}
	</style>
  </head>
  <body>

    
    
    <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
		
       
         <div class="col-md-5 col-sm-6 col-xs-12 main_logo">
           <div class="col-md-2 col-xs-3 aulogo" >
               <img src="img/aulogo.png" alt="Logo">
           </div>
           <div class="col-md-7 col-xs-6 logoText">
             <center>
               <p class="mitText"><strong>MIT Hostels</strong></p>
               <p class="auText">Anna University</p>
           </center>
           </div>
           <div class="col-md-3 col-xs-3 mit_logo">
               <img src="img/mit.gif" alt="Logo">
           </div>
         </div>
         
    

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li><a href="register.php">Register</a></li>
			 <li class="dropdown active">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Outpass</a>
                <ul class="dropdown-menu">
                  <li><a href="outpass.php">New Request</a></li>                  
                  <li><a href="opstatus.php">Request Status</a></li>
				  <li><a href="activeop.php">Active Outpasses</a></li>				  
				  <li><a href="acceptedop.php">Past Requests</a></li>
				  <li><a href="rejectedop.php">Rejected Requests</a></li> 				  
                </ul>
              </li>
              <li><a href="teachers.html">Teachers</a></li>
              <li><a href="events.html">Events</a></li>
              
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div> 
	
        </div>
      </nav>
      
       <section id="headersectionstart">
        <div class="container">        
              <h1>Outpass Requests</h1>
        </div>
      </section>

      <section class="probootstrap-section">
		<div class="container">
		  <div class="col-md-7 col-md-push-1  probootstrap-animate" id="orgform">                  
				<h2>Current Outpasses</h2>
				<table id="requests">
				<tr>					
					<th>Start date</th>
					<th>End date</th>
					<th>Reason</th>
					<th>Approved by</th>
				</tr>
				<?php
					$qry="select * from rejectedoutpass where regno='".$_SESSION['regno']."'";
					$res=mysqli_query($conn,$qry);
					$flag=1;
					if($res && mysqli_num_rows($res))
					{
						while($row=mysqli_fetch_assoc($res))
						{							
								echo '<tr><td>'.$row['sdate'].'</td><td>'.$row['edate'].'</td><td>'.$row['reason'].'</td><td>'.$row['rcname'].'</td></tr>';								
								$flag=0;
						}
					}
					if($flag==1)
					{
						echo "<tr><td colspan='4'><center>No Active Requests</center></td></tr>";
					}
				?>
				</table>
            </div>
		</div>
      </section>
      
    
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>