<html>
  <head>
    <title>Berlatih PHP</title>
  </head>
  <body>
    <?php
      $kota = "bandung";
      ${$kota} = 50000;
      
      print("\$kota = $kota <br>");
      print("\${\$kota} = ${$kota} <br>");
      print("\$bandung = $bandung <br>");
    ?>
  </body>
</html>