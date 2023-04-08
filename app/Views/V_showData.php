<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>WEBSITE</title>

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel ="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"
></script>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <a class="navbar-brand" href="<?= base_url('data/insertData/') ?>">Input Data</a>

            <a class="navbar-brand" href="<?= base_url('login') ?>">Log Out</a>
            <a class="navbar-brand" href="<?= base_url('report') ?>">Report</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>
<header>

  <!-- Background image -->
</header>
<!--Main Layout-->
<main class="text-center my-5">


</main>
<!--Main Layout-->


</head>
<body>
<button type="button" class="btn btn-primary"><a class="navbar-brand" href="<?= base_url('tampil/insertData/') ?>">TAMBAH DATA</a>    
</button>
    

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <td>Nik</td>
            <td>Nama Muzakki</td>
            <td>Jenis Pembayaran</td>
            <td>Nominal</td>
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
            <td><button type="button" class="btn btn-primary"> 
              <a href="tampil/editData/<?php echo $row->nim; ?>">
              <div class="text-white">Edit 
              </div>
              </button>
              </a>
              <button type="button" class="btn btn-primary">   
              <a href="tampil/hapusData/<?php echo $row->nim; ?>">
              <div class="text-white">
              Hapus
              </div>
              </button> 
              </a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>

    <script>
    $(document).ready(function () 
    {
        $('#example').DataTable();
    });
    </script>

    

</body>
<footer class="bg-light text-center text-white">
  <!-- Grid container -->

  <!-- Grid container -->

  <!-- Copyright -->

  <!-- Copyright -->
</footer>
</html>