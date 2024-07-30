<?php 
// koneksinya 
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas'); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title> 
form input data kota
</title> 
<style>
    body {
    background-color: aqua;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
} 

form h2 {
    margin-top: 0;
    font-size: 24px;
}

form label {
    display: block;
    margin: 10px 0 5px;
}

form input[type="text"], form input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 20px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

form input[type="submit"] {
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
    background-color: #ffffff;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    overflow: hidden;
}

th, td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #007BFF;
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e2e2e2;
}

a {
    color: #007BFF;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

</style>
</head> 
<body style='background-color:violet;'> 
<table> 
<form method='POST' action='tambah_data_kota.php'> 
<tr><td colspan='3'>Formulir Isi Data Kecelakaan Lalu Lintas </td></tr> 
<tr> 
    <td>Id Kota </td> 
    <td>:</td> 
    <td><input type='text' name='id_kota'></td> 
</tr> 
<tr> 
    <td>Nama Kota </td> 
    <td>:</td> 
    <td><input type='text' name='nama_kota'></td> 
</tr> 
<tr> 
    <td>Jumlah</td> 
    <td>:</td>
    <td><input type='text' name='jumlah'></td>
</tr>  
<tr><td colspan='3'><input type='submit' name='submit' value='Simpan'></td></tr>
</form> 
</table> 
</body> 
</html>
  <!-- Read atau menampilkan data dari database --> 
  <table border="1"> 
    <tr> 
      <th>Id Kota</th> 
      <th>Nama Kota</th> 
      <th>Jumlah</th> 
      <th colspan="2">Aksi</th> 
    </tr> 
<?php 
    // Tampilkan semua data 
    $q = $koneksi->query("SELECT * FROM kota_adas"); 
$id_kota = '1'; // nomor urut    
while ($dt = $q->fetch_assoc()) : 
    ?> 
<tr>   
      
      <td><?= $dt['id_kota'] ?></td> 
      <td><?= $dt['nama_kota'] ?></td> 
      <td><?= $dt['jumlah'] ?></td> 
      <td><a href="update_kota.php?id=<?=$dt['id_kota']?>">Ubah</a></td> 
      <td><a href="delete_kota.php?id=<?=$dt['id_kota'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td> 
    </tr> 
<?php 
    endwhile; 
    ?> 
</table>