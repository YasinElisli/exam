<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nəticə</title>

  <!-- source links -->

    <?php
      include 'view/links.php';
    ?>

  <!-- source links end -->
  
</head>

<body>

  <div class="container-fluid">


    <?php
    include 'db.php';
    include 'view/header.php';
?>

<div class="container">

<h4>Nəticə</h4>


      <div class="resultContent">


          <div class="resultTable card large hoverable">

            <?php
    session_start();
    if (isset($_SESSION['name'])) {
      $connection = mysqli_select_db($db_connection,$dbname);
      $query=mysqli_query($db_connection,"SELECT * FROM question");
      if (isset($_POST['action'])) {
        $result = 0;
        $trueNum = 0;
        $falseNum = 0;
        $emptyAns = 0;
        $stdnAnswer = [];
        $userName =  $_SESSION['name'];
        $userSurname = $_SESSION['surname'];
        $userTel = $_SESSION['tel'];
        echo '<ol class="highlight result" style="float:left">';
        while ($row = mysqli_fetch_assoc($query)) {
          $trueAns = $row['answer'];
          $varValue = $row['value'];
          $qID = $row['id'];
          $truFalse = "-";

          if (isset($_POST["$qID"]) && $_POST["$qID"] == $trueAns) {
            $truFalse  = "+";
            $result = $result + $varValue;
            $trueNum++;
          }
          elseif (!isset($_POST["$qID"])) {
            $emptyAns++;
          }
          elseif (isset($_POST["$qID"]) && $_POST["$qID"] != $trueAns) {
            $truFalse = "-";
            $falseNum++;
          }
          echo "<li>";
          if (isset($_POST["$qID"])) {
            $stdnAnswers[] = $_POST["$qID"];
            echo $_POST["$qID"];
          }
          else {
            $_POST["$qID"] = null;
            $stdnAnswers[] = $_POST["$qID"];
          }
          echo " ".$truFalse. " " .$trueAns."</li>";
          if ($qID%10 == 0) {
            echo "</ol>";
            echo '<ol class="result" style="float:left" start=".($qID+1).">';
          }
        }
        echo "</ol>";

        echo "<div class='resultText'>";
            echo '<br />'."Nəticə : ".$result." bal".'<br />';
            echo "Doğru cavabların sayı: ".$trueNum.'<br />';
            echo "Yanlış cavabların sayı: ".$falseNum.'<br />';
            echo "Cavablandırılmamış: ".$emptyAns;
        echo "</div>";
            $today = date("Y-m-d  H:i:s");
            $query=mysqli_query($db_connection,"INSERT INTO student(name,surname,tel,result,reg_date) VALUES('$userName','$userSurname','$userTel','$result','$today')");
            $query=mysqli_query($db_connection,"SELECT id FROM student WHERE name = '$userName'");
            while ($row = mysqli_fetch_assoc($query)) {
              $s_id =  $row['id'];
            }
            foreach ($stdnAnswers as $key => $value) {
              $key = $key + 1;
              $query=mysqli_query($db_connection,"INSERT INTO students_answer(s_id,question_id,s_answer) VALUES('$s_id','$key','$value')");
            }
      }
    }
    else {
      header("location:index.php");
    }
   session_unset();
?>
          </div>
        </div>
      </div>

      <div class="teal enteranceFooter">

        <div class="container">
          <span>© 2016 Copyright Code Academy</span>
        </div>

      </div>



  </div>

</body>

</html>
