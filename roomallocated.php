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
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" href="../css/style.min.css">

	<link rel="stylesheet" href="../css/customsmade.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
	function getCookie(name)
	{
		var re = new RegExp(name + "=([^;]+)");
		var value = re.exec(document.cookie);
		return (value != null) ? unescape(value[1]) : null;
	}
	var onblocks;
	$(document).ready(function()
	{
		var mail=getCookie("fname");
		if(mail==null)
		{
			alert("Login and try");
			window.location="login.html";
		}
		else
		{
			var fname=getCookie("fname");
		if(!(fname==null))
		{
			$("#myname").html("Hi "+fname);
			document.getElementById("loggedin").style.display="block";
			document.getElementById("notloggedin").style.display="none";			
		}
		}
		
	});
		
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

		input[type=text],#hid
		{
			width: 50%;
			padding: 9px 15px;
			border-radius:10px;
			outline:none;
		}
		input[type=text]:hover,input[type=number]:hover,input[type=email]:hover
		{
			border: 2px solid red;
		}
		input[type=text]:focus,input[type=number]:focus,input[type=email]:focus
		{
			outline: none;
		}
		input[type=submit],#validate,#gradselect,input[type=button]
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
		input[type=submit]:hover,#gradselect:hover,#validate:hover,input[type=button]:hover
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
		table, th, td 
		{
			
			border: 1px solid black;
		}
	</style>
  </head>
  <body>

    
    
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
		<div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
       
         <div class="col-md-5 col-sm-6 col-xs-12 main_logo">
           <div class="col-md-2 col-xs-3 aulogo" >
               <img src="../img/aulogo.png" alt="Logo">
           </div>
           <div class="col-md-7 col-xs-6 logoText">
             <center>
               <p class="mitText"><strong>MIT Hostels</strong></p>
               <p class="auText">Anna University</p>
           </center>
           </div>
           <div class="col-md-3 col-xs-3 mit_logo">
               <img src="../img/mit.gif" alt="Logo">
           </div>
         </div>
         
    

         <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
			  <li class="dropdown">
                <a href="outpass.php" data-toggle="dropdown" class="dropdown-toggle">Outpass</a>
                <ul class="dropdown-menu">
                  <li><a href="outpass.php">New Request</a></li>                  
                  <li><a href="opstatus.php">Request Status</a></li>
				  <li><a href="activeop.php">Active Outpasses</a></li>				  
				  <li><a href="acceptedop.php">Past Requests</a></li>
				  <li><a href="rejectedop.php">Rejected Requests</a></li> 				  
                </ul>
              </li>
			 
               <li class="active"><a href="roomallocated.php" data-toggle="dropdown" class="dropdown-toggle">Room Allocation</a></li>
               
              <li id="notloggedin"><a href="login.html">Login</a></li>			
			  <li id="loggedin" class="dropdown" style="display:none">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" id="myname"></a>
                <ul class="dropdown-menu"  id="droploggedin">
                  <li><a href="changepass.php">Change Password</a></li>                  
                  <li><a href="logout.php">Logout</a></li>			  
                </ul>
              </li>
            </ul>
          </div> 
		</div>
  </nav>
      <section id="headersectionstart">
        <div class="container">        
              <h1>Hostel Deletion</h1>
        </div>
      </section>

      <section class="probootstrap-section">
		<div class="container">
		<div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
		                 
                <form id="room" method="post" action="uproomallocate.php">  
				<input type="text" readOnly name="hname" value="<?php
				include('dbconnection.php');
				$qry="select * from student where mailid='".$_COOKIE['email']."'";
				$result=mysqli_query($conn,$qry);
				if($result && mysqli_num_rows($result)>0)
				{
					$row=mysqli_fetch_assoc($result);
					$year=$row['year'];
					$grad=$row['grad'];
					$gender=$row['gender'];
					$qry="select * from hostelalloted";
					$res=mysqli_query($conn,$qry);
					$rows=mysqli_fetch_assoc($res);
					$val="";
					if($grad=="UG")
					{
						if($gender=="male")
						{
							if($year==1)
							{
								$val=$rows['ufirstb'];
							}
							if($year==2)
							{
								$val=$rows['usecondb'];
							}
							if($year==3)
							{
								$val=$rows['uthirdb'];
							}
							if($year==4)
							{
								$val=$rows['ufourb'];
							}
						}
						else
						{
							if($year==1)
							{
								$val=$rows['ufirstg'];
							}
							if($year==2)
							{
								$val=$rows['usecondg'];
							}
							if($year==3)
							{
								$val=$rows['uthirdg'];
							}
							if($year==4)
							{
								$val=$rows['ufourg'];
							}
						}
							
					}
					else if($grad=="PG")
					{
						if($gender=="male")
						{
							if($year==1)
							{
								$val=$rows['pfirstb'];
							}
							if($year==2)
							{
								$val=$rows['psecondb'];
							}		
						}
						else
						{
							if($year==1)
							{
								$val=$rows['pfirstg'];
							}
							if($year==2)
							{
								$val=$rows['psecondg'];
							}
						}
					}
					$qry="select hname from hostellist where id='$val'";
					$res=mysqli_query($conn,$qry);
					$row=mysqli_fetch_assoc($res);
					echo $row['hname'];
				}
				else
				{
					echo "<script>alert('invalid');</script>";
				}
				?>"/>
				<br/>
				<input type="text" hidden name="id" value="<?php echo $val; ?>" /><br/>
				<select id="hid" name="room" required>
					<option selected  disabled value="-1">Select Room Number</option>
					<?php
						
						$qry="Select * from hostellist where id='$val'";
						$result=mysqli_query($conn,$qry);
						$row=mysqli_fetch_assoc($result);
						$room=unserialize($row['roomno']);
						$capacity=unserialize($row['capacity']);
						$ccapacity=unserialize($row['ccapacity']);
						$nblock=$row['nblocks'];
						for($i=1;$i<=$nblock;$i=$i+1)
						{
							for($j=0;$j<count($room[$i]);$j=$j+1)
							{
								echo "<option value='".$i."###".$j."###".$room[$i][$j]."'>".$room[$i][$j]." (".$ccapacity[$i][$j].")</option>";
							}
						}
						
					?>
				</select><br/><br/>
				<input type="submit" value="Choose" />      				  
                  </form>
        </div>		  
		</div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About The School</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                  <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                  <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2017 <a href="https://probootstrap.com/">ProBootstrap:Enlight</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://probootstrap.com/">ProBootstrap.com</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    
    <!-- END wrapper -->
    

    <script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

  </body>
</html>