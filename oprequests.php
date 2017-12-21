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
	if(!isset($_SESSION['rcname']))
	{
		$_SESSION['rcname']="Raja";
	}
?>
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
			var sdate=document.getElementById("sdate").value;
			var edate=document.getElementById("edate").value;			
			if(edate < sdate)
			{
				alert("End Date should be greater than start date");
				return false;
			}
			return true;
			
		}
		$(document).ready(function()
		{
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
				var td="r"+reg,st="s"+reg,et="e"+reg;
				document.getElementById(td).innerHTML="Processing...";
				st=document.getElementById(st).innerHTML;
				et=document.getElementById(et).innerHTML;				
				reg="reg"+reg;
				reg=document.getElementById(reg).innerHTML;		
				var rcname= "<?php echo $_SESSION['rcname'] ?>";				
				$.ajax(
				{
						type:"POST",
						url:page,
						data :"regno="+reg+"&st="+st+"&et="+et+"&rc="+rcname,
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
            <a class="navbar-brand" href="index.html" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="oprequests.php">Outpass Requests</a></li>
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
					<th>Accept/Reject</th>
				</tr>
				<?php
					$qry="select * from outpassrequest where rcname='".$_SESSION['rcname']."'";
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
								echo '<tr><td>'.$r['fname'].'</td><td>'.$r['dept'].'</td><td id="s'.$counter.'">'.$row['sdate'].'</td><td id="e'.$counter.'">'.$row['edate'].'</td><td id="r'.$counter.'">'.'<button value="'.$counter.'"><img src="img/tick.png" style="width:20px;height:20px;"></img></button><button style="float:right" value="cross'.$counter.'"><img src="img/cross.png" style="width:20px;height:20px;"></img></button>';
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
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>