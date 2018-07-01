<?php /* Smarty version 2.6.20, created on 2018-06-30 18:45:05
         compiled from video_vplayer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'thumb_path', 'video_vplayer.tpl', 7, false),)), $this); ?>
<?php if ($this->_tpl_vars['video']['embed_code'] != ''): ?>
	<div class="video-embedded">
		<?php echo $this->_tpl_vars['video']['embed_code']; ?>

	</div>
<?php else: ?>
<div class="video-container">
	<video id="video" class="video-js vjs-16-9 vjs-big-play-centered vjs-sublime-skin" preload="auto" controls poster="<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thumb_path', 'vid' => $this->_tpl_vars['video']['VID'])), $this); ?>
/default.jpg" <?php if ($this->_tpl_vars['player']['autoplay']): ?><?php echo 'data-setup=\'{"autoplay": true}\''; ?>
<?php else: ?><?php echo 'data-setup=\'{}\''; ?>
<?php endif; ?>>
		<?php if ($this->_tpl_vars['video']['iphone'] == 1): ?>
			<source src="<?php echo $this->_tpl_vars['video_root']; ?>
/iphone/<?php echo $this->_tpl_vars['video']['VID']; ?>
.mp4" type='video/mp4' label='SD' res='720'/>
			<?php if ($this->_tpl_vars['video']['hd'] == 1): ?>
				<source src="<?php echo $this->_tpl_vars['video_root']; ?>
/hd/<?php echo $this->_tpl_vars['video']['VID']; ?>
.mp4" type='video/mp4' label='HD' res ='1080'/>
			<?php endif; ?>
		<?php else: ?>
			<?php if ($this->_tpl_vars['video']['is_link'] != 1): ?>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['video']['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<source src="<?php echo $this->_tpl_vars['video_root']; ?>
/h264/<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['file']; ?>
" type='video/<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['format']; ?>
' label='<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['label']; ?>
' res='<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['height']; ?>
'/>
				<?php endfor; endif; ?>
			<?php else: ?>
				<source src="<?php echo $this->_tpl_vars['video']['link']; ?>
" type='mp4'/>
			<?php endif; ?>
		<?php endif; ?>
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>		
</div>
<?php endif; ?>