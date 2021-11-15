<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Data User</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>user/insert" >
                            <?php echo validation_errors();?>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Nama User</label>
                               <div class="col-lg-4">
                                   <input type="text" name="username" class="form-control" required>
                                </div>
                                <label class="col-lg-1 control-label">Password</label>
                                <div class="col-lg-4">
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                               
                                 
                            </div>
                             <div class="form-group">
                                
                                   <label class="col-lg-1 control-label">Level</label>
                                 <div class="col-lg-3">
                                      <select name="level" class="form-control" required>
                                        <option value="user"> User</option>
                                        <option value="admin"> Admin</option>
                                    </select>
                                </div>
                             </div>
                        
                         
                             

                              
                                 
                            </div>
                               
                            <div class="form-group mr-3" style="float: center; text-align: right;" >
                                <button class="db-btn-round-fill-green" ><i class="fa fa-save"></i> Simpan</button>
                                <a href="<?=base_url('user');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                            </div>
                        </form>
                         </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

