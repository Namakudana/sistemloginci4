<div class="h1">TAMPIL DATA ZAKAT FITRAH</div>

<body>
  <header>
    <header>
      </br>
      <div class="container-md">
        <div class="p-3 mb-2 bg-light text-dark">
          <a href='Bayarfitrah' class="btn btn-primary" type="submit">Tambah Data </a>
          <a href='report' class="btn btn-warning" type="submit">Print Data </a>

          <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <td>No. Transaksi</td>
                <td>Jenis Transaksi</td>
                <td>Nominal Transaksi</td>
                <td>Nama Muzakki</td>
              </tr>
            </thead>
            <tbody>
              <!--<?php
            //foreach ($tampil as $row) {
              ?>
                <tr>
                  <td><?php //echo $row->nim; ?></td>
                  <td><?php // $row->nama; ?></td>
                  <td><?php //echo $row->fakultas; ?></td>
                  <td><?php //echo $row->alamat; ?></td>
                  <td>
                    <a href="data/editData/<?php //echo $row->nim; ?>" class="btn btn-warning" type="submit">Sunting</a>
                    <a href="data/hapusData/<?php //echo $row->nim; ?>" class="btn btn-danger" type="delete">Hapus</a>
                  </td>
                </tr>
              <?php
            //}
              ?>-->
            </tbody>
          </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      <script>
        $(document).ready(function() {
          $('#example').DataTable();
        });
      </script>
</body>
</html>