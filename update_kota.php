<?php
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $koneksi->query("SELECT * FROM kota_adas WHERE id_kota = '$id'");
    foreach ($q as $dt) :
?>
        <h2>Halaman Ubah Data</h2>
        <form action="proses_kota.php" method="post">
            <input type="hidden" name="id_kota" value="<?= $dt['id_kota'] ?>">
            <input type="text" name="nama_kota" value="<?= $dt['nama_kota'] ?>">
            <input type="text" name="jumlah" value="<?= $dt['jumlah'] ?>">
            <input type="submit" name="submit" value="Ubah Data">
        </form>
<?php
    endforeach;
}
?>