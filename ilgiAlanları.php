<?php

    //require 'class.php';

    $veri = file_get_contents('https://www.sinemalar.com/film/9845/interstellar');

    preg_match_all('@<h1 itemprop="name">(.*?)</h1>@si', $veri, $pregBaslik);
    preg_match_all('@<img data-src="(.*?)" class="poster js-lazy-image" title="(.*?)" alt="(.*?)" itemprop="image" width="" height="" data-safe-image>@si', $veri, $pregResim);
    preg_match_all('@<div itemprop="description" >(.*?)</div>@si', $veri, $pregKonu);

    $baslik = $pregBaslik[1][0];
    $resim = $pregResim[1][0];
    $konu = $pregKonu[1][0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLGİ ALANLARI</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg nav-bg">
        <div class="container p-0">
          <a class="navbar-brand" href="#"> İLGİ ALANLARI</a> 
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
                <a class="nav-link" href="ilgiAlanları.php">İLGİ ALANLARIM</a>
                <!-- ilgiAlanları.html -> ilgiAlanları.php -->
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
    
    <div class="row">
        <div class="card">
            <div class="card-header text-center">
                <h1 class="my-3">
                    En Sevdiğim Film
                </h1>
                <img src="<?php echo $resim ?>" alt="<?php echo $baslik ?>" class="rounded my-4">
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo $baslik ?>
                </h5>
                <p class="card-text">
                    <b>Konu:</b>
                    <?php echo $konu ?>
                </p>
                <p class="card-text">
                    <a href="https://www.sinemalar.com/film/9845/interstellar" target="_blank">
                        Fragmanı İzle
                    </a>
                </p>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
