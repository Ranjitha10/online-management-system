<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<script type="text/javascript" src="foodstore.js"></script>
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
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>

<body onload ="process()" background="1ogara.jpeg">
<form method="post" action="order.php">
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
                <a class="navbar-brand" href="index.php">RV WALLET</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="account.php">Account</a>
                    </li>
                    <li>
                        <a href="test.php">Orders</a>
                    </li>
                    <!--<li>
                        <a href="contact.php">Contact</a>
                    </li>
-->					<li>
                        <a href="about.php">About</a>
                    </li>
					<li>
                        <a href="logout.php">Log out</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

 <div class="col-md-3">
                <p class="lead">Food is your body's fuel. Without fuel, your body wants to shut down.</p><br></br>
				<h4>There is no sincerer love than the love of food.</h4><br></br>
				<h4>You don't need a silver fork to eat good food.</h4><br></br>
				<h4>Tell me what you eat, and I will tell you who you are.</h4><br></br>
				<h4>There's no better feeling in the world than a warm pizza box on your lap.</h4><br></br>
				<h4>When I eat with my friends, it is a moment of real pleasure, when I really enjoy my life.</h4><br></br>
				<h4>Only the pure in heart can make a good soup.</h4><br></br>
				<h4>I saw few die of hunger; of eating, a hundred thousand.</h4><br></br>
				<h4>One should eat to live, not live to eat.</h4><br></br>
				<h4>Civilization as it is known today could not have evolved, nor can it survive, without an adequate food supply.</h4><br></br>
                <h4>Your diet is a bank account. Good food choices are good investments.</h4><br></br>
				<h4>I like food. I like eating. And I don't want to deprive myself of good food.</h4><br></br>
				<h4>I get way too much happiness from good food.</h4><br></br>
				<h4>Patience is the secret to good food.</h4><br></br>
				<h4>My work has also motivated me to put a lot of time into seeking out good food and to spend more money on it.
</h4><br></br>
            </div>


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="foodcourt.jpeg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="ogara.jpeg" alt="">
                                </div>
                               
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
				<br></br>	
				<div>
				<form>
				<h2> <a class=" primary"<h2> Enter the dish </h2>
				<input type="text" size="30" onkeyup="showResult(this.value)">
				<div id="livesearch"></div>
				</form>
				</div>	
				<br></br>	<br></br>	<br></br>	
		
				<h2> <a class=" primary"<h2> South indian </h2></a></h2><br></br>
				
                <div class="row">

                   
				    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="dosa1.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">20 rs</h4>
                                <h4><a href="#">dosa</a>
                                 <br /><input type="number" min="0" name="dno" /><br />
								 </h4>
                               <p>Served with Cocunut chutney,Sambar,Butter/Ghee <a target="_blank" href="#"></a>.</p> 
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="idly1.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">15 rs</h4>
                                <h4><a href="#">Idly</a>
                                 <br /><input type="number" min="0" name="ino" /><br />
								 </h4>
								 
                               <p>Preffered addon Vada,Served with Sambar,Chutney <a target="_blank" href="#"></a>.</p> 
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					 
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="southmeals.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">40 rs</h4>
                                <h4><a href="#">South Indian Meals</a>
                                 <br /><input type="number" min="0" name="mno" /><br />
								 </h4>
                               <p>Dal,Sambar,Rasam,Curd,Papad,Pickel <a target="_blank" href="#"></a>.</p> 
                            </div><br>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div><br></br><br></br>
					<br></br><br></br>
					
					<br></br><h2> <a class=" primary"  <h2>    North indian</h2></a></h2>
					<br></br>
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="roti.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">25 rs</h4>
                                <h4><a href="#">Roti Curry</a>
                                 <br /><input type="number" min="0" name="rno" /><br />
								 </h4>
                               <p>Palak Panner/Malai kofta/Kaju special <a target="_blank" href="#"></a>.</p> 
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="paratha.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">20 rs</h4>
                                <h4><a href="#">Paratha</a>
                                 <br /><input type="number" min="0" name="pno" /><br />
								 </h4>
                               <p>Curd,Pickel,Butter <a target="_blank" href="#"></a>.</p> 
                            </div><br>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="northmeal.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">35 rs</h4>
                                <h4><a href="#">North Indian Thali</a>
                                 <br /><input type="number" min="0" name="nno" /><br />
								 </h4>
                               <p>3 Puri,Channa masala,Rice,Chutney,Papad,Curd <a target="_blank" href="#"></a>.</p> 
                            </div><br><br>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div><br></br><br></br>
					<h2> <a class=" primary"<h2>Chineese</h2></a></h2><br></br>
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="gobi.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">25 rs</h4>
                                <h4><a href="#">Gobi manchurian</a>
                                 <br /><input type="number" min="0" name="gono" /><br />
								 </h4>
                               <p>Served with chilli/tomato sause <a target="_blank" href="#"></a>.</p> 
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="noodles.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">25 rs</h4>
                                <h4><a href="#">Noodles</a>
                                 <br /><input type="number" min="0" name="nono" /><br />
								 </h4>
                               <p>Normal/schiezwan,Served with ketchup <a target="_blank" href="#"></a>.</p> 
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					
					 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="fried.jpeg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">30 rs</h4>
                                <h4><a href="#">Fried Rice</a>
                                 <br /><input type="number" min="0" name="frno" /><br />
								 </h4>
                               <p>Normal/scheizwan,Served with ketchup <a target="_blank" href="#"></a>.</p> 
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					

                   

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <!--<h4><a href="#">Like this template?</a>
                        </h4>-->
						<br />
						<br />
						<br />
						
					<h2><h3><input type="submit" name="submit" value="CONFIRM ORDER" /></h3></h2>
                        <!--<p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    -->
					</div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CANTEEN MANAGEMENT 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>