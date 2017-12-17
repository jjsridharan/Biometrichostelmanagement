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
    <link rel="stylesheet" href="css/custom.css">
	
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
		function Validate()
		{
			document.getElementById("process").hidden=false;
			var reg=document.getElementById("regno").value;
			document.getElementById("regno").readOnly=true;
			document.getElementById("present").hidden=true;
			$.ajax(
			{
				type: "POST",
				url : "Validateregno.php",
				data : "regno="+reg,
				dataType :"json",
				success : function(response)
				{					
					if(response=="success")
					{
						document.getElementById("orgform").hidden=false;
						document.getElementById("validate").style.display="none";
						document.getElementById("studinfo").hidden=false;
						document.getElementById("regno1").value=reg;
					}
					else
					{
						alert("Student Id already Present");						
						document.getElementById("present").hidden=false;
						var info = response.split(";");
						document.getElementById("regno").readOnly=false;						
						document.getElementById("sname").innerHTML=info[0];
						document.getElementById("sdept").innerHTML=info[2];
						document.getElementById("syear").innerHTML=info[1]+" year";
					}	
					document.getElementById("process").hidden=true;					
				}				
			}
			);
		}
		$(function(){
		$("#grad").change(function()
		{
			var grad=document.getElementById("grad").value;
			document.getElementById("grad1").value=grad;
			if(grad=="UG")
			{
				document.getElementById("ug").hidden=false;
				document.getElementById("pg").hidden=true;
				document.getElementById("phd").hidden=true;
			}
			else if(grad=="PG")
			{
				document.getElementById("ug").hidden=true;
				document.getElementById("pg").hidden=false;
				document.getElementById("phd").hidden=true;
			}
			else
			{
				document.getElementById("ug").hidden=true;
				document.getElementById("pg").hidden=true;
				document.getElementById("phd").hidden=false;
			}
				
		}
		);
		$("#ug").change(function()
		{
			var grad=document.getElementById("grad").value;
			document.getElementById("grad1").value=grad;
			document.getElementById("grad").disabled=true;
			document.getElementById("gradchange").hidden=false;
			document.getElementById("gradchange1").hidden=true;
		});
		$("#pg").change(function()
		{
			var grad=document.getElementById("grad").value;
			document.getElementById("grad1").value=grad;
			var grad=document.getElementById("grad").value;
			document.getElementById("grad1").value=grad;
			document.getElementById("grad").disabled=true;
			document.getElementById("gradchange").hidden=false;
			document.getElementById("gradchange1").hidden=true;
		});
		$("#phd").change(function()
		{
			var grad=document.getElementById("grad").value;
			document.getElementById("grad1").value=grad;
			document.getElementById("grad").disabled=true;
			document.getElementById("gradchange").hidden=false;
			document.getElementById("gradchange1").hidden=true;
		});
		$("#gradselect").click(function()
		{
			document.getElementById("ug").hidden=true;
			document.getElementById("pg").hidden=true;
			document.getElementById("phd").hidden=true;
			document.getElementById("grad").disabled=false;
			document.getElementById("gradchange").hidden=true;
			document.getElementById("gradchange1").hidden=false;
		});
		});
		
	</script>
	
	
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	<style>
		input[type=text],#grad,#pgdep,#ugdep,#phdep,input[type=number],input[type=email]
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
		input[type=submit],#validate,#gradselect
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
		input[type=submit]:hover,#gradselect:hover,#validate:hover
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

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
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
            <a class="navbar-brand" href="index.html" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="register.php">Register</a></li>
              <li><a href="teachers.html">Teachers</a></li>
              <li><a href="events.html">Events</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="courses.html">Courses</a></li>
                  <li><a href="course-single.html">Course Single</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                    </ul>
                  </li>
                  <li><a href="news.html">News</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-7 text-left section-heading probootstrap-animate">
              <h1>Student Registration</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
		<div class="container">
		<div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">                  
                      <h2 style="color:#8000ff" id="studinfo" hidden>Student Information</h2>
                      <label class="text">Register Number</label><br/>
                      <input type="text" id="regno" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Register Number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <button id="validate" onclick="Validate()">Validate</button>                 
					  <img id="process" src="img/process.gif" alt="Processing" hidden></img>
        </div>
		<div class="col-md-7 col-md-push-1  probootstrap-animate" id="present" hidden>    
			<h2 style="color:#8000ff">Student Information</h2>
             <table style="width:100%;">
				<tr>
					<td id="sname">
					</td>
					<td id="sdept">
					</td>
					<td id="syear">
					</td>
				</tr>
			 </table>
        </div>
		  <div class="col-md-7 col-md-push-1  probootstrap-animate" id="orgform" hidden>                  
                  <form method="post" action="reg.php">        
					  <label class="text">Name</label><br/>
					  <input type="text" id="name" placeholder="First Name" name="sfname" required><br/><br/>
					  <input type="text" id="name" placeholder="Last Name" name="lname" required><br/><br/>
					  <input type="text" id="regno1" placeholder="Register Number" name="regno" hidden>
					  <label class="text">Gender</label><br/>
					  <input type="radio" name="gender" value="male"> <label class="smalltext" required>Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="gender" value="female"> <label class="smalltext" required>Female</label><br/><br/>
					  <label class="text">Graduate Position</label><br/>
					  <input type="text" name="grads" id="grad1" hidden/>
					  <select id="grad" required>
						<option value="" selected disabled>Please select Your Department</option>
						<option value="UG">UG</option>
						<option value="PG">PG</option>					
						<option value="Ph.D">Ph.D</option>
					  </select>
					  <div id="gradchange" hidden>
						<button id="gradselect" onclick="return false;">Change</button><br/>
					  </div>
					  <div id="gradchange1">
						<br/><br/>
					  </div>
					  <div id="ug" hidden>
					  <label class="text">Department</label><br/>
					  <select id="ugdep" name="dept"> 
							 <option value="" selected disabled>Please select Your Department</option>
							 <option value="AERO">AERO</option>
							 <option value="AUTO">AUTO</option>
							 <option value="CSE">CSE</option>
							 <option value="ECE">ECE</option>
							 <option value="EIE">EIE</option>
							 <option value="IT">IT</option>
							 <option value="MECH">MECH</option>
							 <option value="PT">PT</option>
							 <option value="RPT">RPT</option>
						  </select><br><br>
					  </div>
					  <div id="pg" hidden>
					  <label class="text">Department</label><br/>
					  <select id="pgdep" name="dept1">  
						<option value="" selected disabled>Please select Your Department</option>
							 <option value="AERO">AERO</option>
							 <option value="AUTO">AUTO</option>
							 <option value="CSE">CSE</option>
							 <option value="ECE">ECE</option>
							 <option value="EIE">EIE</option>
							 <option value="IT">IT</option>
							 <option value="MECH">MECH</option>
							 <option value="PT">PT</option>
							 <option value="RPT">RPT</option>
						  </select><br><br>
					  </div>
					  <div id="phd" hidden>
					  <label class="text">Department</label><br/>
					  <select id="phdep" name="dept2">  
						<option value="" selected disabled>Please select Your Department</option>
							 <option value="AERO">AERO</option>
							 <option value="AUTO">AUTO</option>
							 <option value="CSE">CSE</option>
							 <option value="ECE">ECE</option>
							 <option value="EIE">EIE</option>
							 <option value="IT">IT</option>
							 <option value="MECH">MECH</option>
							 <option value="PT">PT</option>
							 <option value="RPT">RPT</option>
						  </select><br><br>
					  </div>
					  <label class="text">Year (Ex: 2)</label><br/>
					  <input type="number" name="year" id="year" placeholder="Year" min="1" max="7" required><br/><br/>
					  <label class="text">Mail id</label><br/>
					  <input type="email" id="name" placeholder="Mail id" name="mid" required><br/><br/>
					  <label class="text">Phone number</label><br/>
					  <input type="text" id="name" placeholder="Phone Number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required name="pho"><br/><br/>
					  <h2 style="color:#8000ff">Parent Information</h2>
					  <label class="text">Father Name</label><br/>
					  <input type="text" id="name" placeholder="Father Name" name="fname" required><br/><br/>
					  <label class="text">Mail id</label><br/>
					  <input type="email" id="name" placeholder="Mail id" name="fmid" required><br/><br/>
					  <label class="text">Phone number</label><br/>
					  <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="name" placeholder="Phone Number" name="fpho" required><br/><br/>				  
					  <input type="submit" value="Register"/>
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
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>