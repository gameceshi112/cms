<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from leftmenu/settings.tpl */ ?>
			<li class="<?php if ($this->_tpl_vars['active_menu'] == 'settings'): ?>open<?php endif; ?>">
				<a href="javascript:;">
					<i class="fa fa-gear"></i>
					<span class="title">Settings</span>
					<span class="arrow <?php if ($this->_tpl_vars['active_menu'] == 'settings'): ?>open<?php endif; ?>"></span>					
				</a>
				<ul class="sub-menu" <?php if ($this->_tpl_vars['active_menu'] == 'settings'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'general'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">General</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'general'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'general'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'admin'): ?>active<?php endif; ?>"><a href="index.php?m=admin">Account Settings</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'main'): ?>active<?php endif; ?>"><a href="index.php?m=main">System Settings</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'check'): ?>active<?php endif; ?>"><a href="index.php?m=check">System Check</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'mail'): ?>active<?php endif; ?>"><a href="index.php?m=mail">Mail Configuration</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'static'): ?>active<?php endif; ?>"><a href="index.php?m=static">Static Pages</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'socialsignin'): ?>active<?php endif; ?>"><a href="index.php?m=socialsignin">Social Sign-in</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'captcha'): ?>active<?php endif; ?>"><a href="index.php?m=captcha">Sign-in Captcha</a></li>						
							<li class="<?php if ($this->_tpl_vars['module'] == 'analytics'): ?>active<?php endif; ?>"><a href="index.php?m=analytics">Google Analytics</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'logo'): ?>active<?php endif; ?>"><a href="index.php?m=logo">Logo</a></li>
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'video-conversion'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Video Conversion</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'video-conversion'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'video-conversion'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'media'): ?>active<?php endif; ?>"><a href="index.php?m=media">Configuration</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'encoding'): ?>active<?php endif; ?>"><a href="index.php?m=encoding&all=1">H264 Encodings</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'encodingadd'): ?>active<?php endif; ?>"><a href="index.php?m=encodingadd">Add Encoding</a></li>							
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'security'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Security</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'security'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'security'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'modules'): ?>active<?php endif; ?>"><a href="index.php?m=modules">Modules</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'permissions'): ?>active<?php endif; ?>"><a href="index.php?m=permissions">General Permissions</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'userpermisions'): ?>active<?php endif; ?>"><a href="index.php?m=userpermisions">User Permisions</a></li>							
							<li class="<?php if ($this->_tpl_vars['module'] == 'bandwidth'): ?>active<?php endif; ?>"><a href="index.php?m=bandwidth">Bandwidth</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'sessions'): ?>active<?php endif; ?>"><a href="index.php?m=sessions">Sessions</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'bans'): ?>active<?php endif; ?>"><a href="index.php?m=bans&all=1">Bans</a></li>
						</ul>
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'email-templates'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Email Templates</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'email-templates'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'email-templates'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'emails'): ?>active<?php endif; ?>"><a href="index.php?m=emails">View Email Templates</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'emailadd'): ?>active<?php endif; ?>"><a href="index.php?m=emailadd">Add Email Template</a></li>
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'advertising-settings'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Advertising Settings</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'advertising-settings'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'advertising-settings'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'advgroups'): ?>active<?php endif; ?>"><a href="index.php?m=advgroups&all=1">Ad Zones (Groups)</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'advs'): ?>active<?php endif; ?>"><a href="index.php?m=advs&all=1">Banner Ads</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'advpause'): ?>active<?php endif; ?>"><a href="index.php?m=advpause&all=1">Player Pause Ads</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'advadd'): ?>active<?php endif; ?>"><a href="index.php?m=advadd">Add Banner Ad</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'advpauseadd'): ?>active<?php endif; ?>"><a href="index.php?m=advpauseadd">Add Player Pause Ad</a></li>							
						</ul>						
					</li>
					<li class="<?php if ($this->_tpl_vars['sub_menu'] == 'player-settings'): ?>open active<?php endif; ?>">
						<a href="javascript:;"><span class="title">Player Settings</span><span class="arrow <?php if ($this->_tpl_vars['sub_menu'] == 'player-settings'): ?>open<?php endif; ?>"></span></a>
						<ul class="sub-menu" <?php if ($this->_tpl_vars['sub_menu'] == 'player-settings'): ?>style="overflow: hidden; display: block;"<?php endif; ?>>
							<li class="<?php if ($this->_tpl_vars['module'] == 'player' || $this->_tpl_vars['module'] == 'playeredit'): ?>active<?php endif; ?>"><a href="index.php?m=player">Player Profiles</a></li>
							<li class="<?php if ($this->_tpl_vars['module'] == 'playerlogo'): ?>active<?php endif; ?>"><a href="index.php?m=playerlogo">Player Logo</a></li>							
						</ul>						
					</li>					
				</ul>
			</li>