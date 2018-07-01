<?php /* Smarty version 2.6.20, created on 2018-06-30 15:44:20
         compiled from index_check.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">General</span></h3>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<ul class="nav nav-tabs" id="tab-01">
					<li <?php if ($this->_tpl_vars['s'] == ''): ?>class="active"<?php endif; ?>><a href="#tab1"><b>Directory Permissions</b>&nbsp;<?php if (! $this->_tpl_vars['err']['directory']): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></a></li>
					<li <?php if ($this->_tpl_vars['s'] == 'fp'): ?>class="active"<?php endif; ?>><a href="#tab2"><b>File Permissions</b>&nbsp;<?php if (! $this->_tpl_vars['err']['file']): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></a></li>
					<li><a href="#tab3"><b>PHP Configuration</b>&nbsp;<?php if (! $this->_tpl_vars['err']['php']): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></a></li>
					<li <?php if ($this->_tpl_vars['s'] == 'cr'): ?>class="active"<?php endif; ?>><a href="#tab4"><b>Conversion Requirements</b>&nbsp;<?php if (! $this->_tpl_vars['err']['requirements'] && ! $this->_tpl_vars['err']['support']): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane<?php if ($this->_tpl_vars['s'] == ''): ?> active<?php endif; ?>" id="tab1">
						<?php if ($this->_tpl_vars['err']['directory']): ?>
							<form class="form-no-horizontal-spacing m-t-10 m-b-10" name="directory_permissions" method="POST" action="index.php?m=check">
								<input type="submit" name="directory_fix" value="Fix Permissions" class="btn btn-success btn-cons">
							</form>
						<?php endif; ?>
						<table class="table table-hover no-more-tables">
							<thead>
								<tr>
									<!-- <th>#</th> -->
									<th>Path</th>
									<th>Check Result</th>								
									<th>Permissions</th>
								</tr>
							</thead>
							<tbody>
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['directory']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<!-- <td><?php echo $this->_sections['i']['index']; ?>
</td> -->
									<td><?php echo $this->_tpl_vars['directory'][$this->_sections['i']['index']]['path']; ?>
 </td>
									<td class="<?php if ($this->_tpl_vars['directory'][$this->_sections['i']['index']]['result'] != 'writable'): ?>text-error<?php endif; ?>"><?php echo $this->_tpl_vars['directory'][$this->_sections['i']['index']]['result']; ?>
</td>								
									<td class="<?php if ($this->_tpl_vars['directory'][$this->_sections['i']['index']]['permission'] != '0777'): ?>text-error<?php endif; ?>">
										<div class="pull-left"><?php echo $this->_tpl_vars['directory'][$this->_sections['i']['index']]['permission']; ?>
</div>
										<div class="pull-right"><?php if ($this->_tpl_vars['directory'][$this->_sections['i']['index']]['permission'] == '0777'): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></div>
									</td>
								</tr>															
								<?php endfor; endif; ?>						
							</tbody>
						</table>					
					</div>
					<div class="tab-pane<?php if ($this->_tpl_vars['s'] == 'fp'): ?> active<?php endif; ?>" id="tab2">
						<?php if ($this->_tpl_vars['err']['file']): ?>
							<form class="form-no-horizontal-spacing m-t-10 m-b-10" name="file_permissions" method="POST" action="index.php?m=check&s=fp">
								<input type="submit" name="file_fix" value="Fix Permissions" class="btn btn-success btn-cons">
							</form>
						<?php endif; ?>
						<table class="table table-hover no-more-tables">
							<thead>
								<tr>
									<!-- <th>#</th> -->
									<th>Path</th>
									<th>Check Result</th>								
									<th>Permissions</th>
								</tr>
							</thead>
							<tbody>
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['file']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<!-- <td><?php echo $this->_sections['i']['index']; ?>
</td> -->
									<td><?php echo $this->_tpl_vars['file'][$this->_sections['i']['index']]['path']; ?>
 </td>
									<td class="<?php if ($this->_tpl_vars['file'][$this->_sections['i']['index']]['result'] != 'writable'): ?>text-error<?php endif; ?>"><?php echo $this->_tpl_vars['file'][$this->_sections['i']['index']]['result']; ?>
</td>								
									<td class="<?php if ($this->_tpl_vars['file'][$this->_sections['i']['index']]['permission'] != '0777'): ?>text-error<?php endif; ?>">
										<div class="pull-left"><?php echo $this->_tpl_vars['file'][$this->_sections['i']['index']]['permission']; ?>
</div>
										<div class="pull-right"><?php if ($this->_tpl_vars['file'][$this->_sections['i']['index']]['permission'] == '0777'): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></div>
									</td>
								</tr>															
								<?php endfor; endif; ?>						
							</tbody>
						</table>
					</div>			
					<div class="tab-pane" id="tab3">
						<table class="table table-hover no-more-tables">
							<thead>
								<tr>
									<th>Name</th>
									<th>Value / Check Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Safe Mode</td>
									<td class="<?php if ($this->_tpl_vars['restrictions']['safe_mode'] != ''): ?>text-error<?php endif; ?>">
										<div class="pull-left"><?php if ($this->_tpl_vars['restrictions']['safe_mode'] == ''): ?>passed<?php else: ?><?php echo $this->_tpl_vars['restrictions']['safe_mode']; ?>
<?php endif; ?></div>
										<div class="pull-right"><?php if ($this->_tpl_vars['restrictions']['safe_mode'] == ''): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></div>
									</td>								
								</tr>
								<tr>
									<td>Open Basedir</td>
									<td class="<?php if ($this->_tpl_vars['restrictions']['open_basedir'] != ''): ?>text-error<?php endif; ?>">
										<div class="pull-left"><?php if ($this->_tpl_vars['restrictions']['open_basedir'] == ''): ?>passed<?php else: ?><?php echo $this->_tpl_vars['restrictions']['open_basedir']; ?>
<?php endif; ?></div>
										<div class="pull-right"><?php if ($this->_tpl_vars['restrictions']['open_basedir'] == ''): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></div>											
									</td>								
								</tr>
								<tr>
									<td>Maximum Upload Filesize</td>
									<td>
										<div class="pull-left"><?php echo $this->_tpl_vars['upload']['max_upload_size']; ?>
</div>
										<div class="pull-right"><i class="fa fa-asterisk text-info"></i></div>
									</td>								
								</tr>
								<tr>
									<td>Maximum Post Filesize</td>
									<td>
										<div class="pull-left"><?php echo $this->_tpl_vars['upload']['max_post_size']; ?>
</div>
										<div class="pull-right"><i class="fa fa-asterisk text-info"></i></div>
									</td>							
								</tr>								
							</tbody>
						</table>
						<div class="pull-right" style="padding-right: 13px">
							<i class="fa fa-asterisk text-info"></i> - maximum file upload size
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tab-pane<?php if ($this->_tpl_vars['s'] == 'cr'): ?> active<?php endif; ?>" id="tab4">
						<?php if ($this->_tpl_vars['err']['requirements']): ?>
							<form class="form-no-horizontal-spacing m-t-10 m-b-10" name="requirements_results" method="POST" action="index.php?m=check&s=cr">
								<input type="submit" name="autofind_paths" value="Autofind Paths" class="btn btn-success btn-cons">
							</form>
						<?php endif; ?>
						<table class="table table-hover no-more-tables">
							<thead>
								<tr>
									<th>Name</th>
									<th>Path</th>
									<th>Check Result</th>								
								</tr>
							</thead>
							<tbody>
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['requirements']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<td><?php echo $this->_tpl_vars['requirements'][$this->_sections['i']['index']]['name']; ?>
</td>								
									<td><?php echo $this->_tpl_vars['requirements'][$this->_sections['i']['index']]['path']; ?>
</td>					
									<td class="<?php if ($this->_tpl_vars['requirements'][$this->_sections['i']['index']]['result'] != 'found'): ?>text-error<?php endif; ?>">
										<div class="pull-left"><?php echo $this->_tpl_vars['requirements'][$this->_sections['i']['index']]['result']; ?>
</div>
										<div class="pull-right"><?php if ($this->_tpl_vars['requirements'][$this->_sections['i']['index']]['result'] == 'found'): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></div>
									</td>
								</tr>															
								<?php endfor; endif; ?>
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['support']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<td><i><?php echo $this->_tpl_vars['support'][$this->_sections['i']['index']]['name']; ?>
</i></td>				
									<td><?php echo $this->_tpl_vars['support'][$this->_sections['i']['index']]['path']; ?>
</td>
									<td class="<?php if ($this->_tpl_vars['support'][$this->_sections['i']['index']]['result'] != 'found'): ?>text-error<?php endif; ?>">
										<div class="pull-left"><?php echo $this->_tpl_vars['support'][$this->_sections['i']['index']]['result']; ?>
</div>
										<div class="pull-right"><?php if ($this->_tpl_vars['support'][$this->_sections['i']['index']]['result'] == 'found'): ?><i class="fa fa-check text-success"></i><?php else: ?><i class="fa fa-exclamation-triangle text-error"></i><?php endif; ?></div>
									</td>
								</tr>															
								<?php endfor; endif; ?>									
							</tbody>
						</table>
							
					</div>
				</div>	
			</div>			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	