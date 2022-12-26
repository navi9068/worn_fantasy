<?php $this->load->view('admin/header'); ?>
<div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm">
        Sign in 
      </div>
	  <?php if(isset($error_msg)){ ?>
		<div class="errormsg"><?php echo $error_msg; ?></div>
	  <?php } ?>
      <form name="form" method="post" action="<?php echo base_url(); ?>admin/login">
        <div class="md-form-group float-label">
          <input type="email" class="md-input" name="useremail" required>
          <label>Email</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input" name="userpass" required>
          <label>Password</label>
        </div>      
        <div class="m-b-md">        
          <label class="md-check">
            <input type="checkbox"><i class="primary"></i> Keep me signed in
          </label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
      </form>
    </div>

  </div>

<!-- ############ LAYOUT END-->

  </div>
  <?php $this->load->view('admin/footer'); ?>