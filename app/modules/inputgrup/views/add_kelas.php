  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <i class="fa fa-user-plus" style="color:#008582;font-size:30px;"></i> Tambah Anggota
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Menus</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="alert" style="background-color:#00a65a; color:white;">
          <p>Perhatian !! 
          Gunakan Panel Ini Dengan Bijak</p>
        </div>
          <div class="box" style="border-top:10px solid #73ffb4">
            <div class="box-header">
              <h3 class="box-title">Manajemen Menus</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-sm-12 btn-group form-group">
                <button class="btn btn-sm btn-danger" onclick="window.location.href='<?php echo site_url('inputgrup')?>'"><i class="glyphicon glyphicon-arrow-left"></i>Back</button> 
            </div>
          <form id="form" class="form-horizontal" name="formnih" method="POST">  
            <div class="box-body" style="max-height:350px;overflow-y: scroll;">
              <fieldset>
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Users</th>
                    <th><input type="checkbox" id="check-all">  Checkall</th>
                  </tr>
                  </thead>
                  <?php foreach ($kelas as $kelass): ?>
                  <tr>
                  <td><?php echo $kelass->mk_nama ?></td>
                  <td><input type="checkbox" name="check[]" value="<?php echo $kelass->mk_id ?>"></td>
                  </tr>  
                  <?php endforeach; ?>
                  <tbody>
                  </tbody>
                </table>
                  <div class="col-sm-2 col-sm-offset-10 btn-group form-group">
                    <input type="hidden" value="<?php echo $this->uri->segment(3)?>" name="kode_grup">
                    <button type="button" id="btnSave" onclick="check_all()" class="btn btn-primary">Kirim</button>
                  </div>
              </fieldset>
            </div>
          </form>  
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
    $('#check-all').click(function () {
    $('input[type=checkbox]').not(":disabled").prop('checked', this.checked);
    });
  function check_all()
  {
  $.ajax({
        url : '<?php echo site_url('inputgrup/check_grup') ?>',
        type: "POST",
        data: $('#form').serialize(),
        success: function(data)
        {
          if(data == "Berhasil")
          { 
              window.location.href='<?php echo site_url('inputgrup')?>';    
          }
          else
          {
            popup('Gagal');
          }
        }
    });
  }
</script>



  