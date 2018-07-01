<?php /* Smarty version 2.6.20, created on 2018-07-01 04:04:59
         compiled from categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'categories.tpl', 4, false),array('function', 'url', 'categories.tpl', 11, false),array('modifier', 'escape', 'categories.tpl', 30, false),array('insert', 'adv', 'categories.tpl', 99, false),)), $this); ?>
<div class="container">
	<div class="well well-filters">
			<div class="pull-left">
				<h4><?php echo smarty_function_t(array('c' => 'menu.categories'), $this);?>
</h4>
			</div>
			<div class="pull-left m-l-20">
				<?php if ($this->_tpl_vars['video_module']+$this->_tpl_vars['photo_module']+$this->_tpl_vars['game_module'] > '1'): ?>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['section'] == 'v'): ?><?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>
<?php elseif ($this->_tpl_vars['section'] == 'a'): ?><?php echo smarty_function_t(array('c' => 'global.albums'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.games'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<?php if ($this->_tpl_vars['video_module'] == '1'): ?><li <?php if ($this->_tpl_vars['section'] == 'v'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'categories','strip' => 's','value' => ''), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>
</a></li><?php endif; ?>
						<?php if ($this->_tpl_vars['photo_module'] == '1'): ?><li <?php if ($this->_tpl_vars['section'] == 'a'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'categories','strip' => 's','value' => 'a'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.albums'), $this);?>
</a></li><?php endif; ?>
						<?php if ($this->_tpl_vars['game_module'] == '1'): ?><li <?php if ($this->_tpl_vars['section'] == 'g'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'categories','strip' => 's','value' => 'g'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.games'), $this);?>
</a></li><?php endif; ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
	</div>
	
	<div class="row">
		<div class="col-md-9 col-sm-8">
		<?php if ($this->_tpl_vars['section'] == 'a' && $this->_tpl_vars['photo_module'] == '1'): ?>
            <?php if ($this->_tpl_vars['categories']): ?>
			<div class="row">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="col-sm-6 col-md-4 col-lg-4 m-b-20">
					<a href="<?php echo $this->_tpl_vars['relative']; ?>
/albums/<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['slug']; ?>
">
						<div class="thumb-overlay">
							<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/categories/album/<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['CID']; ?>
.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="img-responsive"/>
							<div class="category-title m-t-5">
								<div class="pull-left title-truncate">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

								</div>
								<div class="pull-right">
									<span class="badge"><?php echo $this->_tpl_vars['albums'][$this->_sections['i']['index']]['num_rows']; ?>
</span>
								</div>
							</div>							
						</div>
					</a>
				</div>			
            <?php endfor; endif; ?>
			</div>
            <?php endif; ?>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['section'] == 'v' && $this->_tpl_vars['video_module'] == '1'): ?>
            <?php if ($this->_tpl_vars['categories']): ?>
			<div class="row">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="col-sm-6 col-md-4 col-lg-4 m-b-20">
					<a href="<?php echo $this->_tpl_vars['relative']; ?>
/videos/<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['slug']; ?>
">
						<div class="thumb-overlay">
							<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/categories/video/<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['CHID']; ?>
.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="img-responsive"/>
							<div class="category-title m-t-5">
								<div class="pull-left title-truncate">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

								</div>
								<div class="pull-right">
									<span class="badge"><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['num_rows']; ?>
</span>
								</div>
							</div>							
						</div>
					</a>
				</div>			
            <?php endfor; endif; ?>
			</div>
            <?php endif; ?>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['section'] == 'g' && $this->_tpl_vars['game_module'] == '1'): ?>
            <?php if ($this->_tpl_vars['categories']): ?>
			<div class="row">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="col-sm-6 col-md-4 col-lg-4 m-b-20">
					<a href="<?php echo $this->_tpl_vars['relative']; ?>
/games/<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['slug']; ?>
">
						<div class="thumb-overlay">
							<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/categories/game/<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="img-responsive"/>
							<div class="category-title m-t-5">
								<div class="pull-left title-truncate">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

								</div>
								<div class="pull-right">
									<span class="badge"><?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['num_rows']; ?>
</span>
								</div>
							</div>							
						</div>
					</a>
				</div>				
            <?php endfor; endif; ?>
			</div>
            <?php endif; ?>
		<?php endif; ?>		
		
		</div>
		<div class="col-md-3 col-sm-4">
			<div class="well ad-body">
				<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'categories_right')), $this); ?>

				<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
			</div>			
		</div>
	</div>
	<div class="well ad-body">
		<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'categories_bottom')), $this); ?>

		<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
	</div>	
</div>