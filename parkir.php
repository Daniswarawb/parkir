<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px 25px;
            width: 320px;
        }
        form input, form select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 12px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form button {
            width: 100%;
            padding: 9px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #eee;
            cursor: pointer;
        }
        .hasil {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px 15px;
            width: 320px;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
      <form method="POST">
        Masukan Nomor Parkir : <input type="number" name="nomor"><br>
        Masukan Nomer Kendaraan : <input type="text" name="nomor_kendaraan"><br>
        Masukan Jenis Kendaraan : <select name="jenis_kendaraan" required>
            <option value="mobil">Mobil</option>
            <option value="motor">Motor</option>
            <option value="truck">Truck</option>
        </select><br>
        Masukan Lama Parkir : <input type="number" name="lama_parkir" required><br>
        Masukan Nama Petugas : <input type="text" name="nama_petugas"><br>
        <button type="submit" name="Submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $nomor = $_POST['nomor'];
        $nomor_kendaraan = $_POST['nomor_kendaraan'];
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $lama_parkir = $_POST['lama_parkir'];
        $nama_petugas = $_POST['nama_petugas'];

        if ($jenis_kendaraan == "mobil") {
            $harga = 5000;
            $total = (3000 * ($lama_parkir-1)) + $harga;
            echo "<div class='hasil'>Kendaraan Anda $jenis_kendaraan dengan nomor kendaraan $nomor_kendaraan telah parkir selama $lama_parkir jam, dan total biaya parkir adalah Rp. $total</div>";
   
        } elseif ($jenis_kendaraan == "motor") {
            $harga = 3000;
            $total = (2000 * ($lama_parkir-1)) + $harga;
            echo "<div class='hasil'>Kendaraan Anda $jenis_kendaraan dengan nomor kendaraan $nomor_kendaraan telah parkir selama $lama_parkir jam, dan total biaya parkir adalah Rp. $total</div>";
   
        } elseif ($jenis_kendaraan == "truck") {
            $harga = 7000;
            $total = (3000 * ($lama_parkir-1)) + $harga;
            echo "<div class='hasil'>Kendaraan Anda $jenis_kendaraan dengan nomor kendaraan $nomor_kendaraan telah parkir selama $lama_parkir jam, dan total biaya parkir adalah Rp. $total</div>";
   
        }
    }
    ?>
</body>
</html>