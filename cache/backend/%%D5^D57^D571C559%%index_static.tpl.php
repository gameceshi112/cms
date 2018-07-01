<?php /* Smarty version 2.6.20, created on 2018-06-30 15:44:42
         compiled from index_static.tpl */ ?>
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
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "warnings.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<div class="grid simple">
					<div class="grid-title no-border">
						<h4>Static <span class="semi-bold">Pages</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="static_pages" method="POST" action="index.php?m=static&page=<?php echo $this->_tpl_vars['page']; ?>
">
							<div class="row">
								<div class="col-xs-12">
									<h3>Edit <span class="semi-bold">Static Pages</span></h3>
									<div class="p-b-10">
										Select a page for editing:
									</div>
									<div class="p-b-20">
										<div class="btn-group"> <a class="btn btn-success dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> <?php if ($this->_tpl_vars['page'] == '2257.tpl'): ?>2257<?php elseif ($this->_tpl_vars['page'] == 'advertise.tpl'): ?>Advertise<?php elseif ($this->_tpl_vars['page'] == 'dmca.tpl'): ?>DMCA<?php elseif ($this->_tpl_vars['page'] == 'faq.tpl'): ?>FAQ<?php elseif ($this->_tpl_vars['page'] == 'privacy.tpl'): ?>Privacy Policy<?php elseif ($this->_tpl_vars['page'] == 'terms.tpl'): ?>Terms and Conditions<?php elseif ($this->_tpl_vars['page'] == 'webmasters.tpl'): ?>Webmasters<?php elseif ($this->_tpl_vars['page'] == 'whatis.tpl'): ?>What Is<?php endif; ?> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<?php if ($this->_tpl_vars['page'] != '2257.tpl'): ?><li><a href="index.php?m=static&page=2257.tpl">2257</a></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'advertise.tpl'): ?><li><a href="index.php?m=static&page=advertise.tpl">Advertise</a></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'dmca.tpl'): ?><li><a href="index.php?m=static&page=dmca.tpl">DMCA</a></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'faq.tpl'): ?><li><a href="index.php?m=static&page=faq.tpl">FAQ</a></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'privacy.tpl'): ?><li><a href="index.php?m=static&page=privacy.tpl">Privacy Policy</a></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'terms.tpl'): ?><li><a href="index.php?m=static&page=terms.tpl">Terms and Conditions</a></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'webmasters.tpl'): ?><li><a href="index.php?m=static&page=webmasters.tpl">Webmasters</a></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'whatis.tpl'): ?><li class="divider"></li><?php endif; ?>
												<?php if ($this->_tpl_vars['page'] != 'whatis.tpl'): ?><li><a href="index.php?m=static&page=whatis.tpl">What Is</a></li><?php endif; ?>
											</ul>
										</div>									

									</div>
									<textarea name="page-content" id="page-content" rows='30' style="width:100%"><?php echo $this->_tpl_vars['spage']; ?>
</textarea>
								</div>								
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_static" value="Save" class="btn btn-success btn-cons">
									<a href="index.php" class="btn btn-white btn-cons">Cancel</a>
								</div>
							</div>							
						</form>
					</div>
				</div>
			</div>			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	