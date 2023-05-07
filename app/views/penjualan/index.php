<?php 
  function format_rupiah($angka){
  $rupiah = "Rp " . number_format($angka,0,',','.');
  return $rupiah;
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Penjualan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
    <div class="col-sm-12">
      <?php
        Flasher::Message();
      ?>
    </div>
  </div>
      <!-- Default box -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title'] ?></h3> <div class="btn-group float-right"><a href="<?= base_url; ?>/penjualan/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Penjualan</a></div>
        </div>
        <div class="card-body">
        
      <form action="<?= base_url; ?>/penjualan/cari" method="post">
      <div class="row mb-3">
          <div class="col-lg-6">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="key" >
          <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                <a class="btn btn-outline-danger" href="<?= base_url; ?>/penjualan" >Reset</a>
          </div>
        </div>

  </div>
</div>
    </form>
          <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Barang</th>
                      <th>Tanggal Beli</th>
                      <th>Harga Beli</th>
                      <th>Jumlah Penjualan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['penjualan'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['nama_barang'];?></td>
                      <td><?= $row['Tgl_Penjualan'];?></td>
                      <td><?= format_rupiah($row['Harga_Jual']);?></td>
                      <td><?= $row['Jumlah_Penjualan'];?></td>
                    </tr>
                    <?php $no++; endforeach; ?>
                  </tbody>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

