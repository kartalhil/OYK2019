<?php
  include("database.php");
?>
<h1>Kayıt Listesi</h1>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>ID</td>
    <td>SAYI1</td>
    <td>SAYI2</td>
  </tr>

  <?php
  $SQL   = "SELECT id, sayi1, sayi2 FROM sayilar ORDER BY id";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
      echo sprintf("
        <tr>
          <td>%d</td>
          <td>%d</td>
          <td>%d</td>
        </tr>",
        $row["id"], $row["sayi1"], $row["sayi2"]
        );
  }

  ?>
</table>
