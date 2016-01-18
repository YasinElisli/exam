<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Results</title>
    <link rel="stylesheet" href="style/style.css" media="screen" title="no title" charset="utf-8">

  </head>
  <body>
		<?php

		$cavablar = array("B","B","E","E","D","B","A","B","E","B","E","D","C","C","C","B","C","C","A","D","C","B","B","A","D");
		$cavablar2 = array();
		$dordbal = array(8,13,17);
		$ucbal = array(1,4,11,14,16);
		$ikibal = array(2,6,7,10,20,21);
		$allAnswer = [
			"1 bal" => [],
			"2 bal" => [2,6,7,10,20,21],
			"3 bal" => [1,4,11,14,16],
			"4 bal" => [8,13,17]
		];

		for ($i=0; $i < count($cavablar) ; $i++) {
			$cavablar2[] = strtolower($cavablar[$i]);
		}
		$dogruCavab = 0;
		$yanlisCavab = 0;
		$yekunBal = 0;
		$bosCavab = 0;
		$trueFalse;

		for ($i=1; $i <= 25 ; $i++) {

			if ($_POST[$i] == $cavablar[$i-1] || $_POST[$i] == $cavablar2[$i-1] ) {

				if (in_array($i,$dordbal)) {
					$yekunBal += 4;
					$trueFalse = "+";
				}
				elseif (in_array($i,$ucbal)) {
					$yekunBal += 3;
					$trueFalse = "+";
				}
				elseif (in_array($i,$ikibal)) {
					$yekunBal += 2;
					$trueFalse = "+";
				}
				else{
					$yekunBal++;
					$trueFalse =  "+";
				}
		          $dogruCavab++;
			}
			elseif ($_POST[$i] == null) {
				$bosCavab++;
			}
			else{
				$yanlisCavab++;
        $trueFalse= "-";
			}

		}
		echo "<span>Dogru cavablarin sayi = ".$dogruCavab."</span><br>";
		echo "<span>Yanlis cavablarin sayi = ".$yanlisCavab."</span><br>";
		echo "<span>Cavablandirilmamis sual sayi = ".$bosCavab."</span><br>";
		echo "<span>Yekun Bal = ".$yekunBal."</span><hr>";


	echo "<ul class=\"pull-left\">";
	echo "<li>Dogru cavablar</li>";
		foreach ($cavablar as $key => $value) {
			echo "<li>".($key+1).". ".$value."(".$trueFalse.")"."</li>";
		}
			echo "</ul>";



		echo "<ul class=\"pull-left\">";
		echo "<li>Telebenin cavablari</li>";
		foreach ($_POST as $key => $value) {
			echo "<li >".$key.". ".strtoupper($value)."</li>";
		}
		echo "</ul>";
		/*for ($i=0; $i < 25 ; $i++) {
			echo $_POST[$i]."<br>";
		}*/
		?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
