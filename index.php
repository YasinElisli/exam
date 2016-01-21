<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Giriş</title>

  <!-- source links -->

  <?php
        include 'view/links.php';
  ?>

    <!-- source links end -->


</head>

<body>
  <!-- whole container -->

  <div class="container-fluid">
    <!-- header -->

    <?php
      include 'view/header.php';
    ?>

    <!-- header end -->

    <div class="mainContent">
      <div class="container">
        <?php
        $connection = mysqli_select_db($db_connection,$dbname);
        $query=mysqli_query($db_connection,"SELECT * FROM question");

        while ($row = mysqli_fetch_assoc($query)) {
          $checkImg = "none";
          $qId = $row['id'];
          $question = $row['question'];
          $qImg = $row['question_img'];
          if (!empty($qImg)) {$checkImg = "inherit";}
          $queryAnswer=mysqli_query($db_connection,"SELECT * FROM answer WHERE question_id = '$qId'");
          echo '<div class="row">
            <div class="col s12 m12">
              <div class="hoverable card">
                <div class="card-image">
                  <img class="responsive-img" src="'.$qImg.'" alt="" style="display:'.$checkImg.'" />
                </div>
                <div class="card-content">
                <span class="question">
                '.$qId.'. '.$question.'</span>
                </div>
                <div class="card-action">
                <form action="#">';
                while ($row2 = mysqli_fetch_assoc($queryAnswer)) {
                  echo '

                  <p>
                    <input name="variant" type="radio" id="test'.$row2['id'].'" />
                    <label for="test'.$row2['id'].'">'.$row2['variant'].')'.'</label>
                    <span>'.$row2['answer_content'].'</span>
                  </p>
                  ';

                }
                echo '
                </form>
                </div>
              </div>
            </div>
          </div>';
        }
         ?>


      <!-- main content div -->

      <div class="inputContent">

          <div class="enteranceHead">

            <h3>Xoş Gəlmisiniz!</h3>

          </div>


          <div class="inputBox card hoverable">
            <div class="row">
              <form class="col s12" action="exam.php" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="ad" type="text" class="validate" name="ad" required="">
                    <label for="ad">Ad</label>
                  </div>
                  <div class="input-field col s12">
                    <i style="visibility: hidden;" class="material-icons prefix">account_circle</i>
                    <input id="Soyad" type="text" class="validate" name="soyad" required="">
                    <label for="Soyad">Soyad</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input id="mobileNumber" type="tel" class="validate" pattern="^[0-9]*$" name="tel" required="">
                    <label for="mobileNumber">Mobil nömrə</label>
                  </div>
                </div>

                <button class="red btn waves-effect waves-light" type="submit" name="action">Təsdiqlə
                  <i class="material-icons right">send</i>
                </button>
              </form>
            </div>
          </div>


      </div>

      <!-- main content div end -->


  </div>
  <!-- whole container -->



  </div>
  <div class="teal enteranceFooter">

    <div class="container">
      <span>© 2016 Copyright Code Academy</span>
    </div>

  </div>
</div>
</body>

</html>
