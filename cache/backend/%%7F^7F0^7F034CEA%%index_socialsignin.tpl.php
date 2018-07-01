<?php /* Smarty version 2.6.20, created on 2018-06-30 15:44:50
         compiled from index_socialsignin.tpl */ ?>
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
						<h4>Social <span class="semi-bold">Sign-in</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="socialsignin_settings" method="POST" action="index.php?m=socialsignin">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Facebook <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Sign-in</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="fb_signin_e" type="radio" name="fb_signin" value="1" <?php if ($this->_tpl_vars['fb_signin'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="fb_signin_e">Enabled</label>
													<input id="fb_signin_d" type="radio" name="fb_signin" value="0" <?php if ($this->_tpl_vars['fb_signin'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="fb_signin_d">Disabled</label>
												</div>												
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">App ID</label>
											<div class="col-lg-8">
												<input type="text" name="fb_appid" value="<?php echo $this->_tpl_vars['fb_appid']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['fb_appid']): ?>error<?php endif; ?>">
												<span class="help">If you don't have an App ID, please visit <a href="https://developers.facebook.com/apps" target="_blank">Facebook Developers Apps page</a>, to get one.</span>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="col-xs-12 m-b-5">
											<h3>Google <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Sign-in</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="g_signin_e" type="radio" name="g_signin" value="1" <?php if ($this->_tpl_vars['g_signin'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="g_signin_e">Enabled</label>
													<input id="g_signin_d" type="radio" name="g_signin" value="0" <?php if ($this->_tpl_vars['g_signin'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="g_signin_d">Disabled</label>
												</div>												
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">App ID</label>
											<div class="col-lg-8">
												<input type="text" name="g_cid" value="<?php echo $this->_tpl_vars['g_cid']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['g_cid']): ?>error<?php endif; ?>">
												<span class="help">If you don't have a Client ID, please visit <a href="https://developers.google.com/+/web/people/#before_you_begin" target="_blank">Google Developers page</a>, to get one.</span>
											</div>
											<div class="clearfix"></div>
										</div>										
									</div>									
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_socialsignin" value="Save" class="btn btn-success btn-cons">
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