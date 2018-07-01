<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/channels.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'channels'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-th"></i>
					<span class="title">Categories</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'channels'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'channels'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['module'] == 'list'): ?>active<?php endif; ?>"><a href="channels.php?m=list&all=1">Video Categories</a></li>
					<li class="<?php if ($this->_tpl_vars['module'] == 'listalbum'): ?>active<?php endif; ?>"><a href="channels.php?m=listalbum&all=1">Album Categories</a></li>					
					<li class="<?php if ($this->_tpl_vars['module'] == 'listgame'): ?>active<?php endif; ?>"><a href="channels.php?m=listgame&all=1">Game Categories</a></li>				
				</ul>
			</li>