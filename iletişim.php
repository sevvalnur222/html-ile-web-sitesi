<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İletişim</title>
</head>

<body>
  PHP EKRANINA HOŞGELDİNİZ!!! <br>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Adınız: " . $_POST['ad'] . "<br>";
    echo "Soyadınız: " . $_POST['soyad'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Kullanıcı Adınız: " . $_POST['kullaniciadi'] . "<br>";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $dogumTarihi = $_POST['date'];
      echo "Girilen doğum tarihi: " . $dogumTarihi. "<br>";
  }
    if (isset($_POST['cinsiyet'])) {
      $cinsiyet = $_POST['cinsiyet'];
      echo "Cinsiyetiniz: " . $cinsiyet . "<br>";
    } else {
      echo "Cinsiyet seçimi yapılmamıştır.<br>";
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['lang'])) {
        $selectedLanguages = $_POST['lang'];
        echo "Bilinen programlama dilleri: " . implode(", ", $selectedLanguages)."<br>";
      }
    }  
    if (isset($_POST['ulke'])) {
      echo "Ülkeniz: " . $_POST['ulke'] . "<br>";
    }
    echo "Mesajınız: " . $_POST['mesaj'] . "<br>";

  }
  ?>
  <p> <a href='hakkinda.html'>&lt;ANA SAYFA&gt;</a>
  <p> <a href='iletisim.html'>&lt; Form Ekranına geri dön&gt;</a></p>
</body>

</html>