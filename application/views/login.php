<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="<?=base_url('assets/css/stylelogin.css');?>" rel="stylesheet" />

<div class="sidenav">
         <div class="login-main-text">
         	<h2>Login Page</h2>
            
            <h3>Application Persediaan Pada PT. BNI 46.</h3>
        <div class="col-sm-12 mr-4">
            <img src="<?=base_url('assets/img/bni.png');?>" alt="" height="450px" width="450px">
        </div>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">

            <div class="login-form">
               <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">	
                  <div class="form-group">
                  	<h3 style="color: Red"><?php echo $this->session->flashdata('notif') ?></h3>
                     <label>User Name</label>
                     <input type="text"  name="username" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                 
               </form>
            </div>
         </div>
      </div>