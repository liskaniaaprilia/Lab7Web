# PHP DASAR

PHP adalah singkatan dari PHP Hypertext Prepocessor dan merupakan bahasa pemrograman yang di desain khusus untuk web development atau pengembangan web. PHP memiliki sifat Server-Side karena PHP dijalankan atau di eksekusi dari sisi server. maksud di jalankan dari sisi server adalah PHP di jalankan pada komputer server dan bukan pada komputer client. 

PHP di jalankan melalui aplikasi web browser sama halnya seperti HTML. Hampir semua situs-situs besar dan populer di kembangkan menggunakan PHP. seperti misalnya wordpress, joomla, facebook, twitter, wikipedia dan situs besar lainnya.

## Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## Praktikum - 7

### 1. Persiapan
Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP terlebih dahulu. Web servar yang kita gunakan adalah Apache 2 dan interpreter PHP 7.

### 2. Install Xampp
Unduh XAMPP dari [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html) dan pilih versi portable untuk memudahkan proses installasi.

### 3. Web Server
Untuk menjalankan web server dari menu XAMPP Control klik start pada menu actions dibagian Apache

### 4. Memulai PHP
Buat folder lab7_php_dasar pada root directory web server. Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: [http://localhost/lab7_php_dasar/](http://localhost/lab7_php_dasar/)


- Output 

![img](Screenshot/PNG-1.png)

### 5. PHP Dasar

Buat file baru dengan nama php_dasar.php pada directory tersebut, buat kode seperti berikut. Kemudian untuk mengakses hasilnya melalui URL:
[http://localhost/lab7_php_dasar/php_dasar.php](http://localhost/lab7_php_dasar/php_dasar.php)

```PHP
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
        <h1>Belajar PHP Dasar</h1>
        <?php
        echo "Hello World";
        ?>
    </body>
</html>
```

- Output 

![img](Screenshot/PNG-2.png)

### 6. Variable PHP
Menambahkan variable pada program.

```PHP
    <?php
    $nim = "312210383";
    $nama = 'Liskania Aprilia';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
```

- Output

![img](Screenshot/PNG-3.png)

### 7. Predefine Variable $_GET

Untuk mengaksesnya gunakan URL:
[http://localhost/lab7_php_dasar/Latihan-2.php?nama=Liska](http://localhost/lab7_php_dasar/Latihan-2.php?nama=Liska)

```PHP
    <h2>Predefine Variable</h2>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
```

- Output

![img](Screenshot/PNG-4.png)

### 8. Membuat Form Input

```PHP
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
        <h2>Form Input</h2>
        <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama">
            <input type="submit" value="Kirim">
        </form>
        <?php
            echo 'Selamat Datang ' . $_POST['nama'];
        ?>
    </body>
</html>
```

- Output

![img](Screenshot/PNG-5.png)

### 9. Operator

```PHP
    <h2>Operator</h2>
	<?php
	$gaji = 1000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);
	echo "Gaji sebelum pajak = Rp. $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp. $thp";
	?>
```

- Output

![img](Screenshot/PNG-6.png)

### 10. Kondisi If

```PHP
    <h2>Kondisi IF</h2>
	<?php
	$nama_hari = date("l");
	if ($nama_hari == "Sunday") {
		echo "Minggu";
	} elseif ($nama_hari == "Monday") {
		echo "Senin";
	} else {
		echo "Selasa";
	}
	?>
```

- Output

![img](Screenshot/PNG-7.png)

### 11. Kondisi Switch

```PHP
    <h2>Kondisi Switch</h2>
	<?php
	$nama_hari = date("l");
	switch ($nama_hari) {
		case "Sunday":
			echo "Minggu";
			break;
		case "Monday":
			echo "Senin";
			break;
		case "Tuesday":
			echo "Selasa";
			break;
		default:
			echo "Sabtu";
	}
	?>
```

- Output

![img](Screenshot/PNG-8.png)

### 12. Perulangan For

```PHP
	<h2>Perulangan For</h2>
	<?php
	echo "Perulangan 1 sampai 10 <br />";
	for ($i=1; $i<=10; $i++) {
		echo "Perulangan ke: " . $i . '<br />';
	}
		echo "Perulangan Menurun dari 10 ke 1 <br />";
	for ($i=10; $i>=1; $i--) {
		echo "Perulangan ke: " . $i . '<br />';
	}
	?>
```

- Output

![img](Screenshot/PNG-9.png)

### 13. Perulangan While

```PHP
	<h2>Perulangan While</h2>
	<?php
	echo "Perulangan 1 sampai 10 <br />";
	$i=1;
	while ($i<=10) {
		echo "Perulangan ke: " . $i . '<br />';
	$i++;
	}
	?>
```

- Output

![img](Screenshot/PNG-11.png)

### 14. Perulangan Do-While

```PHP
	<h2>Perulangan Do-While</h2>
	<?php
	echo "Perulangan 1 sampai 10 <br />";
	$i=1;
	do {
		echo "Perulangan ke: " . $i . '<br />';
	$i++;
	} while ($i<=10);
	?>
```

- Output

![img](Screenshot/PNG-12.png)

# PERTANYAAN & TUGAS 

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.


``` PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pekerja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Input Data Pekerja</h2>
        <form action="process.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>

            <label for="pekerjaan">Pekerjaan:</label>
            <select id="pekerjaan" name="pekerjaan" required>
                <option value="data_analyst">Data Analyst</option>
                <option value="ux_designer">UX Designer</option>
                <option value="web_developer">Web Developer</option>
                <option value="cyber_security_analyst">Cyber Security Analyst</option>
                <option value="game_developer">Game Developer</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
```

```PHP
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $pekerjaan = $_POST["pekerjaan"];

    // Hitung umur berdasarkan tanggal lahir
    $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

    // Tentukan gaji berdasarkan pekerjaan
    switch ($pekerjaan) {
        case 'data_analyst':
            $gaji = 5000000;
            break;
        case 'ux_designer':
            $gaji = 6000000;
            break;
        case 'web_developer':
            $gaji = 7000000;
            break;
        case 'cyber_security_analyst':
            $gaji = 8000000;
            break;
        case 'game_developer':
            $gaji = 9000000;
            break;
        default:
            $gaji = 0;
            break;
    }
} else {
    // Redirect jika mencoba mengakses file ini langsung
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pekerja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Output Data Pekerja</h2>
        <p>Nama: <?php echo $nama; ?></p>
        <p>Tanggal Lahir: <?php echo $tgl_lahir; ?></p>
        <p>Umur: <?php echo $umur; ?> tahun</p>
        <p>Pekerjaan: <?php echo ucfirst(str_replace('_', ' ', $pekerjaan)); ?></p>
        <p>Gaji: Rp <?php echo $gaji; ?></p>
        <a href="index.php">Back to Form</a>
    </div>
</body>
</html>
```

- Output

![img](Screenshot/PNG-15.png)

![img](Screenshot/PNG-13.png)

![img](Screenshot/PNG-16.png)

# FINISH

