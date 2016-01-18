<!DOCTYPE html>
<html>

<head>
	<title>Check Answers</title>
	<link rel="stylesheet" href="style/style.css" media="screen" title="no title" charset="utf-8">
</head>


<body>
	<div class="container">
	<div class="checkBox">
		<form action="results.php" method="POST">

							<?php
					for ($i=1; $i <= 25 ; $i++) {

					     echo $i."<input maxlength=\"1\" type=\"text\" name = \"$i\" autocomplete=\"off\" style=\"width:20px; text-align:center; text-transform:uppercase \" reqiored ><br>";
					}
				// foreach ($cavablar as $key => $value) {
				// 	echo $key."-".$value;
				// }


					?>


				<button type="submit">Check</button>

		</form>
	</div>
</div>
</body>

</html>
