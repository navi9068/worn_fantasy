<?php $this->load->view('admin/header'); ?>
 <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <?php $this->load->view('admin/sidebar'); ?>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
     <?php $this->load->view('admin/navbar'); ?>
    <?php $this->load->view('admin/main_footer'); ?>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
	<div class="margin">
		<h5 class="mb-0 _300">Hi Jone, Welcome back</h5>
		<small class="text-muted">Awesome uikit for your next project</small>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-5 col-lg-4">
			
	    </div>
	    
	</div>
	
	
	
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  
  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
  <?php $this->load->view('admin/footer'); ?>