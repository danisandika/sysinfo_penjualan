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
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url; ?>/penjualan/simpanpenjualan" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama Barang</label>
                    <select class="form-control" name="id_barang">
                        <option value="" disabled selected>Choose option</option>
                         <?php foreach ($data['barang'] as $row) :?>
                        <option value="<?= $row['Id_Barang']; ?>"><?= $row['Nama_Barang']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Tanggal Penjualan</label>
                    <input type="text" class="form-control" placeholder="masukkan tanggal Penjualan..." name="tgl_penjualan" value="<?php echo date("Y-m-d H:i:s");?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >Harga Jual</label>
                    <input type="text" class="form-control" placeholder="masukkan Harga Jual..." name="harga_jual">
                  </div>
                 
                  <div class="form-group">
                    <label >Jumlah Jual</label>
                    <input type="text" class="form-control" placeholder="masukkan Jumlah Penjualan..." name="jumlah_penjualan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->