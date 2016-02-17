







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
     
</head>

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
                <a class="navbar-brand">RV WALLET</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <!-- <li>
                        <a href="signup.php">signup</a>
                    </li>
                    <!--<li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
   
   
<!--
    <div class="container">
	
				<h2>USER LOGIN</h2>
				<br />	
				<form action="verify.php" method="post">
			usn:<br>
			<input type="text" name="username"><br><br>
			Password:<br>
				<input type="password" name="password"><br><br>
			<input type="submit" name="submit" value="Log in">
			</form></div>
        <br /><br /><br />
	<div class="container">
				<h2>ADMIN LOGIN</h2>
				<br />	
				<form action="verify.php" method="post">
			User Name:<br>
			<input type="text" name="username"><br><br>
			Password:<br>
				<input type="password" name="password"><br><br>
			<input type="submit" name="submit" value="Log in">
			</form></div>
       <!-- <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
		-->
		
		
        <!-- Footer 
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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




















<?php
session_start();
//echo $_SESSION["id"];
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





$usn= $_POST ['usn'];
 $_SESSION["usn"]=$usn;
$pass= $_POST ['amount'];
//echo $usn.$pass;
//$phnum= $_POST ['mob'];
$sql1 = "SELECT balance FROM wall_account WHERE usn = '".$usn."'";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $ba=  $row["balance"];
    }
} else {
header('Location: ero1.php');
    echo "0 results";
	die;
}

$new=$pass+$ba;


$sql = "UPDATE wall_account SET balance = $new WHERE usn = '".$usn."'";
if ($conn->query($sql) == TRUE)
{



header('Location: yo2.php');
 
}
else
{
 echo "error in signing in ,please retry again ";
	//sleep(3);
	//header('Location: signup.php');

}


//}
/*if ($conn->query($sql) === TRUE) {

header('Location: main.php');
 echo"successfull signed up ";
} else {
    echo "error in signing in ,please retry again ";
	//sleep(3);
	//header('Location: signup.php');
}*/

$conn->close();
?>
