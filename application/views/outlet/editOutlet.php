<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Edit Data Outlet</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>outlet/update" >
                            <?php echo validation_errors();?>
                                <input type="hidden" name="idOutlet" value="<?php echo $idOutlet ?>" class="form-control" required>
                            <div class="form-group">
                                <label class="col-lg-1 control-label">Nama Outlet</label>
                                <div class="col-lg-4">
                                   <input type="text" name="namaOutlet" value="<?php echo $namaOutlet ?>" class="form-control" required>
                                </div>
                                <label class="col-lg-1 control-label">Alamat Outlet</label>
                                <div class="col-lg-5">
                                    <input type="text" name="alamaOutlet" value="<?php echo $alamaOutlet ?>" class="form-control" required>
                                </div>
                                 

                            
                                
                                 
                            </div>
                              <div class="form-group">
                                    <label class="col-lg-1 control-label">No. Telp</label>
                                <div class="col-lg-3">
                                    <input type="text" name="noTelp" value="<?php echo $noTelp ?>" class="form-control" required>
                                </div>
                              </div>
                                             

                              
                                 
                            </div>
                               
                            <div class="form-group mr-3" style="float: center; text-align: right;" >
                                <button class="db-btn-round-fill-green" ><i class="fa fa-save"></i> Simpan</button>
                                <a href="<?=base_url('outlet');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                            </div>
                        </form>
                         </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>

 <script language="JavaScript" type="text/JavaScript">
   

</script>