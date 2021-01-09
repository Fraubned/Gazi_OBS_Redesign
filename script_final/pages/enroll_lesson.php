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

<head>
  <title>Gazi Ünivesitesi</title>
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
            <a class="dropdown-item" href="http://localhost/script_final/pages/main.php">Genel Bilgiler</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/main.php">Alınan Dersler</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/main.php">Ders Programı</a>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ders ve Dönem İşlemleri
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://localhost/script_final/pages/enroll_lesson.php">Ders Kayıt</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/notes.php">Not ve Devamsızlık Durumu</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hazırlık
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://localhost/script_final/pages/hazirlik_1.php">Sınav Takvimi</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/hazirlik_2.php">Not Listesi</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/hazirlik_3.php">Ders Programı</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Başvuru
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://localhost/script_final/pages/appeal_1.php">Kayıt Dondurma</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/appeal_2.php">Mazaret Sınavı</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/appeal_3.php">Ek Sınav</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbar-list-4">
      <ul class="navbar-nav" id="right-side">
        <li id="student" class="nav-item"><?php
                                          require_once "config.php";
                                          $query = "SELECT * FROM student WHERE student_id='" . '171180039' . "'";
                                          $result = pg_query($dbconn, $query);
                                          while ($row = pg_fetch_array($result)) {

                                            echo "" . $row["first_name"] . " " . $row["last_name"] . "  -  " .$row["student_id"]. "<br>";
                                          }
                                          ?></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img  width="40" height="40" class="rounded-circle">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="http://localhost/script_final/pages/change_pass.php">Şifre Değişikliği</a>
            <a class="dropdown-item" href="http://localhost/script_final/pages/sign_in.php">Çıkış</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--Nav-Bar Bitiş-->

  <div class="duyuru">
    <h6>Ders Kayıt İşlemi Kapanmıştır. Aşağıda Kayıt Olduğunuz Dersleri Görebilirsiniz</h6>
  </div>
  
  <div id="enroll-content1" class="content-3">
    <h3 id="content-3-top">Ders Kayıt</h3>
    <div id="enrolled-lessons" class="container">
      <div class="row">
        <div class="span5">
          <table class="table">
            <thead>
              <tr>
                <th>Şube</th>
                <th id="t2">Ders Kodu</th>
                <th id="t2">Öğretim Görevlisi</th>
                <th>AKTS</th>
                <th>Kredi</th>
                <th>Sınıf</th>
                <th>Statü</th>
              </tr>
            </thead>
            <tbody>
            <?php
              require_once "config2.php";
              $student_id = 171180039;
              $query = "SELECT * FROM lessons WHERE student_id='" . $student_id . "'";
              $result = pg_query($dbconn, $query);
              while ($row = pg_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row["sube"] . "</td>";
                echo "<td>" . $row["course_code"] . "</td>";
                echo "<td>" . $row["instructor"] . "</td>";
                echo "<td>" . $row["akts"] . "</td>";
                echo "<td>" . $row["kredi"] . "</td>";
                echo "<td>" . $row["sınıf"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
                echo "</tr>";
              }
              pg_close($dbconn);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="message-box">
    <div class="col2">Öğrenci Durumu: <div class="green">Kesinleştirildi</div></div>
    <div class="col2">Danışman Onayı: <div class="green">Onaylandı</div></div>
  </div>



  <!--Footer'dan önceki Ayraç-->

  <div id="enroll_bot" class="space"></div>

</body>

<footer class="footer"></footer>

</html>