<?php /* Smarty version 2.6.20, created on 2018-07-01 04:05:09
         compiled from quick_jumps.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'quick_jumps.tpl', 3, false),array('modifier', 'truncate', 'quick_jumps.tpl', 3, false),)), $this); ?>
	<div class="well well-filters">
		<div class="btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><?php if ($_SESSION['username'] == $this->_tpl_vars['username']): ?><?php echo smarty_function_t(array('c' => 'my.quick_jumps'), $this);?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 16, '...', true) : smarty_modifier_truncate($_tmp, 16, '...', true)); ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?> <?php echo smarty_function_t(array('c' => 'user.quick_jumps'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
"><?php echo smarty_function_t(array('c' => 'user.profile'), $this);?>
</a></li>		
				<?php if ($this->_tpl_vars['blog_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/blog"><?php echo smarty_function_t(array('c' => 'global.blog'), $this);?>
</a></li><?php endif; ?>
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/playlist"><?php echo smarty_function_t(array('c' => 'user.playlist'), $this);?>
</a></li>				
				<?php if ($this->_tpl_vars['video_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/videos"><?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['photo_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/albums"><?php echo smarty_function_t(array('c' => 'user.photo_albums'), $this);?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['game_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/games"><?php echo smarty_function_t(array('c' => 'global.games'), $this);?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['video_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/favorite/videos"><?php echo smarty_function_t(array('c' => 'global.favorite'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['photo_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/favorite/photos"><?php echo smarty_function_t(array('c' => 'global.favorite'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.photos'), $this);?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['game_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/favorite/games"><?php echo smarty_function_t(array('c' => 'global.favorite'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.games'), $this);?>
</a></li><?php endif; ?>
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/wall"><?php echo smarty_function_t(array('c' => 'user.wall'), $this);?>
</a></li>                
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/friends"><?php echo smarty_function_t(array('c' => 'user.friends'), $this);?>
</a></li>
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/subscribers"><?php echo smarty_function_t(array('c' => 'user.subscribers'), $this);?>
</a></li>
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/subscriptions"><?php echo smarty_function_t(array('c' => 'user.subscriptions'), $this);?>
</a></li>
				<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/mail"><?php echo smarty_function_t(array('c' => 'global.inbox'), $this);?>
</a></li><?php endif; ?>		
			</ul>
		</div>
	</div>