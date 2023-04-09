<!--<div class="h1">BAYAR INFAQ & ZAKAT FITRAH</div>-->
<p>Pembayaran</p>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pembayaran Infaq & Zakat Fitrah</h3>
            </div>
            <!-- /.box-header -->
<!-- form start -->
    <form action="<?php echo base_url('tampil/saveData') ?>" method="post">
        <div class="box-body">
            <div class="form-group">
                <label for="nim">Nik</label>
                <input type="nim" class="form-control" id="nim" name="nim" placeholder="Masukkan Nik Anda">
            </div>
            <div class="form-group">
                <label>Jenis Pembayaran</label>
                <select class="form-control select2" style="width: 100%;" id="fakultas" name="fakultas">
                  <option selected="selected">Zakat Fitrah</option>
                  <option>Infaq</option>
                  <option>Donasi</option>
                </select>
              </div>
            <div class="form-group">
              <label for="Nominal Transaksi">Nominal Transaksi</label>
              <input type="Nominal Transaksi" class="form-control" id="alamat" name="alamat" placeholder="Min Transaksi Rp40.000">
            </div>
            <div class="form-group">
              <label for="Atas Nama">Atas Nama</label>
              <input type="Nominal Transaksi" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
            </div>
              <!-- Date -->
              <!-- /.form group -->
        <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit Payment</button>
                <!--<button type="submit" class="btn btn-success">Print</button>-->
              </div>
            </form>
          </div>
          <!-- /.box -->
           </form>
            </div>
            <!-- /.box-body -->
