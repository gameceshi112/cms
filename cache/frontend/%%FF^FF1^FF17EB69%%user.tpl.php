<?php /* Smarty version 2.6.20, created on 2018-07-01 05:06:56
         compiled from user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user.tpl', 10, false),array('modifier', 'escape', 'user.tpl', 24, false),array('modifier', 'clean', 'user.tpl', 110, false),array('modifier', 'nl2br', 'user.tpl', 114, false),array('insert', 'time_range', 'user.tpl', 100, false),array('insert', 'duration', 'user.tpl', 157, false),array('insert', 'thumb_path', 'user.tpl', 379, false),)), $this); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user_info.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
			<?php if ($this->_tpl_vars['friends']): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left title-truncate m-w-60">
							<?php echo $this->_tpl_vars['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?>  <?php echo smarty_function_t(array('c' => 'user.friends'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/friends"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>	
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div class="m-b--15">
							<div class="row">
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<div class="col-xs-6 col-sm-3 col-md-6 m-b-15">
										<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['username']; ?>
">
											<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['friends'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
											<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['friends'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
										</a>
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

        <?php if ($this->_tpl_vars['subscribers']): ?>
			<div class="panel panel-default">           
				<div class="panel-heading">
					<div class="pull-left title-truncate m-w-60">
						<?php echo $this->_tpl_vars['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?>  <?php echo smarty_function_t(array('c' => 'user.subscribers'), $this);?>

					</div>
					<div class="pull-right">
						<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/subscribers"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>	
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">
					<div class="m-b--15">
						<div class="row">
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['subscribers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<div class="col-xs-6 col-sm-3 col-md-6 m-b-15">
									<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['username']; ?>
">
										<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
										<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscribers'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
									</a>
								</div>                                                    
							<?php endfor; endif; ?>
						</div>
					</div>
				</div>
			</div>
        <?php endif; ?>
		
        <?php if ($this->_tpl_vars['subscriptions']): ?>

			<div class="panel panel-default">           
				<div class="panel-heading">
					<div class="pull-left title-truncate m-w-60">
						<?php echo $this->_tpl_vars['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?>  <?php echo smarty_function_t(array('c' => 'user.subscriptions'), $this);?>

					</div>
					<div class="pull-right">
						<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/subscriptions"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>	
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">
					<div class="m-b--15">
						<div class="row">
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['subscriptions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<div class="col-xs-6 col-sm-3 col-md-6 m-b-15">
									<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['subscriptions'][$this->_sections['i']['index']]['username']; ?>
">
										<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['subscriptions'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['subscriptions'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['subscriptions'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['subscriptions'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
										<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptions'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
									</a>
								</div>                                                    
							<?php endfor; endif; ?>
						</div>
					</div>
				</div>
			</div>		
		
        <?php endif; ?>  
			
		</div>
		<div class="col-md-8">
		
			<?php if ($this->_tpl_vars['blog'] && $this->_tpl_vars['blog_module'] == '1'): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="pull-left">
							<i class="fa fa-pencil"></i>&nbsp;
							<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['blog']['addtime'])), $this); ?>

							<?php echo $this->_tpl_vars['blog']['total_views']; ?>
 <?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
 <strong>&middot;</strong> <?php echo $this->_tpl_vars['addtime']; ?>
	
						</div>
						<div class="pull-right">					
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/blog"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div class="blog_header">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blog']['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
						</div>
						
						<div class="blog_content">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

						</div>
					</div>
					<div class="panel-footer">
						<div class="pull-left">
							<i class="fa fa-comment"></i> <a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blog']['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo $this->_tpl_vars['blog']['total_comments']; ?>
</a> <strong>&middot;</strong>
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blog']['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'blog.post_comment'), $this);?>
</a>                               
						</div>
						<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
							<div class="pull-right">
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/edit/<?php echo $this->_tpl_vars['blog']['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a> <strong>&middot;</strong>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/delete/<?php echo $this->_tpl_vars['blog']['BID']; ?>
"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
							</div>
						<?php endif; ?>
						<div class="clearfix"></div>
					</div>
				</div>		
			<?php endif; ?>

			<?php if ($this->_tpl_vars['playlist']): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left">
							<?php echo smarty_function_t(array('c' => 'user.PLAYLIST'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/playlist"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div id="remove_playlist_message" style="display:none"></div>
						<div class="m-b--15">
							<div class="row">
								 <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['playlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<div id="playlist_video_<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['VID']; ?>
" class="col-sm-4 m-b-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['playlist'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
												<div class="thumb-overlay">
													<img src="<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['thumb_img']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['playlist'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="playlistrotate_<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['thumbs']; ?>
_<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['thumb']; ?>
" class="img-responsive <?php if ($this->_tpl_vars['playlist'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['playlist'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
													<?php if ($this->_tpl_vars['playlist'][$this->_sections['i']['index']]['hd'] == 1): ?><div class="hd-text-icon">HD</div><?php endif; ?>
													<div class="duration">
														<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['duration'])), $this); ?>

														<?php echo $this->_tpl_vars['duration']; ?>

													</div>												
												</div>
												<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['playlist'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
											</a>
											<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
												<div class="actions">
													<a href="#remove_video" id="remove_video_from_playlist_<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-danger btn-xs remove-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
													<a href="#remove_video" id="remove_video_from_playlist_<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-danger remove-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
												</div>
											<?php endif; ?>
										</div>
										<div class="video-added">
											<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['addtime'])), $this); ?>

											<?php echo $this->_tpl_vars['addtime']; ?>
										
										</div>
										<div class="video-views pull-left">
											<?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['viewnumber']; ?>
 <?php if ($this->_tpl_vars['playlist'][$this->_sections['i']['index']]['viewnumber'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.view'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
<?php endif; ?>
										</div>
										<div class="video-rating pull-right <?php if ($this->_tpl_vars['playlist'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
											<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['playlist'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['playlist'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['playlist'][$this->_sections['i']['index']]['rate']; ?>
%<?php endif; ?></b>
										</div>
										<div class="clearfix"></div>										
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>			
			<?php endif; ?>

			<?php if ($this->_tpl_vars['videos']): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left">
							<?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/videos"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div id="delete_video_message" style="display:none"></div>
						<div class="m-b--15">
							<div class="row">
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
									<div id="video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="col-sm-4 m-b-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
												<div class="thumb-overlay">
													<img src="<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumb_img']; ?>
" id="rotate_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumbs']; ?>
_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumb']; ?>
" class="img-responsive <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
													<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['hd'] == 1): ?><div class="hd-text-icon">HD</div><?php endif; ?>
													<div class="duration">
														<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['videos'][$this->_sections['i']['index']]['duration'])), $this); ?>

														<?php echo $this->_tpl_vars['duration']; ?>

													</div>												
												</div>
											</a>
											<div class="actions">
												<?php if ($this->_tpl_vars['edit_videos'] == '1' && isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
													<a href="<?php echo $this->_tpl_vars['relative']; ?>
/edit/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-primary btn-xs edit-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a>
													<a href="<?php echo $this->_tpl_vars['relative']; ?>
/edit/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-primary edit-btn visible-xs"><i class="glyphicon glyphicon-edit"></i> <?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a>
												<?php endif; ?>	
												<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>												
													<a href="#delete_video" id="delete_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-danger btn-xs delete-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
													<a href="#delete_video" id="delete_video_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-danger delete-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
												<?php endif; ?>
											</div>
										</div>
										<a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
											<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
										</a>
										<div class="video-added">
											<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['videos'][$this->_sections['i']['index']]['addtime'])), $this); ?>

											<?php echo $this->_tpl_vars['addtime']; ?>
								
										</div>
										<div class="video-views pull-left">
											<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['viewnumber']; ?>
 <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['viewnumber'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.view'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
<?php endif; ?>
										</div>
										<div class="video-rating pull-right <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
											<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['rate']; ?>
%<?php endif; ?></b>
										</div>
										<div class="clearfix"></div>										
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>			
			<?php endif; ?>			
			
			<?php if ($this->_tpl_vars['albums'] && $this->_tpl_vars['photo_module'] == '1'): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left">
							<?php echo smarty_function_t(array('c' => 'user.PHOTO_ALBUMS'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/albums"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div class="m-b--15">
							<div class="row">
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['albums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<div class="col-sm-4 m-b-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/album/<?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['AID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['albums'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
												<div class="thumb-overlay">
													<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/albums/<?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['AID']; ?>
.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['albums'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['albums'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="img-responsive <?php if ($this->_tpl_vars['albums'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['albums'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
												</div>											
											</a>
										<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
											<div class="actions">
												<a href="<?php echo $this->_tpl_vars['relative']; ?>
/album/delete/<?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['AID']; ?>
" class="btn btn-danger btn-xs delete-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
												<a href="<?php echo $this->_tpl_vars['relative']; ?>
/album/delete/<?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['AID']; ?>
" class="btn btn-danger delete-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
											</div>
										<?php endif; ?>											
										</div>
										<a href="<?php echo $this->_tpl_vars['relative']; ?>
/album/<?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['AID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['albums'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
											<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['albums'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
										</a>
										<div class="video-added">
											<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['albums'][$this->_sections['i']['index']]['addtime'])), $this); ?>

											<?php echo $this->_tpl_vars['addtime']; ?>
										
										</div>
										<div class="video-views pull-left">
											<?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['total_photos']; ?>
 <?php if ($this->_tpl_vars['albums'][$this->_sections['i']['index']]['total_photos'] > 1): ?><?php echo smarty_function_t(array('c' => 'album.photos'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'album.photo'), $this);?>
<?php endif; ?>
										</div>
										<div class="video-rating pull-right <?php if ($this->_tpl_vars['albums'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['albums'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
											<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['albums'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['albums'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['albums'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['albums'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['rate']; ?>
%<?php endif; ?></b>
										</div>
										<div class="clearfix"></div>										
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>			
			<?php endif; ?>

			<?php if ($this->_tpl_vars['games'] && $this->_tpl_vars['game_module'] == '1'): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left">
							<?php echo smarty_function_t(array('c' => 'global.games'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/games"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div id="delete_game_message" style="display:none"></div>
						<div class="m-b--15">
							<div class="row">
								  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['games']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<div id="game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="col-sm-4 m-b-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
												<div class="thumb-overlay">
													<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/games/tmb/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="img-responsive <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
												</div>
											</a>
											<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
												<div class="actions">
													<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/edit/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-primary btn-xs edit-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a>
													<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/edit/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-primary edit-btn visible-xs"><i class="glyphicon glyphicon-edit"></i> <?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a>
													
													<a href="#delete_game" id="delete_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-danger btn-xs delete-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
													<a href="#delete_game" id="delete_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-danger delete-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
												</div>
											<?php endif; ?>
										</div>
										<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
											<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
										</a>										
										<div class="video-added">
											<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['games'][$this->_sections['i']['index']]['addtime'])), $this); ?>

											<?php echo $this->_tpl_vars['addtime']; ?>
								
										</div>
										<div class="video-views pull-left">
											<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['total_plays']; ?>
 <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['total_plays'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.play'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.plays'), $this);?>
<?php endif; ?>
										</div>
										<div class="video-rating pull-right <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
											<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['rate']; ?>
%<?php endif; ?></b>
										</div>
										<div class="clearfix"></div>										
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>			
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['favorites']): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left">
							<?php echo smarty_function_t(array('c' => 'user.FAVORITE_VIDEOS'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/favorite/videos"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div id="remove_favorite_message" style="display:none"></div>
						<div class="m-b--15">
							<div class="row">
								  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['favorites']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<div id="favorite_video_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['VID']; ?>
" class="col-sm-4 m-b-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['favorites'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
												<div class="thumb-overlay">
													<img src="<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thumb_path', 'vid' => $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['VID'])), $this); ?>
/<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['thumb']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['favorites'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="favoriterotate_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['thumbs']; ?>
_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['thumb']; ?>
" class="img-responsive <?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
													<?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['hd'] == 1): ?><div class="hd-text-icon">HD</div><?php endif; ?>
													<div class="duration">
														<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['duration'])), $this); ?>

														<?php echo $this->_tpl_vars['duration']; ?>

													</div>												
												</div>
												<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['favorites'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
											</a>
											<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
												<div class="actions">
													<a href="#remove_video" id="remove_video_from_favorite_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-danger btn-xs remove-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
													<a href="#remove_video" id="remove_video_from_favorite_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['VID']; ?>
" class="btn btn-danger remove-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
												</div>
											<?php endif; ?>
										</div>
										<div class="video-added">
											<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['addtime'])), $this); ?>

											<?php echo $this->_tpl_vars['addtime']; ?>
								
										</div>
										<div class="video-views pull-left">
											<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['viewnumber']; ?>
 <?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['viewnumber'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.view'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
<?php endif; ?>
										</div>
										<div class="video-rating pull-right <?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
											<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['rate']; ?>
%<?php endif; ?></b>
										</div>
										<div class="clearfix"></div>										
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>			
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['photos'] && $this->_tpl_vars['photo_module'] == '1'): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left">
							<?php echo smarty_function_t(array('c' => 'user.FAVORITE_PHOTOS'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/favorite/photos"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div id="remove_favorite_photo_message" style="display: none;"></div>
						<div class="m-b--15">
							<div class="row">
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['photos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<div id="favorite_photo_<?php echo $this->_tpl_vars['photos'][$this->_sections['i']['index']]['PID']; ?>
" class="col-sm-4 m-b-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/photo/<?php echo $this->_tpl_vars['photos'][$this->_sections['i']['index']]['PID']; ?>
/">
												<div class="thumb-overlay">
													<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/photos/tmb/<?php echo $this->_tpl_vars['photos'][$this->_sections['i']['index']]['PID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['photos'][$this->_sections['i']['index']]['caption'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="album_photo_<?php echo $this->_tpl_vars['photos'][$this->_sections['i']['index']]['PID']; ?>
" class="img-responsive <?php if ($this->_tpl_vars['photos'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['photos'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
												</div>
											</a>
											<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
												<div class="actions">
													<a href="#remove_photo" id="remove_photo_from_favorite_<?php echo $this->_tpl_vars['photos'][$this->_sections['i']['index']]['PID']; ?>
" class="btn btn-danger btn-xs remove-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
													<a href="#remove_photo" id="remove_photo_from_favorite_<?php echo $this->_tpl_vars['photos'][$this->_sections['i']['index']]['PID']; ?>
" class="btn btn-danger remove-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
												</div>
											<?php endif; ?>
										</div>
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>			
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['favorite_games'] && $this->_tpl_vars['game_module'] == '1'): ?>
				<div class="panel panel-default">           
					<div class="panel-heading">
						<div class="pull-left">
							<?php echo smarty_function_t(array('c' => 'user.FAVORITE_GAMES'), $this);?>

						</div>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
/favorite/games"><?php echo smarty_function_t(array('c' => 'global.view_all'), $this);?>
</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div id="remove_favorite_game_message" style="display:none"></div>
						<div class="m-b--15">
							<div class="row">
								  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['favorite_games']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<div id="favorite_game_<?php echo $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['GID']; ?>
" class="col-sm-4 m-b-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/<?php echo $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['GID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
												<div class="thumb-overlay">
													<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/games/tmb/<?php echo $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['GID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="img-responsive <?php if ($this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
												</div>
												<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
											</a>
											<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
												<div class="actions">
													<a href="#remove_game" id="remove_game_from_favorite_<?php echo $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-danger btn-xs remove-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
													<a href="#remove_game" id="remove_game_from_favorite_<?php echo $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-danger remove-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
												</div>
											<?php endif; ?>
										</div>
										<div class="video-added">
											<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['addtime'])), $this); ?>

											<?php echo $this->_tpl_vars['addtime']; ?>
								
										</div>
										<div class="video-views pull-left">
											<?php echo $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['total_plays']; ?>
 <?php if ($this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['total_plays'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.play'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.plays'), $this);?>
<?php endif; ?>
										</div>
										<div class="video-rating pull-right <?php if ($this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
											<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['favorite_games'][$this->_sections['i']['index']]['rate']; ?>
%<?php endif; ?></b>
										</div>
										<div class="clearfix"></div>										
									</div>                                                    
								<?php endfor; endif; ?>
							</div>
						</div>
					</div>
				</div>			
			<?php endif; ?>

			<?php if ($this->_tpl_vars['show_wall']): ?>
				<?php if ($this->_tpl_vars['walls'] || ( isset ( $_SESSION['uid'] ) && $this->_tpl_vars['wall_comments'] == '1' )): ?>
					<div class="panel panel-default">           
						<div class="panel-heading">
							<?php echo smarty_function_t(array('c' => 'user.WALL'), $this);?>

						</div>
						<div class="panel-body">
						
							<?php if (isset ( $_SESSION['uid'] ) && $this->_tpl_vars['user']['UID'] && $this->_tpl_vars['wall_comments'] == '1'): ?>
							<div id="wall">
								<form class="form-horizontal" name="wall_form" id="wall_form" method="post" action="#post_comment">
									<div id="media_message" style="display: none;"></div>
									<div id="media_content" class="m-b-15" style="display: none;"></div>
									<div class="form-group">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<textarea name="wall_comment" id="wall_comment" cols="75" rows="5" class="form-control" placeholder="<?php echo smarty_function_t(array('c' => 'global.add_comment'), $this);?>
"><?php echo $this->_tpl_vars['comment']; ?>
</textarea>
											<div id="post_message" class="text-danger m-t-5" style="display: none;"><?php echo smarty_function_t(array('c' => 'global.comment_empty'), $this);?>
</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<div class="pull-left">
												<input name="submit_wall" type="submit" value=" <?php echo smarty_function_t(array('c' => 'global.post'), $this);?>
 " id="post_wall_comment_<?php echo $this->_tpl_vars['user']['UID']; ?>
" class="btn btn-primary">
												<a href="#attach_photo" id="attach_photo" class="btn btn-secondary m-l-5"><span class="visible-xs"><i class="fa fa-camera"></i></span><span class="hidden-xs"><?php echo smarty_function_t(array('c' => 'global.attach_photo'), $this);?>
</span></a>
												<a href="#attach_video" id="attach_video" class="btn btn-secondary m-l-5"><span class="visible-xs"><i class="fa fa-film"></i></span><span class="hidden-xs"><?php echo smarty_function_t(array('c' => 'global.attach_video'), $this);?>
</span></a>
											</div>
											<div class="pull-right">
												<span id="chars_left">1000</span> <?php echo smarty_function_t(array('c' => 'global.chars_left'), $this);?>

											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<?php endif; ?>
							
							<div id="wall_comments_<?php echo $this->_tpl_vars['user']['UID']; ?>
">
								<?php if ($this->_tpl_vars['walls']): ?>
									<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span id="end_num" class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span id="total_comments" class="text-white"><?php echo $this->_tpl_vars['walls_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.comments'), $this);?>
.
								<?php endif; ?>
								<div id="wall_response" style="display: none;"><?php echo smarty_function_t(array('c' => 'global.posting'), $this);?>
</div>
								<div id="comments_delimiter" style="display:none;"></div>
								<?php if ($this->_tpl_vars['walls']): ?>
									<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['walls']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										
										<div id="wall_comment_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
" class="col-xs-12 m-t-15">
											<div class="row">
												<div class="pull-left">
													<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
">
														<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['walls'][$this->_sections['i']['index']]['photo'] != ''): ?><?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['photo']; ?>
<?php else: ?>nopic-<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php endif; ?>" title="<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
's avatar" alt="<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive comment-avatar" />
													</a>											
												</div>
												<div class="comment">
													<div class="comment-info">
														<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['walls'][$this->_sections['i']['index']]['addtime'])), $this); ?>

														<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
"><?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
</a>&nbsp;-&nbsp;<span class=""><?php echo $this->_tpl_vars['addtime']; ?>
</span>
													</div>
													<div class="comment-body overflow-hidden"><?php echo ((is_array($_tmp=$this->_tpl_vars['walls'][$this->_sections['i']['index']]['message'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
													<?php if (isset ( $_SESSION['uid'] )): ?>
														<div class="comment-actions">
															<?php if ($_SESSION['uid'] == $this->_tpl_vars['walls'][$this->_sections['i']['index']]['UID']): ?>
																<a href="#delete_comment" id="delete_comment_wall_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a> <span id="delete_response_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
" style="display: none;"></span>
															<?php endif; ?>
															<?php if ($_SESSION['uid'] != $this->_tpl_vars['walls'][$this->_sections['i']['index']]['UID']): ?>
																<span id="reported_spam_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><a href="#report_spam" id="report_spam_wall_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'global.report_spam'), $this);?>
</a></span>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
												<div class="clearfix"></div>
											</div>
											
										</div>
										
									<?php endfor; endif; ?>

									<?php if ($this->_tpl_vars['page_link']): ?>
										<div class="visible-xs center m-b--15">
											<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
										</div>
										<div class="hidden-xs center m-b--15">
											<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
										</div>
									<?php endif; ?>
						
								<?php endif; ?>
							</div>
						</div>
					</div>
				
				<?php endif; ?>
			<?php endif; ?>
			
			
		</div>
	</div>
</div>
