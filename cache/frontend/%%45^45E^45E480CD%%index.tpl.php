<?php /* Smarty version 2.6.20, created on 2018-06-30 18:50:27
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'index.tpl', 5, false),array('function', 't', 'index.tpl', 25, false),array('modifier', 'clean', 'index.tpl', 20, false),array('modifier', 'escape', 'index.tpl', 23, false),array('insert', 'duration', 'index.tpl', 28, false),array('insert', 'time_range', 'index.tpl', 35, false),array('insert', 'adv', 'index.tpl', 62, false),)), $this); ?>
<div class="container">

	<div class="well well-filters">
			<div class="pull-left">
				<h4><?php echo smarty_function_translate(array('c' => 'index.videos_being_watched'), $this);?>
</h4>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/videos?o=bw"><span class="hidden-xs"><i class="fa fa-plus"></i> <?php echo smarty_function_translate(array('c' => 'index.videos_being_watched_more'), $this);?>
</span><span class="visible-xs"><i class="fa fa-plus"></i></span></a>
			</div>		
			<div class="clearfix"></div>
	</div>

	<div class="row">
		<div class="col-md-9 col-sm-8">
            <?php if ($this->_tpl_vars['viewed_videos']): ?>
			<div class="row">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['viewed_videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
/video/<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
							<div class="thumb-overlay">
								
								<img src="<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['thumb_img']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="rotate_<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['thumbs']; ?>
_<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['thumb']; ?>
_viewed" class="img-responsive <?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>"/>

								<?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
								<?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['hd'] == 1): ?><div class="hd-text-icon">HD</div><?php endif; ?>
								<div class="duration">
									<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['duration'])), $this); ?>

									<?php echo $this->_tpl_vars['duration']; ?>

								</div>
							</div>
							<span class="video-title title-truncate m-t-5"><?php echo ((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
						</a>
						<div class="video-added">
							<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['addtime'])), $this); ?>

							<?php echo $this->_tpl_vars['addtime']; ?>

						</div>
						<div class="video-views pull-left">
							<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['viewnumber']; ?>
 <?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['viewnumber'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.view'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
<?php endif; ?>
						</div>
						<div class="video-rating pull-right <?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
							<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['rate']; ?>
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
						

		</div>
		
		<div class="col-md-3 col-sm-4">
			<div class="well ad-body">
				<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'index_right')), $this); ?>

				<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
			</div>			
		</div>
	</div>
	
	<div class="well well-filters">
		<div class="pull-left">
			<h4><?php echo smarty_function_translate(array('c' => 'index.most_recent_videos'), $this);?>
</h4>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/videos?o=mr"><span class="hidden-xs"><i class="fa fa-plus"></i> <?php echo smarty_function_translate(array('c' => 'index.most_recent_videos_more'), $this);?>
</span><span class="visible-xs"><i class="fa fa-plus"></i></span></a>
		</div>		
		<div class="clearfix"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
            <?php if ($this->_tpl_vars['recent_videos']): ?>
			<div class="row">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['recent_videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="col-sm-4 col-md-3 col-lg-3">
					<div class="well well-sm">
						<a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
							<div class="thumb-overlay">
								<img src="<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['thumb_img']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="rotate_<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['thumbs']; ?>
_<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['thumb']; ?>
_recent" class="img-responsive <?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><?php endif; ?>"/>
								<?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
								<?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['hd'] == 1): ?><div class="hd-text-icon">HD</div><?php endif; ?>
								<div class="duration">
									<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['duration'])), $this); ?>

									<?php echo $this->_tpl_vars['duration']; ?>

								</div>
							</div>
							<span class="video-title title-truncate m-t-5"><?php echo ((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
						</a>
						<div class="video-added">
							<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['addtime'])), $this); ?>

							<?php echo $this->_tpl_vars['addtime']; ?>

						</div>
						<div class="video-views pull-left">
							<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['viewnumber']; ?>
 <?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['viewnumber'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.view'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
<?php endif; ?>
						</div>
						<div class="video-rating pull-right <?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
							<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['rate']; ?>
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
		</div>
	</div>
	
	<div class="well ad-body">
		<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'index_bottom')), $this); ?>

		<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
	</div>
	
</div>