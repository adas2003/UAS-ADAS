<?php 
// Koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'kecelakaan_lalu_lintas_adas'); 
?> 

<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Kecelakaan</title>
    <style>
        body {
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 700px;
            margin: auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #FFD700;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form input[type="text"], form input[type="submit"] {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head> 
<body>
    <div class="container">
        <!-- Menampilkan data dari database -->
        <table border="1">
            <tr>
                <th>ID Penyebab</th>
                <th>Nama Penyebab</th>
                <th>Tingkat Bahaya</th>
                <th>Pelaku</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
            // Tampilkan semua data
            $q = $koneksi->query("SELECT * FROM penyebab_adas"); 
            while ($dt = $q->fetch_assoc()) : 
            ?>
            <tr>
                <td><?= $dt['id_penyebab'] ?></td>
                <td><?= $dt['nama_penyebab'] ?></td>
                <td><?= $dt['tingkat_bahaya'] ?></td>
                <td><?= $dt['pelaku_adas'] ?></td>
                <td>
                    <button>
                        <a href="update_adas.php?id=<?= $dt['id_penyebab'] ?>">Ubah</a>
                    </button>
                </td>
                <td>
                    <button>
                        <a href="delete_kecelakaan.php?id=<?= $dt['id_penyebab'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                    </button>
                </td>
            </tr>
            <?php 
            endwhile; 
            ?>
        </table>
        <table border="1"> 
            <tr> 
                <th>ID Kota</th> 
                <th>Nama Kota</th> 
                <th>Jumlah</th> 
                <th colspan="2">Aksi</th> 
            </tr> 
            <?php 
            // Tampilkan semua data
            $q = $koneksi->query("SELECT * FROM kota_adas"); 
            while ($dt = $q->fetch_assoc()) : 
            ?>
            <tr> 
                <td><?= $dt['id_kota'] ?></td> 
                <td><?= $dt['nama_kota'] ?></td> 
                <td><?= $dt['jumlah'] ?></td> 
                <td><button><a href="update_kota.php?id=<?= $dt['id_kota'] ?>">Ubah</a></button></td> 
                <td><button><a href="delete_kota.php?id=<?= $dt['id_kota'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></button></td> 
            </tr> 
            <?php 
            endwhile; 
            ?> 
        </table>
        <table border="1">
            <tr>
                <th>ID Penyebab</th>   
                <th>ID Kota</th> 
                <th>Jumlah</th>
                <th>Tingkat Bahaya</th>
                <th colspan="2">Aksi</th> 
            </tr>
            <?php 
            // Tampilkan semua data
            $q = $koneksi->query("SELECT * FROM rekap_adas"); 
            while ($dt = $q->fetch_assoc()) : 
            ?>
            <tr>   
                <td><?= $dt['id_penyebab'] ?></td>
                <td><?= $dt['id_kota'] ?></td> 
                <td><?= $dt['jumlah'] ?></td> 
                <td><?= $dt['tingkat_bahaya'] ?></td>
                <td><button><a href="delete_rekap.php?id=<?= $dt['id_penyebab'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></button></td> 
            </tr> 
            <?php 
            endwhile; 
            ?> 
        </table>
    </div>
</body>
</html>