<?php
header('Content-Type: text/xml');
echo '</xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
$food = $_GET['food'];
$foodArray = array('dosa','idly','meals','roti curry','paratha','thali','gobi','noodles','fried rice');
if(in_array($food,$foodArray))
	echo 'we do have '.$food.'!';

	elseif($food=='')
	echo 'enter a food';

else
echo 'sorry we dont sell '.$food.'!';	

echo '<response>';
?>