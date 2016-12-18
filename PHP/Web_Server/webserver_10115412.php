<html>
	<head>
		<title>Web Server</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div>
		<?php
			echo("<h2>Web Server</h2>");
      
      echo("<center><img src='webserver.jpg' width='100%' height='300' border='1'></center><br>");
      
			echo("<p><b>Pengertian Web Server</b></p>");
			echo("Web server adalah sebuah software yang memberikan layanan berbasis data dan berfungsi menerima permintaan dari HTTP atau HTTPS pada klien yang dikenal dan biasanya kita kenal dengan nama web browser dan untuk mengirimkan kembali yang hasilnya dalam bentuk beberapa halaman web dan pada umumnya akan berbentuk dokumen HTML. itulah pengertian web server sebenarnya. dalam bentuk sederhana web server akan mengirim data HTML kepada permintaan web Browser sehingga akan terlihat seperti pada umumnya yaitu sebuah tampilan website.<br><br>");
			
			echo("<p><b>Sejarah Web Server</b></p>");
			echo("Pada tahun 1929, tim Berners Lee mengajukan pada perusahaannya, CERN(European Organization for Nuclear Research) sebuah proyek yang bertujuan untuk mempermudah pertukaran informasi antarpeneliti dengan menggunakan sistem hiperteks. Sebagai hasil atas implementasi proyek ini, tahun 1990 Berners-Lee menulis dua program komputer :<br><br>
				<li>Sebuah peramban yang dinamainya sebagai WorldWideWeb,
				<li>Web server pertama didunia, yang kemudian dikenal sebagai CERN httpd, yang berjalan pada sistem operasi NeXTSTEP.<br><br>
				Dari tahun 1991 hingga 1994, kesederhanaan serta evektifitas atas teknologi yang digunakan untuk berkunjung serta bertukar data melalui Waring Wera Wanua membuat kedua aplikasi tersebut diadopsi pada sejumlah sistem operasi, agar dapat digunakan oleh lebih banyak individu, ataupun kelompok. Awalnya adalah organisasi penelitian, kemudian berkembang dan digunakan di lingkungan pendidikan tinggi, dan akhirnya digunakan dalam industri bisnis.<br>
				Tahun 1994, Tim Berners-Lee memutuskan untuk membakukan organisasi World Wide Web Consortium (W3C) untuk mengatur pengembangan- pengembangan lanjut atas teknologi- teknologi terkait lainnya (HTTP,HTML, dan lain-lain) melalui proses Standarisasi.<br><br>");

			echo("<p><b>Fungsi Web Server</b></p>");
			echo("Fungsi utama Web server adalah untuk melakukan atau akan tranfer berkas permintaan pengguna melalui protokol komunikasi yang telah ditentukan sedemikian rupa. halaman web yang diminta terdiri dari berkas teks, video, gambar, file  dan banyak lagi. pemanfaatan web server berfungsi untuk mentransfer seluruh aspek pemberkasan dalam sebuah halaman web termasuk yang di dalam berupa teks, video, gambar atau banyak lagi.<br><br>");
			
			echo("<p><b>Jenis Web Server</b></p>");
			echo("Beberapa Jenis Web Server di antanya adalah :<br><br>
				<li>Apache Web Server / The HTTP Web Server
				<li>Apache Tomcat
				<li>Microsoft windows Server 2008 IIS (Internet Information Services)
				<li>Lighttpd
				<li>Zeus Web Server
				<li>Sun Java System Web Server<br><br>
				Dari daftar list diatas yang paling dominan dan digunakan hanya pada Apache dan Microsoft Windows Server.<br><br>");

			echo("<p><b>Cara Kerja Dari Web Server</b></p>");
			echo("
				<li>Cara kerja dari Web Server merupakan salah satu mesin yang dimana tempat software atau aplikasi beroperasi dalam mendistribusikan web page ke user/pengguna, ini bisa ditentukan pada permintaan user.
				<li>Menghubungkan antara Web Server dan Web Browser Internet dan ini merupakan gabungan dari jaringan Komputer yang ada di seluruh dunia. Setelah semuanya terhubung secara fisik, Protocol TCP , IP atau networking protocol yang memungkinkan semua komputer di dunia dapat berkomunikasi satu sama lainnya.<br>
				Ketika browser meminta data web page kepada server maka instruksi dari permintaan data browser tersebut akan di kemas di dalam TCP yang merupakan satu protocol transport kemudian dikirim ke alamat, dalam hal ini adalah protocol berikutnya yaitu HTTP atau Hyper Text Transfer Protocol yang sudah kita kenal. HTTP ini merupakan sebuah protocol yang akan digunakan dalam WWW (World Wide Web)  antar komputer yang saling terhubung dalam jaringan internet di dunia ini.<br>
				Untuk dapat mengenal protocol anda bisa mengetik http://, dan seketika itu anda akan di bawa ke jaringan internet seluruh dunis.<br>
				Data yang di passing dari browser ke Web server biasanya disebut HTTP request yang akan meminta web page dan kemudian web server akan mencarikan data HTML yang ada dan akan di kemas dalam bentuk TCP protocol kemudian di kirim kembali ke browser dan data yang dikirim dari mulai server ke browser disebut HTTP response. dan bila data yang diminta oleh web browser tidak ditemukan Web server maka akan menimbulkan error yang biasanya kita sebut dengan halaman error 404 atau Page Not Found.");
		?>
		</div>
	</body>
</html>