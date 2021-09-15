<div class="panel panel-default card-view">
    <div class="panel-heading">
        <div class="pull-left">
            <h6 class="panel-title txt-dark"><span class="span span-success">Laporan</span></h6>
        </div>

        <div class="clearfix"></div>
    </div>
    <div align="right">
        <a href="<?= base_url(); ?>Laporan/excel" class="btn btn-success btn-anim mr-50">  Excel File</a>
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
    <tr>
      <th scope="col">No</th>
       <th scope="col">Nama Produk</th>
       <th scope="col">Kode Produk</th>
      <th scope="col">Tanggal Register</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody style="color: black">
   <?php
                        $no = 1;
                        foreach($produk as $list){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $list->nama_produk; ?></td>
                                <td><?php echo $list->kode_produk;?></td>
                                <td><?php echo $list->tgl_register;?></td>
                                <td>
                                   <a href="<?= base_url(); ?>Laporan/pdf/<?php echo $list->id_produk; ?>"
                        class="btn btn-success btn-icon-anim btn-circle">PDF</i></a>
                                </td>
                            </tr> 
                        <?php } ?>
                        <tbody style="color: black">
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
                <input type="text" class="form-control" placeholder="Kode Produk"  id="kode_produk" name="kode_produk" ></input>
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
