<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/blogs.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'blogs'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-pencil"></i>
					<span class="title">Blogs</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'blogs'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'blogs'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'manage-blogs'): ?>open active<?php endif; ?>">
						<a href="blogs.php?m=all&all=1">Manage Blogs</a>
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'blog-requests'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Requests</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'blog-requests'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'blog-requests'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'spam' && $this->_tpl_vars['sub_menu'] == 'blog-requests'): ?>active<?php endif; ?>"><a href="blogs.php?m=spam">Spam</a></li>
						</ul>						
					</li>				
				</ul>
			</li>