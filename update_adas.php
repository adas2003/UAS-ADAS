<?php
$koneksi=mysqli_connect('localhost','root','','kecelakaan_lalu_lintas_adas');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $koneksi->query("SELECT * FROM penyebab_adas WHERE id_penyebab = '$id'");
    foreach ($q as $dt) :
?>
        <h2>Halaman Ubah Data</h2>
        <form action="proses_update_adas.php" method="post">
            <input type="hidden" name="id_penyebab" value="<?= $dt['id_penyebab'] ?>">
            <input type="text" name="nama_penyebab" value="<?= $dt['nama_penyebab'] ?>">
            <input type="text" name="tingkat_bahaya" value="<?= $dt['tingkat_bahaya'] ?>">
            <input type="text" name="pelaku_adas" value="<?= $dt['pelaku_adas'] ?>">
            <input type="submit" name="submit" value="Ubah Data">
        </form>
<?php
    endforeach;
}
?>