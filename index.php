<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>

  <!-- source links -->

    <?php
      include 'view/links.php';
    ?>

  <!-- source links end -->


</head>

<body>

  <!-- whole container -->

  <div class="container-fluid">

    <div class="sidebar hoverable">

    netice

    </div>



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



    <div class="submitDiv">

      <button onclick="showAnswers()" class="submitButton z-depth-1 col m5 red btn waves-effect waves-light" type="submit" name="action">Nəticə
        <i class="material-icons right">send</i>
      </button>

      <script type="text/javascript">
        var sidebar = document.getElementsByClassName('sidebar')[0];
        sidebar.style.transform = 'translateX(105%)';

        function showAnswers() {

          if (sidebar.style.transform == 'translateX(105%)') {
            sidebar.style.transition = '0.5s all ease';

            sidebar.style.transform = 'translateX(0%)';
            console.log(sidebar.style.transform)
          } else {
            console.log(sidebar.style.transform)

            sidebar.style.transform = 'translateX(105%)';
            console.log(sidebar.style.transform)


          }


        }
      </script>




      </div>
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
