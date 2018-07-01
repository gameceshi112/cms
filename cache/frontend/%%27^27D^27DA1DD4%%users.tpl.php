<?php /* Smarty version 2.6.20, created on 2018-07-01 05:32:39
         compiled from users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'users.tpl', 5, false),array('function', 'url', 'users.tpl', 12, false),array('modifier', 'escape', 'users.tpl', 82, false),array('insert', 'adv', 'users.tpl', 112, false),)), $this); ?>
<div class="container">

	<div class="well well-filters">
			<div class="pull-left">
				<h4><?php echo smarty_function_t(array('c' => 'global.users'), $this);?>
</h4>
			</div>
			<div class="pull-left m-l-20">
				<div class="hidden-xs">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['interest'] == ''): ?><?php echo smarty_function_t(array('c' => 'global.interested'), $this);?>
<?php elseif ($this->_tpl_vars['interest'] == 'Guys'): ?><?php echo smarty_function_t(array('c' => 'global.guys'), $this);?>
<?php elseif ($this->_tpl_vars['interest'] == 'Girls'): ?><?php echo smarty_function_t(array('c' => 'global.girls'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.guys_girls'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['interest'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => ''), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.any'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['interest'] == 'Guys'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => 'Guys'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.guys'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['interest'] == 'Girls'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => 'Girls'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.girls'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['interest'] == 'Guys + Girls'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => 'Guys%2BGirls'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.guys_girls'), $this);?>
</a></li>
						</ul>
					</div>

					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['avatar'] == ''): ?><?php echo smarty_function_t(array('c' => 'global.avatar'), $this);?>
<?php elseif ($this->_tpl_vars['avatar'] == 'yes'): ?><?php echo smarty_function_t(array('c' => 'avatar.yes'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'avatar.no'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['avatar'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'a','value' => ''), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.any'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['avatar'] == 'yes'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'a','value' => 'yes'), $this);?>
"><?php echo smarty_function_t(array('c' => 'avatar.yes'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['avatar'] == 'no'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'a','value' => 'no'), $this);?>
"><?php echo smarty_function_t(array('c' => 'avatar.no'), $this);?>
</a></li>
						</ul>
					</div>					

					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['order'] == 'mr'): ?><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'mv'): ?><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'ma'): ?><?php echo smarty_function_t(array('c' => 'global.most_active'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'tr'): ?><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'mp'): ?><?php echo smarty_function_t(array('c' => 'global.most_popular'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.online_now'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['order'] == 'mr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'mr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mv'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'mv'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'ma'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'ma'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_active'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mp'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'mp'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_popular'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'tr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'tr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'on'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'on'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.online_now'), $this);?>
</a></li>
						</ul>
							
					</div>		
				</div>	
				<div class="visible-xs">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filters <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['interest'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => ''), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.any'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['interest'] == 'Guys'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => 'Guys'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.guys'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['interest'] == 'Girls'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => 'Girls'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.girls'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['interest'] == 'Guys + Girls'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'i','value' => 'Guys%2BGirls'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.guys_girls'), $this);?>
</a></li>
							<li class="divider"></li>
							<li <?php if ($this->_tpl_vars['avatar'] == ''): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'a','value' => ''), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.any'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['avatar'] == 'yes'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'a','value' => 'yes'), $this);?>
"><?php echo smarty_function_t(array('c' => 'avatar.yes'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['avatar'] == 'no'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'a','value' => 'no'), $this);?>
"><?php echo smarty_function_t(array('c' => 'avatar.no'), $this);?>
</a></li>
							<li class="divider"></li>				
							<li <?php if ($this->_tpl_vars['order'] == 'mr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'mr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mv'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'mv'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'ma'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'ma'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_active'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mp'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'mp'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_popular'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'tr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'tr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'on'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'o','value' => 'on'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.online_now'), $this);?>
</a></li>
						</ul>
					</div>				
				</div>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/signup"><span class="hidden-xs"><i class="glyphicon glyphicon-plus"></i> <?php echo smarty_function_t(array('c' => 'user.new'), $this);?>
</span><span class="visible-xs"><i class="glyphicon glyphicon-plus"></i></span></a>
			</div>		
			<div class="clearfix"></div>
	</div>
	
	<div class="row">
		<div class="col-md-9 col-sm-8">
            <?php if ($this->_tpl_vars['users']): ?>
			<div class="well well-sm">
				<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['users_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'user.users'), $this);?>
.
			</div>			
			<div class="row">
			   <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="well well-sm">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
">
								<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
								<span class="video-title title-truncate m-t-5"><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
							</a>
						</div>				
					</div>			
				<?php endfor; endif; ?>
				</div>
            <?php else: ?>
			<div class="well well-sm">
				<span class="text-danger"><?php echo smarty_function_t(array('c' => 'users.none'), $this);?>
.</span>
			</div>
            <?php endif; ?>	

			<?php if ($this->_tpl_vars['users']): ?>
				<?php if ($this->_tpl_vars['page_link']): ?>			
					<div style="text-align: center;" class="visible-xs">
						<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
					</div>
				<?php endif; ?>
			<?php endif; ?>

		</div>
		
		<div class="col-md-3 col-sm-4">
			<div class="list-group">
				<a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'g','value' => ''), $this);?>
" <?php if ($this->_tpl_vars['gender'] == ''): ?> class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.any'), $this);?>
</a></li>							
				<a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'g','value' => 'Male'), $this);?>
"  <?php if ($this->_tpl_vars['gender'] == 'Male'): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.male'), $this);?>
</a></li>
				<a href="<?php echo smarty_function_url(array('base' => 'users','strip' => 'g','value' => 'Female'), $this);?>
"  <?php if ($this->_tpl_vars['gender'] == 'Female'): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.female'), $this);?>
</a></li>	
			</div>
			<div class="well ad-body">
				<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'users_right')), $this); ?>

				<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
			</div>			
		</div>
	</div>
	<?php if ($this->_tpl_vars['users']): ?>
		<?php if ($this->_tpl_vars['page_link']): ?>	
			<div style="text-align: center;" class="hidden-xs">
				<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
	<div class="well ad-body">
		<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'users_bottom')), $this); ?>

		<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
	</div>	
</div>