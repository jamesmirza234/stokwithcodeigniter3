<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Data Barang</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>dashboard/updatebarang" >
                            <?php echo validation_errors();?>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Kode Barang</label>
                                <div class="col-lg-2">
                                   <input type="text" name="kdBarang" value="<?php echo $kdBarang ?>" class="form-control" required>
                                </div>
                                <label class="col-lg-1 control-label">Nama Barang</label>
                                <div class="col-lg-5">
                                    <input type="text" name="namaBarang" value="<?php echo $namaBarang ?>" class="form-control" required>
                                </div>

                                 <label class="col-lg-1 control-label">Satuan</label>
                                <div class="col-lg-2">

                                    <select name="satuan" class="form-control" required>
                                        <option value="<?php echo $satuan ?>"><?php echo $satuan ?></option>
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
                                        <input type="text" name="stokAwal" value="<?php echo $stokAwal ?>" class="form-control" required>
                                    </div>
                                <label class="col-lg-1 control-label">Stok Akhir</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="stokAkhir" value="<?php echo $stokAkhir ?>"  class="form-control" required>
                                    </div>
                                 <label class="col-lg-1 control-label">Stok Masuk</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="stokMasuk" value="<?php echo $stokMasuk ?>" class="form-control" required>
                                    </div>
                                  <label class="col-lg-1 control-label">Stok Keluar</label>
                                    <div class="col-lg-2">
                                        <input type="text" name="stokKeluar" value="<?php echo $stokKeluar ?>" class="form-control" required>
                                    </div>
                            </div>
                           
                               <div class="form-group">
                                <label class="col-lg-1 control-label">Keterangan</label>
                                <div class="col-lg-5">
                                   <input type="text" name="keterangan" value="<?php echo $keterangan ?>" class="form-control" required>
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

 <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>

 <script language="JavaScript" type="text/JavaScript">
   function Update()
{
        var NAME = document.getElementById("NAME").value;
        var POSITION = document.getElementById("POSITION").value;
        var STATUS = document.getElementById("STATUS").value;
        var AREA = document.getElementById("AREA").value;
        var EMAIL = document.getElementById("EMAIL").value;
        var PHONE = document.getElementById("PHONE").value;
        var DATE_OF_TRAINING = document.getElementById("DATE_OF_TRAINING").value;
        var VALIDITY_TRAINING = document.getElementById("VALIDITY_TRAINING").value;
      var mincar = 3;
    
    if (NAME == ""){
        alert("NAME Field Required.");
        //LOCATION.focus();
        return (false);
    }
    if (STATUS == ""){
        alert("STATUS Field Required.");
        //LOCATION.focus();
        return (false);
    }
    if (EMAIL == ""){
        alert("EMAIL Field Required.");
        //LOCATION.focus();
        return (false);
    }
    if (AREA == ""){
        alert("AREA Field Required.");
        //LOCATION.focus();
        return (false);
    }
    
    
    if (DATE_OF_TRAINING == ""){
        alert("DATE_OF_TRAINING Field Required.");
        //LOCATION.focus();
        return (false);
    }
    
   
    if (VALIDITY_TRAINING == ""){
        alert("VALIDITY_TRAINING Field Required.");
        //DESCRIPTION.focus();
        return (false);
    }
    
    
    
 
       var url="<?php echo site_url('Auditor/update_action')?>";
        $.ajax({
            url:url,
            type:"POST",
            data:$('#myForm').serialize(),
            datatype:"JSON",
            success:function(data){
                             

           swal("Data Has been Update", "You clicked the button!", "success");
           window.location.reload();
          window.location.href = "<?php echo base_url('Auditor')?>";
         


            },
            error:function(jqXHR, textStatus, errorThrown){
                alert('Error: '+textStatus);
                
            }
        });
        
      
     
}

</script>