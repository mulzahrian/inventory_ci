<div class="panel panel-default card-view">
    <div class="panel-heading">
        <div class="pull-left">
            <h6 class="panel-title txt-dark"><span class="span span-success">LIST PRODUK</span></h6>
        </div>

        <div class="clearfix"></div>
    </div>
    
    <div align="right">
        <button class="btn btn-primary btn-anim mr-50" style="margin-right: 40px;" data-toggle="modal" data-target=".modal-pendaftaranakun"><i class="icon-plus"></i><span class="btn-text">TAMBAH PRODUK</span></button>
    </div>

   <div class="row mt-30">
            <div class="col-md-12">
                <div class="col-md-3 mt-20">
                   
            </div>
                
                
                
            </div>
        </div>





        



<div class="table-wrap">
                <div class="table-responsive">
                    <table class="table table-hover display  pb-30" id="datable">
                        <thead>
                            <tr class="bg-success">
                                <th>NO</th>
                                <th>EDIT</th>
                                <th>NAMA KATEGORI</th>
                                <th>NAMA PRODUK</th>
                                <th>KODE PRODUK</th>
                                <th>FOTO PRODUK</th>
                                <th>TANGGAL REGISTRSI</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="bg-success">
                                <th>NO</th>
                                <th>EDIT</th>
                                <th>NAMA KATEGORI</th>
                                <th>NAMA PRODUK</th>
                                <th>KODE PRODUK</th>
                                <th>FOTO PRODUK</th>
                                <th>TANGGAL REGISTRSI</th>
                            </tr>
                        </tfoot>

                        <tbody style="color: black">
                        </tbody>
                    </table>
                
            </div>
        
    </div>


<div class="panel-wrapper collapse in">
    <div class="panel-body">

        <div class="modal fade modal-pendaftaranakun" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <p>PRODUK</p>
                        <p>INPUT PRODUK</p>

                    </div>
                    <div class="modal-body">

                        <?php echo form_open('Produk/insertProduk', array('class' => 'form-horizontal')) ?>

                        <div class="form-body mt-20">

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Nama Kategori</label>
            <div class="col-md-9 has-success">
                <select class="form-control filled-input select2" style="border: 1px solid lightgreen;" tabindex="1" name="id_kategori" id="id_kategori">

                    <option value="-">PILIH PO</option>
                        <?php
                            foreach ($Kategori as $row) :
                        ?>
                    <option
                        value="<?php echo $row['id_kategori'] . "|" . $row['nama_kategori']; ?>">
                    <?php echo $row['nama_kategori']; ?></option>

                        <?php endforeach; ?>    
            </select>
             </div>
        </div>
    </div>

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Nama Produk</label>
            <div class="col-md-9 has-success">
                <input type="text" class="form-control" placeholder="Nama Produk"  id="nama_produk" name="nama_produk" ></input>
             </div>
        </div>
    </div>

                            
<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Kode Produk</label>
            <div class="col-md-9 has-success">
                <input type="text" class="form-control" placeholder="Kode Produk"  id="kode_produk" name="kode_produk" onkeyup="myFunction()" ></input>
                <span class="help-block"></span>
                    <div class="mt-10" id="no_result"></div>
             </div>
        </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Gambar</label>
            <div class="col-md-9 has-success">
                <input type="file" class="form-control" placeholder="Foto Produk"  id="foto_produk" name="foto_produk" ></input>
             </div>
        </div>
    </div>


                                


     <p class="mt-15">

        <div class="row">
            


                                    


    <p class="mt-15">
</div>

    </div>

    </div>
<div class="modal-footer mb-10 mr-15">

    <button  class="btn btn-success btn-anim  btn-sm" type="Submit"><i class="icon-rocket"></i><span class="btn-text">Submit</span></button>

                    </div>
                </div>
    
            </div>
    
        </div>

<div class="panel-wrapper collapse in">
    <div class="panel-body">

        <div class="modal fade modal-modalEditProduk" id="modalEditProduk" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <p>PRODUK</p>
                        <p>INPUT PRODUK</p>

                    </div>
                    <div class="modal-body">


                        <?php echo form_open('Produk/EditProduk', array('class' => 'form-horizontal')) ?>

                        <div class="form-body mt-20">

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Nama Kategori</label>
            <div class="col-md-9 has-success">
                <select class="form-control filled-input select2" style="border: 1px solid lightgreen;" tabindex="1">

                    <option value="-">PILIH PO</option>
                        
            </select>
             </div>
        </div>
    </div>

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Nama Produk</label>
            <div class="col-md-9 has-success">
                <input type="text" class="form-control" placeholder="Nama Produk"   ></input>
             </div>
        </div>
    </div>

                            
<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Kode Produk</label>
            <div class="col-md-9 has-success">
                <input type="text" class="form-control" placeholder="Kode Produk"    ></input>
                 
             </div>
        </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Gambar</label>
            <div class="col-md-9 has-success">
                <input type="file" class="form-control" placeholder="Foto Produk"   ></input>
             </div>
        </div>
    </div>


                                


     <p class="mt-15">

        <div class="row">
            


                                    


    <p class="mt-15">
</div>

    </div>
            
    </div>
<div class="modal-footer mb-10 mr-15">

    <button  class="btn btn-success btn-anim  btn-sm" type="Submit"><i class="icon-rocket"></i><span class="btn-text">Submit</span></button>

                    </div>
                </div>
  
            </div>
 
        </div>

<script type="text/javascript">
     $(document).ready(function () {


                $('#datable').DataTable({
                        "language": {
                        "sEmptyTable":   "Tidak ada data yang tersedia pada tabel ini",
                        "sProcessing":   "Sedang memproses...",
                        "sLengthMenu":   "Tampilkan _MENU_ entri",
                        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                        "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix":  "",
                        "sSearch":  "Pencarian :",
                        "sUrl":          "",
                        "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                        "sLast":     "Terakhir"
                        },
                             },     
                            "ajax": '<?php echo base_url('Produk/tampil_produk'); ?>', 
                            "deferRender": true,
                            "processing": true,
                            "order": [], 
                            "columnDefs": [
                            { 
                            "targets": [ 0 ], 
                            "orderable": false, 
                            },
                        ],
                });
            });


      function edit_produk(id_produk) {

                $("#modalEditProduk").modal('show');
            } 

   

</script>


<script type="text/javascript">

        function myFunction() {
                kode_produk = $('#kode_produk').val();
                if (kode_produk != '') {
                    $.ajax({
                        url: "<?php echo base_url(); ?>Produk/check",
                        method: "POST",
                        data: {
                            kode_produk: kode_produk
                        },
                        success: function(data) {
                            $('#no_result').html(data);
                        }
                    });
                }
        }
    </script>





