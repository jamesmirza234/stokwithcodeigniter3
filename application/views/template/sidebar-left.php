    <nav  class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
              <div class="user-img-div mr-4">  
           
               <img src="<?=base_url('assets/img/bni.png')?>" class="img-circle" width="150px" height="150px" />

              </div>
             <!--  <div class="user-img-div mr-4">
                <img src="<?=base_url('assets/img/bni.png')?>" class="img-circle" width="150px" height="150px" />
              </div> -->
            </li>
            <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>

           
            <li>
              <a href="#"><i class="fa fa-sitemap "></i>Data Master<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="<?php echo base_url(); ?>dashboard/barang"><i class="fas fa-inventory"></i>Barang</a>
                  </li>
                  <li><a href="<?php echo base_url(); ?>outlet"><i class="fas fa-blanket"></i>Outlet</a>
                    <li><a href="<?php echo base_url(); ?>vendor"><i class="fas fa-blanket"></i>Vendor</a>
                  </li>
                  <li><a href="<?php echo base_url(); ?>user"><i class="fa fa-user-secret "></i>User</a>
                  </li>
                 <!--  <li><a href="<?php echo base_url(); ?>adminController/viewKelas"><i class="fa fa-bank "></i>User</a>
                  </li> -->
                </ul>
              </li>
             
               <li>
              <a href="#"><i class="fa fa-sitemap "></i>Transaksi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="<?php echo base_url(); ?>masuk"><i class="fas fa-inbox-in"></i>Barang Masuk</a>
                  </li>
                  <li><a href="<?php echo base_url(); ?>keluar"><i class="fas fa-external-link-square-alt"></i>Barang Keluar</a>
                  </li>
                
                </ul>
              </li>

               <li>
              <a href="#"><i class="fad fa-address-book"></i>Laporan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="<?php echo base_url(); ?>Laporan/barangmasuk"><i class="fas fa-inbox-in"></i>Barang Masuk</a>
                  </li>
                  <li><a href="<?php echo base_url(); ?>Laporan/barangkeluar"><i class="fas fa-external-link-square-alt"></i>Barang Keluar</a>
                    <li><a href="<?php echo base_url(); ?>Laporan/stok"><i class="fas fa-external-link-square-alt"></i>Stok</a>
                  </li>
                
                </ul>
              </li>
             
        </ul>
    </div>
</nav>

