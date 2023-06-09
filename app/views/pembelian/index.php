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
            <h1>Halaman Pembelian</h1>
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
          <h3 class="card-title"><?= $data['title'] ?></h3> <div class="btn-group float-right"><a href="<?= base_url; ?>/pembelian/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Pembelian</a></div>
        </div>
        <div class="card-body">
        
      <form action="<?= base_url; ?>/pembelian/cari" method="post">
      <div class="row mb-3">
          <div class="col-lg-6">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="key" >
          <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                <a class="btn btn-outline-danger" href="<?= base_url; ?>/pembelian" >Reset</a>
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
                      <th>Jumlah Pembelian</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['pembelian'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['nama_barang'];?></td>
                      <td><?= $row['Tgl_Pembelian'];?></td>
                      <td><?= format_rupiah($row['Harga_Beli']);?></td>
                      <td><?= $row['Jumlah_Pembelian'];?></td>
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

