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
