<?php /* Smarty version 2.6.20, created on 2018-07-01 04:20:23
         compiled from user_blog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_blog.tpl', 14, false),array('insert', 'time_range', 'user_blog.tpl', 34, false),array('modifier', 'clean', 'user_blog.tpl', 44, false),array('modifier', 'escape', 'user_blog.tpl', 44, false),array('modifier', 'nl2br', 'user_blog.tpl', 48, false),)), $this); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="visible-sm visible-xs">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'quick_jumps.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>		
			<div class="hidden-sm hidden-xs">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user_info.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>
		<div class="col-md-8">
			<div class="well well-filters">
					<div class="pull-left">
						<h4><?php echo $this->_tpl_vars['user']['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?> <?php echo smarty_function_t(array('c' => 'global.blog'), $this);?>
</h4>
					</div>
					<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
						<div class="pull-right">
							<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/add"><span class="hidden-xs"><i class="fa fa-pencil"></i> <?php echo smarty_function_t(array('c' => 'blog.create_new'), $this);?>
</span><span class="visible-xs"><i class="fa fa-pencil"></i></span></a>
						</div>
					<?php endif; ?>					
					<div class="clearfix"></div>
			</div>
            <?php if ($this->_tpl_vars['blogs']): ?>
			<div class="well well-sm">
				<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['blogs_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'blog.blog_art'), $this);?>
.
			</div>			
			<div class="row">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['blogs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="pull-left">
								<i class="fa fa-pencil"></i>&nbsp;
								<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['addtime'])), $this); ?>

								<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['total_views']; ?>
 <?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
 <strong>&middot;</strong> <?php echo $this->_tpl_vars['addtime']; ?>
								
							</div>
							<div class="pull-right">					
							
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-body">
							<div class="blog_header">
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>							
							</div>
							
							<div class="blog_content">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

							</div>
						</div>
						
						<div class="panel-footer">

							<div class="pull-left">
								<i class="fa fa-comment"></i> <a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['total_comments']; ?>
</a> <strong>&middot;</strong>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'blog.post_comment'), $this);?>
</a>
							</div>
							<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
								<div class="pull-right">
									<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/edit/<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a> <strong>&middot;</strong>
									<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/delete/<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
								</div>
							<?php endif; ?>
							<div class="clearfix"></div>
						</div>
					</div>				
				</div>			
            <?php endfor; endif; ?>
			</div>
			<?php if ($this->_tpl_vars['page_link']): ?>
				<div style="text-align: center;" class="visible-xs">
					<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
				</div>
				<div style="text-align: center;" class="hidden-xs">
					<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
				</div>
			<?php endif; ?>
            <?php else: ?>
			<div class="well well-sm">
				<span class="text-danger"><?php echo smarty_function_t(array('c' => 'blog.none'), $this);?>
.</span>
			</div>
            <?php endif; ?>	
		</div>
	</div>
</div>
