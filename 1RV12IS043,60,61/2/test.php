
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
             <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   

<style>
.button-wrapper {
  display: block;
  text-align: center;
}

.button {
  border: none;
  border-radius: 3em;
  box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
  display: inline-block;
  font-size: 1em;
  padding: 1em 2em;
  width: auto;
}

.cta-button {
  background-color: #yourButtonColor;
  color: #fff !important;
}

.cta-button:hover {
  background-color: #yourButtonHoverColor;
}


body {
	
    background-image: url("1ogara.jpeg");
   

	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 1000px;
}	

th {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}

</style>
</head>
<?php
ini_set( "display_errors", 0); 

session_start();
$usn= $_SESSION["id"];
for($i=0;$i<9;$i++)
{$yourtext[$i]=NULL;
$yourtext2[$i]=NULL;
$yourtext3[$i]=NULL;
$yourtext4[$i]=NULL;
}
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
$sql="SELECT items_ordered,can_timestamp,total,status FROM wall_order WHERE usn='".$usn."'  ORDER BY order_id DESC LIMIT 9 ";

$res=$conn->query($sql);

if ($res->num_rows >0) {
    // output data of each row
	$count=0;
    while($row = $res->fetch_assoc()) {
      
 //echo "items: " . $row["items_ordered"]. " - total: " . $row["total"]. " " . $row["can_timestamp"]. "<br>";
   $yourtext[$count]=  $row["items_ordered"]  ;
    $yourtext2[$count] = $row["total"] ;
$yourtext3[$count]=$row["can_timestamp"];
	$yourtext4[$count]=$row["status"];
	//echo $yourtext3[$count];
//$timestamp = strtotime($yourtext3[$count]);
	//$date = date('m', $timestamp);
//$time = date('Gi.s', $timestamp);
//echo $date;
	$count=$count+1;
	//$timestamp = strtotime($row['DATETIMEAPP']);

 //echo $yourtext2;
 
   //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext. '<h3></div>';
	
	 //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext2. '<h3></div>';
 
		//echo '<span style="color:blue;text-align:center;">"usn: " . $row["usn"]. " - balance: " . $row["balance"]. " " .  "<br>"</span>';
    }
} else {
    //echo "0 results";
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
                 <!--   <li>
                        <a href="#">Contact</a>
                    </li>
					--><li>
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

</body>

<table>
  <thead>
    <tr>
      <th>time/date</th>
      <th>total</th>
      <th>ordered items</th>
	  <th>status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong><?php echo $yourtext3[0]  ?> </strong></td>
      <td><?php echo $yourtext2[0]  ?></td>
      <td><?php echo $yourtext[0]  ?></td>
	  <td><?php echo $yourtext4[0]  ?></td>
    </tr>
    <tr>
      <td><strong><?php echo $yourtext3[1]  ?></strong></td>
      <td><?php echo $yourtext2[1]  ?></td>
      <td><?php echo $yourtext[1]  ?></td>
	  <td><?php echo $yourtext4[1]  ?></td>
    </tr>
    <tr>
      <td><strong><?php echo $yourtext3[2]  ?></strong></td>
      <td> <?php echo $yourtext2[2]  ?></td>
      <td>  <?php echo $yourtext[2]  ?> </td>
	  <td><?php echo $yourtext4[2]  ?></td>
	  
    </tr>
    <tr>
      <td><strong> <?php echo $yourtext3[3]  ?></strong></td>
      <td><?php echo $yourtext2[3]  ?> </td>
      <td><?php echo $yourtext[3]  ?> </td>
	  <td><?php echo $yourtext4[3]  ?></td>
	  
    </tr>					
    <tr>
      <td><strong> <?php echo $yourtext3[4]  ?> </strong></td>
      <td> <?php echo $yourtext2[4]  ?> </td>
      <td><?php echo $yourtext[4]  ?> </td>
	  <td><?php echo $yourtext4[4]  ?></td>
    </tr>
    <tr>
      <td><strong><?php echo $yourtext3[5]  ?> </strong></td>
      <td> <?php echo $yourtext2[5]  ?></td>
      <td><?php echo $yourtext[5]  ?> </td>
	  <td><?php echo $yourtext4[5]  ?></td>
    </tr>
    <tr>
      <td><strong> <?php echo $yourtext3[6]  ?></strong></td>
      <td><?php echo $yourtext2[6]  ?> </td>
      <td><?php echo $yourtext[6]  ?> </td>
	  <td><?php echo $yourtext4[6]  ?></td>
    </tr>
    <tr>
      <td><strong>  <?php echo $yourtext3[7]  ?></strong></td>
      <td> <?php echo $yourtext2[7]  ?> </td>
      <td><?php echo $yourtext[7]  ?> </td>
	  <td><?php echo $yourtext4[7]  ?></td>
	  
    </tr>
    <tr>
      <td><strong><?php echo $yourtext3[8]  ?> </strong></td>
      <td> <?php echo $yourtext2[8]  ?></td>
      <td> <?php echo $yourtext[8]  ?></td>
	  <td><?php echo $yourtext4[8]  ?></td>
    </tr>
  </tbody>
</table>
<br></br>
<div align="center">

<div class="container">
      
  <a href="export.php">  <button type="button" class="btn btn-primary">download excel sheet</button></a>
</div>
</div>
<body>


</html>