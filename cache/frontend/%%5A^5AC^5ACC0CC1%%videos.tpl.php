<?php /* Smarty version 2.6.20, created on 2018-06-30 18:51:25
         compiled from videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'videos.tpl', 5, false),array('function', 'url', 'videos.tpl', 12, false),array('modifier', 'clean', 'videos.tpl', 81, false),array('modifier', 'escape', 'videos.tpl', 83, false),array('insert', 'duration', 'videos.tpl', 87, false),array('insert', 'time_range', 'videos.tpl', 94, false),array('insert', 'adv', 'videos.tpl', 139, false),)), $this); ?>
<div class="container">

	<div class="well well-filters">
			<div class="pull-left">
				<h4><?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>
</h4>
			</div>
			<div class="pull-left m-l-20">
				<div class="hidden-xs">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['type'] == ''): ?><?php echo smarty_function_t(array('c' => 'global.type'), $this);?>
<?php elseif ($this->_tpl_vars['type'] == 'public'): ?><?php echo smarty_function_t(array('c' => 'global.public'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.private'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['type'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'type','value' => ''), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['type'] == 'public'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'type','value' => 'public'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.public'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['type'] == 'private'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'type','value' => 'private'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.private'), $this);?>
</a></li>
						</ul>
					</div>
					
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['timeframe'] == 'a'): ?><?php echo smarty_function_t(array('c' => 'global.timeline'), $this);?>
<?php elseif ($this->_tpl_vars['timeframe'] == 't'): ?><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.today'), $this);?>
<?php elseif ($this->_tpl_vars['timeframe'] == 'w'): ?><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_week'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_month'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['timeframe'] == 'a'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 'a'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['timeframe'] == 't'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 't'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.today'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'w'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 'w'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_week'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'm'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 'm'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_month'), $this);?>
</a></li>
						</ul>
					</div>					

					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['order'] == 'bw'): ?><?php echo smarty_function_t(array('c' => 'global.being_watched'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'mr'): ?><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'mv'): ?><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'tr'): ?><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'md'): ?><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'tf'): ?><?php echo smarty_function_t(array('c' => 'global.top_favorites'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.longest'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['order'] == 'bw'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'bw'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.being_watched'), $this);?>
</a></li>						
							<li <?php if ($this->_tpl_vars['order'] == 'mr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'mr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mv'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'mv'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'md'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'md'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'tr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'tr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['order'] == 'tf'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'tf'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_favorites'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'lg'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'lg'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.longest'), $this);?>
</a></li>
						</ul>
					</div>					
				</div>	
				<div class="visible-xs">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filters <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['type'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'type','value' => ''), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['type'] == 'public'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'type','value' => 'public'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.public'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['type'] == 'private'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'type','value' => 'private'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.private'), $this);?>
</a></li>						
							<li class="divider"></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'a'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 'a'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['timeframe'] == 't'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 't'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.today'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'w'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 'w'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_week'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'm'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 't','value' => 'm'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_month'), $this);?>
</a></li>
							<li class="divider"></li>				
							<li <?php if ($this->_tpl_vars['order'] == 'bw'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'bw'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.being_watched'), $this);?>
</a></li>						
							<li <?php if ($this->_tpl_vars['order'] == 'mr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'mr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mv'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'mv'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'md'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'md'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'tr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'tr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['order'] == 'tf'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'tf'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_favorites'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'lg'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => $this->_tpl_vars['base'],'strip' => 'o','value' => 'lg'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.longest'), $this);?>
</a></li>
						</ul>
					</div>				
				</div>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/video"><span class="hidden-xs"><i class="fa fa-upload"></i> <?php echo smarty_function_t(array('c' => 'videos.upload'), $this);?>
</span><span class="visible-xs"><i class="fa fa-upload"></i></span></a>
			</div>		
			<div class="clearfix"></div>
	</div>
	
	<div class="row">
		<div class="col-md-9 col-sm-8">
            <?php if ($this->_tpl_vars['videos']): ?>
			<div class="well well-sm">
				<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['videos_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'videos.videos'), $this);?>
.
			</div>			
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
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="well well-sm">
						<a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
							<div class="thumb-overlay">
								<img src="<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumb_img']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="rotate_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumbs']; ?>
_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumb']; ?>
" class="img-responsive <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>"/>
								<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
								<?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['hd'] == 1): ?><div class="hd-text-icon">HD</div><?php endif; ?>
								<div class="duration">
									<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['videos'][$this->_sections['i']['index']]['duration'])), $this); ?>

									<?php echo $this->_tpl_vars['duration']; ?>

								</div>
							</div>
							<span class="video-title title-truncate m-t-5"><?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
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
				</div>			
            <?php endfor; endif; ?>
			
			</div>
            <?php else: ?>
			<div class="well well-sm">
				<span class="text-danger"><?php echo smarty_function_t(array('c' => 'videos.no_videos_found'), $this);?>
.</span>
			</div>
            <?php endif; ?>	

			<?php if ($this->_tpl_vars['videos']): ?>
				<?php if ($this->_tpl_vars['page_link']): ?>			
					<div style="text-align: center;" class="visible-xs">
						<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
					</div>
				<?php endif; ?>
			<?php endif; ?>

		</div>
		
		<div class="col-md-3 col-sm-4">
			<div class="list-group">
				<a href="<?php echo smarty_function_url(array('base' => 'videos','strip' => 'c','value' => ''), $this);?>
" <?php if ($this->_tpl_vars['category'] == '0'): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>>
					<?php echo smarty_function_t(array('c' => 'global.all'), $this);?>

				</a>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<a href="<?php echo smarty_function_url(array('base' => "videos/".($this->_tpl_vars['categories'][$this->_sections['i']['index']]['slug']),'strip' => 'c','value' => ''), $this);?>
" <?php if ($this->_tpl_vars['category'] == $this->_tpl_vars['categories'][$this->_sections['i']['index']]['CHID']): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>>
					<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['name']; ?>

				</a>
				<?php endfor; endif; ?>
			</div>
			<div class="well ad-body">
				<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'videos_right')), $this); ?>

				<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
			</div>			
		</div>
	</div>
	<?php if ($this->_tpl_vars['videos']): ?>
		<?php if ($this->_tpl_vars['page_link']): ?>	
			<div style="text-align: center;" class="hidden-xs">
				<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
	<div class="well ad-body">
		<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'videos_bottom')), $this); ?>

		<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
	</div>	
</div>