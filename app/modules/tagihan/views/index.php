  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
           <i class="fa fa-circle-o-notch" style="color:#008582;font-size:33px;"></i> Tagihan
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="alert" style="background-color:#00a65a; color:white;">
        <b>Selamat Datang !! </b><p>Berikut Daftar Tagihan Anda</p>
        </div>
          <div class="box" style="border-top:#00a65a 6px solid;">
            <div class="box-header">
              <h3 class="box-title">Tagihan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="max-height: 300px;overflow-y: scroll;">
              <table id="table" class="table table-hover table-bordered mb-0">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tagihan</th>
                  <th>Jumlah</th>
                  <TH>Deskripsi</TH>
                  <th>Bayar</th>
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; foreach($tagihans as $tagihan): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tagihan->tt_nama ?></td>
                    <td><?php echo $tagihan->tt_tagihan ?></td>
                    <td><?php echo $tagihan->tt_jumlah ?></td>
                    <td><?php echo $tagihan->tt_deskripsi ?></td>
                    <td><button class="btn btn-xs btn-success" onclick="window.location.href='<?php echo site_url('tagihan/bayar/'.$tagihan->tt_id)?>'"><i class="glyphicon glyphicon-plus"></i> Bayar</button></td>
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
  

  