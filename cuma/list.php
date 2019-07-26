<?php
  include("database.php");
?>

<h1>Kayıt Liste</h1>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>SAYI1</td>
    <td>SAYI2</td>
    <td>Göster</td>
    <td>Güncelle</td>
    <td>Sil</td>
  </tr>
  <?php
  $SQL   = "SELECT id, sayi1, sayi2 FROM sayilar ORDER BY sayi1,sayi2 ";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
      echo sprintf("
        <tr>
          <td>%d</td>
          <td>%d</td>
          <td>%d</td>

          <td><a href='show.php?id=%d'>Göster</a></td>
          <td><a href='update.php?id=%d'>Güncelle</a></td>
          <td><a href='delete.php?id=%d'>Sil</a></td>

        </tr>",
        $row["sayi1"], $row["sayi2"],
        $row["id"], $row["id"], );
  }

  ?>
</table>
