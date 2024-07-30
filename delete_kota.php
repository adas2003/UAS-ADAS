<?php 
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas'); if (isset($_GET['id'])) { 
  $id = $_GET['id']; 
// perintah hapus data berdasarkan id yang dikirimkan 
  $q = $koneksi->query("DELETE FROM kota_adas WHERE id_kota='$id'"); 
// cek perintah 
  if ($q) { 
    // pesan apabila hapus berhasil 
    echo "<script>alert('Data berhasil dihapus'); window.location.href='crud_kota_adas.php'</script>"; 
  } else { 
    // pesan apabila hapus gagal 
    echo "<script>alert('Data berhasil dihapus'); window.location.href='crud_kota_adas.php'</script>"; 
  } 
} else { 
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman utama  
   header('Location:crud_kota_adas.php'); 
} 
?>