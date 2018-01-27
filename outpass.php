<?php
	if(!(isset($_COOKIE['regno'])))
	{
		header('Location: login.html');
	}
?>
<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProBootstrap:Enlight &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" href="css/customsmade.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
		function Validate()
		{
			var sdate=document.getElementById("sdate").value;
			var edate=document.getElementById("edate").value;
			var reason=document.getElementById("reason").value;
			if(edate < sdate)
			{
				alert("End Date should be greater than start date");
				return false;
			}
			if($.trim(reason)=="")
			{
				alert("Reason should not be empty");
				return false;
			}
			if(reason.indexOf("#")!=-1)
			{
				alert("Reason should not contain #");
				return false;
			}
			if(reason.length>140)
			{
				alert("Reason Greater than 140 characters");
				return false;
			}
			return true;
			
		}
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
		input[type=text],input[type=datetime-local],#rcname,textarea
		{
			width: 50%;
			padding: 9px 15px;
			border-radius:10px;
		}
		input[type=text]:hover,input[type=date]:hover,#rcname:hover,textarea:hover
		{
			border: 2px solid red;
		}
		input[type=text]:focus,input[type=date]:focus,#rcname:focus,textarea:focus
		{
			outline: none;
		}
		input[type=submit]
		{
			border:none;
			padding: 8px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			margin: 4px 2px;
			border-radius:10px;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
			cursor: pointer;
			background-color: white;
			color: black;
			border: 2px solid #555555;
		}
		input[type=submit]:hover
		{
			background-color: #555555;
			color: white;
		}
		.text
		{
			font-size: 18px;
			color: black;
		}
		.smalltext		
		{
			font-size:14px;
			color:black;
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
              <h1>Outpass Form</h1>
        </div>
      </section>

      <section class="probootstrap-section">
		<div class="container">
		  <div class="col-md-7 col-md-push-1  probootstrap-animate" id="orgform">                  
                  <form id="outpass" method="post" action="out.php" onsubmit="return Validate()">        
					  <label class="text"><i class="fa fa-user"></i>Register Number</label><br/>
					  <input type="text" id="regno1" value="<?php echo $_COOKIE['regno'];?>" readonly placeholder="Register Number" name="regno"><br/><br/>
					  <label class="text"><i class="fa fa-user-circle-o" style="font-size:22px;color:red"></i>RC Name</label><br/>
					  <select id="rcname" name="rcmail" required>
						<option value="" selected disabled>Please select Your RC Name</option>
						<?php
							include('dbconnection.php');
							$qry="select name,mail,hname,hblock from rclist";
							$res=mysqli_query($conn,$qry);	
							if($res && mysqli_num_rows($res))
							{
								while($row=mysqli_fetch_assoc($res))
								{
									echo '<option value="'.$row['mail'].'">'.$row['name'].' ('.$row['hname'].' / '.$row['hblock'].')</option>';
								}
							}
						?>
					  </select><br/><br/>
					  <label class="text"><i class="fa fa-calendar"></i>Start Date</label><br/>
					  <input type="datetime-local" id="sdate" name="sdate"/><br/><br/>					 
					  <label class="text"><i class="fa fa-calendar"></i>End Date</label><br/>
					  <input type="datetime-local" id="edate" name="edate"/><br/><br/>
					  <label class="text"><i class="fa fa-sticky-note"></i>Reason</label><br/>
					  <textarea form="outpass" name="reason" id="reason"></textarea><br/><br/>
					  <input type="submit" value="Submit Request"/>
                  </form>
            </div>
		</div>
      </section>
      
    
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>