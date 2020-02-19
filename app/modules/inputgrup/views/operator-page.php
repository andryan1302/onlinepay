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
          <p>Gunakan Panel Admin sebagaimana anda bertanggung jawab dalam memutuskan tindakan yang anda lakukan .</p>
        </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Manajemen Menus</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-sm-12 btn-group form-group">
                <?php if($can_add == 1){?>
                <button class="btn btn-xs btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
                <?php } ?>
                <button class="btn btn-xs btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
            </div>
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Menu</th>
                  <th>URI</th>
                  <th>Order</th>
                  <th>Tools</th>
                </tr>
                </thead>
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
<div class="modal" id="modal_form">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Tambah Menu</h4>
              </div>
              <div class="modal-body">
                <form action="#" id="form" class="form-horizontal" name="formnih">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Menu</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" placeholder="Nama">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">URI Menu (controller / folder)</label>
                            <div class="col-md-9">
                                <input type="text" name="uri" class="form-control" placeholder="URI">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Order Number</label>
                            <div class="col-md-9">
                                <input type="number" name="order" class="form-control" placeholder="Order Number">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Target Menu</label>
                            <div class="col-md-9">
                                <select name="target" class="form-control">
                          <option value="">This Page</option>
                          <option value="_blank">New Tab Page</option>
                      </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" ></label>
                    <div style="border:0px solid #ccc; width:98% ; height: 170px; overflow-y: scroll; padding-left: 10px;">
                      <div class="contain">
                          <table class="table table-bordered table-striped"> 
                            <thead>
                              <tr>
                                <th width="2%"></th>
                                <th class="text-left">Menu</th>
                              </tr>
                            </thead>
                          <tbody id="treenih">
                      <tr>
                       <td class="text-right">
                        <input type="radio" class="radio" name="parent" value="0" checked>
                        </td>
                       <td>Ini Parent Menu</td>
                      </tr>
                  <?php 
                      foreach ($tree as $tre) {
                       ?>
                      <tr>
                        <td class="text-right">
                          <input type="radio" class="radio" name="parent" value="<?php echo $tre->menu_id ;?>">
                        </td>
                        <td>
                          <?php echo $tre->menu_nama;?>
                        </td>
                      </tr>
                       <?php }; ?>
                       </tbody>                       
                      </table>
                  </div>
                  </div>
              </div>
              <div style="overflow:scroll; height: 200px;">
  <div class="form-group">
                <label class="col-sm-12">Icon Menu</label>
        </div>
        </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnSave" onclick="save()" >Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!-- / Modal -->

<script type="text/javascript">
 
var save_method; //for save method string
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "scrollX" : true,
    
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('menus/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
            "className":"text-center",
        },
        { 
            "targets": [2], //last column
            "className":"text-center",
        },
        ],
    });

});
 
function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Menu'); // Set Title to Bootstrap modal title
}
 
function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
 
    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('menus/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="id"]').val(data.data.menu_id);
            $('[name="name"]').val(data.nama);
            $('[name="uri"]').val(data.uri);
            $('[name="order"]').val(data.data.order_num);
            $('[name="target"]').val(data.data.menu_target);
            document.formnih.parent.value=data.data.menu_parent;
            document.formnih.icon.value=data.data.menu_icon;

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
 
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
    //refresh_menu_list();
}

function refresh_menu_list() {
     $.ajax({
          type:"GET",
          url: "<?php echo base_url('menus/refresh_menu_list/');?>",
          dataType:"JSON",
          beforeSend: function() 
          { 
           },
          success: function(json){
            $('#treenih').append('<tr><td class="text-right"><input type="radio" class="radio" name="parent" value="0" checked></td><td>Ini Parent Menu</td></tr>');
            $.each(json['data'], function(j, value) {
                  $('#treenih').append('<tr><td class="text-right"><input type="radio" class="radio" name="parent" value="'+value.menu_id+'"></td><td>'+value.menu_nama+'</td></tr>');
                });
          }
      });
}
 
function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo site_url('menus/ajax_add')?>";
    } else {
        url = "<?php echo site_url('menus/ajax_update')?>";
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                popup();
                $('#modal_form').modal('hide');
                reload_table();
                $("#treenih").empty();
                refresh_menu_list();
            }else{
              popup(data.msg);
                reload_table();
                $("#treenih").empty();
                refresh_menu_list();
            }
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
        }
    });
}
 
function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('menus/ajax_delete')?>/",
            type: "POST",
            data:{'id' : id},
            dataType: "JSON",
            success: function(data)
            {
               if(data.status) //if success close modal and reload ajax table
              {
                  $('#modal_form').modal('hide');
                  popup();
                  reload_table();
              }else{
                popup(data.msg);
                  reload_table();
              }
            }
        });
 
    }
}
function popup(ms = null,timess = null) {
  if(timess == null)
  {
    timess = 3000;
  }
  if(ms == null)
  {
    $().toasty({
        message: "Berhasil",
        autoHide: timess
    }); 
  }else{
    $().toasty({
        message: ms,
        autoHide: timess
    }); 
  } 
}
</script>