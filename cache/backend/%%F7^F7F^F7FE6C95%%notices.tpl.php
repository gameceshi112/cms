<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/notices.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'notices'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-pencil-square-o"></i>
					<span class="title">Notices</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'notices'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'notices'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['module'] == 'list'): ?>active<?php endif; ?>"><a href="notices.php?m=list&all=1">Notices</a></li>
					<li class="<?php if ($this->_tpl_vars['module'] == 'list_images'): ?>active<?php endif; ?>"><a href="notices.php?m=list_images">Notice Images</a></li>
					<li class="<?php if ($this->_tpl_vars['module'] == 'list_categories'): ?>active<?php endif; ?>"><a href="notices.php?m=list_categories&all=1">Notice Categories</a></li>
					<li class="<?php if ($this->_tpl_vars['active_menu'] == 'notices' && $this->_tpl_vars['module'] == 'add'): ?>active<?php endif; ?>"><a href="notices.php?m=add">Add Notice</a></li>
				</ul>
			</li>