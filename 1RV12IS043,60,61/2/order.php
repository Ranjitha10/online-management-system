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
                        

</head>
<?php
session_start();
$usn = $_SESSION["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wallet";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql2="SELECT ph_no FROM wall_signup WHERE usn='".$usn."' ";

$result1 = $conn->query($sql2);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
       // echo "balance -  " . $row["balance"]. " ";
	 $tonum=$row["ph_no"];
    }
}

error_reporting(E_ALL);
ob_implicit_flush(true);

include_once "class.curl.php";
include_once "class.sms.php";
//include_once "cprint.php";

$smsapp=new sms();
$smsapp->setGateway('way2sms');
//$myno=$_POST['fromno'];
//$p=$_POST['pass'];
//$tonum=$_POST['tono'];
//$mess=$_POST['message'];
$myno="9481426762";
$p="may281993";
//$tonum=$_POST['tono'];
$mess="order is successfully received";
//cprint("Logging in ..\n");
$ret=$smsapp->login($myno,$p);

if (!$ret) {
  // cprint("Error Logging In");
   //exit(1);
}

//print("Logged in Successfully\n");

//print("Sending SMS ..\n");
$ret=$smsapp->send($tonum,$mess);

if (!$ret) {
   //print("Error in sending message");
   //exit(1);
}

//print("Message sent");


























$dosa= $_POST ['dno'];
$idly= $_POST ['ino'];
$meals= $_POST ['mno'];
$roti= $_POST ['rno'];
$paratha= $_POST ['pno'];
$thali= $_POST ['nno'];
$gobi= $_POST ['gono'];
$noodles= $_POST ['nono'];
$frice= $_POST ['frno'];

$dosa1 = " " ;
$idly1 = " ";
 $meals1 = " ";
 $roti1 =" ";
 $paratha1 = " ";
 $thali1 = " ";
 $gobi1 = " ";
 $noodles1 = " ";
 $frice1= " ";





$a=2;

if($dosa != NULL)
{$dosa1="dosa - $dosa \t ";

}
if($idly != NULL)
{$idly1="idly - $idly \t  ";

}
if($meals != NULL)
{$meals1="south indian meals - $meals \t  ";

}
if($roti != NULL)
{$roti1="roti curry - $roti \t  ";

}
if($paratha != NULL)
{$paratha1="paratha - $paratha  \t ";

}

if($thali != NULL)
{$thali1="north indian thali - $thali  \t ";

}
if($gobi != NULL)
{$gobi1="gobi manchurian - $gobi   \t ";

}

if($noodles != NULL)
{$noodles1="noodles - $noodles  \t  ";

}

if($frice != NULL)
{$frice1="fried rice - $frice   \t ";

}



$xyz=$dosa1. $idly1. $meals1. $roti1 .$paratha1 .$thali1 .$gobi1 .$noodles1 .$frice1;

//echo $xyz;







$amount=$dosa*20+$idly*15+$meals*20+$roti*25+$paratha*20+$thali*35+$gobi*25+$noodles*25+$frice*30;
//echo $amount;

//echo " YOUR ORDER IS ::::$dosa DOSA     $idly    IDLE $puri     PURI ";
//echo "With ORDER_ID $orderid AMOUNT PAYABLE IS :: $amount";
$sql1="SELECT balance FROM wall_account WHERE usn='".$usn."' ";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "balance -  " . $row["balance"]. " ";
	   $bal=$row["balance"];
    }
}
$x = "pending";
//echo $bal;
if($bal>=$amount)
{

$dif=$bal-$amount;

$sql2 = "UPDATE wall_account SET balance = $dif  WHERE usn ='".$usn."'  ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$sql = "INSERT INTO wall_order (items_ordered,usn,total,status)
 VALUES ('$xyz','$usn','$amount','$x')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
		
	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
header('Location: er_funds.php');
}
$conn->close();


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
                    
					<li>
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
                                    <p class="pricing-title"><?php echo $xyz  ?></p>
									<br/>
									<p class="pricing-title">total</p>
                                    <p class="pricing-rate"><sup>rs  </sup><?php echo $amount  ?>   <span></span></p>
                                    <a  class="btn btn-custom">thank you!!</a>
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
        
















</body>

</html>







