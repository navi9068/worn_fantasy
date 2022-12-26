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
		<small class="text-muted">You can specify your heading size and color here</small>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-5 col-lg-4">
			<form role="form" method="post" action="<?php echo base_url(); ?>admin/save_heading">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Heading 1 size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="h1_size" placeholder="Heading 1 size" value="<?php echo $heading['0']['h1_size']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Heading 2 size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="h2_size" placeholder="Heading 2 size" value="<?php echo $heading['0']['h2_size']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Heading 3 size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="h3_size" placeholder="Heading 3 size" value="<?php echo $heading['0']['h3_size']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Heading 4 size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="h4_size" placeholder="Heading 4 size" value="<?php echo $heading['0']['h4_size']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Heading 5 size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="h5_size" placeholder="Heading 5 size" value="<?php echo $heading['0']['h5_size']; ?>">
              </div>
            </div>
			<div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Heading 6 size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="h6_size" placeholder="Heading 6 size" value="<?php echo $heading['0']['h6_size']; ?>">
              </div>
            </div>
			<div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Heading Color</label>
              <div class="col-sm-10">
                <input type="color"  name="heading_color" placeholder="Heading Color" value="<?php echo $heading['0']['heading_color']; ?>">
              </div>
            </div>
            <div class="form-group row m-t-md">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn white">Update Heading</button>
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