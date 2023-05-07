  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Pelanggan</h1>
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
        
        <div class="card-body">
        
      
          <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Nomor Handphone</th>
                      <th>Alamat</th>
                      <th>Barang Dibeli</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['pelanggan'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['nama_pelanggan'];?> </td>
                      <td><?= $row['email'];?></td>
                      <td><?= $row['nomor_telepon'];?></td>
                      <td><?= $row['alamat'];?></td>
                      <td><?= $row['nama_barang'];?></td>
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

