<?php /* Smarty version 2.6.20, created on 2018-06-30 15:40:01
         compiled from users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'users.tpl', 162, false),array('modifier', 'date_format', 'users.tpl', 193, false),array('insert', 'comment_count', 'users.tpl', 201, false),array('insert', 'video_count', 'users.tpl', 213, false),)), $this); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user_thumbnail.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user_view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Users - <span class="semi-bold">Manage Users</span></h3>
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
						<h4>Search <span class="semi-bold">Filters</span></h4>
					</div>
					<div class="grid-body no-border">
						<div class="row">
							<div class="col-xs-12">
								<form class="form-no-horizontal-spacing search-filters" name="search_users" method="POST" action="users.php?m=<?php echo $this->_tpl_vars['module']; ?>
">
									<div class="filters">
										<div class="row">
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text" id="filter_username" name="username" value="<?php echo $this->_tpl_vars['option']['username']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['username']): ?>filter-active<?php endif; ?>" placeholder="Username">
													<i id="filter_remove_username" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['username']): ?>style="display:none"<?php endif; ?>></i>
												</div>
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text"  id="filter_name" name="name" value="<?php echo $this->_tpl_vars['option']['name']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['name']): ?>filter-active<?php endif; ?>" placeholder="First Name or Last Name">
													<i id="filter_remove_name" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['name']): ?>style="display:none"<?php endif; ?>></i>
												</div>										
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text"  id="filter_country" name="country" value="<?php echo $this->_tpl_vars['option']['country']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['country']): ?>filter-active<?php endif; ?>" placeholder="Country">
													<i id="filter_remove_country" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['country']): ?>style="display:none"<?php endif; ?>></i>
												</div>										
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<select id="filter_gender" name="gender" style="width:100%">
														<option value="">Gender</option>
														<option value="male"<?php if ($this->_tpl_vars['option']['gender'] == 'male'): ?> selected="selected"<?php endif; ?>>Male</option>
														<option value="female"<?php if ($this->_tpl_vars['option']['gender'] == 'female'): ?> selected="selected"<?php endif; ?>>Female</option>
													</select>												
												</div>
											</div>											
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<select id="filter_status" name="status" style="width:100%">
														<option value="">Status</option>
														<option value="Active"<?php if ($this->_tpl_vars['option']['status'] == 'Active'): ?> selected="selected"<?php endif; ?>>Active</option>
														<option value="Inactive"<?php if ($this->_tpl_vars['option']['status'] == 'Inactive'): ?> selected="selected"<?php endif; ?>>Inactive</option>
													</select>												
												</div>
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<select id="filter_emailverified" name="emailverified" style="width:100%">
														<option value="">Email Confirmation</option>
														<option value="yes"<?php if ($this->_tpl_vars['option']['emailverified'] == 'yes'): ?> selected="selected"<?php endif; ?>>Verified</option>
														<option value="no"<?php if ($this->_tpl_vars['option']['emailverified'] == 'no'): ?> selected="selected"<?php endif; ?>>Not Verified</option>
													</select>												
												</div>
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<select id="filter_premium" name="premium" style="width:100%">
														<option value="">Type</option>
														<option value="0"<?php if ($this->_tpl_vars['option']['premium'] == '0'): ?> selected="selected"<?php endif; ?>>Free</option>														
														<option value="1"<?php if ($this->_tpl_vars['option']['premium'] == '1'): ?> selected="selected"<?php endif; ?>>Premium</option>
													</select>												
												</div>
											</div>											
										</div>
									</div>
									<input id="sort" name="sort" type="hidden" value=<?php echo $this->_tpl_vars['option']['sort']; ?>
>
									<input id="order" name="order" type="hidden" value=<?php echo $this->_tpl_vars['option']['order']; ?>
>
									<input id="display" name="display" type="hidden" value=<?php echo $this->_tpl_vars['option']['display']; ?>
>

									<div class="pull-left">
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#">Order by <span id="sort_items"><?php if ($this->_tpl_vars['option']['sort'] == 'username'): ?>Username<?php elseif ($this->_tpl_vars['option']['sort'] == 'email'): ?>Email<?php elseif ($this->_tpl_vars['option']['sort'] == 'addtime'): ?>Join Date<?php elseif ($this->_tpl_vars['option']['sort'] == 'logintime'): ?>Last Login<?php elseif ($this->_tpl_vars['option']['sort'] == 'country'): ?>Country<?php elseif ($this->_tpl_vars['option']['sort'] == 'profile_viewed'): ?>Profile Views<?php else: ?>ID<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'ID'; document.getElementById('sort').value = 'UID'" >ID</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Username'; document.getElementById('sort').value = 'username'" >Username</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Email'; document.getElementById('sort').value = 'email'" >Email</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Join Date'; document.getElementById('sort').value = 'addtime'" >Join Date</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Last Login'; document.getElementById('sort').value = 'logintime'" >Last Login</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Country'; document.getElementById('sort').value = 'country'" >Country</a></li>																			
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Profile Views'; document.getElementById('sort').value = 'profile_viewed'" >Profile Views</a></li>									
											</ul>
										</div>									
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"><span id="order_items"><?php if ($this->_tpl_vars['option']['order'] == 'ASC'): ?>Ascending<?php else: ?>Descending<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Ascending'; document.getElementById('order').value = 'ASC'" >Ascending</a></li>
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Descending'; document.getElementById('order').value = 'DESC'" >Descending</a></li>
											</ul>
										</div>									
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"><span id="display_items"><?php echo $this->_tpl_vars['option']['display']; ?>
</span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '10'; document.getElementById('display').value = '10'" >10</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '20'; document.getElementById('display').value = '20'" >20</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '30'; document.getElementById('display').value = '30'" >30</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '40'; document.getElementById('display').value = '40'" >40</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '50'; document.getElementById('display').value = '50'" >50</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '100'; document.getElementById('display').value = '100'" >100</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '200'; document.getElementById('display').value = '200'" >200</a></li>
											</ul>
										</div>
									</div>
									<div class="pull-right">
										<button type="button" id="reset_search" name="reset_search" class="btn btn-white btn-cons btn-icon"><i class="fa fa-times"></i></button>									
										<button type="submit" name="search_users" class="btn btn-success btn-cons btn-icon m-r-0"><i class="fa fa-search"></i></button>									
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
						<!-- END SEARCH FILTERS -->
						<div class="row">
							<div class="col-xs-12">
								<div>
									 <?php if ($this->_tpl_vars['total_users'] >= 1): ?>
										<form class="form-no-horizontal-spacing" name="user_select" method="post" id="user_select" action="">
										<div>
											<input type="submit" name="delete_selected_users" value="Delete" class="btn btn-danger btn-cons" onClick="javascript:return confirm('Are you sure you want to delete all selected users?');">
											<input type="submit" name="suspend_selected_users" value="Suspend" class="btn btn-white btn-cons" onClick="javascript:return confirm('Are you sure you want to suspend all selected users?');">
											<input type="submit" name="approve_selected_users" value="Approve" class="btn btn-white btn-cons" onClick="javascript:return confirm('Are you sure you want to approve all selected users?');">
										</div>
										<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>										
										<div class="checkbox check-default">
											<input id="check_all_users" name="check_all_users" type="checkbox" id="user_check_all">
											<label for="check_all_users" style="margin: 0 0 15px 10px !important;">Select All</label>
											<code class="text-info hidden-xs hidden-sm pull-right">Use CHECK -> SHIFT + CHECK to select multiple users.</code>
										</div>
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
											<div id="item-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="item-main-container small-thumb">
												<div class="item-col-left">
													<div class="item-main">
														<div class="item-select" unselectable="on" onselectstart="return false;" onmousedown="return false;">
															<div class="checkbox check-default">
																<input name="user_id_checkbox_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" id="user_checkbox_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" type="checkbox" class="select-multiple">
																<label for="user_checkbox_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" style="margin: 0 0 15px 0 !important;"></label>
															</div>												
														</div>
														<div class="item-thumb">
															<div class="thumb-overlay">														
																<a id="view_user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" href="#">
																	<img id="thumb-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/media/users/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" class="img-responsive">
																</a>
																<div class="item-id">
																	<b>ID</b> <?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>

																</div>
																<div class="item-flag">
																	<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['country'] != ''): ?>
																		<img id="flag-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/templates/backend/default/assets/img/flags/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['i']['index']]['country'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '-') : smarty_modifier_replace($_tmp, ' ', '-')))) ? $this->_run_mod_handler('replace', true, $_tmp, '\'', '') : smarty_modifier_replace($_tmp, '\'', '')); ?>
.png"  onError="this.src='<?php echo $this->_tpl_vars['baseurl']; ?>
/templates/backend/default/assets/img/flags/NoCountry.png'" title="<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['country']; ?>
">
																	<?php else: ?>
																		<img id="flag-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/templates/backend/default/assets/img/flags/NoCountry.png">
																	<?php endif; ?>														
																</div>
																<div id="premium-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
">
																	<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['premium'] == '1'): ?><div class="item-premium" title="Premium Account">P</div><?php endif; ?>
																</div>
																<div id="photos-loading-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="thumbnails-loading" style="display: none"><i class="loader"></i></div>
															</div>												
														</div>
													</div>
												</div>
												<div class="item-col-right">
													<div class="item-details">
														<div class="item-title">
															<a id="view_user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
_" href="#" class="text-info"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
</a>
														</div>
														<div class="row">						
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
																<div class="d-label">Status</div>
																<span id="status-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
">
																	<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['account_status'] == 'Active'): ?>
																		<span class="text-green" alt="Active" title="Active">Active</span>
																	<?php else: ?>
																		<span class="text-red" alt="Inactive" title="Inactive">Inactive</span>
																	<?php endif; ?>
																</span>
															</div>
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
																<div class="d-label">Join Date</div>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['i']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

															</div>
															<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
																<div class="d-label">Last Login</div>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['i']['index']]['logintime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
									
															</div>
															<div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">																
																<div class="d-label"><i class="fa fa-comments" title="Wall Comments"></i></div>
																<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'comment_count', 'assign' => 'total_comments', 'UID' => $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID'])), $this); ?>

																<?php if ($this->_tpl_vars['total_comments'] > 0): ?>
																	<a id="comments_User_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" href="#" class="text-info"><?php echo $this->_tpl_vars['total_comments']; ?>
</a>
																<?php else: ?>
																	<span class="text-muted"><?php echo $this->_tpl_vars['total_comments']; ?>
</span>
																<?php endif; ?>																
															</div>
															<div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
																<div class="d-label"><i class="fa fa-eye" title="Profile Views"></i></div>
																<span id="views-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profile_viewed']; ?>
</span>
															</div>
															<div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
																<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'video_count', 'assign' => 'vdo', 'UID' => $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID'])), $this); ?>

																<div class="d-label"><i class="fa fa-video-camera" title="Owned Videos"></i></div>
																<?php if ($this->_tpl_vars['vdo'] > 0): ?>
																	<a id="videos_User_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" href="videos.php?m=all&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="text-info"><?php echo $this->_tpl_vars['vdo']; ?>
</a>
																<?php else: ?>
																	<span class="text-muted"><?php echo $this->_tpl_vars['vdo']; ?>
</span>
																<?php endif; ?>
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="item-actions">																									
													<div class="btn-group">
														<div class="btn-group">
															<a id="delete__user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="btn btn-success" data-toggle="dropdown" href="#" alt="Delete" title="Delete"><i class="fa fa-trash-o"></i></a>
															<ul class="dropdown-menu">
																<li><a id="delete_user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" href="#">Delete</a></li>
															</ul>
														</div>
														<a id="edit_user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="btn btn-success" href="#" alt="Edit" title="Edit"><i class="fa fa-pencil"></i></a>
														<a id="thumb_user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="btn btn-success" href="#" alt="Thumbnail" title="Thumbnail"><i class="fa fa-picture-o"></i></a>
														<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['account_status'] == 'Active'): ?>
															<a id="status_user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="btn btn-success" href="#" alt="Suspend" title="Suspend" data-processing="0" data-status="1"><i class="fa fa-times"></i></a>
														<?php else: ?>
															<a id="status_user_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" class="btn btn-success" href="#" alt="Activate" title="Activate" data-processing="0" data-status="0"><i class="fa fa-check"></i></a>
														<?php endif; ?>																	
													</div>
												
												</div>												
											</div>
										<?php endfor; endif; ?>
											

										<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>										
										</form>
									<?php else: ?>
									<div class="row">
										<div class="col-xs-12">
											<div class="alert alert-info">
												<button class="close" data-dismiss="alert"></button>
												No Users Found
											</div>
										</div>
									</div>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	