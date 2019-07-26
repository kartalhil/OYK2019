
<?php
  if( isset( $_POST["user"] )) { //giriş formu doldurulup gönderildi
    if( $_POST["user"] == "ahmet" and $_POST["pass"] == "123" ) {
      $_SESSION["GirisBasarili"] = 1;
      echo "<a href='menu1.php'>Menu için tıklayınız</a>";
    }
        if( $_POST["user"] == "mehmet" and $_POST["pass"] == "789" ) {
          $_SESSION["GirisBasarili"] = 1;
          echo "<a href='menu2.php'>Menu için tıklayınız</a>";
        }
    } else {
      echo "Giriş hatalı!";
      $_SESSION["GirisBasarili"] = 0;
    }

?>

<h1>Kullanıcı Girişi</h1>
<form method="post">
  Kullanıcı Adınız: <input type="text" name="user" value="">
  <br /><br />
  Parolanız: <input type="password" name="pass" value="">
  <br /><br />
  <input type="submit" value="GİRİŞ YAP">
</form>
