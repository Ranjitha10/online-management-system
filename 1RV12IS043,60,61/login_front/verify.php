<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="wallet";

$con=mysql_connect($host,$user,$pass);
/*
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
 */mysql_select_db($db);

if(isset($_POST['submit'])){
$username=$_POST['usn'];
$password=$_POST['password'];
$sql="SELECT * FROM wall_signup WHERE usn='".$username."' AND password='".$password."'LIMIT 1";

$res=mysql_query($sql);

if(mysql_num_rows($res)==1){
$_SESSION["id"] = $username;
$_SESSION["ven1"]=1;
 header( "Location: ../2/index.php" ); die;
echo "you have successfully logged in.";
exit();
}
else{
$_SESSION["ven1"]=1;
header( "Location: ero.php" );
echo "invalid 123456";
exit();
}
}
/*else{
echo "wtf";
exit();
}*/
?>

<html>
echo "hey";
</html>