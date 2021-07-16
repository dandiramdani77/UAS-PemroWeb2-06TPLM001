<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH RELAWAN COVID-19
                </h2>
            </div>

            <div class="body">
                <form method="POST">
                    <label for="">Nama Lengkap</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" required />
                        </div>
                    </div>
                    <label for="">Alamat Rumah</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" name="alamat" required></textarea>
                        </div>
                    </div>
                    <label for="">Nama Provinsi</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="provinsi" class="form-control show-tick">
                                <option value="">-- Pilih Provinsi --</option>
                                <?php
                                $sql = mysqli_query($koneksi, "select * from tb_provinsi ORDER BY nama ASC");
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo "<option value='$data[nama]'>$data[nama]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <label for="">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" required />
                        </div>
                    </div>
                    <label for="">No HP</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nohp" required />
                        </div>
                    </div>
                    <label for="">Keahlian</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="keahlian" required />
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </form>

                <?php
                if (isset($_POST["simpan"])) {
                    $nama = $_POST["nama"];
                    $alamat = $_POST["alamat"];
                    $provinsi = $_POST["provinsi"];
                    $email = $_POST["email"];
                    $nohp = $_POST["nohp"];
                    $keahlian = $_POST["keahlian"];

                    $sql = mysqli_query($koneksi, "INSERT INTO tb_relawan values(NULL,'$nama','$alamat','$provinsi','$email','$nohp','$keahlian')");

                    if ($sql) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil Disimpan !");
                            window.location.href = "?page=relawan";
                        </script>

                    <?php
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Gagal Disimpan !");
                            window.location.href = "?page=relawan";
                        </script>

                <?php
                    }
                }
                ?>