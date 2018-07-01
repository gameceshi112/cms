<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/videos.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'videos'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-video-camera"></i>
					<span class="title">Videos</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'videos'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'videos'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'manage-videos'): ?>active<?php endif; ?>">
						<a href="videos.php?m=all&all=1">Manage Videos</a>		
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'requests'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Requests</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'requests'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'requests'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'flagged' && $this->_tpl_vars['sub_menu'] == 'requests'): ?>active<?php endif; ?>"><a href="videos.php?m=flagged&all=1">Flagged</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'spam' && $this->_tpl_vars['sub_menu'] == 'requests'): ?>active<?php endif; ?>"><a href="videos.php?m=spam">Spam</a></li>
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'add-videos'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Add Videos</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'add-videos'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'add-videos'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['plugin_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "leftmenu/plugins/".($this->_tpl_vars['plugin_files'][$this->_sections['i']['index']]), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							<?php endfor; endif; ?>
							<li class="<?php if ($this->_tpl_vars['module'] == 'embed'): ?>active<?php endif; ?>"><a href="videos.php?m=embed">Embed Video</a></li>
						</ul>						
					</li>					
				</ul>
			</li>