<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
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

  <!--Genel Bilgiler Başlangıcı -->
  <div class="content-1">
    <div id="agnoo" class="col3">
      <div class="agno">AGNO</div>
    </div>
    <div id="general" class="col3">
      <div class="general-information">Genel bilgiler</div>
    </div>
    <div id="donemm" class="col3">
      <div class="donem">Dönem</div>
    </div>
  </div>

  <!--Genel Bilgiler Bitiş-->



  <!--Ders Programı Başlangıcı-->
  <div class="content-2">
    <div class="calendar">
      <header>
        <div class="calendar__title" style="display: flex; justify-content: center; align-items: center">
          <div class="icon secondary chevron_left">‹</div>
          <h1 class="" style="flex: 1;"><span></span><strong>DERS PROGRAMI</strong> 2020-2021 GÜZ</h1>
          <div class="icon secondary chevron_left">›</div>
        </div>
        <div style="align-self: flex-start; flex: 0 0 1"></div>
      </header>

      <div class="outer">
        <table>
          <thead>
            <tr>
              <th class="headcol"></th>
              <th>Pazartesi</th>
              <th>Salı</th>
              <th>Çarşamba</th>
              <th>Perşembe</th>
              <th>Cuma</th>
              <th class="secondary">Cumartesi</th>
              <th class="secondary">Pazar</th>
            </tr>
          </thead>
        </table>

        <div class="wrap">
          <table class="offset">
            <tbody>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">6:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">7:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">8:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <div class="event double"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>8:30–9:30 CENG307</div>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">9:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">10:00</td>
                <td></td>
                <td></td>
                <td>
                  <div class="event double"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>10:00–11:00 CENG313</div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">11:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">12:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">13:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">14:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">15:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">16:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">17:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol">18:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="headcol"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

  <!--Ders Programı Bitiş-->


  <!--ALınan Dersler Başlangıç-->

  <div class="content-3">
    <h3 id="content-3-top">Alınan Dersler</h3>
    <div id="enrolled-lessons" class="container">
      <div class="row">
        <div class="span5">
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
                <th>Öğretim Görevlisi</th>
                <th>Ders Kodu</th>
                <th>Harf Notu</th>
                <th>Statü</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mahmut Tuncer</td>
                <td>LO302</td>
                <td>-</td>
                <td>İlk Defa Alıyor</td>
              </tr>
              <tr>
                <td>İbrahim Tatlıses</td>
                <td>PEZ101</td>
                <td>DD</td>
                <td>Yükseltmeye Alıyor</td>
              </tr>
              <tr>
                <td>Müslüm Gürses</td>
                <td>DERT202</td>
                <td>FF</td>
                <td>Tekrara Alıyor</td>
              </tr>
              <tr>
                <td>Bayhan Bilinmiyor</td>
                <td>VURDUMDUYMAZ101</td>
                <td>-</td>
                <td>İlk Defa Alıyor</td>
              </tr>
              <tr>
                <td>Seda Tripkolic</td>
                <td>GOZYESILI402</td>
                <td>-</td>
                <td>İlk Defa Alıyor</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Alınan Dersler Bitiş-->
  <!--Footer'dan önceki Ayraç-->

  <div class="space"></div>

</body>

<footer class="footer"></footer>

</html>