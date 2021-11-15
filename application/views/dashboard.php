 <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
                        </div>
                        <div class="panel-body">
                            Selamat Datang Kembali di  <b>Sistem Informasi Persediaan!</b>
                        </div>    
                    </div>
                </div>
            </div>
          
           <div class="row mb-3">
                <div class="col-xl-3 col-sm-3 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Users</h6>
                           
                            <h1 class="display-4"><?php echo $user ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-3 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Item</h6>
                            <h1 class="display-4"><?php echo $user ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-3 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Transaksi Masuk</h6>
                            <a href="<?php echo base_url('masuk')?> "><h1 class="display-4"><?php echo $itemmasuk ?></h1></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-3 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Transaksi Keluar</h6>
                            <a href="<?php echo base_url('keluar')?> "><h1 class="display-4"><?php echo $itemkeluar ?></h1></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
