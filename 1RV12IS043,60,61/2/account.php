
<!DOCTYPE html>
<html lang="en">
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<head>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}

div.fixed {
    position: fixed;
    top:120px ;
    right: 100px;
    width: 500px;
	height: 1200px;
   
}
</style>
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
                        

</head>



<?php
session_start();
//echo $_SESSION["id"];

$host="localhost";
$user="root";
$pass="";
$db="wallet";

$conn=new mysqli($host,$user,$pass,$db);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
/*echo 'Connected successfully';
mysql_close($link);
?>
 */
 //mysql_select_db($db);

/*if(isset($_POST['submit'])){
$username=$_POST['usn'];
$password=$_POST['password'];
*/
$sql="SELECT usn,balance FROM wall_account WHERE usn='".$_SESSION["id"]."' ";

$res=$conn->query($sql);

if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
      $Color = "white";
  //echo '<div style="Color:'.$Color.'">' usn:  . $row["usn"].  - balance:  . $row["balance"]'</div>';
   $yourtext=  $row["usn"]  ;
    $yourtext2 = $row["balance"] ;
// echo $yourtext;
 //echo $yourtext2;
 
   //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext. '<h3></div>';
	
	 //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext2. '<h3></div>';
 
		//echo '<span style="color:blue;text-align:center;">"usn: " . $row["usn"]. " - balance: " . $row["balance"]. " " .  "<br>"</span>';
    }
} else {
    echo "0 results";
}
$conn->close();

/*
if(mysql_num_rows($res)==1){
  echo "id: " . $row["usn"]. " - Name: " . $row["balance"]. " " . "<br>";
  echo '<span style="color:#AFA;text-align:center;">Request has been sent. Please wait for my reply!</span>';
}
else{
echo "invalid 123456";
exit();
}

/*else{
echo "wtf";
exit();
}*/
?>








<body>

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
                   <!-- <li>
                        <a href="#">Contact</a>
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


    <!-- jQuery -->
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
                                    <p class="pricing-title">usn:<?php echo $yourtext  ?></p>
									<br/>
									<p class="pricing-title">balance</p>
                                    <p class="pricing-rate"><sup>rs  </sup><?php echo $yourtext2  ?>   <span></span></p>
                                    <a  class="btn btn-custom">recharge from the counter</a>
                                </div>

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
        
<div class="fixed">

<button type="button" onclick="loadDoc()">menu</button>
<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET", "cd_catalog.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>ITEM</th><th>PRICE</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</div>













</body>

</html>













