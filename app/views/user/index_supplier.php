  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Supplier</h1>
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
                      <th>Kota</th>
                      <th>Kode Pos</th>
                      <th>Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['supplier'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['nama'];?></td>
                      <td><?= $row['kota'];?></td>
                      <td><?= $row['kode_pos'];?></td>
                      <td><?= $row['alamat'];?></td>
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

