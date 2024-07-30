<?php
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas');

if (isset($_POST['submit'])) {
    $id_kota = $_POST['id_kota'];
    $nama_kota = $_POST['nama_kota'];
    $jumlah = $_POST['jumlah'];

    // Ensure all variables are sanitized before using them in the query
    $id_kota = mysqli_real_escape_string($koneksi, $id_kota);
    $nama_kota = mysqli_real_escape_string($koneksi, $nama_kota);
    $jumlah = mysqli_real_escape_string($koneksi, $jumlah);

    // Update query
    $query = "UPDATE kota_adas SET nama_kota='$nama_kota', jumlah='$jumlah' WHERE id_kota='$id_kota'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data kasus berhasil diubah'); window.location.href='crud_kota_adas.php'</script>";
      } else {
      // pesan jika data gagal diubah
      echo "<script>alert('Data kasus gagal diubah'); window.location.href='crud_kota_adas.php'</script>";
      }
   }  
  else {
 // jika coba akses langsung halaman ini akan diredirect ke halaman crud
 header('Location: crud_kota_adas.php');
  }
?>