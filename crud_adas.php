<?php 
// koneksinya 
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas'); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title> 
form input data kecelakaan
</title>
<style>
    body {
    background-image: url('img/cc.png');
    background-size: cover;
    background-position: center;
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
    width: 90%;
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
<body style='background-color:cadetblue;'> 
<table> 
<form method='POST' action='tambah_data.php'> 
<tr><td colspan='3'><center>Formulir Isi Data Kecelakaan Lalu Lintas </center></td></tr> 
<tr> 
    <td>Id Penyebab </td> 
    <td>:</td> 
    <td><input type='text' name='id_penyebab'></td> 
</tr> 
<tr> 
    <td>Nama Penyebab </td> 
    <td>:</td> 
    <td><input type='text' name='nama_penyebab'></td> 
</tr> 
<tr> 
    <td>Tingkat Bahaya</td> 
    <td>:</td>
    <td><input type='text' name='tingkat_bahaya'></td>
</tr> 
<tr> 
    <td>Pelaku </td> 
    <td>:</td> 
    <td> 
        <input type='text' name='pelaku_adas'>
    </td>
</tr> 
<tr><td colspan='3'><input type='submit' name='submit' value='simpan'></td></tr>
</form> 
</table> 
</body> 
</html>
  <!-- Read atau menampilkan data dari database --> 
  <table border="1"> 
    <tr> 
      <th>Id Penyebab</th> 
      <th>Nama Penyebab</th> 
      <th>Tingkat Bahaya</th> 
      <th>Pelaku</th>
      <th colspan="2">Aksi</th> 
    </tr> 
<?php 
    // Tampilkan semua data 
    $q = $koneksi->query("SELECT * FROM penyebab_adas"); 
$id_penyebab = '1'; // nomor urut    
while ($dt = $q->fetch_assoc()) : 
    ?> 
<tr>   
      
      <td><?= $dt['id_penyebab'] ?></td> 
      <td><?= $dt['nama_penyebab'] ?></td> 
      <td><?= $dt['tingkat_bahaya'] ?></td> 
      <td><?= $dt['pelaku_adas'] ?></td>
      <td><a href="update_adas.php?id=<?=$dt['id_penyebab']?>">Ubah</a></td> 
      <td><a href="delete_kecelakaan.php?id=<?=$dt['id_penyebab'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td> 
    </tr> 
<?php 
    endwhile; 
    ?> 
</table>