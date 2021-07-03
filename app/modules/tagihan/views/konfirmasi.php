  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="col-sm-5">
          <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #008582;color:white;">
              <h1 class="panel-title" style="font-size:15px"><b>Informasi Pembayaran</b></h1>
            </div>
            <?php $random=rand(99999,999999);$code="PO-".$random;$hapustagihan=$this->uri->segment(3);foreach($tagihans as $data): ?>
            <form method="POST" id="form" name="formnih">
            <div class="panel-body" style="margin-left:-15px;">
              <div class="form-group">
                <label class="control-label col-md-4" style="margin-top:7px;">No. Pembayaran</label>
                <div class="col-md-8">
                  <input type="text" class="form-control id" value="<?php echo $code?>" disabled>
                  <input type="hidden" name="idhapus" value="<?php echo $hapustagihan ?>">
                  <input type="hidden" id="place" name="dataid">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4" style="margin-top:7px;">Tanggal</label>
                <div class="col-md-8">
                  <input type="date"  style="line-height:17px" name="tanggal" value="<?php echo date("Y-m-d");?>" class="form-control" >
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4" style="margin-top:7px;">Deskripsi</label>
                <div class="col-md-8">
                  <input type="text" class="form-control desk" value="<?php echo $data->tt_deskripsi ?>" disabled>
                  <input type="hidden" id="desk" name="deskripsis">
                  <span class="help-block"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #6ebbff;color:white;">
              <h1 class="panel-title" style="font-size:27px; text-align:right"><b>HARGA : <?php echo $data->tt_jumlah ?></b></h1>
              <input type="hidden" name="harga" value="<?php echo $data->tt_jumlah ?>">
            </div>
            <div class="panel-body" style="margin-left:-15px;">
              <div class="form-group">
                <label class="control-label col-md-3" style="margin-top:7px;">Metode Pembayaran</label>
                <div class="col-md-9">
                  <select class="form-control" name="metode">
                    <option>=====PILIH METODE PEMBAYARAN=====</option>
                    <option value="BCA | 23331412312">BCA | 23331412312</option>
                    <option value="BRI | 23563732212">BRI | 23563732212</option>
                    <option value="OVO | 08980916908">OVO | 08980916908</option>
                  </select>
                </div>
              </div>
              <div class="form-group" style="margin-top:40px;">
                <label class="control-label col-md-3" style="margin-top:7px;">Tagihan</label>
                <div class="col-md-9">
                  <input type="text" value="<?php echo $data->tt_tagihan ?>" class="form-control tagihan" disabled>
                  <input type="hidden" name="nama_tagihan" id="nama_tag">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <button type="button" onclick="savedat()" class="btn btn-primary" style="float:right;width:100px;"><b>Bayar</b></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="content" style="margin-top:-20px;">
        <div class="col-sm-5">
          <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #008582;color:white;">
              <h1 class="panel-title" style="font-size:15px"><b>Informasi Costumer</b></h1>
            </div>
            <div class="panel-body" style="margin-left:-15px;">
              <div class="form-group">
                <label class="control-label col-md-3" style="margin-top:7px;">Username</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" value="<?php echo $data->tt_nama ?>" disabled>
                  <input type="hidden" name="username" value="<?php echo $data->tt_nama ?>">
                  <span class="help-block"></span>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
      </form>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  $(document).ready(function(){
    let data = $('.id').val();
    let deskripsi = $('.desk').val();
    let namatag= $('.tagihan').val();
    $('#nama_tag').val(namatag);
    $('#desk').val(deskripsi);
    $('#place').val(data);
  })

  function savedat(){
      $.ajax({
        url : '<?php echo site_url('tagihan/checkout') ?>',
        type: "POST",
        data: $('#form').serialize(),
        success: function(data)
        {
          if(data == "Berhasil")
          {
            window.location.href='<?php echo site_url('tagihan')?>';
          }
          else
          {
            alert('gagal');
          }
        }
    });
    }
  </script>

  