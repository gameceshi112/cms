<?php /* Smarty version 2.6.20, created on 2018-07-01 04:16:19
         compiled from signup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'signup.tpl', 14, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.signup-0.1.js"></script>
<script type="text/javascript">
	signup_section = true;
</script>
<?php if ($this->_tpl_vars['captcha'] == '1'): ?>
	<script src='https://www.google.com/recaptcha/api.js?hl=<?php echo $this->_tpl_vars['captcha_language']; ?>
'></script>		
<?php endif; ?>	
<div class="container">
	
	<div class="row">
		<div class="col-md-6">
		<div class="well">
			<fieldset>
				<legend><?php echo smarty_function_t(array('c' => 'signup.title','s' => $this->_tpl_vars['site_name']), $this);?>
</legend>
				
				<center>
					<div class="m-b-20"></div>
					<?php if ($this->_tpl_vars['fb_signin'] == '1'): ?>					
						<div>
							<button id="facebook-signup" class="btn btn-facebook" disabled><div></div><i class="fa fa-facebook"></i> <span><?php echo smarty_function_t(array('c' => 'socialsignup.signup_with'), $this);?>
 Facebook</span></button>
						</div>
						<div class="hr">
							<div class="inner"><?php echo smarty_function_t(array('c' => 'socialsignup.or'), $this);?>
</div>
						</div>		
					<?php endif; ?>
					<?php if ($this->_tpl_vars['g_signin'] == '1'): ?>
						<div>
							<button id="google-signup" class="btn btn-google" disabled><div></div><i class="fa fa-google-plus"></i> <span><?php echo smarty_function_t(array('c' => 'socialsignup.signup_with'), $this);?>
 Google</span></button>
						</div>
						<div class="hr">
							<div class="inner"><?php echo smarty_function_t(array('c' => 'socialsignup.or'), $this);?>
</div>
						</div>
					<?php endif; ?>
				</center>
				
				<form class="form-horizontal" name="signup_form" id="signup_form" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/signup">					
					<div class="form-group <?php if ($this->_tpl_vars['err']['username']): ?>has-error<?php endif; ?>">
						<label for="signup_username" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
</label>
						<div class="col-lg-8">
							<input name="username" type="text" class="form-control" value="<?php echo $this->_tpl_vars['signup']['username']; ?>
" id="signup_username" placeholder="<?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
" />
							<div class="m-t-5">
								<a href="#check_username" id="check_username"><?php echo smarty_function_t(array('c' => 'signup.check'), $this);?>
</a>&nbsp;
								<span id="username_check_response" style="display:none;"></span>
								<span id="check_username_result" style="display: none;"></span>							
							</div>
						</div>
					</div>

					<div class="form-group <?php if ($this->_tpl_vars['err']['password']): ?>has-error<?php endif; ?>">
						<label for="signup_password" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.password'), $this);?>
</label>
						<div class="col-lg-8">
							<input name="password" type="password" class="form-control" value="" id="signup_password" placeholder="<?php echo smarty_function_t(array('c' => 'global.password'), $this);?>
" />
						</div>
					</div>

					<div class="form-group <?php if ($this->_tpl_vars['err']['password_confirm']): ?>has-error<?php endif; ?>">
						<label for="signup_password_confirm" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.password_confirm'), $this);?>
</label>
						<div class="col-lg-8">
							<input name="password_confirm" type="password" class="form-control" value="" id="signup_password_confirm" placeholder="<?php echo smarty_function_t(array('c' => 'global.password_confirm'), $this);?>
" />
						</div>
					</div>

					<div class="form-group <?php if ($this->_tpl_vars['err']['email']): ?>has-error<?php endif; ?>">
						<label for="signup_email" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
</label>
						<div class="col-lg-8">
							<input name="email" type="text" class="form-control" value="<?php echo $this->_tpl_vars['signup']['email']; ?>
" id="signup_email" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
						</div>
					</div>					

					<div class="form-group <?php if ($this->_tpl_vars['err']['gender']): ?>has-error<?php endif; ?>">
						<label class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.gender'), $this);?>
</label>
						<div class="col-lg-8">
							<div class="radio">
								<label>
									<input name="gender" type="radio" value="Male" id="signup_gender_male"<?php if ($this->_tpl_vars['signup']['gender'] == 'Male'): ?> checked="checked"<?php endif; ?> />
									<?php echo smarty_function_t(array('c' => 'global.male'), $this);?>

								</label>
							</div>
							<div class="radio">
								<label>
									<input name="gender" type="radio" value="Female" id="signup_gender_female"<?php if ($this->_tpl_vars['signup']['gender'] == 'Female'): ?> checked="checked"<?php endif; ?> />
									<?php echo smarty_function_t(array('c' => 'global.female'), $this);?>

								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-8 col-lg-offset-4">
							<div class="checkbox">
								<label>
									<input name="age" type="checkbox" id="signup_age"<?php if ($this->_tpl_vars['signup']['age'] == 'on'): ?> checked="checked"<?php endif; ?> /><span class="<?php if ($this->_tpl_vars['err']['age']): ?>text-danger<?php endif; ?>"> <?php echo smarty_function_t(array('c' => 'signup.certify'), $this);?>
</span>
								</label>
							</div>								
						</div>
						<div class="col-lg-8 col-lg-offset-4">
							<div class="checkbox">
								<label>
									<input name="terms" type="checkbox" id="signup_certify"<?php if ($this->_tpl_vars['signup']['terms'] == 'on'): ?> checked="checked"<?php endif; ?> /> <span class="<?php if ($this->_tpl_vars['err']['terms']): ?>text-danger<?php endif; ?>"> <?php echo smarty_function_t(array('c' => 'signup.terms','u' => $this->_tpl_vars['baseurl'],'v' => $this->_tpl_vars['baseurl']), $this);?>
</span>
								</label>
							</div>								
						</div>						
					</div>
                    <?php if ($this->_tpl_vars['captcha'] == '1'): ?>
						<div class="form-group">
							<label class="col-lg-4 control-label"></label>
							<div class="col-lg-8">
								<div class="g-recaptcha" data-sitekey="<?php echo $this->_tpl_vars['recaptcha_site_key']; ?>
"></div>
							</div>
						</div>
                    <?php endif; ?>
					<div class="form-group">
						<div class="col-lg-8 col-lg-offset-4">
							<button name="submit_signup" type="submit" class="btn btn-primary"><?php echo smarty_function_t(array('c' => 'global.sign_up'), $this);?>
</button>							
						</div>
					</div>					
				</form>							
			</fieldset>
		</div>
		</div>
		<div class="col-md-6">
			<div class="well">
			  <fieldset>
				<legend><?php echo smarty_function_t(array('c' => 'login.title','s' => $this->_tpl_vars['site_name']), $this);?>
</legend>
					<center>
						<div class="m-b-20"></div>
						<?php if ($this->_tpl_vars['fb_signin'] == '1'): ?>
							<div>
								<button id="facebook-signin-s" class="btn btn-facebook" disabled><div></div><i class="fa fa-facebook"></i> <span><?php echo smarty_function_t(array('c' => 'socialsignup.login_with'), $this);?>
 Facebook</span></button>
							</div>
							<div class="hr">
								<div class="inner"><?php echo smarty_function_t(array('c' => 'socialsignup.or'), $this);?>
</div>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['g_signin'] == '1'): ?>						
							<div>
								<button id="google-signin-s" class="btn btn-google" disabled><div></div><i class="fa fa-google-plus"></i> <span><?php echo smarty_function_t(array('c' => 'socialsignup.login_with'), $this);?>
 Google</span></button>
							</div>
							<div class="hr">
								<div class="inner"><?php echo smarty_function_t(array('c' => 'socialsignup.or'), $this);?>
</div>
							</div>
						<?php endif; ?>
					</center>						
					<form class="form-horizontal" name="login_form" id="login_form" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/login">
						<div class="form-group">
							<label for="login_username" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="username" type="text" class="form-control" value="" id="login_username" placeholder="<?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
" />
							</div>
						</div>

						<div class="form-group">
							<label for="login_password" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.password'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="password" type="password" class="form-control" value="" id="login_password" placeholder="<?php echo smarty_function_t(array('c' => 'global.password'), $this);?>
" />
								<div class="checkbox">
									<label>
										<input name="login_remember" type="checkbox" id="login_remember" /> <?php echo smarty_function_t(array('c' => 'global.remember'), $this);?>

									</label>
								</div>							
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-9 col-lg-offset-3">
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/lost" rel="nofollow"><?php echo smarty_function_t(array('c' => 'global.forgot'), $this);?>
</a>
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-9 col-lg-offset-3">
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/confirm" rel="nofollow"><?php echo smarty_function_t(array('c' => 'global.confirm'), $this);?>
</a>
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-9 col-lg-offset-3">
								<button name="submit_login" type="submit" class="btn btn-primary"><?php echo smarty_function_t(array('c' => 'global.login'), $this);?>
</button>
							</div>
						</div>
					</form>				
				</fieldset>
				
			</div>
			<div class="well bs-component">
				<legend><?php echo smarty_function_t(array('c' => 'global.what_is','s' => $this->_tpl_vars['site_name']), $this);?>
</legend>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'static/whatis.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>
	</div>
</div>