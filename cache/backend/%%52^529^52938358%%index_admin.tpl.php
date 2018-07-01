<?php /* Smarty version 2.6.20, created on 2018-06-30 15:44:01
         compiled from index_admin.tpl */ ?>
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
						<h4>Admin <span class="semi-bold">Settings</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="admin_settings" method="POST" action="index.php?m=admin" autocomplete="off">						
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Account <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-md-4 control-label">Admin Username</label>
											<div class="col-md-8">
												<input type="text" name="admin_name" value="<?php echo $this->_tpl_vars['admin_name']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['admin_name']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-md-4 control-label">Current Password</label>
											<div class="col-md-8">
												<input type="password" name="admin_pass" value="" class="form-control <?php if ($this->_tpl_vars['err']['admin_pass']): ?>error<?php endif; ?>">
												<span class="help">Please type your password in order to update Admin Settings</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-md-4 control-label">New Password</label>
											<div class="col-md-8">
												<input type="password" name="admin_pass_np" value="" class="form-control <?php if ($this->_tpl_vars['err']['admin_pass_np']): ?>error<?php endif; ?>">
												<span class="help">Required only if you want to change the Admin Password</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-md-4 control-label">Confirm New Password</label>
											<div class="col-md-8">
												<input type="password" name="admin_pass_cnp" value="" class="form-control <?php if ($this->_tpl_vars['err']['admin_pass_cnp']): ?>error<?php endif; ?>">
												<span class="help">Required only if you want to change the Admin Password</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-md-4 control-label">Admin Email</label>
											<div class="col-md-8">
												<input type="text" name="admin_email" value="<?php echo $this->_tpl_vars['admin_email']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['admin_email']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-md-4 control-label">Admin NoReply Email</label>
											<div class="col-md-8">
												<input type="text" name="noreply_email" value="<?php echo $this->_tpl_vars['noreply_email']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['noreply_email']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									
								</div>
								
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_admin" value="Save" class="btn btn-success btn-cons">
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