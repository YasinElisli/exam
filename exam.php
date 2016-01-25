<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <!-- source links -->

    <?php
      include 'view/links.php';
    ?>

  <!-- source links end -->

<title>İmtahan</title>
</head>

<body>

  <!-- whole container -->

  <div class="container-fluid">


    <div class="valign-wrapper sidebar">

      <ul>

      <script type="text/javascript">

        for (var i = 1; i <= 25; i++) {
          document.write("<a class='navigationNumber' href='#"+i+"'><li>"+i+"</li></a>")
        }

        // scroll speed

        $('a').click(function(){
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 1000);
            return false;
        });

        // scroll speed

        // $('.navigationNumber').click(function(){
        //       $('li').removeClass('activeNum');
        //      $(this).find('li').addClass('activeNum');
        // });



// scroll active shit goes here but i don't have time for this shit now
// maybe later baby, maybe later



      </script>

    </ul>

      <div onclick="slideNav()" class="card navNextButton valign-wrapper">

        <img class="navArrowImg" src="img/arrow-left.png" alt="" />

      </div>



<script type="text/javascript">


// slide button

  var sidebar = document.getElementsByClassName('sidebar')[0];
  sidebar.style.transform = 'translateX(-100%)';

  var navArrowImg = document.getElementsByClassName('navArrowImg')[0];


  function slideNav() {

    if (sidebar.style.transform == 'translateX(-100%)') {

      sidebar.style.transform = 'translateX(0%)';
      navArrowImg.style.transform = 'rotate(360deg)';

    } else {

      sidebar.style.transform = 'translateX(-100%)';
      navArrowImg.style.transform = 'rotate(180deg)';


    }
  }

  // slide button








</script>




    </div>

  <!-- </div> -->

    <!-- header -->

    <?php
      include 'view/header.php';
    ?>
    <?php


     ?>
    <!-- header end -->

    <div class="mainContent">
      <div class="container">
        <form action="results.php" method="post">
        <?php
        if ($_POST) {
          $connection = mysqli_select_db($db_connection,$dbname);
          $stdName = $_POST["ad"];
          $stdSurname = $_POST['soyad'];
          $stdTel = $_POST['tel'];
          $query=mysqli_query($db_connection,"SELECT * FROM student WHERE name = '$stdName' AND surname = '$stdSurname' AND tel = '$stdTel'");
          if (mysqli_num_rows($query) > 0 ) {
            echo "Siz artiq qeydiyyatdan kecmisiniz";
          }
          else {
            session_start();
            $_SESSION['name'] = $stdName;
            $_SESSION['surname'] = $stdSurname;
            $_SESSION['tel'] = $stdTel;
            echo '<span class="btn waves-effect waves-light hide-on-small-only userNameSurname" style="float:right">'.$_SESSION['name']." ".$_SESSION['surname'].'</span>';//Istifadecinin adi soyadi header ucun
            $query=mysqli_query($db_connection,"SELECT * FROM question");

            while ($row = mysqli_fetch_assoc($query)) {
              $checkImg = "none";
              $qId = $row['id'];
              $qValue = $row['value'];
              $question = $row['question'];
              $qImg = $row['question_img'];
              if (!empty($qImg)) {
                $checkImg = "inherit";
              }
              $queryAnswer=mysqli_query($db_connection,"SELECT * FROM answer WHERE question_id = '$qId'");
              echo '<div class="row">
                <div style="position:relative" class="col s12 m12">

                <a class="questionPoint hide-on-small-only btn-floating btn-large waves-effect waves-light red">'.$qValue.'</a>

                  <div class="hoverable card"  id="'.$qId.'">

                    <div class="card-image">
                      <img class="responsive-img" src="'.$qImg.'" alt="" style="display:'.$checkImg.'" />
                    </div>
                    <div class="card-content">
                    <span class="question">
                    '.$qId.'. '.$question.'</span>

                    </div>

                    <div class="card-action">
                    ';
                    while ($row2 = mysqli_fetch_assoc($queryAnswer)) {
                      echo '

                      <p>
                        <input name="'.$qId.'" type="radio" id="test'.$row2['id'].'" value="'.$row2['variant'].'" />
                        <label for="test'.$row2['id'].'">'.$row2['variant'].')'.'</label>
                        <span>'.$row2['answer_content'].'</span>
                      </p>
                      ';

                    }
                    echo '

                    </div>
                  </div>
                </div>
              </div>';
            }
            echo '    <div class="submitDiv">

                  <button class="submitButton z-depth-1 col m5 red btn waves-effect waves-light" type="submit" name="action">Nəticə
                    <i class="material-icons right">send</i>
                  </button>
                  </form>

                  </div>';
          }

        }
        else {
          header("location:index.php");
        }


         ?>




    </div>
  </div>


<!-- footer -->

<?php

  include 'view/footer.php';

 ?>

<!-- footer end -->




  </div>

<!-- whole container end -->

</body>

</html>
