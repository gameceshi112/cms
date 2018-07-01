<?php /* Smarty version 2.6.20, created on 2018-06-30 15:44:55
         compiled from index_captcha.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">General</span></h3>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<div class="grid simple">
					<div class="grid-title no-border">
						<h4>Sign-in <span class="semi-bold">Captcha</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="captcha_settings" method="POST" action="index.php?m=captcha">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>reCAPTCHA <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">reCAPTCHA</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="captcha_e" type="radio" name="captcha" value="1" <?php if ($this->_tpl_vars['captcha'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="captcha_e">Enabled</label>
													<input id="captcha_d" type="radio" name="captcha" value="0" <?php if ($this->_tpl_vars['captcha'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="captcha_d">Disabled</label>
												</div>												
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Site Key</label>
											<div class="col-lg-8">
												<input type="text" name="recaptcha_site_key" value="<?php echo $this->_tpl_vars['recaptcha_site_key']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['recaptcha_site_key']): ?>error<?php endif; ?>">												
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Secret Key</label>
											<div class="col-lg-8">
												<input type="text" name="recaptcha_secret_key" value="<?php echo $this->_tpl_vars['recaptcha_secret_key']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['recaptcha_secret_key']): ?>error<?php endif; ?>">
												<span class="help">If you don't have reCAPTCHA keys, please visit <a href="https://www.google.com/recaptcha/admin" target="_blank">Google reCAPTCHA</a> and register your domain name.</span>
											</div>
											<div class="clearfix"></div>
										</div>										
									</div>									
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_captcha" value="Save" class="btn btn-success btn-cons">
									<a href="index.php" class="btn btn-white btn-cons">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	