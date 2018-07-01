<?php /* Smarty version 2.6.20, created on 2018-06-30 15:39:12
         compiled from videos_flagged.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'thumb_adm', 'videos_flagged.tpl', 119, false),array('insert', 'duration', 'videos_flagged.tpl', 125, false),array('insert', 'uid_to_name', 'videos_flagged.tpl', 145, false),array('function', 't', 'videos_flagged.tpl', 128, false),array('modifier', 'escape', 'videos_flagged.tpl', 136, false),array('modifier', 'date_format', 'videos_flagged.tpl', 160, false),array('modifier', 'nl2br', 'videos_flagged.tpl', 167, false),)), $this); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "video_view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "video_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Videos - <span class="semi-bold">Requests / Flagged</span></h3>
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
								<form class="form-no-horizontal-spacing search-filters" name="search_videos" method="POST" action="videos.php?m=<?php echo $this->_tpl_vars['module']; ?>
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
													<input type="text"  id="filter_title" name="title" value="<?php echo $this->_tpl_vars['option']['title']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['title']): ?>filter-active<?php endif; ?>" placeholder="Title">
													<i id="filter_remove_title" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['title']): ?>style="display:none"<?php endif; ?>></i>
												</div>										
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text" id="filter_flagger" name="flagger" value="<?php echo $this->_tpl_vars['option']['flagger']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['flagger']): ?>filter-active<?php endif; ?>"  placeholder="Flagger">
													<i id="filter_remove_flagger" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['flagger']): ?>style="display:none"<?php endif; ?>></i>
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
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#">Order by <span id="sort_items"><?php if ($this->_tpl_vars['option']['sort'] == 'v.title'): ?>Title<?php elseif ($this->_tpl_vars['option']['sort'] == 'v.type'): ?>Type<?php elseif ($this->_tpl_vars['option']['sort'] == 'v.duration'): ?>Duration<?php elseif ($this->_tpl_vars['option']['sort'] == 'v.addate'): ?>Date<?php elseif ($this->_tpl_vars['option']['sort'] == 'v.viewnumber'): ?>Views<?php elseif ($this->_tpl_vars['option']['sort'] == 'v.fav_num'): ?>Favorites<?php elseif ($this->_tpl_vars['option']['sort'] == 'v.com_num'): ?>Comments<?php else: ?>ID<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'ID'; document.getElementById('sort').value = 'v.VID'" >ID</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Title'; document.getElementById('sort').value = 'v.title'" >Title</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Type'; document.getElementById('sort').value = 'v.type'" >Type</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Duration'; document.getElementById('sort').value = 'v.duration'" >Duration</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Date'; document.getElementById('sort').value = 'v.addate'" >Date</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Views'; document.getElementById('sort').value = 'v.viewnumber'" >Views</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Favorites'; document.getElementById('sort').value = 'v.fav_num'" >Favorites</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Comments'; document.getElementById('sort').value = 'v.com_num'" >Comments</a></li>											
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
										<button type="submit" name="search_videos" class="btn btn-success btn-cons btn-icon m-r-0"><i class="fa fa-search"></i></button>									
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
						<!-- END SEARCH FILTERS -->
						<div class="row">
							<div class="col-xs-12">
								<div>
									<?php if ($this->_tpl_vars['total_videos'] >= 1): ?>
										<form class="form-no-horizontal-spacing" name="video_select" method="post" id="video_select" action="">
											<div>
												<input type="submit" name="delete_selected_videos" value="Delete" class="btn btn-danger btn-cons" onClick="javascript:return confirm('Are you sure you want to delete all selected videos?');">
												<input type="submit" name="suspend_selected_videos" value="Suspend" class="btn btn-white btn-cons" onClick="javascript:return confirm('Are you sure you want to suspend all selected videos?');">
												<input type="submit" name="approve_selected_videos" value="Approve" class="btn btn-white btn-cons" onClick="javascript:return confirm('Are you sure you want to approve all selected videos?');">
												<input type="submit" name="unflag_selected_videos" value="Unflag" class="btn btn-white btn-cons" onClick="javascript:return confirm('Are you sure you want to unflag all selected videos?');">												
											</div>									
											<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>
											<div class="checkbox check-default">
												<input id="check_all_videos" name="check_all_videos" type="checkbox">
												<label for="check_all_videos" style="margin: 0 0 15px 10px !important;">Select All</label>
												<code class="text-info hidden-xs hidden-sm pull-right">Use CHECK -> SHIFT + CHECK to select multiple videos.</code>
											</div>										
											<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<div id="item-<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="item-main-container">
												<div class="item-col-left">
													<div class="item-main">
														<div class="item-select" unselectable="on" onselectstart="return false;" onmousedown="return false;">
															<div class="checkbox check-default">
																<input name="video_id_checkbox_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" id="video_checkbox_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" type="checkbox" class="select-multiple">
																<label for="video_checkbox_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" style="margin: 0 0 15px 0 !important;"></label>
															</div>												
														</div>													
														<div class="item-thumb">
															<div class="thumb-overlay">														
																<a id="view_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" href="#">
																	<img id="thumb-<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" src="<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thumb_adm', 'vid' => $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID'], 'thumb' => $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumb'])), $this); ?>
" class="img-responsive">
																</a>
																<div class="item-id">
																	<b>ID</b> <?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>

																</div>
																<div class="item-duration-hd">																
																	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['videos'][$this->_sections['i']['index']]['duration'])), $this); ?>

																	<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['hd'] == 1): ?><b>HD</b> <?php endif; ?><span id="duration-<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
"><?php echo $this->_tpl_vars['duration']; ?>
</span>
																</div>
																<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="item-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>															
															</div>												
														</div>
													</div>
												</div>											
												<div class="item-col-right">
													<div class="item-details">
														<div class="item-title">
															<a id="view_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
_" href="#"><span id="title-<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a>
														</div>
														<div class="row">						
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
																<div class="d-label">User</div>
																<a href="users.php?m=all&all=1&UID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['UID']; ?>
" class="text-info"><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['username']; ?>
</a>															
															</div>
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
																<div class="d-label">Flagger</div>
																<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_name', 'assign' => 'uname', 'uid' => $this->_tpl_vars['videos'][$this->_sections['i']['index']]['SUID'])), $this); ?>

																<a href="users.php?m=all&all=1&UID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['SUID']; ?>
" class="text-warning"><?php echo $this->_tpl_vars['uname']; ?>
</a>														
															</div>														
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
																<div class="d-label">Status</div>
																<span id="status-<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
">
																	<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['active'] == 1): ?>
																		<span class="text-green" alt="Active" title="Active">Active</span>
																	<?php else: ?>
																		<span class="text-red" alt="Inactive" title="Inactive">Inactive</span>
																	<?php endif; ?>
																</span>
															</div>
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
																<div class="d-label">Flag Date</div>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['add_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

															</div>
															<div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
																<div class="d-label">Reason</div>
																<div class="text-red text-ellipsis">
																	<b><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['reason']; ?>
<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['message']): ?>:<?php endif; ?></b>
																	<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['message']): ?>
																		<span alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
																			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

																		</span>
																	<?php endif; ?>
																	
																</div>																
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="item-actions">																									
													<div class="btn-group">
														<div class="btn-group">
															<a id="delete__video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-success" data-toggle="dropdown" href="#" alt="Delete" title="Delete"><i class="fa fa-trash-o"></i></a>
															<ul class="dropdown-menu">
																<li><a id="delete_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" href="#">Delete</a></li>
															</ul>
														</div>
														<a id="edit_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-success" href="#" alt="Edit" title="Edit"><i class="fa fa-pencil"></i></a>
														<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['active'] == '1'): ?>
															<a id="status_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-success" href="#" alt="Suspend" title="Suspend" data-processing="0" data-status="1"><i class="fa fa-times"></i></a>
														<?php else: ?>
															<a id="status_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-success" href="#" alt="Activate" title="Activate" data-processing="0" data-status="0"><i class="fa fa-check"></i></a>
														<?php endif; ?>
														<div class="btn-group">
															<a id="unflag__video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-success" data-toggle="dropdown" href="#" alt="Unflag" title="Unflag"><i class="fa fa-flag-o"></i></a>
															<ul class="dropdown-menu">
																<li><a id="unflag_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['FID']; ?>
_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" href="#">Unflag</a></li>
															</ul>
														</div>
													</div>
												
												</div>													
											</div>
											<?php endfor; endif; ?>
											<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>
										</form>										
									<?php else: ?>
									<div class="alert alert-info">
										<button class="close" data-dismiss="alert"></button>
										No Videos Found
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