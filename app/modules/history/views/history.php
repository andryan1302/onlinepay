  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
           <i class="fa fa-circle-o-notch" style="color:#008582;font-size:33px;"></i> History
          <small>Manajemen History</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> History</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="alert" style="background-color:#00a65a; color:white;">
        <b>Perhatian!!</b><p>Gunakan Panel Group ini Dengan Bijak</p>
        </div>
          <div class="box" style="border-top:#00a65a 6px solid;">
            <div class="box-header">
              <h3 class="box-title">History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="max-height: 300px;overflow-y: scroll;">
              <table id="table" class="table table-hover table-bordered mb-0">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>Tagihan</th>
                  <th>Jumlah</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                  <th>Metode Pembayaran</th>
                  <th>keterangan</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;?>
                  <?php foreach($history as $data): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data->nama ?></td>
                    <td><?php echo $data->tagihan ?></td>
                    <td><?php echo $data->jumlah ?></td>
                    <td><?php echo $data->tanggal ?></td>
                    <td><?php echo $data->deskripsi ?></td>
                    <td><?php echo $data->metode_pembayaran ?></td>
                    <td><?php echo $data->keterangan ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->


  