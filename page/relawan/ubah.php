<?php
$kode2 = $_GET['id'];
$sql2 = mysqli_query($koneksi, "SELECT * FROM tb_relawan WHERE id_relawan ='$kode2'");
$tampil = mysqli_fetch_assoc($sql2);
$provinsi = $tampil['provinsi'];
?>

<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    UBAH DATA RELAWAN COVID19
                </h2>
            </div>

            <div class="body">
                <form method="POST">
                    <label for="">Nama Lengkap</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" required />
                        </div>
                    </div>
                    <label for="">Alamat Rumah</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" name="alamat" required><?php echo $tampil['alamat']; ?></textarea>
                        </div>
                    </div>
                    <label for="">Provinsi</label>
                    <div class=" form-group">
                        <div class="form-line">
                            <select name="provinsi" class="form-control show-tick">
                                <?php
                                $sql1 = mysqli_query($koneksi, "select * from tb_provinsi ORDER BY nama ASC");
                                while ($data1 = mysqli_fetch_assoc($sql1)) {
                                    echo "<option value='$data1[nama]'";
                                    if ($provinsi == $data1['nama']) {
                                        echo "selected";
                                    }
                                    echo ">$data1[nama]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <label for="">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" value="<?php echo $tampil['email']; ?>" required />
                        </div>
                    </div>
                    <label for="">No HP</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nohp" value="<?php echo $tampil['nohp']; ?>" required />
                        </div>
                    </div>
                    <label for="">Keahlian</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="keahlian" value="<?php echo $tampil['keahlian']; ?>" required />
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </form>

                <?php
                if (isset($_POST["simpan"])) {
                    $nama = $_POST["nama"];
                    $alamat = $_POST['alamat'];
                    $provinsi = $_POST["provinsi"];
                    $email = $_POST["email"];
                    $nohp = $_POST["nohp"];
                    $keahlian = $_POST["keahlian"];

                    $sql = mysqli_query($koneksi, "UPDATE tb_relawan SET nama='$nama', alamat='$alamat', provinsi='$provinsi',email='$email', nohp='$nohp',keahlian='$keahlian' WHERE id_relawan='$kode2'");

                    if ($sql) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil Diubah !");
                            window.location.href = "?page=relawan";
                        </script>

                    <?php
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Gagal Diubah !");
                            window.location.href = "?page=relawan";
                        </script>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>