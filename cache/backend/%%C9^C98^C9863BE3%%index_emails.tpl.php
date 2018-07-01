<?php /* Smarty version 2.6.20, created on 2018-06-30 15:45:38
         compiled from index_emails.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Email Templates</span></h3>
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
						<h4>Email <span class="semi-bold">Templates</span></h4>
					</div>
					<div class="grid-body no-border">
						<div class="row">
							<div class="col-xs-12">
								<h3>All <span class="semi-bold">Templates</span></h3>
								<?php if ($this->_tpl_vars['emails']): ?>
									<table class="table no-more-tables m-0">
										<thead>
											<tr>
												<th style="width:5%">ID</th>
												<th>SUBJECT</th>
												<th>COMMENTS</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
											<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['emails']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
												<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>"><?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['email_id']; ?>
</td>
												<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>"><?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['email_subject']; ?>
</td>
												<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>"><?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['comment']; ?>
</td>
												<td class="action <?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
													<div>
													<a class="btn btn-success btn-xs btn-mini" href="index.php?m=emailedit&EID=<?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['email_id']; ?>
">EDIT</a>
													<a class="btn btn-danger btn-xs btn-mini" href="index.php?m=emails&a=delete&EID=<?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['email_id']; ?>
" onClick="javascript:return confirm('Are you sure you want to delete this email?');">DELETE</a>
													</div>
												</td>									
											</tr>
											<?php endfor; endif; ?>
										</tbody>											
									</table>										
								<?php else: ?>
									<div class="alert alert-info">
										<button class="close" data-dismiss="alert"></button>
										No Emails Available
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