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
            <h1>Halaman Utama</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Keterangan Laba / Rugi terhadap Penjualan Barang</h3>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">#</th>
              <th>Total Penjualan</th>
              <th>Total Pembelian</th>
              <th>Penjualan - Pembelian</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; ?> 
            <?php foreach ($data['labarugi'] as $row) :?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= format_rupiah($row['penjualan']);?></td>
              <td><?= format_rupiah($row['pembelian']);?></td>
              <td><?= format_rupiah($row['laba_rugi']);?></td>
              <td <?php if($row['keterangan']=='Laba'){ ?> class="badge badge-info " <?php } else { ?> class="badge badge-danger " <?php } ?>><?=  $row['keterangan'];?></td>
              
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

