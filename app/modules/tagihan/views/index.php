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
                  <th>Denda</th>
                  <TH>Deskripsi</TH>
                  <th>Tools</th>
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; foreach($tagihans as $tagihan): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tagihan->tt_nama ?></td>
                    <td><?php echo $tagihan->tt_tagihan ?></td>
                    <td><?php echo $tagihan->tt_jumlah ?></td>
                    <td><?php echo $tagihan->tt_denda ?></td>
                    <td><?php echo $tagihan->tt_deskripsi ?></td>
                    <td><button class="btn btn-xs btn-primary" style="background-color:#00a65a;border:1px solid #00a65a;" onclick="window.location.href='<?php echo site_url('')?>'"><i class="glyphicon glyphicon-plus"></i> Bayar</button></td>
                  </tr>
                  <?php endforeach; ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-xs btn-primary" style="background-color:#00a65a;border:1px solid #00a65a;" onclick="window.location.href='<?php echo site_url('')?>'"><i class="glyphicon glyphicon-plus"></i> Bayar Semua</button></td>
                  </tr>
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
  <!--Modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body form">
                <form id="form" class="form-horizontal" name="formnih" method="POST">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Group *</label>
                            <div class="col-md-9">
                                <input type="text" name="group_nama" class="form-control" placeholder="Nama Group" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Deskripsi Group</label>
                            <div class="col-md-9">
                                <input type="text" name="des_group" class="form-control" placeholder="Deskripsi Group" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="clear" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- / Modal -->

<script>
    $('#check-all').click(function () {
    $('input[type=checkbox]').not(":disabled").prop('checked', this.checked);
    });
  function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Group'); // Set Title to Bootstrap modal title
}

  function save()
  {
  $.ajax({
        url : '<?php echo site_url('inputgrup/add') ?>',
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
            alert('gagal');
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
        url: '<?php echo site_url('inputgrup/delete/') ?>'+id,
        beforeSend: function(){

        },
        success: function(msg){
          if(msg == "Terhapus")
          {
            window.location.href='<?php echo site_url('inputgrup')?>';
          }
          else
          {
            alert('gagal');
          }
        }
      });
}
function check_all()
{
  $.ajax({
        url : '<?php echo site_url('inputgrup/add') ?>',
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


  