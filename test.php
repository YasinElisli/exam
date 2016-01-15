<!DOCTYPE html>
<html>
<head>
	<title>Test_Cavab</title>
</head>
<style type="text/css">
	body{
		background: #EEF5DB;
	}
	input{
		width: 40px;
		padding: 0px 10px;
		text-transform: uppercase;
	}

	form{
		position: relative;
		top: 20px;
		left: 300px;
	}
	form input{
		position: absolute;
		background: #EAD2AC;
		border: none;
	}
	button{
		padding: 3px 10px; 
		margin-top: 10px;
		margin-left: 20px;
	}
</style>
<body>
<div>
<form action ="yoxla.php" method ="POST">
	
	<?php
	for ($i=1; $i <= 25 ; $i++) {
	    $margin = "0px";
	    if ($i < 10) {
	     	$margin = "8px";
	     } 
	     echo $i."<input type=\"text\" name = \"$i\" style=\"margin-left: {$margin}\" ><br>";
	}
// foreach ($cavablar as $key => $value) {
// 	echo $key."-".$value;
// }


	?>


<button type="submit">Yoxla</button>
</form>
</div>
</body>
</html>