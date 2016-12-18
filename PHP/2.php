<html>
  <head>
    <title>ini php</title>
  </head>
  <body>
    <?php
      define("Judul","Hitung Luas Lingkaran");
      define("PHI",3.14);
      
      echo Judul;
      
      $r=10;
      echo "<br>Jari-jari: $r<br>\n";
      $luas = PHI * $r * $r;
      echo "Luas Lingkaran = $luas";
    ?>
  </body>
</html>