
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RV WALLET</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
         

            <!-- Bootstrap -->
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
            
            <!-- Main Style -->
            <link rel="stylesheet" type="text/css" href="assets/css/main.css">

            <!--Icon Fonts-->
            <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css" />
                        
<style>
input#round{
width:100px; /*same as the height*/
height:100px; /*same as the width*/
background-color:#ffffff;
border:1px solid #000000; /*same colour as the background*/
color:#000000;
font-size:1.6em;
/*set the border-radius at half the size of the width and height*/
-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;
/*give the button a small drop shadow*/
-webkit-box-shadow: 0 0 10px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 10px rgba(0,0,0, .75);
box-shadow: 2px 2px 15px rgba(0,0,0, .75);
}
/***NOW STYLE THE BUTTON'S HOVER STATE***/
input#round:hover{
background:#00FF00;
border:1px solid #800000;
/*reduce the size of the shadow to give a pushed effect*/
-webkit-box-shadow: 0px 0px 5px rgba(0,0,0, .75);
-moz-box-shadow: 0px 0px 5px rgba(0,0,0, .75);
box-shadow: 0px 0px 5px rgba(0,0,0, .75);
}



</style>
</head>

<?php
session_start();
?>
<body background="1ogara.jpeg">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="yo.php">RV WALLET</a>
            </div>
             
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="logout1.php">log out</a>
                    </li>
                   <li>
                        <a href="betw.php">orders</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
   <!-- jQuery 
   








 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


     	<!-- Pricing Table Section -->
        <section id="pricing-table">
            <div class="container">
                <div class="row">
                    <div class="pricing">
                        <!--
						<div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">Free Plan</p>
                                    <p class="pricing-rate"><sup>$</sup> 0 <span>/Mo.</span></p>
                                    <a href="#" class="btn btn-custom">And Get Free Month</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="fa fa-envelope"></i>1,000 messages</li>
                                        <li><i class="fa fa-signal"></i><span>limited</span> data</li>
                                        <li><i class="fa fa-user"></i><span>limited</span> users</li>
                                        <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
						</* echo /* '<div style="Color:'.$Color.'">'.$yourtext/*. '</div>';*/
						
						 /*echo /* '<div style="Color:'.$Color.'">'.$yourtext2/*. '</div>';*/?>
						-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
								<form action="yo1.php" method="post">
                                    <p class="pricing-title">recharge </p>
									<br/><br/>
									<p class="pricing-title">usn:</p>
									<p class="pricing-title"><input type="text" 
       size="25" 
     
       style="background-color:white; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:40px;color:#000000" 
			  name="usn"
      onfocus="if(this.value == 'Job Title e.g. Assistant Manager') {
                    this.value = '';
                    this.style.color='#000';
                 }"> <!--<input type="text" name="usn"></p>
									
						-->			<p class="pricing-title">amount:
									<input type="text" 
       size="25" 
	   name="amount"
    
       style="background-color:white; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:40px;color:#000000" 
      onfocus="if(this.value == 'Job Title e.g. Assistant Manager') {
                    this.value = '';
                    this.style.color='#000';
                 }"> 

<!--<input type="text" 
       name="searchterm" size="35" 
       style="background-color:white; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:10px; 
              vertical-align:9px" /></p>
									<p class="pricing-title"><input type="text" name="amount"><br><br></p>-->
								<p class="pricing-title">	<input id="round" type="submit" value="done" /></p>
									</form>
								<!--	<p class="pricing-title"><input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: white; background-color: #000000; border: 3pt ridge lightgrey" value=" confirm "></p>
									
                                    <p class="pricing-title"><sup>  </sup>  <span></span></p>
                                   <!-- <a  class="btn btn-custom"></a>
                                --></div>

                                <!--<div class="pricing-list">
                                    <ul>
									
									
                                        <li><!--<i class="fa fa-envelope"></i>10,000 messages</li>
                                        <li><span>unlimited</span> data</li>
                                        <li><span>unlimited</span> users</li>
                                        <li>first 10 day free</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <!--<div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">Extended Plan</p>
                                    <p class="pricing-rate"><sup>$</sup> 80 <span>/Mo.</span></p>
                                    <a href="#" class="btn btn-custom">And Get Free Month</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="fa fa-envelope"></i>10,0000 messages</li>
                                        <li><i class="fa fa-signal"></i><span>unlimited</span> data</li>
                                        <li><i class="fa fa-user"></i><span>unlimited</span> users</li>
                                        <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						-->
                    </div>
                </div>
            </div>
        </section>
		<!-- Pricing Table Section End -->
	
	
	
</body>
</html>