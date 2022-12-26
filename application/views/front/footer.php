<footer>
    <div class="container">
        <p>© All Rights Reserved - 2022</p>
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
</footer>
<!----popup html-->
<div class="modal-pop">
    <div class="modal-center">
        <div class="modal-content-pop">
            <img src="<?php echo base_url(); ?>front/images/close.png" alt="" class="close">
			<div class="errormsg"></div>
			<div class="successmsg"></div>
            <form action="<?php echo base_url(); ?>login" method="post" id="login" class="user-process" style="display: block;">
                <div class="form-header">
                    <h3>Welcome Back!</h3>
                    <p>Login to continue to acess</p>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="log_email" placeholder="Enter email address" required>
                </div>
                <div class="form-group">
                    <div class="two-label">
                        <label for="">Password</label>
                        <!--label for="" class="small forgot">Forgot password?</label-->
                    </div>
                    <div class="passeye">
                       
                        <input type="password" name="log_password" id="" class="form-control" placeholder="password" required>
                    </div>
                </div>
                <div class="form-group checkbox">
                    <input type="checkbox" name="" id="" class="check">
                    <label for="">Remember me</label>
                </div>
				<input class="button yellow" type="submit" id="login_user" name="login_user" value="Login">
               
                <label for="" class="small button-bottom">Don’t have an account? <b class="singup">SIGN UP</b></label>
            </form>
            <form action="<?php echo base_url(); ?>create" id="signup" method="post" class="user-process" style="display: none;">
                <div class="form-header">
                    <h3>Sign Up</h3>
                    <p>Register with us to continue!</p>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="reg_name" placeholder="John" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="reg_email" placeholder="admin@domainname.com" required>
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control" name="reg_country" placeholder="Australia" required>
                </div>
                <div class="form-group">
                    <label for="">Alias/Nickname</label>
                    <input type="text" class="form-control" name="reg_alias" placeholder="Alias John" required>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <select name="reg_gender" id="reg_gender" class="form-control" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <div class="passeye">
                        <input type="password" class="form-control" name="reg_password" placeholder="password" required>
                    </div>
                </div>
				<div class="form-group checkbox">
                    <input type="checkbox" name="accept_terms" id="" class="check" required>
                    <label for="">I have read and agree to the terms and conditions.</label>
                </div>
				<div class="form-group checkbox">
                    <input type="checkbox" name="accept_policy" id="" class="check" required>
                    <label for="">I have read and agree to the privacy policy.</label>
                </div>
                <input class="button yellow" type="submit" id="create_user" name="create_user" value="Register">
                <label for="" class="small button-bottom">Already have an account? <b class="login">LOG IN</b></label>
            </form>
            <form action="" id="forgot" class="user-process" style="display:none;">
                <div class="form-header">
                    <h3>Recover Your Account</h3>
                    <p>Please enter the email address that is associated with your True Market Leader account.</p>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email address">
                </div>
                <a class="button yellow recover-pops">Generate OTP</a>
            </form>
        </div>
    </div>
</div>
<!--popup html-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a41902c613.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>front/js/custom.js" type="text/javascript"></script>
<script>
$("#signup").on('submit',function(event){
	event.preventDefault();
	var form = $(this);
	var url = form.attr('action');
	$("#create_user").prop('disabled', true);
	$.ajax({
		type: "POST",
		url: url,
		data: form.serialize(),
		success: function(data) {
			$("#create_user").prop('disabled', false);
			
			var rsponse=$.parseJSON(data);
			$(".errormsg").text('');
			$(".successmsg").text('');
			if(rsponse.error_msg){
				$(".errormsg").text(rsponse.error_msg);
			}else{
				$(".successmsg").text(rsponse.success_msg);
				$('#signup').find('input:text').val(''); 
				 
			}
			  
		},
		error: function(data) {
			$("#create_user").prop('disabled', false);
			$(".errormsg").text('');
			$(".successmsg").text('');
			$(".errormsg").text('There is some error please try again later!');
		}
	});
});

$("#login").on('submit',function(event){
	event.preventDefault();
	var form = $(this);
	var url = form.attr('action');
	$("#login_user").prop('disabled', true);
	$.ajax({
		type: "POST",
		url: url,
		data: form.serialize(),
		success: function(data) {
			$("#login_user").prop('disabled', false);
			
			var rsponse=$.parseJSON(data);
			$(".errormsg").text('');
			$(".successmsg").text('');
			if(rsponse.error_msg){
				$(".errormsg").text(rsponse.error_msg);
			}else if(rsponse.success_msg){
				window.location.reload(); 
				 
			}
			  
		},
		error: function(data) {
			$("#login_user").prop('disabled', false);
			$(".errormsg").text('');
			$(".successmsg").text('');
			$(".errormsg").text('There is some error please try again later!');
		}
	});
});
</script>
</html>