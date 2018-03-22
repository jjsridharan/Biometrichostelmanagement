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
		var mail=getCookie("officeemail");
		if(mail==null)
		{
			alert("Login and try");
			window.location="login.html";
		}
		else
		{
			var fname=getCookie("officename");
		if(!(fname==null))
		{
			$("#myname").html("Hi "+fname);
			document.getElementById("loggedin").style.display="block";
			document.getElementById("notloggedin").style.display="none";			
		}
		}
		$("body").on('click',".remove",function()
		{
			for(var i=this.id;i<onblocks;i++)
			{
				var j=parseInt(i)+1;
				document.getElementById("room"+i).value=document.getElementById("room"+j).value;
				document.getElementById("capacity"+i).value=document.getElementById("capacity"+j).value;
			}
			$("#room"+onblocks).remove();
			$("#label"+onblocks).remove();
			$("#rlabel"+onblocks).remove();
			$("#clabel"+onblocks).remove();
			$("#"+onblocks).remove();
			$("#capacity"+onblocks).remove();
			$("#submit").remove();
			onblocks=onblocks-1;			
			document.getElementById("nblocks").value=onblocks;
			$("#room").append("<input type='submit' id='submit' value='Update'/>");			
		});
		$("body").on('click',".add",function()
		{
			$("#submit").remove();
			onblocks=parseInt(onblocks)+1;			
			document.getElementById("nblocks").value=onblocks;
			$("#room").append("<label class='text' id='label"+onblocks+"'><i class='fa fa-building'></i>Block No."+onblocks+"</label><br/><br/>");	
			$("#room").append("<label class='text' id='rlabel"+onblocks+"'>Room Numbers for block "+onblocks+"</label><br/>");					  
			$("#room").append("<input type='text' style='width:100%' name='room"+onblocks+"' id='room"+onblocks+"' required placeholder='Room numbers separated by comma(,) Ex. 101,102,103'/><br/>");
			$("#room").append("<label class='text' id='clabel"+onblocks+"'>Capacity for each room</label><br/>");					  
			$("#room").append("<input type='text' style='width:100%' name='capacity"+onblocks+"' id='capacity"+onblocks+"' required placeholder='Capacity for each room number separated by comma(,) Ex. 3,2,3...'/>");
			$("#room").append("<input type='button' id='"+onblocks+"' class='remove'  value='Remove Block' /><br/><br/>");						
			$("#room").append("<input type='submit' id='submit' value='Update'/>");			
		});
	});
		var first=0;
		function FetchDetails()
		{
			var id=document.getElementById("hid").value;
			document.getElementById("id").value=id;
			$.ajax(
			{
				type: "POST",
				url : "fetchhostel.php",
				data : "id="+id,
				dataType :"json",
				success : function(response)
				{					
					if(response.localeCompare("not success")!=0)
					{
						var res=response.split("###");
						document.getElementById("hname").value=res[0];
						document.getElementById("nblocks").value=res[1];
						onblocks=res[1];
						for(var i=0;i<res[1];i++)
						{
							var room=res[(i+1)*2];
							room=room.substring(0, room.length - 1);
							var capacity=res[((i+1)*2)+1];
							capacity=capacity.substring(0, capacity.length - 1);
							$("#room").append("<label class='text' id='label"+(i+1)+"'><i class='fa fa-building'></i>Block No."+(i+1)+"</label><br/><br/>");	
							$("#room").append("<label class='text' id='rlabel"+(i+1)+"'>Room Numbers for block "+(i+1)+"</label><br/>");					  
							$("#room").append("<input type='text' style='width:100%' value='"+room+"' name='room"+(i+1)+"' id='room"+(i+1)+"' required placeholder='Room numbers separated by comma(,) Ex. 101,102,103'/><br/>");
							$("#room").append("<label class='text' id='clabel"+(i+1)+"'>Capacity for each room</label><br/>");					  
							$("#room").append("<input type='text' style='width:100%' value='"+capacity+"' name='capacity"+(i+1)+"' id='capacity"+(i+1)+"' required placeholder='Capacity for each room number separated by comma(,) Ex. 3,2,3...'/>");
							$("#room").append("<input type='button' id='"+(i+1)+"' class='remove'  value='Remove Block' /><br/><br/>");
						}
						$("#room").append("<input type='button' class='add'  value='Add Block' /><br/><br/>");						
						$("#room").append("<input type='submit' id='submit' value='Update'/>");					
						first=1;
						document.getElementById("hname").readOnly=true;
						document.getElementById("nblocks").readOnly=true;
						document.getElementById("room").hidden=false;
					}	
				    else
					{
						alert("Couldn't fetch details");
					}
				}				
			}
			);
		}
		function Validate()
		{
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
              <li class="active"><a href="index.html">Home</a></li>
			  <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin Options</a>
                <ul class="dropdown-menu">
                  <li><a href="updatestudent.php">Update Student Details</a></li>                  
                  <li><a href="deletestudent.php">Delete Student</a></li>
				  <li><a href="registerrc.php">Add RC</a></li>				  
				  <li><a href="updaterc.php">Update RC Details</a></li>
				  <li><a href="deleterc.php">Delete RC</a></li> 				  
				  <li><a href="updatemaillist">Update Mail List</a></li>
                </ul>
              </li>
			   <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Room Allocation</a>
                <ul class="dropdown-menu">
                  <li><a href="roomallocation.html">New Hostel Addition</a></li>                  
                  <li><a href="updatehostel.php">Hostel Updation</a></li>
				  <li><a href="hosteldel.php">Hostel Deletion</a></li>				  
				   <li><a href="hostelallocate.php">Hostel Allocation</a></li>
				  <li><a href="deleterc.php">Delete RC</a></li> 				  
				  <li><a href="updatemaillist">Update Mail List</a></li>
                </ul>
              </li>				  
              <li id="notloggedin"><a href="login.html">Login</a></li>			
			  <li id="loggedin" class="dropdown" style="display:none">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" id="myname"></a>
                <ul class="dropdown-menu"  id="droploggedin" style="display:none">
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
              <h1>Hostel Updation</h1>
        </div>
      </section>

      <section class="probootstrap-section">
		<div class="container">
		<div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">                
				<select id="hid">
					<option selected  disabled value="-1">Select Hostel Name</option>
					<?php
						include('../dbconnection.php');
						$qry="Select * from hostellist";
						$result=mysqli_query($conn,$qry);
						while($row=mysqli_fetch_assoc($result))
						{
							echo "<option value='".$row['id']."'>".$row['hname']."</option>";
						}
					?>
				</select>
				<button id="validate" onclick="FetchDetails()">Choose</button>                 
                 <form id="room" method="post" action="uproomallocate.php" onsubmit="return Validate()" hidden>        
					  <label class="text"><i class="fa fa-building"></i>Hostel Name</label><br/>
					  <input type="text" placeholder="Hostel Name" id="id" name="id" hidden><br/><br/>
					  <input type="text" placeholder="Hostel Name" id="hname" name="hname"><br/><br/>
					  <label class="text">Number of blocks</label><br/>
					  <input type="text" placeholder="Number of Blocks" id="nblocks" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="nblocks"><br/><br/>					  
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