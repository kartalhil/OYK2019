<?php
  include("database.php");

  // Adres satırından gelen ID bilgisini al.
  $ID    = $_GET["id"];

  // Veri tabanından o ID'ye karşılık gelen satırı çek
  $SQL   = "SELECT id, sayi1, soyadi, sehir FROM db_deneme_rehber WHERE id=$ID";

  // Sorgumuzu MySQL'e Gönder
  $rows  = mysqli_query($db, $SQL);

  // Gelen TEK satırlık cevabı row adlı değişkene yerleştir
  $row    = mysqli_fetch_assoc($rows);

  $id     = $row["id"];
  $sayi1    = $row["sayi1"];
  $sayi2 = $row["sayi2"];
?>
<h1><?php echo $sayi1 . " " . $sayi2;?></h1>
<h3>Kayıt Güncelleme</h3>

<form method="post">
  ID:<input type="text" name="id" value="<?php echo $id;?>">
  <br /><br />
  Adı:<input type="text" name="sayi1" value="<?php echo $sayi1;?>">
  <br /><br />
  Soyadı:<input type="text" name="sayi2" value="<?php echo $sayi2;?>">
  <br /><br />
  <input type="submit" name="" value="Güncelle (update)">
</form>
