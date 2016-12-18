<html>
	<head>
		<title>Waktu</title>
	</head>
	<body>
		<?php
			function datediff($tgl1,$tgl2)
			{
				$tgl1 = strtotime($tgl1);
				$tgl2 = strtotime($tgl2);
				$diff_secs = abs($tgl1 - $tgl2);
				$base_year = min(date("Y", $tgl1), date("Y",$tgl2));

				$diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);
				return array("years" => date("Y, $diff") - $base_year, "months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1, "months" => date("n", $diff) - 1, "days_total" => floor($diff_secs / (3600 * 24)), "days" => date("j", $diff) - 1, "hours_total" => floor($diff_secs / 3600), "hours" => date("G", $diff), "minutes_total" => floor($diff_secs / 60), "minutes" => (int) date("i", $diff), "seconds_total" => $diff_secs, "seconds" => (int) date("s", $diff));
			}

			$tgl1 = '1997-06-11';
			$tgl2 = date("Y/m/d/ h:m:s");
			$a = datediff($tgl1, $tgl2);
			echo 'tanggal 1 = '.$tgl1; echo '<br>';
			echo 'tanggal 2 = '.$tgl2; echo '<br>';
			echo 'Selisih = '.$a[years].' tahun - '.$a[months].' bulan - '.$a[days].' hari - '.$a[hours].' jam - '.$a[minutes].' menit - '.$a[seconds].' detik';
		?>
	</body>
</html>