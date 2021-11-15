<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Data Barang</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>dashboard/insertBarang" >
                            <?php echo validation_errors();?>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Kode Barang</label>
                                <div class="col-lg-2">
                                   <input type="text" name="kdBarang" class="form-control" required>
                                </div>
                                <label class="col-lg-1 control-label">Nama Barang</label>
                                <div class="col-lg-5">
                                    <input type="text" name="namaBarang" class="form-control" required>
                                </div>

                                 <label class="col-lg-1 control-label">Satuan</label>
                                <div class="col-lg-2">
                                    <select name="satuan" class="form-control" required>
                                        <option></option>
                                        <option value="Pcs">Pcs</option>
                                        <option value="Pack">Pack</option>
                                        <option value="Dus">Dus</option>
                                        <option value="Roll">Roll</option>
                                        <option value="Lbr">Lbr</option>
                                        <option value="Rim">Rim</option>
                                    </select>
                                </div>
                                 
                            </div>
                            <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                               
                                <label class="col-lg-1 control-label">Stok Awal</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="stokAwal" class="form-control" required>
                                    </div>
                                <label class="col-lg-1 control-label">Stok Akhir</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="stokAkhir" class="form-control" required>
                                    </div>
                                 <label class="col-lg-1 control-label">Stok Masuk</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="stokMasuk" class="form-control" required>
                                    </div>
                                  <label class="col-lg-1 control-label">Stok Keluar</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="stokKeluar" class="form-control" required>
                                    </div>
                            </div>
                           
                               <div class="form-group">
                                <label class="col-lg-1 control-label">Keterangan</label>
                                <div class="col-lg-5">
                                   <input type="text" name="keterangan" class="form-control" required>
                                </div>
                             

                              
                                 
                            </div>
                               
                            <div class="form-group mr-3" style="float: center; text-align: right;" >
                                <button class="db-btn-round-fill-green" ><i class="fa fa-save"></i> Simpan</button>
                                <a href="<?=base_url('dashboard/barang');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                            </div>
                        </form>
                         </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

