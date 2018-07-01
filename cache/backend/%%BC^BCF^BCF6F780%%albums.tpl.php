<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/albums.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'albums'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-camera"></i>
					<span class="title">Albums</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'albums'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'albums'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'manage-albums'): ?>active<?php endif; ?>">
						<a href="albums.php?m=all&all=1">Manage Albums</a>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'album-requests'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Requests</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'album-requests'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'album-requests'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'flagged' && $this->_tpl_vars['sub_menu'] == 'album-requests'): ?>active<?php endif; ?>"><a href="albums.php?m=flagged&all=1">Flagged</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'spam' && $this->_tpl_vars['sub_menu'] == 'album-requests'): ?>active<?php endif; ?>"><a href="albums.php?m=spam">Spam</a></li>
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'add-albums'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Add Albums</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'add-albums'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'add-albums'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'add-albums' && $this->_tpl_vars['module'] == 'add'): ?>active<?php endif; ?>"><a href="albums.php?m=add">Add Album</a></li>
						</ul>						
					</li>					
				</ul>
			</li>