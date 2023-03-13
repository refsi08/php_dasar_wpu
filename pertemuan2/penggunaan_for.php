<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Penggunaan For</title>
</head>

<style>
  .warna {
    background-color: green;
  }
</style>

<body>
  <h1>Pembuatan Tabel menggunakan for (perulangan)</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php
    for ($i = 1; $i <= 3; $i++) {
      echo "<tr></tr>";
      for ($j = 1; $j <= 5; $j++) {
        echo "<td>$i,$j</td>";
      }
    }
    ?>
  </table>

  <h2>Pembuatan Tabel menggunakan For 2 (perulangan)</h2>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php if ($i % 2 == 0) : ?>
        <tr class="warna">
        <?php else : ?>
        <tr>
        <?php endif; ?>

        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?= "$i,$j"; ?></td>
        <?php endfor; ?>
        </tr>
      <?php endfor; ?>

  </table>
</body>

</html>