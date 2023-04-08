</br>
<h1 style="text-align: center;">LIST DATA MAHASISWA</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
        <thead>
            <tr>
                <th>Nik</th>
                <th>Pilihan</th>
                <th>Nominal Transaksi</th>
                <th>Atas Nama</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($hasil as $row) {
        ?>
        <tr>
            <td><?php echo $row->Nik; ?></td>
            <td><?php echo $row->Pilihan; ?></td>
            <td><?php echo $row->Nominal; ?></td>
            <td><?php echo $row->Nama; ?></td>
        </tr>
        <?php
            }
        ?>
</tbody>
</table>