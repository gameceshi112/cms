<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/users.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'users'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-users"></i>
					<span class="title">Users</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'users'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'users'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'manage-users'): ?>open active<?php endif; ?>">
						<a href="users.php?m=all&all=1">Manage Users</a>
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'user-requests'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Requests</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'user-requests'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'user-requests'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'flagged' && $this->_tpl_vars['sub_menu'] == 'user-requests'): ?>active<?php endif; ?>"><a href="users.php?m=flagged&all=1">Flagged</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'spam' && $this->_tpl_vars['sub_menu'] == 'user-requests'): ?>active<?php endif; ?>"><a href="users.php?m=spam">Spam</a></li>							
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'emails'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Emails</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'emails'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'emails'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'mail'): ?>active<?php endif; ?>"><a href="users.php?m=mail">Email User</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'mailall'): ?>active<?php endif; ?>"><a href="users.php?m=mailall">Email All Users</a></li>							
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'add-users'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Add Users</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'add-users'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'add-users'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'add'): ?>active<?php endif; ?>"><a href="users.php?m=add">Add User</a></li>		
						</ul>						
					</li>					
				</ul>
			</li>