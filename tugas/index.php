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
