<?php /* Smarty version 2.6.20, created on 2018-06-30 15:45:32
         compiled from index_modules.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Security</span></h3>
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
						<h4>Modules <span class="semi-bold"></span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="modules_settings" method="POST" action="index.php?m=modules">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Module <span class="semi-bold">Configuration</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Video Module</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="video_module_e" type="radio" name="video_module" value="1" <?php if ($this->_tpl_vars['video_module'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="video_module_e">Enabled</label>
													<input id="video_module_d" type="radio" name="video_module" value="0" <?php if ($this->_tpl_vars['video_module'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="video_module_d">Disabled</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Photo Module</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="photo_module_e" type="radio" name="photo_module" value="1" <?php if ($this->_tpl_vars['photo_module'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="photo_module_e">Enabled</label>
													<input id="photo_module_d" type="radio" name="photo_module" value="0" <?php if ($this->_tpl_vars['photo_module'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="photo_module_d">Disabled</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Game Module</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="game_module_e" type="radio" name="game_module" value="1" <?php if ($this->_tpl_vars['game_module'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="game_module_e">Enabled</label>
													<input id="game_module_d" type="radio" name="game_module" value="0" <?php if ($this->_tpl_vars['game_module'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="game_module_d">Disabled</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Blog Module</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="blog_module_e" type="radio" name="blog_module" value="1" <?php if ($this->_tpl_vars['blog_module'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="blog_module_e">Enabled</label>
													<input id="blog_module_d" type="radio" name="blog_module" value="0" <?php if ($this->_tpl_vars['blog_module'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="blog_module_d">Disabled</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_modules" value="Save" class="btn btn-success btn-cons">
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