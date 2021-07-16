<?php
$kode = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM tb_relawan WHERE id_relawan ='$kode'");

if ($sql) {
?>
    <script type="text/javascript">
        alert("Data Berhasil Dihapus !");
        window.location.href = "?page=relawan";
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert("Gagal Dihapus !");
        window.location.href = "?page=relawan";
    </script>
<?php
}
?>