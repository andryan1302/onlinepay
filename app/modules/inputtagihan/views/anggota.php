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
                <button class="btn btn-xs btn-danger" onclick="window.location.href='<?php echo site_url('inputgrup')?>'"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
                <button class="btn btn-xs btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i>Reload</button>
            </div>
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Users</th>
                  <th>Grup</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php foreach ($anggotas as $anggota): ?>
                <tr>
                <td><?php echo $anggota->username ?></td>
                 <td><?php echo $anggota->mg_deskripsi ?></td>
                <td><input type="checkbox" name="check"></td>
                </tr>  
                <?php endforeach; ?>
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



  