<div class="col-sm-4 invoice-col">
          Invoice
          <address>
            <strong>Pembayaran Zakat & Infaq</strong><br>
            <strong>Tanggal ; <?= date('d/m/Y') ?></strong>
            DKM Masjid Al-waqifin<br>
            Tangerang-Banten<br>
            Phone: (+62) 123-5432-00<br>
            Email: info@almasaeedstudio.com
          </address>
</div>

<h1>Data Pembayaran Zakat Fitrah & Infaq</h1>
<div class="row">
        <div class="col-xs-12 table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
        <thead>
            <tr>
                <th>Nik</th>
                <th>Nama Muzakki</th>
                <th>Jenis Pembayaran</th>
                <th>Nominal</th>
            </tr>
        </thead>
        <tbody>

        <?php
            foreach ($hasil as $row) {

        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>

        </tr>
        <?php
            }
        ?>
</tbody>
</table>
</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        </br>
        </br>
