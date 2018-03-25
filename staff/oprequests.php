<?php
include('../dbconnection.php');
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
    <title>MIT Hostels</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/customsmade.css">
	
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
	function getCookie(name)
		{
		var re = new RegExp(name + "=([^;]+)");
		var value = re.exec(document.cookie);
		return (value != null) ? unescape(value[1]) : null;
		}
		
		$(document).ready(function()
		{
			var mail=getCookie("rcmail");
		if(mail==null)
		{
			alert("Login and try");
			window.location="login.html";
		}
		else
		{
			var fname=getCookie("rcname");
		if(!(fname==null))
		{
			$("#myname").html("Hi "+fname);
			document.getElementById("loggedin").style.display="block";
			document.getElementById("notloggedin").style.display="none";			
		}
		}
			$("button").click(function()
			{
				var reg=$(this).val();
				var index=reg.indexOf("cross");
				var page="acceptop.php";
				if(index!=-1)
				{
					reg=reg.substring(index+5);
					page="rejectop.php";
				}
				var td="r"+reg,st="s"+reg,et="e"+reg,reason="re"+reg;
				document.getElementById(td).innerHTML="Processing...";
				st=document.getElementById(st).innerHTML;
				et=document.getElementById(et).innerHTML;	
				reason=document.getElementById(reason).innerHTML;
	
				reg="reg"+reg;
				reg=document.getElementById(reg).innerHTML;		
				var name= getCookie('rcname');					
				$.ajax(
				{
						type:"POST",
						url:page,
						data :"regno="+reg+"&st="+st+"&et="+et+"&reason="+reason+"&rc="+name,
						dataType:"json",
						success:function(response)
						{							
							if(response.indexOf("success")!=-1)
							{
								document.getElementById(td).innerHTML="Processed";
							}
							else
							{
								document.getElementById(td).innerHTML="Error";
							}
						}
				}
				);					
			});
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
		input[type=text],input[type=datetime-local],#rcname
		{
			width: 50%;
			padding: 9px 15px;
			border-radius:10px;
		}
		input[type=text]:hover,input[type=date]:hover,#rcname:hover
		{
			border: 2px solid red;
		}
		input[type=text]:focus,input[type=date]:focus,#rcname:focus
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
			background-color: #FFFFCC;
			color: black;
			table-layout:fixed;
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
			  <li class="dropdown active">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">RC Options</a>
                <ul class="dropdown-menu">
                  <li><a href="oprequests.php">Accept / Reject OP</a></li>                  
                
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
              <h1>Outpass Requests</h1>
        </div>
      </section>

      <section class="probootstrap-section">
		<div class="container">
		  <div class="col-md-7 col-md-push-1  probootstrap-animate" id="orgform">                  
				<h2>Active Requests</h2>
				<table id="requests">
				<tr>					
					<th>Name</th>
					<th>Dept.</th>
					<th>Start date</th>
					<th>End date</th>
					<th>Reason</th>
					<th>Accept/Reject</th>
				</tr>
				<?php
					$qry="select * from outpassrequest where rcmail='".$_COOKIE['rcmail']."'";
					$res=mysqli_query($conn,$qry);
					if($res && mysqli_num_rows($res))
					{
						$counter=0;
						while($row=mysqli_fetch_assoc($res))
						{
							$qry="select fname,dept from student where regno='".$row['regno']."' LIMIT 1";
							$result=mysqli_query($conn,$qry);
							if($result && mysqli_num_rows($result))
							{
								$r=mysqli_fetch_assoc($result);
								echo '<label id="reg'.$counter.'" hidden>'.$row['regno'].'</label>';
								echo '<tr><td>'.$r['fname'].'</td><td>'.$r['dept'].'</td><td id="s'.$counter.'">'.$row['sdate'].'</td><td id="e'.$counter.'">'.$row['edate'].'</td><td id="re'.$counter.'">'.$row['reason'].'</td><td id="r'.$counter.'">'.'<button value="'.$counter.'"><img src="../img/tick.png" style="width:20px;height:20px;"></img></button><button style="float:right" value="cross'.$counter.'"><img src="../img/cross.png" style="width:20px;height:20px;"></img></button></td></tr>';
								$counter=$counter+1;
							}
						}
					}
				?>
				</table>
            </div>
		</div>
      </section>
      
    
    <!-- END wrapper -->
    

    <script src="../js/scripts.min.js"></script>
    <script src="../js/main.min.js"></script>
    <script src="../js/custom.js"></script>

  </body>
</html>