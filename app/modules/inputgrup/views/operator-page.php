  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Menus
          <small>Manajemen Users </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Menus</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <p></p>
        </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manajemen Menus</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-sm-12 btn-group form-group">
                <button class="btn btn-xs btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
                <button class="btn btn-xs btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i>Reload</button>
            </div>
            <div class="box-body">
              <table id="table" class="table table-hover table-bordered">
                <thead>
                <tr>
                  <th>Nama Group</th>
                  <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Angkatan 2018</td>
                    <td><button class="btn btn-xs btn-primary" onclick="window.location.href='<?php echo site_url('inputgrup/tambahmurid')?>'"><i class="glyphicon glyphicon-plus"></i>Tambah Murid</button></td>
                  </tr>
                  <tr>
                    <td>Angkatan 2019</td>
                    <td><button class="btn btn-xs btn-primary" onclick="window.location.href='<?php echo site_url('inputgrup/tambahmurid')?>'"><i class="glyphicon glyphicon-plus"></i>Tambah Murid</button></td>
                  </tr>
                  <tr>
                    <td>Angkatan 2020</td>
                    <td><button class="btn btn-xs btn-primary" onclick="window.location.href='<?php echo site_url('inputgrup/tambahmurid')?>'"><i class="glyphicon glyphicon-plus"></i>Tambah Murid</button></td>
                  </tr>
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
                <form action="#" id="form" class="form-horizontal" name="formnih">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Group</label>
                            <div class="col-md-9">
                                <input type="text" name="group_nama" class="form-control" placeholder="Nama Group">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Deskripsi Group</label>
                            <div class="col-md-9">
                                <input type="text" name="des_group" class="form-control" placeholder="Deskripsi Group">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- / Modal -->

<script>
  function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Group'); // Set Title to Bootstrap modal title
}
</script>


  