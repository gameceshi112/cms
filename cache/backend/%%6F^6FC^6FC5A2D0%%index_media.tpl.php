<?php /* Smarty version 2.6.20, created on 2018-06-30 15:39:06
         compiled from index_media.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wordwrap', 'index_media.tpl', 141, false),)), $this); ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Video Conversion</span></h3>
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
						<h4>Conversion <span class="semi-bold">Configuration</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="media_settings" method="POST" action="index.php?m=media">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Paths <span class="semi-bold">Configuration</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">PHP CLI Path</label>
											<div class="col-lg-8 check-input">
												<input type="text" name="phppath" value="<?php echo $this->_tpl_vars['phppath']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['phppath']): ?>error<?php endif; ?>">
												<?php if ($this->_tpl_vars['binaries']['phppath'] == '1'): ?>
													<i class="fa fa-check text-success check-icon"></i>
												<?php else: ?>														
													<i class="fa fa-exclamation-triangle text-error check-icon"></i>
												<?php endif; ?>
												<?php if ($this->_tpl_vars['binaries']['phppath'] != '1' && $this->_tpl_vars['binaries']['phppath'] != ''): ?>
													<span class="help text-warning">Path found: <b><?php echo $this->_tpl_vars['binaries']['phppath']; ?>
</b></span>
												<?php endif; ?>												
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">FFMpeg Path</label>
											<div class="col-lg-8 check-input">
												<input type="text" name="ffmpeg" value="<?php echo $this->_tpl_vars['ffmpeg']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['ffmpeg']): ?>error<?php endif; ?>">
												<?php if ($this->_tpl_vars['binaries']['ffmpeg'] == '1'): ?>
													<i class="fa fa-check text-success check-icon"></i>
												<?php else: ?>														
													<i class="fa fa-exclamation-triangle text-error check-icon"></i>
												<?php endif; ?>
												<?php if ($this->_tpl_vars['binaries']['ffmpeg'] != '1' && $this->_tpl_vars['binaries']['ffmpeg'] != ''): ?>
													<span class="help text-warning">Path found: <b><?php echo $this->_tpl_vars['binaries']['ffmpeg']; ?>
</b></span>
												<?php endif; ?>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">FFProbe Path</label>
											<div class="col-lg-8 check-input">
												<input type="text" name="ffprobe" value="<?php echo $this->_tpl_vars['ffprobe']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['ffprobe']): ?>error<?php endif; ?>">
												<?php if ($this->_tpl_vars['binaries']['ffprobe'] == '1'): ?>
													<i class="fa fa-check text-success check-icon"></i>
												<?php else: ?>														
													<i class="fa fa-exclamation-triangle text-error check-icon"></i>
												<?php endif; ?>
												<?php if ($this->_tpl_vars['binaries']['ffprobe'] != '1' && $this->_tpl_vars['binaries']['ffprobe'] != ''): ?>
													<span class="help text-warning">Path found: <b><?php echo $this->_tpl_vars['binaries']['ffprobe']; ?>
</b></span>
												<?php endif; ?>
											</div>
											<div class="clearfix"></div>
										</div>				
										<div class="col-xs-12 m-b-5">
											<h3>Thumbnail <span class="semi-bold">Configuration</span></h3>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label">Thumbnail Generation Tool</label>
											<div class="col-md-8">
												<select id="thumbs_tool" name="thumbs_tool" style="width:100%">
												<!--<option value="mplayer"<?php if ($this->_tpl_vars['thumbs_tool'] == 'mplayer'): ?> selected="selected"<?php endif; ?>>MPlayer</option>-->
													<option value="ffmpeg"<?php if ($this->_tpl_vars['thumbs_tool'] == 'ffmpeg'): ?> selected="selected"<?php endif; ?>>FFMpeg</option>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Thumbnail Width</label>
											<div class="col-lg-8">
												<input type="text" name="img_max_width" value="<?php echo $this->_tpl_vars['img_max_width']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['img_max_width']): ?>error<?php endif; ?>">
												<span class="help">Pixels</span>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Thumbnail Height</label>
											<div class="col-lg-8">
												<input type="text" name="img_max_height" value="<?php echo $this->_tpl_vars['img_max_height']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['img_max_height']): ?>error<?php endif; ?>">
												<span class="help">Pixels</span>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Thumbnail Player Width</label>
											<div class="col-lg-8">
												<input type="text" name="thumbnail_player_width" value="<?php echo $this->_tpl_vars['thumbnail_player_width']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['thumbnail_player_width']): ?>error<?php endif; ?>">
												<span class="help">Pixels</span>
											</div>
											<div class="clearfix"></div>
										</div>										
										<div class="form-group">
											<label class="col-lg-4 control-label">Thumbnail Player Height</label>
											<div class="col-lg-8">
												<input type="text" name="thumbnail_player_height" value="<?php echo $this->_tpl_vars['thumbnail_player_height']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['thumbnail_player_height']): ?>error<?php endif; ?>">
												<span class="help">Pixels</span>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label"></label>
											<div class="col-lg-8">
												<div class="checkbox check-default">
													<input name="thumbnail_remove_bb" id="thumbnail_remove_bb" <?php if ($this->_tpl_vars['thumbnail_remove_bb'] == 1): ?>checked <?php endif; ?>type="checkbox" value="1">
													<label for="thumbnail_remove_bb">Remove Black Bars</label>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label"></label>
											<div class="col-lg-8">
												<div class="checkbox check-default">
													<input name="thumbnail_keep_ar" id="thumbnail_keep_ar" <?php if ($this->_tpl_vars['thumbnail_keep_ar'] == 1): ?>checked <?php endif; ?>type="checkbox" value="1">
													<label for="thumbnail_keep_ar">Keep Aspect Ratio</label>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>											
										<div class="col-xs-12 m-b-5">
											<h3>File <span class="semi-bold">Restrictions</span></h3>
										</div>										
										<div class="form-group">
											<label class="col-lg-4 control-label">Allowed Video Extensions</label>
											<div class="col-lg-8">
												<textarea rows="4" name="video_allowed_extensions" class="form-control <?php if ($this->_tpl_vars['err']['video_allowed_extensions']): ?>error<?php endif; ?>" style="resize:vertical"><?php echo ((is_array($_tmp=$this->_tpl_vars['video_allowed_extensions'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 48, "\n", true) : smarty_modifier_wordwrap($_tmp, 48, "\n", true)); ?>
</textarea>
												<span class="help">Comma separated</span>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Max Upload Video Filesize</label>
											<div class="col-lg-8">
												<input type="text" name="video_max_size" value="<?php echo $this->_tpl_vars['video_max_size']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['video_max_size']): ?>error<?php endif; ?>">
												<span class="help">MB</span>
											</div>
											<div class="clearfix"></div>
										</div>										
									</div>
								</div>								
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_media" value="Save" class="btn btn-success btn-cons">
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