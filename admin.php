<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Panel</title>

  <!-- source links -->

  <?php
      include 'view/links.php';
  ?>

    <!-- source links end -->


    <!-- admin panel sidebar -->

    <div class="adminPanel teal">

      <div class="controlButtonWrapper">

        <button class="waves-effect waves-teal btn-flat userTableButton" type="button" name="button">Users</button>
        <button class="waves-effect waves-teal btn-flat questionButton" type="button" name="button">Questions</button>
        <button class="waves-effect waves-teal btn-flat otherStuffButton" type="button" name="button">Other shit</button>

      </div>


    </div>

    <!-- admin panel sidebar end -->



    <!-- admin panel content part -->

    <div class="panelContent card">

      <div class="panelText">
        <h2>Xoş gəlmisiniz, buyrun keçin baş tərəfə.</h2>
      </div>

      <!-- admin panel content part -->


      <!-- ajax functions which include different php files -->

      <script type="text/javascript">
        $('.userTableButton').click(function() {
          $.ajax({
            url: 'adminPanel/users.php',
            success: function(html) {
              $(".panelText").html(html);
            }
          });
        });

        $('.questionButton').click(function() {
          $.ajax({
            url: 'adminPanel/questions.php',
            success: function(html) {
              $(".panelText").html(html);
            }
          });
        });



        $('.otherStuffButton').click(function() {
          $.ajax({
            url: 'adminPanel/others.php',
            success: function(html) {
              $(".panelText").html(html);
            }
          });
        });
      </script>

      <!-- ajax functions which include different php files end -->


    </div>

</head>

<body>

</body>

</html>
