<?php /* Smarty version 2.6.20, created on 2018-06-30 15:44:05
         compiled from index_main.tpl */ ?>
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
						<h4>System <span class="semi-bold">Settings</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="system_settings" method="POST" action="index.php?m=main">						
							<div class="row column-seperation">
								<div class="col-md-6">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Website <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Site Name</label>
											<div class="col-lg-8">
												<input type="text" name="site_name" value="<?php echo $this->_tpl_vars['site_name']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['site_name']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Site Title</label>
											<div class="col-lg-8">
												<input type="text" name="site_title" value="<?php echo $this->_tpl_vars['site_title']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['site_title']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Meta Description</label>
											<div class="col-lg-8">
												<input type="text" name="meta_description" value="<?php echo $this->_tpl_vars['meta_description']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['meta_description']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Meta Keywords</label>
											<div class="col-lg-8">
												<input type="text" name="meta_keywords" value="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['meta_keywords']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Template</label>
											<div class="col-lg-8">
												<select id="template" name="template" style="width:100%">
													<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
														<option value="<?php echo $this->_tpl_vars['k']; ?>
"<?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['template']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
													<?php endforeach; endif; unset($_from); ?>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Default Language</label>
											<div class="col-lg-8">
												<select id="language" name="language" style="width:100%">
													<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
														<option value="<?php echo $this->_tpl_vars['k']; ?>
"<?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['language']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
													<?php endforeach; endif; unset($_from); ?>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<table class="table-radio">
										<tbody>
											<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'multiserversystem.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
											<tr>
												<td class="v-align-middle no-border" style="width:70%;">
													Multi Language
												</td>
												<td class="v-align-middle no-border" style="width:15%;">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['multi_language'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="multi_language" id="multi_language_e">
														 <label class="m-0" for="multi_language_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle no-border" style="width:15%;">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['multi_language'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="multi_language" id="multi_language_d">
														<label class="m-0" for="multi_language_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Embed Videos
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['video_embed'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="video_embed" id="video_embed_e">
														 <label class="m-0" for="video_embed_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['video_embed'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="video_embed" id="video_embed_d">
														<label class="m-0" for="video_embed_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Enter page
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['splash'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="splash" id="splash_e">
														 <label class="m-0" for="splash_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['splash'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="splash" id="splash_d">
														<label class="m-0" for="splash_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Ads
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['ads'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="ads" id="ads_e">
														 <label class="m-0" for="ads_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['ads'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="ads" id="ads_d">
														<label class="m-0" for="ads_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Gzip Encoding<br>
													<span class="help hidden-xs">Please make sure that your server supports this.</span>
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['gzip_encoding'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="gzip_encoding" id="gzip_encoding_e">
														 <label class="m-0" for="gzip_encoding_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['gzip_encoding'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="gzip_encoding" id="gzip_encoding_d">
														<label class="m-0" for="gzip_encoding_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Video Downloads
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['downloads'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="downloads" id="downloads_e">
														 <label class="m-0" for="downloads_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['downloads'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="downloads" id="downloads_d">
														<label class="m-0" for="downloads_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Delete Original Video
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['del_original_video'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="del_original_video" id="del_original_video_e">
														 <label class="m-0" for="del_original_video_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['del_original_video'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="del_original_video" id="del_original_video_d">
														<label class="m-0" for="del_original_video_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Approve Videos
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['approve'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="approve" id="approve_e">
														 <label class="m-0" for="approve_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['approve'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="approve" id="approve_d">
														<label class="m-0" for="approve_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Approve Photos
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['approve_photos'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="approve_photos" id="approve_photos_e">
														 <label class="m-0" for="approve_photos_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['approve_photos'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="approve_photos" id="approve_photos_d">
														<label class="m-0" for="approve_photos_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Approve Games
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['approve_games'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="approve_games" id="approve_games_e">
														 <label class="m-0" for="approve_games_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['approve_games'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="approve_games" id="approve_games_d">
														<label class="m-0" for="approve_games_d">Disabled</label>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-middle">
													Approve Blogs
												</td>
												<td class="v-align-middle">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['approve_blogs'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="approve_blogs" id="approve_blogs_e">
														 <label class="m-0" for="approve_blogs_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['approve_blogs'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="approve_blogs" id="approve_blogs_d">
														<label class="m-0" for="approve_blogs_d">Disabled</label>
													</div>
												</td>
											</tr>
										</tbody>
									</table>									
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-xs-12 m-b-5">								
											<h3>Paging <span class="semi-bold">Settings</span></h3>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Videos Per Page</label>
											<div class="col-lg-8">
												<input type="text" name="videos_per_page" value="<?php echo $this->_tpl_vars['videos_per_page']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['videos_per_page']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-lg-4 control-label">Albums Per Page</label>
											<div class="col-lg-8">
												<input type="text" name="albums_per_page" value="<?php echo $this->_tpl_vars['albums_per_page']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['albums_per_page']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-lg-4 control-label">Games Per Page</label>
											<div class="col-lg-8">
												<input type="text" name="games_per_page" value="<?php echo $this->_tpl_vars['games_per_page']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['games_per_page']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-lg-4 control-label">Blogs Per Page</label>
											<div class="col-lg-8">
												<input type="text" name="blogs_per_page" value="<?php echo $this->_tpl_vars['blogs_per_page']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['blogs_per_page']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-lg-4 control-label">Users Per Page</label>
											<div class="col-lg-8">
												<input type="text" name="users_per_page" value="<?php echo $this->_tpl_vars['users_per_page']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['users_per_page']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-lg-4 control-label">Watched Per Page</label>
											<div class="col-lg-8">
												<input type="text" name="watched_per_page" value="<?php echo $this->_tpl_vars['watched_per_page']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['watched_per_page']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label class="col-lg-4 control-label">Recent Per Page</label>
											<div class="col-lg-8">
												<input type="text" name="recent_per_page" value="<?php echo $this->_tpl_vars['recent_per_page']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['recent_per_page']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_settings" value="Save" class="btn btn-success btn-cons">
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