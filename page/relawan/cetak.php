<?php
include "../../config.php";
?>

<style>
    .noPrint {
        padding: 5px 10px;
        background-color: #483D8B;
        color: white;
    }

    .tanggung {
        width: 250px;
        height: 150px;
        float: right;
        text-align: center;
        padding: 10px;
        margin: 10px;
    }

    @media print {
        button.noPrint {
            display: none;
        }
    }
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    window.print();
</script>
<?php
$waktu = date('H:i:s');
include "../../waktu.php";
?>
<table border="1" width="100%" style="border-collapse:collapse" cellpadding="5">
    <caption>
        <div style="overflow: auto;">
            <img src="../../images/covid.png" alt="" height="150" width="150" style="float:left;  margin-left: 10px;">
            <h2 style="margin-bottom: 0;">Data Relawan Covid19 Wilayah DKI Jakarta</h2>
            <h3 style="margin-bottom: 5;">Per <?php echo $tgl . ' ' . $month . ' ' . $tahun . ' ' . $waktu; ?> </h3>
        </div>
        <hr>
    </caption>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Alamat Rumah</th>
            <th>Provinsi</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Keahlian</th>
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
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<br>
<center>
    <button type="button" class="noPrint btn bg-indigo waves-effect" value="Print" onclick="window.print()">
        <i class="material-icons">print</i>
        <span>PRINT</span>
    </button>
</center>