<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ</title>
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ust-kisim">
    <nav class="navbar navbar-expand-lg nav-bg">
        <div class="container p-0">
          <a class="navbar-brand" href="#"> GİZEM DÜZDAŞI</a> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item d-flex align-items-center p-2">
                <a class="nav-link active" aria-current="page" href="anasayfa.html">HAKKINDA</a>
                <span class="ayrac">|</span>
              </li>
              <li class="nav-item d-flex align-items-center p-2">
                <a class="nav-link" href="cv.html">CV</a>
                <span class="ayrac">|</span>
              </li>
              <li class="nav-item d-flex align-items-center p-2">
                <a class="nav-link" href="sehrim.html">ŞEHRİM</a>
                <span class="ayrac">|</span>
              </li>
              <li class="nav-item d-flex align-items-center p-2">
                <a class="nav-link" href="mirasımız.html">MİRASIMIZ</a>
                <span class="ayrac">|</span>
              </li>
              <li class="nav-item d-flex align-items-center p-2">
                <a class="nav-link" href="ilgiAlanları.html">İLGİ ALANLARIM</a>
                <span class="ayrac">|</span>
              </li>
              <li class="nav-item d-flex align-items-center p-2">
                <a class="nav-link" href="girisYap.html">GİRİŞ YAP</a>
                <span class="ayrac">|</span>
              </li>
              <li class="nav-item d-flex align-items-center p-2">
                <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </nav>
    
    </div>       
    

    <div id="icerik" class="container" align="center">
        <div align="center" class="row">
            <div class="col-1"></div>
            <div id="content-col" style="color: white; " class="bg-dark ">
                <?php
                if ($_POST['kullanici_adi'] == '21060618@omu.edu.tr' && $_POST['sifre'] == 'Gizem2002!') {
                    echo "<p>Kullanıcı adınız ve şifreniz doğru.</p> <p>Hoşgeldiniz '21060618'</p><p>Anasayfaya yönlendiriliyorsunuz.</p>";
                    header("refresh:3;url=anasayfa.html");
                } else {
                    echo "<p>Giriş bilgileriniz yanlış.</p> ";
                    header("refresh:3;url=giris.html");
                }
                ?>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>

</html>