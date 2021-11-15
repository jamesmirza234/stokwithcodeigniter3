<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row" id="formheader">
                <div class="col-md-12"> 
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Data Header Keluar Barang</h3>
                        </div>
                        <div class="panel-body">
                            <!-- <form class="form-horizontal" > -->
                            <?php echo validation_errors();?>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Kode Input</label>
                                <div class="col-lg-2">
                                    
                                   <input type="text" name="kdOut" class="form-control" id="kdOut" required  value="Out<?php echo sprintf("%04s", $kdOut) ?>" readonly >
                                </div>
                               

                                     <label class="col-lg-1 control-label">Tanggal</label>
                                 <div class="col-md-3">
                                        <input type="text" class="input-tanggal" id="tgl" placeholder="Input tgl disini">
                                 
                                 </div>

                                           <label class="col-lg-1 control-label">Outlet</label>
                              <div class="col-lg-2">
                                    <select name="Outlet" class="form-control" required id="Outlet">
                                        <option>-select-</option>
                                        <option>
                                          
                                           <?php
                            foreach ($outlet as $outlets) {
                                echo '<option value="' . $outlets->namaOutlet . '">' . $outlets->namaOutlet .'</option>';
                            }
                            ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                               
                            <div class="form-group mr-3" style="float: center; text-align: right;" >
                                <button class="db-btn-round-fill-green" onclick="showdetail()"><i class="fa fa-save"></i> Input Detail</button>
                                <a href="<?=base_url('dashboard/barang');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                            </div>
                        <!-- </form> -->
                         </div>  


                    </div>
                </div>
            </div>

            <div class="row" id="detailform">
                  <div class="col-md-12">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Detail Barang</h3>
                        </div>
                        <div class="panel-body">
                          <!--  <form class="form-horizontal"> -->
                            <?php echo validation_errors();?>

                            <div class="form-group">
                          
                            
                                <label class="col-lg-1 control-label">Nm Brg</label>
                              <div class="col-lg-2">
                                    <select name="namabarang" class="form-control" required id="namabarang">
                                         <option>-select-</option>
                                        <option>
                                          
                                           <?php
                            foreach ($barang as $brg) {
                                echo '<option value="' . $brg->namaBarang . '"  onclick="addbarang('.$brg->idBarang.')">' . $brg->namaBarang .'</option>';
                            }
                            ?>
                                        </option>
                                       
                                    </select>
                                </div>
                               
                                    
                                     <label class="col-lg-1 control-label">Satuan</label>
                                 <div class="col-md-2">
                                        <input type="text" class="satuan" id="satuan">
                                          <input type="hidden" class="kdbarang" id="kdbarang">
                                 
                                 </div>
                                  <label class="col-lg-1 control-label">Qty</label>
                                 <div class="col-md-2">
                                        <input type="text" class="qty" id="qty" >
                                   
                                 </div>
                                
                               <div class="col-md-1">
                                 <button class="db-btn-round-fill-green" onclick="savedetail()"><i class="fa fa-plus"></i></button>
                               </div>
                           </div>   
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="table-responsive">
                     <table class="table table-striped"  id="mytable">
                      <thead>
                      <tr>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                                <th>Qty</th>
                              
                        <th colspan="2">Aksi</th>
                      </tr>
                      </thead>
                      <tbody id="detailtable">
                     



                        
                      </tbody>
                        </table>
                    </div>
                  </div>
                  <div id="testable">
                    

                  </div> 
                      <!--  </form> -->
                         </div>  
                 </div>

                    </div>
                  </div>

                    <div class="form-group mr-3" style="float: center; text-align: right;" >
                               
                                <a href="<?=base_url('keluar');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Selesai</i></a>
                            </div>
            </div>
        </div>
    </div>
  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
 
 <!-- <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script> -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript">
    //$('#mytable').dataTable();
// $('#mytable').dataTable({bFilter: false, bInfo: false,bPaginate: false});

function showtable()
{

      var kdOut  = $('#kdOut').val();
      $('#detailtable').html('');
     var url="<?php echo site_url('keluar/listbarang/')?>"+kdOut;
        $.ajax({
        type: "POST",
        url:url,
        dataType : 'json',
        cache: false,
        success : function(data){
         
                       var html = '';
                        //var count = 1;
                        var i;
                        for(i=0; i< data.length; i++){
                          

                            html += '<tr>'+
                                                                             
                                       '<td scope="col-1">'+
                                          '<center class="mx-2">'+ data[i].namaBarang +'</center>'+
                                      '</td>'+
                                      
                                                    
                                        '<td scope="col-2" align="left">'+ data[i].satuan +'</td>'+  
                                       '<td scope="col-2" class="table-p">'+ data[i].qty +'</td>'+
                                                                 
                                       '</tr>';
                        }
                       
                        $('#detailtable').append(html);
          
        }
    });


}
  function addbarang(id)
  {
    $('#satuan').val('');
     $('#kdbarang').val('');

    var url="<?php echo site_url('keluar/databarang/')?>"+id;
        $.ajax({
            url:url,
            type:"GET",
           
            datatype:"JSON",
            success:function(data){
               // console.log(data.satuan);
                 $('#satuan').val(data.satuan);
                 $('#kdbarang').val(data.kdBarang);


            },
            error:function(jqXHR, textStatus, errorThrown){
                alert('Error: '+textStatus);
                // console.log(data);
            }
        });

  }

  function savedetail()
  {         
            var kdOut  = $('#kdOut').val();
            var namabarang=$('#namabarang').val();
            var satuan=$('#satuan').val();
            var qty=$('#qty').val();
            var kdbarang=$('#kdbarang').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('keluar/simpandetail')?>",
                dataType : "JSON",
                data : {kdOut:kdOut,namabarang:namabarang , satuan:satuan, qty:qty,kdbarang:kdbarang},
                success: function(data){
                     showtable();
                    $('#namabarang').val("");
                    $('#satuan').val("");
                     $('#qty').val("");
                     
               
                    
                }


            });


          //  return false;
  }
    function showdetail()
    {
     

           var kdOut  = $('#kdOut').val();
            var tgl = $('#tgl').val();
            var Outlet = $('#Outlet').val();
            
       var url="<?php echo site_url('keluar/simpanheader/')?>";
        $.ajax({
            url:url,
            type:"POST",
            data : {kdOut:kdOut,tgl:tgl, Outlet:Outlet},
            datatype:"JSON",
            success:function(data){
              console.log(data);
             


            },
            error:function(jqXHR, textStatus, errorThrown){
                alert('Error: '+textStatus);
                // console.log(data);
            }
        });
      $('#detailform').show();
       $('#formheader').hide();
     
    }
        $(document).ready(function(){
          showtable();
            var $j = jQuery.noConflict();
             $('#detailform').hide();
             //$('#fondah').hide();
             $('#formheader').show();
  
$j(".input-tanggal").datepicker();



      
 }); 

</script>