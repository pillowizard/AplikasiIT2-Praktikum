<html>
  <head>
    <title>Berlatih PHP</title>
  </head>
  <body>
    <?php
      define("PHI",3.14);
      
      $jari_jari = 20;
      $keliling = 2 * PHI * $jari_jari;
      
      printf("PHI = %s <br>",PHI);
      printf("Keliling = %s <br>",$keliling);
    ?>
  </body>
</html>