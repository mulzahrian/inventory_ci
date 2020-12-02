<div class="panel panel-default card-view">
    <div class="panel-heading">
        <div class="pull-left">
            <h6 class="panel-title txt-dark"><span class="span span-success">LIST KATEGORI</span></h6>
        </div>

        <div class="clearfix"></div>
    </div>
    <!--button-->

    <div align="right">
        <button class="btn btn-primary btn-anim mr-50" style="margin-right: 40px;" data-toggle="modal" data-target=".modal-pendaftaranakun"><i class="icon-plus"></i><span class="btn-text">TAMBAH KATEGORI</span></button>
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
                                <th>EDIT</th>
                                <th>KATEGORI</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="bg-success">
                                <th>NO</th>
                                <th>EDIT</th>
                                <th>KATEGORI</th>
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
                        <p>KATEGORI</p>
                        <p>INPUT KATEGORI</p>

                    </div>
                    <div class="modal-body">

                        <!--  -->
                        <!-- Form body  -->
                        <?php echo form_open('Kategori/insertKategori', array('class' => 'form-horizontal')) ?>

                        <div class="form-body mt-20">

                            

                                <!-- span -->
<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">KATEGORI</label>
            <div class="col-md-9 has-success">
                <input type="text" class="form-control" placeholder="KATEGORI"  id="nama_kategori" name="nama_kategori" ></input>
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
<!--modal yang akan dipakai-->

<div class="panel-wrapper collapse in">
    <div class="panel-body">
        <!-- sample modal content -->

        <div class="modal fade modal-modalEditKategori" id="modalEditKategori" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <p>KATEGORI</p>
                        <p>EDIT KATEGORI</p>

                    </div>
                    <div class="modal-body">

                        <!--  -->
                        <!-- Form body  -->
                       

                        <div class="form-body mt-20">

                            

                          <!-- span -->
<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">KATEGORI</label>
            <div class="col-md-9 has-success">
                <input type="text" class="form-control" placeholder="KATEGORI"  ></input>
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



<!-- Datatables -->




        <!--end modal 2-->





<!--  -->

<!--tampil data-->

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
                            "ajax": '<?php echo base_url('Kategori/tampil_list_kategori'); ?>', 
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

     function edit_kategori(id_kategori) {
                // alert(no_dokumen);
                //$("#no_dok").val(no_dokumen);
                // $("#no_dokumen1").val(no_dokumen);
                $("#modalEditKategori").modal('show');
            }

   

</script>

