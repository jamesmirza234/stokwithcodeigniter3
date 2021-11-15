<div id="page-wrapper" class="page-wrapper-cls">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12"> <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user"></i> Outlet</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                   <div class="col-sm-2">
                   </div>
                    <div class="col-sm-4">
                     <input type="text" class="input-tanggal" id="tgldari" name="tgldari" placeholder="Tanggal Dari">               <label>s/d</label>
                      <input type="text" class="input-tanggal" id="tglsampai" name="tglsampai" placeholder="Tanggal Sampai">
                       <a onclick="show()" class="db-btn-round-fill-green" ><i class="glyphicon glyphicon-search"></i>Cari</a>
                         <a onclick="show()" class="db-btn-round-fill-green" ><i class="glyphicon glyphicon-print"></i>Cetak</a>
                    </div>
                     <div class="col-sm-4">
                        
                    </div>
                    
                  </div>
                    
                    
                    <br>
                    <br>
                     <?php echo $this->session->flashdata('notif') ?>
                    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr> 
                                <th>No</th>
                               <th>Nama Outlet</th>
                                <th>Alamat Outlet</th>
                                <th>No. Telp</th>
                    
               <th style="width:125px;">Action
                  </p></th>
                </tr>
              </thead>
              <tbody id="detail">
                  

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
  function show()
{
   
       var tgldari = $('#tgldari').val();
       var tglsampai = $('#tglsampai').val();
     $('#detail').html('');
          $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>laporan/listreportmasuk",
        dataType : 'json',
        data : {tgldari:tgldari,tglsampai:tglsampai};
        cache: false,
        success : function(data){
            console.log(data);
                         
                         
                          // $('#detail').append(html);
            
        }
        
          });
    
}
  $(document).ready( function () {
      $('#table_id').DataTable();


      $("#tgldari").datepicker({
          dateFormat:"dd-mm-yy",
      });
  } );



</script>