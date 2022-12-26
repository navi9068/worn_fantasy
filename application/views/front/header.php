<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front/css/style.css">
    <title>Worn Fantasy</title>
	<?php $this->load->view('front/main_style'); ?>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
           <a href="<?php echo base_url(); ?>"> <?php $this->load->view('front/logo'); ?></a>
        </div>
        <div class="buttons">
            <a href="#" class="button trans">Become a Model</a>
            <a href="#" class="button">Buy Credits</a>
			<?php if($this->session->userdata('isUserLoggedIn')){ ?>
			<a class="button logout" href="<?php echo base_url(); ?>logout">Logout</a>
			<?php }else{ ?>
            <button class="button loginpop">Login</button>
            <button class="button signup-pop">Signup</button>
			<?php } ?>
        </div>
    </div>
</header>