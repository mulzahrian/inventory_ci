<div class="panel panel-default card-view">
    <div class="panel-heading">
        <div class="pull-left">
            <h6 class="panel-title txt-dark"><span class="span span-success">LIST STOCK</span></h6>
        </div>

        <div class="clearfix"></div>
    </div>
    <!--button-->

    <div align="right">
        <button class="btn btn-primary btn-anim mr-50" style="margin-right: 40px;" data-toggle="modal" data-target=".modal-pendaftaranakun"><i class="icon-plus"></i><span class="btn-text">TAMBAH STOCK</span></button>
    </div>

    <!--button-->

   <div class="row mt-30">
            <div class="col-md-12">
                <div class="col-md-3 mt-20">
                   
            </div>
                
                
                
            </div>
        </div>





        



<div class="table-wrap">
                <!-- <p id="notif_load" style="color:red;">Loading data, Please wait</p> -->

                <div class="table-responsive">
                    <table class="table table-hover display  pb-30" id="datable">
                        <thead>
                            <tr class="bg-success">
                                <th>NO</th>
                                <th>NAMA PRODUK</th>
                                <th>JUMLAH BARANG</th>
                                <th>TANGGAL UPDATE</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="bg-success">
                                <th>NO</th>
                                <th>NAMA PRODUK</th>
                                <th>JUMLAH BARANG</th>
                                <th>TANGGAL UPDATE</th>
                            </tr>
                        </tfoot>

                        <tbody style="color: black">
                        </tbody>
                    </table>
                
            </div>
        
    </div>



<!-- Datatables -->


<!--modal yang akan dipakai-->

<div class="panel-wrapper collapse in">
    <div class="panel-body">
        <!-- sample modal content -->

        <div class="modal fade modal-pendaftaranakun" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <p>STOCK</p>
                        <p>INPUT STOCK</p>

                    </div>
                    <div class="modal-body">

                        <!--  -->
                        <!-- Form body  -->
                        <?php echo form_open('Stock/insertStock', array('class' => 'form-horizontal')) ?>

                        <div class="form-body mt-20">

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Nama Produk</label>
            <div class="col-md-9 has-success">
                <select class="form-control filled-input select2" style="border: 1px solid lightgreen;" tabindex="1" name="id_produk" id="id_produk">

                    <option value="-">Pilih Produk</option>
                        <?php
                            foreach ($stock as $row) :
                        ?>
                    <option
                        value="<?php echo $row['id_produk'] . "|" . $row['nama_produk']; ?>">
                    <?php echo $row['nama_produk']; ?></option>

                        <?php endforeach; ?>    
            </select>
             </div>
        </div>
    </div>

                                <!-- span -->
<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Jumlah Barang</label>
            <div class="col-md-9 has-success">
                <input type="number" class="form-control" placeholder="Jumlah Barang"  id="jumlah_barang" name="jumlah_barang" ></input>
             </div>
        </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Tanggal Update</label>
            <div class="col-md-9 has-success">
                <input type="date" class="form-control"   id="tgl_update" name="tgl_update" ></input>
             </div>
        </div>
    </div>


                                


     <p class="mt-15">
        <!-- /Row -->

        <div class="row">
            


                                    


    <p class="mt-15">
</div>


<!-- /Row -->
    </div>
<!-- End -->
    </div>
<div class="modal-footer mb-10 mr-15">

    <button  class="btn btn-success btn-anim  btn-sm" type="Submit"><i class="icon-rocket"></i><span class="btn-text">Submit</span></button>

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--akhir modal yang akan dipakai-->

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
                            "ajax": '<?php echo base_url('Stock/tampil_stock'); ?>', 
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

     //tampil hari ini 

   

</script>





