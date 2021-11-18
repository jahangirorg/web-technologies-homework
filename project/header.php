<?php include"baglanti.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $ayarlar['a_title'] ?></title>
    <meta name="description" content="<?php echo $ayarlar['a_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarlar['a_keywords'] ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>

    <header>
      <div class="container">

        <div class="logo">

          <a href="#"><img src="images/logo.png" alt=""></a>

        </div>

        <div class="search">
          <input type="text" placeholder="Ürün aramak için tıklayınız..." name="" value="">
          <button type="button" name="button">ara</button>

        </div>

        <div class="uyelik">

            <ul>
              <li class="login"><a href="#"><i class="fas fa-sign-in-alt"></i> Üye ol!</a></li>
              <li class="signup"><a href="#"><i class="fas fa-user-plus"></i> Kayıt ol!</a></li>
            </ul>

        </div>

      </div>

    </header>

    <div class="menu">
      <div class="container">
        <ul>
          <li><a href="/"><i class="fas fa-home"></i> Ana Sayfa</a></li>
          <li><a href="kampanya.php"><i class="fas fa-compass"></i> Kampanyalar</a></li>
          <li><a href="hediyeceki.php"><i class="fas fa-gift"></i> Hediye Çeki Kazan!</a></li>
          <li><a href="contact.php"><i class="fas fa-file-import"></i> Çözüm Merkezi</a></li>
          <li><a href="#"><i class="fas fa-user-shield"></i> Özel Teklifler</a></li>
          <li><a href="contact.php"><i class="fas fa-id-card-alt"></i> İletişim</a></li>
        </ul>

      </div>

    </div>
