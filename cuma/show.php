<?php
  include("database.php");

  // Adres satırından gelen ID bilgisini al.
  $ID    = $_GET["id"];

  // Veri tabanından o ID'ye karşılık gelen satırı çek
  $SQL   = "SELECT id, sayi1,sayi2 FROM sayilar WHERE id=$ID";

  // Sorgumuzu MySQL'e Gönder
  $rows  = mysqli_query($db, $SQL);

  // Gelen TEK satırlık cevabı row adlı değişkene yerleştir
  $row    = mysqli_fetch_assoc($rows);
  $id     = $row["id"];
  $sayi1    = $row["sayi1"];
  $sayi2 = $row["sayi2"];

  echo "
    <h1>$sayi1 $sayi2</h1>

    Sayi1: $sayi1<br />
    SAyi2: $sayi2<br />
  ";

?>
