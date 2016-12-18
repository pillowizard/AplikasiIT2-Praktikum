
<html>
	<head>
		<title>Waktu 2</title>
	</head>
	<body>
		<?php
		print(date("I, dS F Y h:i:s A ")."<br>");
		print("6 Juli 2016 adalah hari ini: ".date("I", mktime(0,0,0,7,6,2016))."<br>");
		print(date("I t h e j S"). "<br>");
		$besok = mktime(0,0,0,date("m")-1, date("d")+1, date("Y"));
		$bulanlalu = mktime(0,0,0,date("m")-1, date("d"), date("Y"));
		$tahundepan = mktime(0,0,0,date("m")-1, date("d"), date("Y")+1);
		print(date("Besok hari : I d F Y",$besok).'<br>');
		print(date("Bulan lalu hari : I d F Y",$bulanlalu).'<br>');
		print(date("Tahun depan hari : I d F Y",$tahundepan).'<br>');

		$hariini = date("F j, Y, g:i a");
		print $hariini."<br>";
		$hariini = date("m.d.y");
		print $hariini."<br>";
		$hariini = date("j, m, Y");
		print $hariini."<br>";
		$hariini = date("Ymd");
		print $hariini."<br>";
		?>
	</body>
</html>