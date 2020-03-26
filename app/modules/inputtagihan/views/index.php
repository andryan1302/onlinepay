  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tagihan
          <small>Manajemen Bill </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-money"></i> Tagihan</a></li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="alert" style="background-color:#00a65a; color:white;">
          <p>Silahkan Mengisi Form Dibawah Dengan Cermat</p>
        </div>
        
          <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #008582">
              <h1 class="panel-title"><b>Input Tagihan</b></h1>
            </div>
        
            <!-- /.box-header -->
            <div class="box-body">                
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" id="form">
                            <div class="form-group">
                                <label for="nama">Nama Tagihan</label>
                                <select class="form-control" name="namabill">
                                  <option>--SELECT TAGIHAN--</option>
                                  <?php foreach ($tagihan as $tagihans): ?>
                                  <option value="<?php echo $tagihans->mt_nama ?>"><?php echo $tagihans->mt_nama ?></option>
                                  <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Harga</label>
                                <input type="number" name="harga" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Target</label>
                                <select class="form-control" name="grup">
                                  <option>--SELECT GROUPS--</option>
                                  <?php foreach ($groups as $group): ?>
                                  <option value="<?php echo $group->mg_id ?>"><?php echo $group->mg_nama ?></option>
                                  <?php endforeach; ?>
                                </select>
                            <div class="form-group">
                                <label for="pesan">Message</label>
                                <textarea class="form-control" rows=3 placeholder="Masukkan Pesan" name="massage"></textarea>
                            </div>
                                <button type="button" onclick="modal_save()" class="btn btn-success">Save</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
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

<script type="text/javascript">
function modal_save()
{
  $.ajax({
        url : '<?php echo site_url('inputtagihan/save') ?>',
        type: "POST",
        data: $('#form').serialize(),
        success: function(data)
        {
          if(data == "Berhasil")
          { 
              window.location.href='<?php echo site_url('inputtagihan')?>';    
          }
          else
          {
            popup('Gagal');
          }
        }
    });
}
  </script>