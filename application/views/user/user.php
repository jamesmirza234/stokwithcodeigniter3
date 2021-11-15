<div id="page-wrapper" class="page-wrapper-cls">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12"> <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user"></i> User</h3>
                </div>
                <div class="panel-body">
            
                    <a href="<?=base_url('user/formInsert');?>" class="db-btn-round-fill-green" ><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
                    <br>
                    <br>
                     <?php echo $this->session->flashdata('notif') ?>

                     <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                     <th>No</th>
                    <th>Username</th>
                    <th>Level</th>
                    
               <th style="width:125px;">Action
                  </p></th>
                </tr>
              </thead>
              <tbody>
                    <?php 
                        $no = 1;
                        foreach($user as $row){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $row->username;?></td>
                            <td><?php echo $row->level;?></td>
                           
                            <td style="text-align: center;">
                              <a href="<?= base_url('user/edit/') . $row->id ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                               
                                <a class="btn btn-xs btn-danger" data-toggle='modal' data-target='#modal_hapus' title='Hapus'><i class="glyphicon glyphicon-trash"></i></a>
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

   
    <script src="<?=base_url('assets/js/jquery-1.11.1.js');?>"></script>
     <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
     <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
 
  