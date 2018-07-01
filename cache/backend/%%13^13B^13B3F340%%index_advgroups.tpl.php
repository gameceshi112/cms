<?php /* Smarty version 2.6.20, created on 2018-06-30 15:45:46
         compiled from index_advgroups.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Advertising</span></h3>
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
						<h4>Ad <span class="semi-bold">Zones</span></h4>
					</div>
					<div class="grid-body no-border">
						<div class="row">
							<div class="col-xs-12">
								<form class="form-no-horizontal-spacing search-filters" name="search_advertise" method="POST" action="index.php?m=advgroups">
									<input id="sort" name="sort" type="hidden" value=<?php echo $this->_tpl_vars['option']['sort']; ?>
>
									<input id="order" name="order" type="hidden" value=<?php echo $this->_tpl_vars['option']['order']; ?>
>
									<div class="pull-left">
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#">Order by <span id="sort_items"><?php if ($this->_tpl_vars['option']['sort'] == 'advgrp_name'): ?>Name<?php elseif ($this->_tpl_vars['option']['sort'] == 'advgrp_status'): ?>Status<?php else: ?>ID<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'ID'; document.getElementById('sort').value = 'advgrp_id'" >ID</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Name'; document.getElementById('sort').value = 'advgrp_name'" >Name</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Status'; document.getElementById('sort').value = 'advgrp_status'" >Status</a></li>

											</ul>
										</div>									
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"><span id="order_items"><?php if ($this->_tpl_vars['option']['order'] == 'ASC'): ?>Ascending<?php else: ?>Descending<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Ascending'; document.getElementById('order').value = 'ASC'" >Ascending</a></li>
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Descending'; document.getElementById('order').value = 'DESC'" >Descending</a></li>
											</ul>
										</div>									
									</div>
									<div class="pull-right">
										<button type="button" id="reset_search" name="reset_search" class="btn btn-white btn-cons btn-icon"><i class="fa fa-times"></i></button>									
										<button type="submit" name="search_advertise" class="btn btn-success btn-cons btn-icon m-r-0"><i class="fa fa-search"></i></button>									
									</div>
									<div class="clearfix"></div>
								</form>	
							</div>
						</div>
						<!-- END SEARCH FILTERS -->
						<div class="row">
							<div class="col-xs-12">
								<div>
									<?php if ($this->_tpl_vars['advgroups']): ?>
										<table class="table no-more-tables m-0">
											<thead>
												<tr>
													<th style="width:5%">ID</th>
													<th>NAME</th>
													<th>SIZE</th>
													<th>ROTATE</th>
													<th>STATUS</th>												
													<th>ACTION</th>
												</tr>
											</thead>
											<tbody>
												<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['advgroups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>"><?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_id']; ?>
</td>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
														<a href="index.php?m=advgroupedit&AGID=<?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_id']; ?>
"><?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_name']; ?>
</a>
													</td>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
														<?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['adv_width']; ?>
x<?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['adv_height']; ?>

													</td>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
														<?php if ($this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_rotate'] == '1'): ?>Yes<?php else: ?>No<?php endif; ?>
													</td>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
														<?php if ($this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_status'] == '1'): ?><span class="text-success">Active</span><?php else: ?><span class="text-danger">Inactive</span><?php endif; ?>
													</td>													
													<td class="action <?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
														<div>
															<a class="btn btn-success btn-xs btn-mini" href="index.php?m=advgroupedit&AGID=<?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_id']; ?>
">EDIT</a>
															<?php if ($this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_status'] == '1'): ?>
															<a class="btn btn-danger btn-xs btn-mini" href="index.php?m=advgroups&a=suspend&AGID=<?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_id']; ?>
">SUSPEND</a>
															<?php else: ?>
															<a class="btn btn-success btn-xs btn-mini" href="index.php?m=advgroups&a=activate&AGID=<?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_id']; ?>
">ACTIVATE</a>
															<?php endif; ?>															
														</div>
													</td>									
												</tr>
												<?php endfor; endif; ?>
											</tbody>											
										</table>										
									<?php else: ?>
									<div class="row">
										<div class="col-xs-12">
											<div class="alert alert-info">
												<button class="close" data-dismiss="alert"></button>
												No Groups Found
											</div>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	