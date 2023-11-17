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
