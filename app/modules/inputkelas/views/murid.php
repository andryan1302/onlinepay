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
                <button class="btn btn-xs btn-danger" onclick="window.location.href='<?php echo site_url('inputkelas')?>'"><i class="glyphicon glyphicon-arrow-left"></i> Back </button><button class="btn btn-xs btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i>Tambah Murid</button>
            </div>
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Murid</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php foreach ($anggotas as $anggota): ?>
                <tr>
                <td><?php echo $anggota->username ?></td>
                <td><?php echo $this->alus_auth->decrypt($anggota->abc) ?></td>
                <td><button class="btn btn-xs btn-primary" onclick="btn_modal_delete(<?php echo $anggota->tk_id ?>)"><i class="glyphicon glyphicon-trash"></i> Delete</button></td>
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

   <!--Modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body form">
                <form id="form" class="form-horizontal" name="formnih" method="POST" action="">
                <div class="form-group checkboxx">
                            <!-- <label class="control-label col-md-" >Group</label> -->
                            <div style="border:0px solid #ccc; width:100% ; height: 190px; overflow-y: scroll; padding-left: 10px;">
                              <div class="contain">
                                <table class="table table-striped table-bordered table-hover"> 
                                  <thead>
                                    <tr>
                                      <th width="100px"><input type="checkbox" id="checkall"> Checkall</th>
                                      <th>Murid</th>
                                      <th>Email</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($murid as $data): ?>
                                    <tr>
                                      <td>
                                        <input type="checkbox" name="murid[]" value="<?php echo $data->id ?>">
                                        <input type="hidden" name="ids" value="<?php echo $this->uri->segment(3) ?>"
                                      </td>
                                      <td><?php echo $data->username ?></td>
                                      <td><?php echo $this->alus_auth->decrypt($data->abc) ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="btn_modal_add()" class="btn btn-primary">Save</button>
                <button type="clear" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- / Modal -->
<script>
  $('#checkall').click(function() {
  $('input[type=checkbox]').not(":disabled").prop('checked', this.checked);
  })
function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Group'); // Set Title to Bootstrap modal title
}

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
        url: '<?php echo site_url('inputkelas/deleteanggota/') ?>'+id,
        beforeSend: function(){

        },
        success: function(msg){
          if(msg == "Terhapus")
          {
            window.location.href='<?php echo site_url('inputkelas/lihatmurid/'.$this->uri->segment(3))?>';
          }
          else
          {
            alert('gagal');
          }
        }
      });
}

function btn_modal_add(){
  $.ajax({
        url : '<?php echo site_url('inputkelas/addmurid') ?>',
        type: "POST",
        data: $('#form').serialize(),
        success: function(data)
        {
          if(data == "Berhasil")
          { 
            window.location.href='<?php echo site_url('inputkelas/lihatmurid/'.$this->uri->segment(3))?>';          }
          else
          {
            popup('Gagal');
          }
        }
    });
}
</script>
  