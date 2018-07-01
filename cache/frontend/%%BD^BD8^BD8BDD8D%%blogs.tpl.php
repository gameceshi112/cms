<?php /* Smarty version 2.6.20, created on 2018-07-01 04:04:58
         compiled from blogs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'blogs.tpl', 5, false),array('function', 'url', 'blogs.tpl', 13, false),array('modifier', 'truncate', 'blogs.tpl', 66, false),array('modifier', 'clean', 'blogs.tpl', 76, false),array('modifier', 'escape', 'blogs.tpl', 76, false),array('modifier', 'nl2br', 'blogs.tpl', 80, false),array('insert', 'time_range', 'blogs.tpl', 69, false),array('insert', 'adv', 'blogs.tpl', 112, false),)), $this); ?>
<div class="container">

	<div class="well well-filters">
			<div class="pull-left">
				<h4><?php echo smarty_function_t(array('c' => 'menu.blogs'), $this);?>
</h4>
			</div>
			<div class="pull-left m-l-20">
				<div class="hidden-xs">
					
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['timeframe'] == 'a'): ?><?php echo smarty_function_t(array('c' => 'global.timeline'), $this);?>
<?php elseif ($this->_tpl_vars['timeframe'] == 't'): ?><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.today'), $this);?>
<?php elseif ($this->_tpl_vars['timeframe'] == 'w'): ?><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_week'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_month'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['timeframe'] == 'a'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 'a'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['timeframe'] == 't'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 't'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.today'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'w'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 'w'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_week'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'm'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 'm'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_month'), $this);?>
</a></li>
						</ul>
					</div>					

					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['order'] == 'bw'): ?><?php echo smarty_function_t(array('c' => 'global.being_watched'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'mr'): ?><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'mv'): ?><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'tr'): ?><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'md'): ?><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.top_favorites'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['order'] == 'mr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 'o','value' => 'mr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mv'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 'o','value' => 'mv'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'md'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 'o','value' => 'md'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
</a></li>
						</ul>
					</div>					
				</div>	
				<div class="visible-xs">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filters <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li <?php if ($this->_tpl_vars['timeframe'] == 'a'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 'a'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>							
							<li <?php if ($this->_tpl_vars['timeframe'] == 't'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 't'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.today'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'w'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 'w'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_week'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['timeframe'] == 'm'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 't','value' => 'm'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.added'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.this_month'), $this);?>
</a></li>
							<li class="divider"></li>				
					
							<li <?php if ($this->_tpl_vars['order'] == 'mr'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 'o','value' => 'mr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'mv'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 'o','value' => 'mv'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_viewed'), $this);?>
</a></li>
							<li <?php if ($this->_tpl_vars['order'] == 'md'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => 'blogs','strip' => 'o','value' => 'md'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
</a></li>

						</ul>
					</div>				
				</div>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/add"><span class="hidden-xs"><i class="fa fa-pencil"></i> <?php echo smarty_function_t(array('c' => 'blog.create_new'), $this);?>
</span><span class="visible-xs"><i class="fa fa-pencil"></i></span></a>
			</div>		
			<div class="clearfix"></div>
	</div>
	
	<div class="row">
		<div class="col-md-9 col-sm-8">
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
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['username']; ?>
"><img class="small-avatar" src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['blogs'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" /><span><?php echo ((is_array($_tmp=$this->_tpl_vars['blogs'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...") : smarty_modifier_truncate($_tmp, 25, "...")); ?>
</span></a>
							</div>
							<div class="pull-right">					
								<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['addtime'])), $this); ?>

								<?php echo $this->_tpl_vars['blogs'][$this->_sections['i']['index']]['total_views']; ?>
 <?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
 <strong>&middot;</strong> <?php echo $this->_tpl_vars['addtime']; ?>
								
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

						
					</div>				
				</div>			
            <?php endfor; endif; ?>
			
			</div>
            <?php else: ?>
			<div class="well well-sm">
				<span class="text-danger"><?php echo smarty_function_t(array('c' => 'blog.none'), $this);?>
.</span>
			</div>
            <?php endif; ?>	

			<?php if ($this->_tpl_vars['blogs']): ?>		
				<div style="text-align: center;" class="visible-xs">
					<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
				</div>
			<?php endif; ?>

		</div>
		
		<div class="col-md-3 col-sm-4">
			<div class="well ad-body">
				<p class="ad-title"><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</p>
				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'blogs_right')), $this); ?>

				<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
			</div>			
		</div>
	</div>
	<?php if ($this->_tpl_vars['blogs']): ?>
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
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'blogs_bottom')), $this); ?>

		<?php if ($this->_tpl_vars['adv']): ?><?php echo $this->_tpl_vars['adv']; ?>
<?php endif; ?>
	</div>	
</div>