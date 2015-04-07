<?php
isset( $_REQUEST['input'])? $input= $_REQUEST['input']:$input="";
echo "
<html>
	<head>
		<title>
		Random Number Program
		</title>
	<head>
	<body>
	<br>
";
function userIN(){
	echo"
	<form method=post action=hw1.php>
	Enter a number:
	<input type=\"text\" id=\"input\" name=\"input\">
	<input type=\"submit\" value=\"Submit\" /></p>
	</form>
	";
	
	return $input;
}
echo "</center></td></body>";
