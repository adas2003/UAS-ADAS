<?php
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas');

if (isset($_POST['submit'])) {
    $id_penyebab = $_POST['id_penyebab'];
    $nama_penyebab = $_POST['nama_penyebab'];
    $tingkat_bahaya = $_POST['tingkat_bahaya'];
    $pelaku_adas = $_POST['pelaku_adas'];

    // Ensure all variables are sanitized before using them in the query
    $id_penyebab = mysqli_real_escape_string($koneksi, $id_penyebab);
    $nama_penyebab = mysqli_real_escape_string($koneksi, $nama_penyebab);
    $tingkat_bahaya = mysqli_real_escape_string($koneksi, $tingkat_bahaya);
    $pelaku_adas = mysqli_real_escape_string($koneksi, $pelaku_adas);

    // Update query
    $query = "UPDATE penyebab_adas SET nama_penyebab='$nama_penyebab', tingkat_bahaya='$tingkat_bahaya', pelaku_adas='$pelaku_adas' WHERE id_penyebab='$id_penyebab'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data pengrajin berhasil diubah'); window.location.href='crud_adas.php'</script>";
      } else {
      // pesan jika data gagal diubah
      echo "<script>alert('Data pengrajin gagal diubah'); window.location.href='crud_adas.php'</script>";
      }
   }  
  else {
 // jika coba akses langsung halaman ini akan diredirect ke halaman crud
 header('Location: crud_adas.php');
  }
?>