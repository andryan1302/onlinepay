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
        <div class="callout callout-info">
          <p>Silahkan Mengisi Form Dibawah Dengan Cermat</p>
        </div>
        
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h1 class="panel-title">Input Tagihan</h1>
            </div>
        
            <!-- /.box-header -->
            <div class="box-body">                
                <div class="row">
                    <div class="col-sm-12">
                        <form>
                            <div class="form-group">
                                <label for="nama">Nama Tagihan</label>
                                <select class="form-control">
                                  <option>--SELECT TAGIHAN--</option>
                                  <?php foreach ($tagihan as $tagihans): ?>
                                  <option><?php echo $tagihans->mt_nama ?></option>
                                  <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Harga</label>
                                <input type="number" id="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Target</label>
                                <select class="form-control">
                                  <option>--SELECT GROUPS--</option>
                                  <?php foreach ($groups as $group): ?>
                                  <option><?php echo $group->mg_nama ?></option>
                                  <?php endforeach; ?>
                                </select>
                            <div class="form-group">
                                <label for="pesan">Message</label>
                                <textarea class="form-control" rows=3 placeholder="Masukkan Pesan"></textarea>
                            </div>
                                <button type="submit" class="btn btn-success">Send</button>
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

  