<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_relawan");

while ($tampil = mysqli_fetch_assoc($sql)) {
    $jumlah_relawan = mysqli_num_rows($sql);
}

$sql2 = mysqli_query($koneksi, "SELECT * FROM tb_kelompok");
while ($tampil2 = mysqli_fetch_assoc($sql2)) {
    $jumlah_kelompok = mysqli_num_rows($sql2);
}
?>

<marquee behavior="" direction="">
    <h2>Selamat Datang Di Sistem Informasi Relawan Covid19</h2>
</marquee>
<br>
<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect hover-zoom-effect">
                <div class="icon">
                    <i class="material-icons">supervised_user_circle</i>
                </div>
                <div class="content">
                    <div class="text">
                        <h5>Data Relawan Covid19</h5>
                    </div>
                    <div class="number count-to" data-from="0" data-to="<?php echo $jumlah_relawan ?>" data-speed="1000" data-fresh-interval="20"><?php echo $jumlah_relawan ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect hover-zoom-effect">
                <div class="icon">
                    <i class="material-icons">face</i>
                </div>
                <div class="content">
                    <div class="text">
                        <h5>Data Kelompok</h5>
                    </div>
                    <div class="number count-to" data-from="0" data-to="<?php echo $jumlah_kelompok ?>" data-speed="1000" data-fresh-interval="20"><?php echo $jumlah_kelompok ?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        DATA KELOMPOK 2 - UAS PEMROGRAMAN WEB 2 - 06TPLM001
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($koneksi, "SELECT * FROM tb_kelompok ORDER BY nama ASC");
                                while ($data = mysqli_fetch_assoc($sql)) {

                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data["nim"]; ?></td>
                                        <td><?php echo $data["nama"]; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>