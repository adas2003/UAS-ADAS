<?php 
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas');
 if (isset($_POST['submit'])) {  
  $id_penyebab = $_POST['id_penyebab']; 
  $nama_penyebab = $_POST['nama_penyebab']; 
  $tingkat_bahaya = $_POST['tingkat_bahaya']; 
  $pelaku_adas = $_POST['pelaku_adas'];
 
// id_produk bernilai '' karena kita set auto increment 
$queryinput="INSERT INTO penyebab_adas(id_penyebab, nama_penyebab, tingkat_bahaya,pelaku_adas) 
VALUES ('$id_penyebab', '$nama_penyebab', '$tingkat_bahaya', '$pelaku_adas')"; 
  $q=mysqli_query($koneksi,$queryinput); if ($q) { 
    // pesan jika data tersimpan 
    echo "<script>alert('Data kemacetan berhasil ditambahkan'); window.location.href='crud_adas.php'</script>"; 
  } else { 
    // pesan jika data gagal disimpan 
    echo "<script>alert('Data kemacetan ditambahkan'); window.location.href='crud_adas.php'</script>"; 
  } 
} else { 
  // jika coba akses langsung halaman ini akan diredirect ke halaman index 
    header('Location: crud_adas.php'); 
}