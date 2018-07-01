<?php /* Smarty version 2.6.20, created on 2018-06-30 15:39:09
         compiled from videos_spam.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'videos_spam.tpl', 40, false),array('modifier', 'nl2br', 'videos_spam.tpl', 40, false),array('modifier', 'date_format', 'videos_spam.tpl', 50, false),array('insert', 'uid_to_name', 'videos_spam.tpl', 46, false),)), $this); ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Videos - <span class="semi-bold">Requests / Spam</span></h3>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<div class="grid simple">
					<div class="grid-title no-border">
						<h4>Video <span class="semi-bold">Comments</span></h4>						
					</div>				
					<div class="grid-body no-border">
						<div class="row">
							<div class="col-xs-12">
								<?php if ($this->_tpl_vars['total_spam'] >= 1 && $this->_tpl_vars['comments']): ?>
									<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>
									<table class="table no-more-tables m-0">
										<thead>
											<tr>
												<th>ID</th>
												<th>COMMENT</th>
												<th>USER</th>
												<th>REPORTER</th>
												<th>REPORT DATE</th>
												<th>ACTIONS</th>									
											</tr>
										</thead>
										<tbody>
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['comments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<tr>
											<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
												<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>

											</td>
											<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
												<span class="text-danger"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comments'][$this->_sections['i']['index']]['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
											</td>
											<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
												<a href="users.php?m=view&UID=<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['UID']; ?>
" class="text-info"><?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['username']; ?>
</a>
											</td>
											<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
												<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_name', 'assign' => 'uname', 'uid' => $this->_tpl_vars['comments'][$this->_sections['i']['index']]['RID'])), $this); ?>

												<a href="users.php?m=view&UID=<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['RID']; ?>
" class="text-warning"><?php echo $this->_tpl_vars['uname']; ?>
</a>
											</td>
											<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['comments'][$this->_sections['i']['index']]['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

											</td>
											<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">												
												<a class="btn btn-success btn-xs btn-mini" href="videos.php?m=commentedit&VID=<?php echo $this->_tpl_vars['VID']; ?>
&COMID=<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>
">EDIT</a>
												<a class="btn btn-danger btn-xs btn-mini" href="videos.php?m=spam<?php if ($this->_tpl_vars['page'] != ''): ?>&page=<?php echo $this->_tpl_vars['page']; ?>
<?php endif; ?>&a=delete&CID=<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>
" onClick="javascript:return confirm('Are you sure you want to delete this comment?');">DELETE</a>
												<a class="btn btn-warning btn-xs btn-mini" href="videos.php?m=spam<?php if ($this->_tpl_vars['page'] != ''): ?>&page=<?php echo $this->_tpl_vars['page']; ?>
<?php endif; ?>&a=unspam&SID=<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['spam_id']; ?>
" onClick="javascript:return confirm('Are you sure you want to unspam this comment?');">UNSPAM</a><br>
											</td>
										</tr>
										<?php endfor; endif; ?>
										</tbody>
									</table>
									<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>										
								<?php else: ?>
									<div class="alert alert-info">
										<button class="close" data-dismiss="alert"></button>
										No Spam Reported
									</div>										
								<?php endif; ?>				
							</div>
						</div>
					</div>
				</div>
			</div>			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	