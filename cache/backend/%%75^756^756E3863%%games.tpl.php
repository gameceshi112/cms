<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/games.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'games'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-gamepad"></i>
					<span class="title">Games</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'games'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'games'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'manage-games'): ?>open active<?php endif; ?>">
						<a href="games.php?m=all&all=1">Manage Games</a>
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'game-requests'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Requests</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'game-requests'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'game-requests'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'flagged' && $this->_tpl_vars['sub_menu'] == 'game-requests'): ?>active<?php endif; ?>"><a href="games.php?m=flagged&all=1">Flagged</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'spam' && $this->_tpl_vars['sub_menu'] == 'game-requests'): ?>active<?php endif; ?>"><a href="games.php?m=spam">Spam</a></li>
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'add-games'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Add Games</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'add-games'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'add-games'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'add-games' && $this->_tpl_vars['module'] == 'add'): ?>active<?php endif; ?>"><a href="games.php?m=add">Add Game</a></li>
						</ul>						
					</li>					
				</ul>
			</li>