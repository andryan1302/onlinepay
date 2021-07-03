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
            <div class="col-sm-10 btn-group form-group">
                <button class="btn btn-xs btn-danger" onclick="window.location.href='<?php echo site_url('inputhistory')?>'"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
            </div>
            <div class="col-sm-2 btn-group form-group">
                Search : <input type="text" onkeyup="" style="max-width: 115px;">
            </div>
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
                  <th>Action</th>
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
                    <td><button class="btn btn-xs btn-primary button" keterangan="<?php echo $data->keterangan ?>" data2 = <?php echo $data->history_id ?>><i class="fa fa-check xxx"></i> Selesai</button></td>
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


<script>
$('.button').click(function(){
  let data = $(this).attr('keterangan');
  let link = $(this).attr('data2');
  if(data != "selesai"){
    window.location.href='<?php echo site_url('inputhistory/update/')?>'+link;
  }else{
    alert('ini sudah selesai');
  }
});
</script>