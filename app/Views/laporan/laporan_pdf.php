<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body style="text-align: center;">
    <h2 style="text-align: center;">-- Laporan Penjualan --</h2>
    <table width="100%" cellpadding="2" cellspacing="0" style="margin-top: 5px; text-align:center">
        <thead style="background-color: black;color:white;">
            <tr>
                <th>No</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Total</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($barang) > 0) {
                foreach ($barang as $index => $data) {
            ?>
                    <tr>
                        <td><?= ($index) + 1 ?></td>
                        <td style=" text-align: left !important;"><?= $data->bulan ?></td>
                        <td><?= $data->tahun ?></td>
                        <td><?= $data->total ?></td>
                        <td><?= $data->created_at ?></td>
                        <td><?= $data->updated_at ?></td>
                    </tr>

            <?php
                }
            }
            ?>

        </tbody>
    </table>

</body>

</html>