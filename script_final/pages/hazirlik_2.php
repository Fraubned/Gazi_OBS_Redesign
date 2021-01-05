<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
<style>
  <?php include "/xampp/htdocs/script_final/css/enroll_lesson.css" ?>
</style>
<style>
  <?php include "/xampp/htdocs/script_final/css/main.css" ?>
</style>
<style>
  <?php include "/xampp/htdocs/script_final/css/hazirlik.css" ?>
</style>
<head>
  <title>Gazi Ünivesitesi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
  <!-- Nav-Bar Başlangıcı-->
  <nav id="nav-bar" class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Genel İşlemler
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Genel Bilgiler</a>
            <a class="dropdown-item" href="#">Alınan Dersler</a>
            <a class="dropdown-item" href="#">Ders Programı</a>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ders ve Dönem İşlemleri
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ders Kayıt</a>
            <a class="dropdown-item" href="#">Not ve Devamsızlık Durumu</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hazırlık
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Sınav Takvimi</a>
            <a class="dropdown-item" href="#">Not Listesi</a>
            <a class="dropdown-item" href="#">Ders Programı</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Başvuru
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Kayıt Dondurma</a>
            <a class="dropdown-item" href="#">Mazaret Sınavı</a>
            <a class="dropdown-item" href="#">Ek Sınav</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbar-list-4">
      <ul class="navbar-nav" id="right-side">
        <li id="student" class="nav-item">Öğrenci Adı-Soyadı</li>
        <li id="student" class="nav-item">Öğrenci NO</li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Şifre Değişikliği</a>
            <a class="dropdown-item" href="#">Çıkış</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--Nav-Bar Bitiş-->

  <div class="hazirlik_content">
      <div class="hc">
    <i class="fa fa-exclamation-triangle"></i>
    <h6>Bölüm Tarafından Herhangi Bir Bilgi Girilmemiştir.</h6>      
    </div> 
</div>


  <div class="message-box"></div>



  <!--Footer'dan önceki Ayraç-->

  <div id="enroll_bot" class="space"></div>

</body>

<footer class="footer"></footer>

</html>