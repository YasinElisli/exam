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
    include 'db.php';
    $connection = mysqli_select_db($db_connection,$dbname);
    $query=mysqli_query($db_connection,"SELECT * FROM question");
    if (isset($_POST['action'])) {
      while ($row = mysqli_fetch_assoc($query)) {
        $trueAns = $row['answer'];
        $varValue = $row['value'];
        $qID = $row['id'];
        $truFalse = "+";
        if ($_POST["$qID"] != $trueAns) {
          $truFalse  = "-";
        }
        echo $qID." . ".$_POST["$qID"]." ".$truFalse."<br />";
      }
    }
		?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
