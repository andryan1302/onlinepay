  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         <i class="fa fa-user" style="color:#008582;font-size:30px;"></i> Anggota
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> user</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="alert" style="background-color:#00a65a; color:white;">
          <p>Perhatian !! Gunakan Panel Ini Dengan Bijak</p>
        </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manajemen Menus</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-sm-12 btn-group form-group">
                <button class="btn btn-xs btn-danger" onclick="window.location.href='<?php echo site_url('inputgrup')?>'"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
            </div>
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kelas</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php foreach ($anggotas as $anggota): ?>
                <tr>
                <td><?php echo $anggota->mk_nama ?></td>
                <td><button class="btn btn-xs btn-primary" onclick="btn_modal_delete(<?php echo $anggota->id ?>)"><i class="glyphicon glyphicon-trash"></i> Delete</button></td>
                </tr>
                <?php endforeach; ?>
                <tr>
           
                </tr>  
                
                <tbody>

                </tbody>
              </table>
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
function btn_modal_delete(id)
{    
    var r = confirm("Anda Yakin Hapus !");
    if (r == true){
        btn_save_delete(id);
    } else {
        popup('batal');
    } 
}

function btn_save_delete(id)
{
    $.ajax({
        url: '<?php echo site_url('inputgrup/deleteanggota/') ?>'+id,
        beforeSend: function(){

        },
        success: function(msg){
          if(msg == "Terhapus")
          {
            window.location.href='<?php echo site_url('inputgrup/lihatmurid/'.$this->uri->segment(3))?>';
          }
          elseS
          {
            alert('gagal');
          }
        }
      });
}
</script>
  