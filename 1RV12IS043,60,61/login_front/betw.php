<?php
session_start();
      
	  
	  $host="localhost";
$user="root";
$pass="";
$db="wallet";
$x="pending";
$y="delivered";
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
"UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$usn."'  ";
*$sql="SELECT order_id, items_ordered,status FROM wall_order WHERE status ='".$x."'  ORDER BY order_id DESC LIMIT 9 ";

$res=$conn->query($sql);

if ($res->num_rows >0) {
    // output data of each row
	$count=0;
    while($row = $res->fetch_assoc()) {
      
 //echo "items: " . $row["items_ordered"]. " - total: " . $row["total"]. " " . $row["can_timestamp"]. "<br>";
   $yourtext1[$count]=  $row["items_ordered"]  ;
    $yourtext[$count] = $row["order_id"] ;

	$yourtext2[$count]=$row["status"];
	
	$count=$count+1;
	
	// echo $yourtext;
 //echo $yourtext2;
 
   //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext. '<h3></div>';
	
	 //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext2. '<h3></div>';
 
		//echo '<span style="color:blue;text-align:center;">"usn: " . $row["usn"]. " - balance: " . $row["balance"]. " " .  "<br>"</span>';
    }
} else {
    //echo "0 results";
}
$conn->close();
	  
	*/  
	  
	  
	  
	  if(isset($_POST['submit1']))
      {$ven=$_SESSION["a"];  
	  
	  $var=$_POST['var1'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
 
 
	  if(isset($_POST['submit2']))
      {$ven=$_SESSION["a"]+1; $var=$_POST['var2'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
 
 if(isset($_POST['submit3']))
      {$ven=$_SESSION["a"]+2; $var=$_POST['var3'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
	  
	  
	  
	   if(isset($_POST['submit4']))
      {$ven=$_SESSION["a"]+3; $var=$_POST['var4'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
	  
	  
	  
	  

 if(isset($_POST['submit5']))
      {$ven=$_SESSION["a"]+4; $var=$_POST['var5'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
	  
	  
	  
	  

 if(isset($_POST['submit6']))
      {$ven=$_SESSION["a"]+5; $var=$_POST['var6'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
	  
	  
	  
	  

 if(isset($_POST['submit7']))
      {$ven=$_SESSION["a"]+6; $var=$_POST['var7'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
	  
	  
	  

 if(isset($_POST['submit8']))
      {$ven=$_SESSION["a"]+7; $var=$_POST['var8'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }
	  
	  
	  

 if(isset($_POST['submit9']))
      {$ven=$_SESSION["a"]+8; $var=$_POST['var9'];
	  
$sql2 = "UPDATE wall_order SET status = '".$y."' WHERE order_id ='".$var."' ";

if ($conn->query($sql2) === TRUE) {
   // echo "changed ";
		
	
	
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
	  }



$conn->close();









 ?>
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


//echo $venk;
for($i=0;$i<9;$i++)
{$yourtext[$i]=NULL;
$yourtext1[$i]=NULL;
$yourtext2[$i]=NULL;

}
$host="localhost";
$user="root";
$pass="";
$db="wallet";
$x="pending";
$count=0;
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
$sql="SELECT order_id, items_ordered,status FROM wall_order WHERE status ='".$x."'  ORDER BY order_id ASC LIMIT 9 ";

$res=$conn->query($sql);

if ($res->num_rows >0) {
    // output data of each row
	
    while($row = $res->fetch_assoc()) {
      
 //echo "items: " . $row["items_ordered"]. " - total: " . $row["total"]. " " . $row["can_timestamp"]. "<br>";
   $yourtext1[$count]=  $row["items_ordered"]  ;
    $yourtext[$count] = $row["order_id"] ;

	$yourtext2[$count]=$row["status"];
	
	$count=$count+1;
	
	// echo $yourtext;
 //echo $yourtext2;
 
   //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext. '<h3></div>';
	
	 //echo '<div style="Color:'.$Color.'"><h3>'.$yourtext2. '<h3></div>';
 
		//echo '<span style="color:blue;text-align:center;">"usn: " . $row["usn"]. " - balance: " . $row["balance"]. " " .  "<br>"</span>';
    }
} else {
    //echo "0 results";
}
$_SESSION["a"]= $yourtext[0];
$venk=$_SESSION["a"];
//echo $venk;
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
				<a class="navbar-brand" href="yo.php">RV WALLET</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
					 <li>
                        <a href="betw.php">orders</a>
                    </li>
                   
				
				 <li>
                        <a href="logout1.php">log out</a>
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
      <th>order id</th>
      <th>ordered items</th>
      <th>status</th>
	      </tr>
  </thead>
  <tbody>
  
    <form  name="input" action="betw.php" method="POST" id="form1">
	
  </form>
<form  name="input" action="betw.php" method="POST" id="form2">
	
  </form>
     <form  name="input" action="betw.php" method="POST" id="form3">
	
  </form>
  <form  name="input" action="betw.php" method="POST" id="form4">
	
  </form>
  <form  name="input" action="betw.php" method="POST" id="form5">
	
  </form>
  <form  name="input" action="betw.php" method="POST" id="form6">
	
  </form>
  <form  name="input" action="betw.php" method="POST" id="form7">
	
  </form>
  <form  name="input" action="betw.php" method="POST" id="form8">
	
  </form>
  <form  name="input" action="betw.php" method="POST" id="form9">
	
  </form>
	 <?php if($count >= 1) : ?>
	 <tr>
      <td><strong><?php echo $yourtext[0]  ?> </strong></td>
      <td><?php echo $yourtext1[0]  ?></td>
	  <input type='hidden' form='form1' name='var1' value="<?php echo "$yourtext[0]";?>" /> 
      
	  <td><button type="submit" form="form1" value="Submit" name="submit1">delivered</button></td>
	 <?php endif; ?> 
    </tr> 
	<?php if($count >= 2) : ?>
	<tr>
      <td><strong><?php echo $yourtext[1]  ?> </strong></td>
      <td><?php echo $yourtext1[1]  ?></td>
	   <input type='hidden' form='form2' name='var2' value="<?php echo "$yourtext[1]";?>" /> 
  <td><button type="submit" form="form2" value="Submit" name="submit2">delivered</button></td>
	 
    </tr>
 <?php endif; ?> 

<?php if($count >= 3) : ?>
	<tr>
      <td><strong><?php echo $yourtext[2]  ?> </strong></td>
      <td><?php echo $yourtext1[2]  ?></td>
	   <input type='hidden' form='form3'name='var3' value="<?php echo "$yourtext[2]";?>" /> 
  <td><button type="submit" form="form3" value="Submit" name="submit3">delivered</button></td>
	 
    </tr> 
	<?php endif; ?> 
	<?php if($count >= 4) : ?>
	<tr>
      <td><strong><?php echo $yourtext[3]  ?> </strong></td>
      <td><?php echo $yourtext1[3]  ?></td>
	   <input type='hidden' form='form4' name='var4' value="<?php echo "$yourtext[3]";?>" /> 
  <td><button type="submit" form="form4" value="Submit" name="submit4">delivered</button></td>
	 
    </tr> 
	<?php endif; ?> 
	<?php if($count >= 5) : ?>
	<tr>
      <td><strong><?php echo $yourtext[4]  ?> </strong></td>
      <td><?php echo $yourtext1[4]  ?></td>
	   <input type='hidden' form='form5' name='var5' value="<?php echo "$yourtext[4]";?>" /> 
  <td><button type="submit" form="form5" value="Submit" name="submit5">delivered</button></td>
  
    </tr>
	<?php endif; ?> 
<?php if($count >= 6) : ?>
	<tr>
      <td><strong><?php echo $yourtext[5]  ?> </strong></td>
      <td><?php echo $yourtext1[5]  ?></td>
	   <input type='hidden' form='form6' name='var6' value="<?php echo "$yourtext[5]";?>" /> 
      <td><button type="submit" form="form6" value="Submit" name="submit6">delivered</button></td>
	 
    </tr> 
	<?php endif; ?> 
	<?php if($count >= 7) : ?>
	<tr>
      <td><strong><?php echo $yourtext[6]  ?> </strong></td>
      <td><?php echo $yourtext1[6]  ?></td>
	   <input type='hidden' form='form7' name='var7' value="<?php echo "$yourtext[6]";?>" /> 
  <td><button type="submit" form="form7" value="Submit" name="submit7">delivered</button></td>
	 
    </tr>
	<?php endif; ?> 
	<?php if($count >= 8) : ?>
	<tr>
      <td><strong><?php echo $yourtext[7]  ?> </strong></td>
      <td><?php echo $yourtext1[7]  ?></td>
	   <input type='hidden' form='form8' name='var8' value="<?php echo "$yourtext[7]";?>" /> 
<td><button type="submit" form="form8" value="Submit" name="submit8">delivered</button></td>
	  
	   </tr> 
	   <?php endif; ?> 
	   <?php if($count >= 9) : ?>
	   <tr>
      <td><strong><?php echo $yourtext[8]  ?> </strong></td>
      <td><?php echo $yourtext1[8]  ?></td>
	   <input type='hidden' form='form9' name='var9' value="<?php echo "$yourtext[8]";?>" /> 
   <td><button type="submit" form="form9" value="Submit" name="submit9">delivered</button></td>
   
	 </tr>
    <?php endif; ?> 
  </tbody>
</table>

<body>


</html>