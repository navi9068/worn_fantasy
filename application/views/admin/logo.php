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
		<h5 class="mb-0 _300"></h5>
		<small class="text-muted">You can upload logo here</small>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-5 col-lg-4">
		<?php if(isset($error)){ echo '<div class="uploaderror">'.$error.'</div>';} ?>
			<form role="form" method="post" action="<?php echo base_url(); ?>admin/save_logo" enctype="multipart/form-data">
			<?php if($logo){ ?>
			<div class="form-group row">
			  <label class="col-sm-2 form-control-label">Site Logo</label>
			  <div class="col-sm-10">
				<div class="form-file">
				  <img src="<?php echo base_url(); ?>logo/<?php echo $logo['0']['logo'];  ?>" style="height:100px;width:100px;"/>
				</div>
			  </div>
			</div>
			<?php } ?>
           <div class="form-group row">
			  <label class="col-sm-2 form-control-label">File input</label>
			  <div class="col-sm-10">
				<div class="form-file">
				  <input type="file" name="sitelogo" required>
				  <button class="btn white">Select file ...</button>
				</div>
			  </div>
			</div>
            
            <div class="form-group row m-t-md">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn white">Update Logo</button>
              </div>
            </div>
          </form>
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