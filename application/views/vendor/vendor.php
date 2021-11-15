<div id="page-wrapper" class="page-wrapper-cls">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12"> <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user"></i> Vendor</h3>
                </div>
                <div class="panel-body">
            
                    <a href="<?=base_url('vendor/formInsert');?>" class="db-btn-round-fill-green" ><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
                    <br>
                    <br>
                     <?php echo $this->session->flashdata('notif') ?>
                    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr> 
                                <th>No</th>
                               <th>Nama Vendor</th>
                                <th>Alamat Vendor</th>
                                <th>No. Telp</th>
                    
               <th style="width:125px;">Action
                  </p></th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no = 1;
                        foreach($vendor as $row){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $row->namaVendor;?></td>
                            <td><?php echo $row->alamatVendor;?></td>
                            <td><?php echo $row->noTelp;?></td>
                           
                            <td style="text-align: center;">
                              <a href="<?= base_url('vendor/formEdit/') . $row->idVendor ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                               
                                <a class="btn btn-xs btn-danger" data-toggle='modal' data-target='#modal_hapus<?php echo $row->idVendor;?>' title='Hapus'><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>



                    <?php }?>

              </tbody>
            </table>
                    
                	 


     
                   
                 </div>            
            </div>
        </div>
    </div>
</div>
</div>


  <?php
        foreach ($vendor as $row):
          $id = $row->idVendor;
            $nama = $row->namaVendor;
        ?>
     <!-- ============ MODAL HAPUS BARANG =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'vendor/delete'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b><?php echo $nama;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>


      <script src="<?=base_url('assets/js/jquery-1.11.1.js');?>"></script>
     <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
     <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>