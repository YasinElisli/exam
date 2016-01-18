<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

  <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

</head>

<body>

  <!-- whole container -->

  <div class="container-fluid">

    <div class="sidebar hoverable">

    netice

    </div>



    <!-- header -->
    <div class="header">
      <nav>
        <div class="teal nav-wrapper">
          <div class="container">
            <div class="codeLogo ">
              <a href="" class="brand-logo">

                <img src="img/logo.png" alt="" class="" />

              </a>
            </div>
            <ul id="nav-mobile" class="right hide-on-med-and-down">

              <!-- <li> -->


              <!-- Modal Trigger -->
              <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Qeydiyyat</a>

              <!-- Modal Structure -->
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <h4>Qeydiyyat</h4>



                  <form class="" action="" method="post">

                    <input id="nameSurnameInput" type="text" placeholder="Adınız" class="validate">
                    <input id="nameSurnameInput" type="text" placeholder="Soyadınız" class="validate">
                    <input id="phoneNumber" type="text" placeholder="Telefon nömrəniz" class="validate">

                  </form>

                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Nəticə</a>
                </div>
              </div>



              <!-- </li> -->

            </ul>
          </div>
        </div>
      </nav>

      <script type="text/javascript">
        $(document).ready(function() {
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.modal-trigger').leanModal();
        });
      </script>

    </div>

    <!-- header -->

    <div class="mainContent">

      <div class="container">
        <?php
        $connection = mysqli_select_db($db_connection,$dbname);
        $query=mysqli_query($db_connection,"SELECT * FROM question");

        while ($row = mysqli_fetch_assoc($query)) {
          $qId = $row['id'];
          $question = $row['question'];
          $qImg = $row['question_img'];
          $queryAnswer=mysqli_query($db_connection,"SELECT * FROM answer WHERE question_id = '$qId'");
          echo '<div class="row">
            <div class="col s12 m12">
              <div class="hoverable card">
                <div class="card-image">
                '.$qId.'. '.$question.'
                  <img src="'.$qImg.'" alt="" />


                </div>
                <div class="card-content">


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
      </div>



    </div>



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






  <div class="footer">

    <footer class="teal page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Qəbul testi</h5>
            <p class="grey-text text-lighten-4">Bu testin nəticəsi sizin Code Academy-yə qəbul olub olmamağınızı təyin edəcək.</p>
          </div>
          <div class="contributors col l4 offset-l2 s12">
            <h5 class="white-text">Hazırladı:</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">back-end | Yasin Əlişli</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">front-end | Orxan Fərmanlı</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2016 Copyright Code Academy
        </div>
      </div>
    </footer>

  </div>
</div>


  <!-- whole container -->


</body>

</html>
