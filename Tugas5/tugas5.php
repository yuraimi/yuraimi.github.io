<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .form-container {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px 0;
            box-sizing: border-box;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Form Input Data</h2>

<div class="form-container">
    <form method="POST" action="">
        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" name="npm" id="npm" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hobi">Hobi:</label>
            <input type="text" name="hobi" id="hobi" required>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = strtoupper($_POST['nama']);
    $alamat = strtoupper($_POST['alamat']);
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST['hobi'];

    echo "<div class='result'>";
    echo "<h3>Hasil Inputan:</h3>";
    echo "NPM: $npm<br>";
    echo "Nama: $nama<br>";
    echo "Alamat: $alamat<br>";
    echo "Tempat Lahir: $tempat_lahir<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Hobi: $hobi<br>";
    echo "</div>";
}
?>

</body>
</html>
