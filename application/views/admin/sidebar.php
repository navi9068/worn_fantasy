<div id="aside" class="app-aside modal fade folded md nav-expand">
  	<div class="left navside indigo-900 dk" layout="column">
      <div class="navbar navbar-md no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'<?php echo base_url(); ?>admin_assets/assets/images/logo.svg'"></div>
        	<img src="<?php echo base_url(); ?>admin_assets/assets/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">Flatkit</span>
        </a>
        <!-- / brand -->
      </div>
      <div flex class="hide-scroll">
        <nav class="scroll nav-active-primary">
          
            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>
              
              <li>
                <a href="<?php echo base_url(); ?>admin" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                      <span ui-include="'<?php echo base_url(); ?>admin_assets/assets/images/i_0.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
          
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'<?php echo base_url(); ?>admin_assets/assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Setting</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="<?php echo base_url(); ?>admin/heading" >
                      <span class="nav-text">Heading</span>
                    </a>
                  </li>
				  <li>
                    <a href="<?php echo base_url(); ?>admin/logo" >
                      <span class="nav-text">Logo</span>
                    </a>
                  </li>
                  
                </ul>
              </li>
          
          
            </ul>
        </nav>
      </div>
      
    </div>
  </div>