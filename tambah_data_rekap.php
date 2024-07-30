<?php 
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas');
 if (isset($_POST['submit'])) {  
  $id_penyebab = $_POST['id_penyebab']; 
  $id_kota = $_POST['id_kota']; 
  $jumlah = $_POST['jumlah']; 
  $tingkat_bahaya = $_POST['tingkat_bahaya']; 
 
// id_produk bernilai '' karena kita set auto increment 
$queryinput="INSERT INTO rekap_adas(id_penyebab, id_kota, jumlah, tingkat_bahaya) 
VALUES ('$id_penyebab', '$id_kota', '$jumlah' ,'$tingkat_bahaya')"; 
  $q=mysqli_query($koneksi,$queryinput); if ($q) { 
    // pesan jika data tersimpan 
    echo "<script>alert('Data kemacetan berhasil ditambahkan'); window.location.href='crud_rekap_adas.php'</script>"; 
  } else { 
    // pesan jika data gagal disimpan 
    echo "<script>alert('Data kemacetan ditambahkan'); window.location.href='crud_rekap_adas.php'</script>"; 
  } 
} else { 
  // jika coba akses langsung halaman ini akan diredirect ke halaman index 
    header('Location: crud_rekap_adas.php'); 
}