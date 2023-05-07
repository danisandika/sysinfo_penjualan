  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Pengguna</h1>
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
                      <th>Username</th>
                      <th>Nomor Handphone</th>
                      <th>Alamat</th>
                      <th>Jabatan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['pengguna'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['Nama_Depan'];?> <?= $row['Nama_Belakang'];?></td>
                      <td><?= $row['Username'];?></td>
                      <td><?= $row['No_HP'];?></td>
                      <td><?= $row['Alamat'];?></td>
                      <td><?= $row['nama_akses'];?></td>
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

