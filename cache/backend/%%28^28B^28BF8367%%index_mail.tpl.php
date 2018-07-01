<?php /* Smarty version 2.6.20, created on 2018-06-30 15:44:21
         compiled from index_mail.tpl */ ?>
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
						<h4>Mail <span class="semi-bold">Configuration</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="mail_settings" method="POST" action="index.php?m=mail">						
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Mail <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Mailer</label>
											<div class="col-lg-8">
												<select id="mailer" name="mailer" style="width:100%">
													<option value="mail"<?php if ($this->_tpl_vars['mailer'] == 'mail'): ?> selected="selected"<?php endif; ?>>PHP Mail Function</option>
													<option value="sendmail"<?php if ($this->_tpl_vars['mailer'] == 'sendmail'): ?> selected="selected"<?php endif; ?>>Sendmail</option>
													<option value="smtp"<?php if ($this->_tpl_vars['mailer'] == 'smtp'): ?> selected="selected"<?php endif; ?>>SMTP Server</option>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
										<div id="sendmail-group" <?php if ($this->_tpl_vars['mailer'] != 'sendmail'): ?>style="display:none"<?php endif; ?>>
											<div class="form-group">
												<label class="col-lg-4 control-label">Sendmail Path</label>
												<div class="col-lg-8">
													<input type="text" name="sendmail" value="<?php echo $this->_tpl_vars['sendmail']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['sendmail']): ?>error<?php endif; ?>">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div id="smtp-group" <?php if ($this->_tpl_vars['mailer'] != 'smtp'): ?>style="display:none"<?php endif; ?>>
											<div class="form-group">
												<label class="col-lg-4 control-label">SMTP Server</label>
												<div class="col-lg-8">
													<input type="text" name="smtp" value="<?php echo $this->_tpl_vars['smtp']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['smtp']): ?>error<?php endif; ?>">
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">SMTP Port</label>
												<div class="col-lg-8">
													<input type="text" name="smtp_port" value="<?php echo $this->_tpl_vars['smtp_port']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['smtp_port']): ?>error<?php endif; ?>">
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">SMTP Prefix</label>
												<div class="col-lg-8">
													<select id="smtp_prefix" name="smtp_prefix" style="width:100%">
														<option value=""<?php if ($this->_tpl_vars['smtp_prefix'] == ''): ?> selected="selected"<?php endif; ?>>Default</option>
														<option value="ssl"<?php if ($this->_tpl_vars['smtp_prefix'] == 'ssl'): ?> selected="selected"<?php endif; ?>>SSL</option>
														<option value="tls"<?php if ($this->_tpl_vars['smtp_prefix'] == 'tls'): ?> selected="selected"<?php endif; ?>>TLS</option>
													</select>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">SMTP Authentification</label>
												<div class="col-lg-8">
													<div class="radio p-t-9">
														<input id="smtp_auth_y" type="radio" name="smtp_auth" value="1" <?php if ($this->_tpl_vars['smtp_auth'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
														<label for="smtp_auth_y">Yes</label>
														<input id="smtp_auth_n" type="radio" name="smtp_auth" value="0" <?php if ($this->_tpl_vars['smtp_auth'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
														<label for="smtp_auth_n">No</label>
													</div>												
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="smtp-a-group" <?php if ($this->_tpl_vars['smtp_auth'] == '0'): ?>style="display:none"<?php endif; ?>>
												<div class="form-group">
													<label class="col-lg-4 control-label">SMTP Username</label>
													<div class="col-lg-8">
														<input type="text" name="smtp_username" value="<?php echo $this->_tpl_vars['smtp_username']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['smtp_username']): ?>error<?php endif; ?>">
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label">SMTP Password</label>
													<div class="col-lg-8">
														<input type="password" name="smtp_password" value="<?php echo $this->_tpl_vars['smtp_password']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['smtp_password']): ?>error<?php endif; ?>">
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>									
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_mail" value="Save" class="btn btn-success btn-cons">
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