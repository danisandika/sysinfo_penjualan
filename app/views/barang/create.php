  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Barang</h1>
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
              <form role="form" action="<?= base_url; ?>/barang/simpanBarang" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama Barang</label>
                    <input type="text" class="form-control" placeholder="masukkan nama barang..." name="nama_barang">
                  </div>
                  <div class="form-group">
                    <label >Satuan</label>
                    <select name="satuan" class="form-control">
                        <option value="" disabled selected>Choose option</option>
                        <option value="Unit">Unit</option>
                        <option value="Buah">Buah</option>
                        <option value="Set">Set</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Jumlah Barang</label>
                    <input type="text" class="form-control" placeholder="masukkan jumlah barang..." name="qty">
                  </div>
                  <div class="form-group">
                    <label >Jumlah Barang</label>
                    <input type="text" class="form-control" placeholder="masukkan Keterangan barang..." name="keterangan">
                  </div>
                  <input type="text" name="id_pengguna" value="1" hidden>
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