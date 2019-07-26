<?php
include("database.php");

if (isset( $_POST["sayi1"] )) {  // Form POST edilmiş...

  // Önce EKLEME için SQL hazırlayalım...
  $SQL = sprintf("
      INSERT INTO
        sayilar
      SET
        sayi1    = '%d',
        sayi2 = '%d'  ",
  $_POST["sayi1"], $_POST["sayi2"]);

  // SQL komutunu MySQL veritabanı üzerinde çalıştır!
  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";
  echo "<a href='sayilistele.php'>Kayıt listesine burdan ulaşabilirsiniz...</a>";


}  // Form POST edilmiş...

?>


<h1>Kayıt Ekleme</h1>

<form method="post">
  birinci sayı :<input type="text" name="sayi1">
  <br /><br />
  ikinci sayı :<input type="text" name="sayi2">
  <br /><br />
  <input type="submit" name="" value="Kayıt Ekle (insert)">
</form>
