<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Öde | keep up on debts</title>
<link rel="stylesheet" href="../css/css.css?v=9">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(function(){
    $('.selectpicker').selectpicker();
});

function langEN()
{
  location.replace("../pages/download.php?lang=<?php echo "EN" ?>");
}
function langTR()
{
  location.replace("../pages/download.php?lang=<?php echo "TR" ?>");
}
  </script>

</head>
<body>
<?php include '../php/function.php';?>
<header class="header">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a href="../index.php?lang=<?php echo $_GET["lang"]; ?>"> <img src="../img/logo.png" class="logo"> </a>

 <div class="headerContent">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarText">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item ">
       <a class="nav-link" href="../index.php?lang=<?php echo $_GET["lang"]; ?>"><?php selectLanguange("Home","Ana")  ?><span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item ">
       <a class="nav-link" href="../pages/about.php?lang=<?php echo $_GET["lang"]; ?>"><?php selectLanguange("About","Hakkında")  ?></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="../pages/something.php?lang=<?php echo $_GET["lang"]; ?>"><?php selectLanguange("Team","Ekip")  ?></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="../pages/contact.php?lang=<?php echo $_GET["lang"]; ?>"><?php selectLanguange("Contact","İletişim")  ?></a>
       </li>
     <li class="nav-item active">
       <a class="nav-link" href="../pages/download.php?lang=<?php echo $_GET["lang"]; ?>"><?php selectLanguange("Download","İndir")  ?></a>
     </li>
   </ul>

   <select class="selectpicker languange" data-width="fit">
      <option <?php englishSelected(); ?> onclick="langEN()">English</option>
   <option   <?php turkishSelected(); ?>  onclick="langTR()">Türkçe</option>
 </select>

 </div>
</div>
</nav>

</header>

     <div class="pinkDiv blueBG" id="downloadBG">

        <p class="getApp"><?php selectLanguange("Get the Öde app now!","Öde'yi şimdi edinin!")  ?></p>
        <p class="DownloadAndroid"><?php selectLanguange("Download it for Android and iOS","iOS ve Android için indirin")  ?></p>


        <div class="download DD">

            <a href="https://play.google.com/store/apps/details?id=com.Nkyys.ConqurerOfGalaxy">
              <img src="../img/googlePlay.png" class="googlePlay iconAlign go">
            </a>
            
            <a href="https://apps.apple.com/fr/app/conqueror-of-galaxy/id1512609533">
              <img src="../img/appStore.png" class="appStore iconAlign ap">
            </a>
            
            </div>

     </div>

      <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted downloadfooter" id="footer">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span><?php selectLanguange("Get connected with us on social networks:","Sosyal medya hesaplarımızla bağlntıya geçin:");  ?> </span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/fati.gurciti/" class="me-4 text-reset">
        <img src="../img/facebook.png" class="socialMedia" />
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRlRHrGXpXPFHZDbxxzDJFsnxlpJhTCJDDKzfZvFrqqbwNWDfXFkwqDwrKTBjLPbtJhMXTG" class="me-4 text-reset">
        <img src="../img/gmail.png" class="socialMedia" />
        <i class="fab fa-google"></i>
      </a>

      <a href="https://www.instagram.com/fatigurqiti/" class="me-4 text-reset">
        <img src="../img/instagram.png" class="socialMedia" />
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/in/fati-gurqiti-410395174/" class="me-4 text-reset">
        <img src="../img/linkedin.png" class="socialMedia" />
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/FatiGurqiti" class="me-4 text-reset">
        <img src="../img/github.png" class="socialMedia" />
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Gurqiti Corp©
          </h6>
          <p>
           <?php selectLanguange(" As Gurqiti Corp,our aim is to produce usefull applications","Gurqiti Corp olarak hedefimiz,yenilikçi uygulamalar üretmek ve");  ?><br>
           <?php selectLanguange("and serve developement for any kind of software","her türden yazılım için hizmet sağlamaktır.");  ?>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <?php selectLanguange("Products","Ürünler");  ?>
          </h6>
          <p>
            <a href="#!" class="text-reset">Öde</a>
          </p>
          <p>
            <a href="#!" class="text-reset">koru.org</a>
          </p>
          <p>
            <a href="#!" class="text-reset">PLAZ</a>
          </p>
          <p>
            <a href="#!" class="text-reset">FiBu</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <?php selectLanguange("Useful links","Bağlantılar");  ?>
          </h6>
          <p>
            <a href="#" class="text-reset"><?php selectLanguange("Home","Ev");  ?></a>
          </p>
          <p>
            <a href="../pages/about.php?lang=<?php echo $_GET["lang"]; ?>" class="text-reset"><?php selectLanguange("About","Hakkında");  ?></a>
          </p>
          <p>
            <a href="../pages/something.php?lang=<?php echo $_GET["lang"]; ?>" class="text-reset"><?php selectLanguange("Team","Ekip");  ?></a>
          </p>
          <p>
            <a href="../pages/contact.php?lang=<?php echo $_GET["lang"]; ?>" class="text-reset"><?php selectLanguange("Contact","İletişim");  ?></a>
          </p>
          <p>
            <a href="../pages/download.php?lang=<?php echo $_GET["lang"]; ?>" class="text-reset"><?php selectLanguange("Download","İndir");  ?></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <?php selectLanguange("Contact","İLETİŞİM");  ?>
          </h6>
          <p><i class="fas fa-home me-3"></i> Zagreb, Grad Zagreb, Hrvatska</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            fatigurqiti@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 385 98 968 5849</p>
          <p><i class="fas fa-print me-3"></i>  + 90 544 426 1645</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 footerbg">
    <?php selectLanguange("© 2021 Copyright:","© 2021 Tüm hakları saklıdır:");  ?>
    <a class="text-reset fw-bold" href="../index.php?lang=<?php echo $_GET["lang"]; ?>">Gurqiti Corp©</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
       
</body>


<html>