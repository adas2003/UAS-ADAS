<?php 
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas');
 if (isset($_POST['submit'])) {  
  $id_kota = $_POST['id_kota']; 
  $nama_kota = $_POST['nama_kota']; 
  $jumlah = $_POST['jumlah']; 
 
// id_produk bernilai '' karena kita set auto increment 
$queryinput="INSERT INTO kota_adas(id_kota, nama_kota, jumlah) 
VALUES ('$id_kota', '$nama_kota', '$jumlah')"; 
  $q=mysqli_query($koneksi,$queryinput); if ($q) { 
    // pesan jika data tersimpan 
    echo "<script>alert('Data kota berhasil ditambahkan'); window.location.href='crud_kota_adas.php'</script>"; 
  } else { 
    // pesan jika data gagal disimpan 
    echo "<script>alert('Data kota ditambahkan'); window.location.href='crud_kota_adas.php'</script>"; 
  } 
} else { 
  // jika coba akses langsung halaman ini akan diredirect ke halaman index 
    header('Location: crud_kota_adas.php'); 
}