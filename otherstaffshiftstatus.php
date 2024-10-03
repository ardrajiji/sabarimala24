<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>

    <title>Expedition A Travel Category Bootstrap Responsive website Template | Contact :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Expedition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>
<?php
include_once"connect.php";
?>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
        <header>
			  <div class="top-head py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 callnumber text-left">
                            </div>
                            <div class="col-lg-6 callnumber text-right">
                                <li class="mr-3">Australia : +5687567890</li>
								<li>Newyork : +4584567890</li>
                            </div>
                         </div>
                    </div>
               </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        Expedition
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3">
                            <a class="nav-link" href="otherstaffhome.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="about.html">about</a>
                        </li>
                         <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="otherstaffshiftstatus.php">shiftstatus</a>
                        </li>
                       <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="login.php">logout</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
    </div>
    <!-- //banner -->
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>
	 <!-- contact -->
    <div class="container py-lg-5 mt-sm-5 mt-3">
        <h3 class="agile-title text-uppercase"></h3>
        <span class="w3-line"></span>
		<div class="w3ls-titles text-center mb-5">
				<h3 class="title">SHIFTSTATUS</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			
	  </div>
      <div class="row py-md-5 py-sm-3">
        <div class="col-md-6">
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
 
 
 
           <form action="#" method="post">
             <table width="200" border="0">
  
  
   <tr>
    
   <table border="1" align="center" width="1000" height="200">
  	<tr><th>Staff Name</th><th>Shift Type</th><th>Date Alloted</th></tr>
  	<?php
	  
	   session_start();
	   $sn=$_SESSION['UserName'];
	
		$qry="select * from otherstaff_allot where staffname='$sn'";
		$res=mysql_query($qry);
	  
	while($data=mysql_fetch_assoc($res))
	{
		
		
		
			$sub=$data["staffname"];
		
		$ven=$data["shifttype"];
		
		$sta=$data["date_allot"];
		echo "<tr><td>$sub</td><td>$ven</td><td>$sta</td></tr>";
	 
	}
	  
	  ?>
  </table>
 </form>    
     
           	