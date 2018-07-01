<?php /* Smarty version 2.6.20, created on 2018-07-01 04:14:29
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'login.tpl', 12, false),)), $this); ?>
<script type="text/javascript">
	signup_section = true;
</script>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="well bs-component">
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
					<fieldset>
						<legend><?php echo smarty_function_t(array('c' => 'login.title','s' => $this->_tpl_vars['site_name']), $this);?>
</legend>
						<div class="form-group <?php if ($this->_tpl_vars['errors']): ?>has-error<?php endif; ?>">
							<label for="login_username" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="username" type="text" class="form-control" value="" id="login_username" placeholder="<?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
" />
							</div>
						</div>

						<div class="form-group <?php if ($this->_tpl_vars['errors']): ?>has-error<?php endif; ?>">
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
				  </fieldset>
				</form>		
			</div>
		</div>
		<div class="col-md-6">
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