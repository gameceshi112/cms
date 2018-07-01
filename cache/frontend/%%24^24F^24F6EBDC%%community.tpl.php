<?php /* Smarty version 2.6.20, created on 2018-07-01 04:05:07
         compiled from community.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'community.tpl', 9, false),array('modifier', 'escape', 'community.tpl', 22, false),array('insert', 'adv', 'community.tpl', 85, false),)), $this); ?>
<div class="container">

	<div class="row">
		<div class="col-md-9 col-sm-8">

		<?php if ($this->_tpl_vars['popular_users']): ?>
			<div class="well well-filters">
					<div class="pull-left">
						<h4><?php echo smarty_function_t(array('c' => 'community.most_popular'), $this);?>
</h4>
					</div>
					<div class="pull-right">
						<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=mp"><span class="hidden-xs"><i class="fa fa-plus"></i> <?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</span><span class="visible-xs"><i class="fa fa-plus"></i></span></a>
					</div>		
					<div class="clearfix"></div>
			</div>
			<div class="row">
           <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['popular_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)8;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 <?php if ($this->_sections['i']['index'] > 5): ?>hidden-xs hidden-sm<?php endif; ?>">
					<div class="well well-sm">
						<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['username']; ?>
">
							<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
							<span class="video-title title-truncate m-t-5"><?php echo ((is_array($_tmp=$this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
						</a>
					</div>				
				</div>			
            <?php endfor; endif; ?>
			</div>
        <?php endif; ?>

		<?php if ($this->_tpl_vars['female_users']): ?>
			<div class="well well-filters">
					<div class="pull-left">
						<h4><?php echo smarty_function_t(array('c' => 'community.new_female'), $this);?>
</h4>
					</div>
					<div class="pull-right">
						<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=mr&amp;g=Female"><span class="hidden-xs"><i class="fa fa-plus"></i> <?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</span><span class="visible-xs"><i class="fa fa-plus"></i></span></a>
					</div>		
					<div class="clearfix"></div>
			</div>
			<div class="row">
           <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['female_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)8;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 <?php if ($this->_sections['i']['index'] > 5): ?>hidden-xs hidden-sm<?php endif; ?>">
					<div class="well well-sm">
						<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['female_users'][$this->_sections['i']['index']]['username']; ?>
">
							<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['female_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-Female.gif<?php else: ?><?php echo $this->_tpl_vars['female_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['female_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
							<span class="video-title title-truncate m-t-5"><?php echo ((is_array($_tmp=$this->_tpl_vars['female_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
						</a>
					</div>				
				</div>			
            <?php endfor; endif; ?>
			</div>
        <?php endif; ?>
		 <div class="clearfix"></div>

		<?php if ($this->_tpl_vars['male_users']): ?>
			<div class="well well-filters">
					<div class="pull-left">
						<h4><?php echo smarty_function_t(array('c' => 'community.new_male'), $this);?>
</h4>
					</div>
					<div class="pull-right">
						<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=mr&amp;g=Male"><span class="hidden-xs"><i class="fa fa-plus"></i> <?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</span><span class="visible-xs"><i class="fa fa-plus"></i></span></a>
					</div>		
					<div class="clearfix"></div>
			</div>
			<div class="row">
           <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['male_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)8;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 <?php if ($this->_sections['i']['index'] > 5): ?>hidden-xs hidden-sm<?php endif; ?>">
					<div class="well well-sm">
						<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['male_users'][$this->_sections['i']['index']]['username']; ?>
">
							<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['male_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-Male.gif<?php else: ?><?php echo $this->_tpl_vars['male_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['male_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
							<span class="video-title title-truncate m-t-5"><?php echo ((is_array($_tmp=$this->_tpl_vars['male_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
						</a>
					</div>				
				</div>			
            <?php endfor; endif; ?>
			</div>
        <?php endif; ?>
		 <div class="clearfix"></div>		 
		 
		</div>
		
		<div class="col-md-3 col-sm-4">
			<div class="well ad-body">
				<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'community_right')), $this); ?>

				<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
			</div>			
		</div>
	</div>

	
	<div class="well ad-body">
		<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'community_bottom')), $this); ?>

		<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
	</div>	
</div>