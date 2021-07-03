  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
           <i class="fa fa-circle-o-notch" style="color:#008582;font-size:33px;"></i> Manajemen Group
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Menus</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="alert" style="background-color:#00a65a; color:white;">
        <b>Perhatian!!</b><p>Gunakan Panel Group ini Dengan Bijak</p>
        </div>
          <div class="box" style="border-top:#00a65a 6px solid;">
            <div class="box-header">
              <h3 class="box-title">Manajemen Group</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-sm-12 btn-group form-group">
                <button class="btn btn-xs btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
            </div>
            <div class="box-body" style="max-height: 300px;overflow-y: scroll;">
              <table id="table" class="table table-hover table-bordered mb-0">
                <thead>
                <tr>
                  <th>Nama Kelas</th>
                  <th>Deskripsi</th>
                  <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($kelas as $data): ?>
                  <tr>
                    <td><?php echo $data->mk_nama ?></td>
                    <td><?php echo $data->mk_deskripsi ?></td>
                    <td><button class="btn btn-xs btn-success" onclick="window.location.href='<?php echo site_url('inputkelas/lihatmurid/'.$data->mk_id)?>'"><i class="glyphicon glyphicon-file"></i>Anggota</button> <button class="btn btn-xs btn-danger" onclick="btn_modal_delete(<?php echo $data->mk_id ?>)"><i class="glyphicon glyphicon-trash"></i>Delete</button> <button class="btn btn-xs btn-primary update" link="btn_modal_update(<?php echo $data->mk_id?>)" nama="<?php echo $data->mk_nama ?>" desk="<?php echo $data->mk_deskripsi ?>" id="<?php echo $data->mk_id ?>"><i class="glyphicon glyphicon-plus"></i> Edit</button></td>
                  </tr>
                  <?php endforeach; ?>
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
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Kelas *</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_kelas" class="form-control" placeholder="Nama kelas" required>
                                <input type="hidden" name="ids">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Deksripsi Kelas</label>
                            <div class="col-md-9">
                                <input type="text" name="des_kelas" class="form-control" placeholder="Deskripsi kelas" required>
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
$(document).ready(function(){
  $('.update').click(function(e){
      $('#modal_form').modal('show');
      $('.modal-title').text('Update Group');
      $('[name="nama_kelas"]').val($(this).attr('nama'));
      $('[name="des_kelas"]').val($(this).attr('desk'));
      $('[name="ids"]').val($(this).attr('id'));
      $('#btnSave').attr('onclick',$(this).attr('link'));
    })
})
function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Group'); // Set Title to Bootstrap modal title
    $('#btnSave').attr('onclick','btn_modal_add()');
}

function btn_modal_add()
{
  $.ajax({
        url : '<?php echo site_url('inputkelas/add') ?>',
        type: "POST",
        data: $('#form').serialize(),
        success: function(data)
        {
          if(data == "Berhasil")
          { 
              window.location.href='<?php echo site_url('inputkelas')?>';    
          }
          else
          {
            popup('Gagal');
          }
        }
    });
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
        url: '<?php echo site_url('inputkelas/delete/') ?>'+id,
        success: function(msg){
          if(msg == "Terhapus")
          {
            window.location.href='<?php echo site_url('inputkelas')?>';
          }
          else
          {
            alert('gagal');
          }
        }
      });
}
function btn_modal_update(id){
  $.ajax({
        url: '<?php echo site_url('inputkelas/update') ?>',
        type:"POST",
        data: $('#form').serialize(),
        success: function(msg){
          if(msg == "TerUpdate")
          {
            window.location.href='<?php echo site_url('inputkelas')?>';
          }
          else
          {
            alert('gagal');
          }
        }
      });

}
  </script>