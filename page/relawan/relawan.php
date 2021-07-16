<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA RELAWAN COVID-19
                </h2>
                <h3>
                    <a href="?page=relawan&aksi=tambah" class="btn btn-primary"><i class="material-icons">add</i> Tambah</a>
                    <a href="page/relawan/cetak.php" target="_blank" class="btn bg-indigo"><i class="material-icons">print</i> Cetak</a>
                </h3>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat Rumah</th>
                                <th>Provinsi</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Keahlian</th>
                                <th colspan="2">
                                    <center>Aksi</center>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_relawan");

                            while ($data = mysqli_fetch_assoc($sql)) {

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data["nama"]; ?></td>
                                    <td><?php echo $data["alamat"]; ?></td>
                                    <td><?php echo $data["provinsi"]; ?></td>
                                    <td><?php echo $data["email"]; ?></td>
                                    <td><?php echo $data["nohp"]; ?></td>
                                    <td><?php echo $data["keahlian"]; ?></td>
                                    <td class="d-flex justify-content-center">
                                        <a href="?page=relawan&aksi=ubah&id=<?php echo $data['id_relawan']; ?>" class="btn btn-success"><i class="material-icons">edit</i> Ubah</a>
                                    </td>
                                    <td>
                                        <a href="?page=relawan&aksi=hapus&id=<?php echo $data['id_relawan']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ...???')"><i class="material-icons">delete</i> Hapus</a>
                                    </td>
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