<?php /* Smarty version 2.6.20, created on 2018-06-30 17:27:19
         compiled from index.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Dashboard</h3>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<div class="row m-b-15"> 
					<div class="col-lg-3 col-md-6">
						<div class="tiles blue m-b-10">
							<div class="tiles-body">
								<div class="controller"> <a href="javascript:;" class="remove"></a> </div>				
								<div class="tiles-title text-black">VIDEOS </div>
								<div class="heading"> <a href="videos.php?m=all&all=1" class="text-white"><span class="animate-number" data-value="<?php echo $this->_tpl_vars['videos']['total']; ?>
" data-animation-duration="700">0</span></a> </div>								
								<div class="widget-stats">
									<div class="wrapper transparent"> 
										<span class="item-title">Active</span> 
										<a href="videos.php?m=all&status=1">										
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['videos']['active']; ?>
" data-animation-duration="700">0</span>
										</a>
									</div>
								</div>
								<div class="widget-stats">
									<div class="wrapper last">
										<span class="item-title">Suspended</span> 
										<a href="videos.php?m=all&status=0">
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['videos']['suspended']; ?>
" data-animation-duration="700">0</span> 
										</a>
									</div>
								</div>					
							</div>			
						</div>	
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="tiles green m-b-10">
							<div class="tiles-body">
								<div class="controller"> <a href="javascript:;" class="remove"></a> </div>				
								<div class="tiles-title text-black">ALBUMS </div>
								<div class="heading"> <a href="albums.php?m=all&all=1" class="text-white"><span class="animate-number" data-value="<?php echo $this->_tpl_vars['albums']['total']; ?>
" data-animation-duration="700">0</span></a> </div>								
								<div class="widget-stats">
									<div class="wrapper transparent"> 
										<span class="item-title">Active</span> 
										<a href="albums.php?m=all&status=1">										
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['albums']['active']; ?>
" data-animation-duration="700">0</span>
										</a>
									</div>
								</div>
								<div class="widget-stats">
									<div class="wrapper last">
										<span class="item-title">Suspended</span> 
										<a href="albums.php?m=all&status=0">
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['albums']['suspended']; ?>
" data-animation-duration="700">0</span> 
										</a>
									</div>
								</div>					
							</div>			
						</div>	
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="tiles red m-b-10">
							<div class="tiles-body">
								<div class="controller"> <a href="javascript:;" class="remove"></a> </div>				
								<div class="tiles-title text-black">GAMES </div>
								<div class="heading"> <a href="games.php?m=all&all=1" class="text-white"><span class="animate-number" data-value="<?php echo $this->_tpl_vars['games']['total']; ?>
" data-animation-duration="700">0</span></a> </div>								
								<div class="widget-stats">
									<div class="wrapper transparent"> 
										<span class="item-title">Active</span> 
										<a href="games.php?m=all&status=1">										
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['games']['active']; ?>
" data-animation-duration="700">0</span>
										</a>
									</div>
								</div>
								<div class="widget-stats">
									<div class="wrapper last">
										<span class="item-title">Suspended</span> 
										<a href="games.php?m=all&status=0">
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['games']['suspended']; ?>
" data-animation-duration="700">0</span> 
										</a>
									</div>
								</div>					
							</div>			
						</div>	
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="tiles purple m-b-10">
							<div class="tiles-body">
								<div class="controller"> <a href="javascript:;" class="remove"></a> </div>				
								<div class="tiles-title text-black">USERS </div>
								<div class="heading"> <a href="users.php?m=all&all=1" class="text-white"><span class="animate-number" data-value="<?php echo $this->_tpl_vars['users']['total']; ?>
" data-animation-duration="700">0</span></a> </div>								
								<div class="widget-stats">
									<div class="wrapper transparent"> 
										<span class="item-title">Active</span> 
										<a href="users.php?m=all&status=1">										
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['users']['active']; ?>
" data-animation-duration="700">0</span>
										</a>
									</div>
								</div>
								<div class="widget-stats">
									<div class="wrapper last">
										<span class="item-title">Suspended</span> 
										<a href="users.php?m=all&status=0">
											<span class="item-count animate-number semi-bold" data-value="<?php echo $this->_tpl_vars['users']['suspended']; ?>
" data-animation-duration="700">0</span> 
										</a>
									</div>
								</div>					
							</div>			
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="grid simple">
							<div class="grid-title no-border">
								<div class="tools"> <a href="javascript:;" class="remove"></a> </div>
							</div>
							<div class="grid-body no-border">
								<div class="row">
									<div class="col-xs-12">
										<h4>File <span class="semi-bold">Uploads</span></h4>
										<p><?php echo $this->_tpl_vars['v_total']; ?>
 <?php if ($this->_tpl_vars['v_total'] != 1): ?>videos<?php else: ?>video<?php endif; ?>, <?php echo $this->_tpl_vars['a_total']; ?>
 <?php if ($this->_tpl_vars['a_total'] != 1): ?>albums<?php else: ?>album<?php endif; ?>, <?php echo $this->_tpl_vars['g_total']; ?>
 <?php if ($this->_tpl_vars['g_total'] != 1): ?>games<?php else: ?>game<?php endif; ?> have been added in the last 7 days</p>
										<div id="file-uploads"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="grid simple">
							<div class="grid-title no-border">
								<div class="tools"> <a href="javascript:;" class="remove"></a> </div>
							</div>
							<div class="grid-body no-border">
								<div class="row">
									<div class="col-xs-12">
										<h4>Member <span class="semi-bold">Registrations</span></h4>
										<p><?php echo $this->_tpl_vars['m_total']; ?>
 new <?php if ($this->_tpl_vars['m_total'] != 1): ?>members<?php else: ?>member<?php endif; ?> in the last 7 days</p>
										<div id="member-registration"></div>
									</div>
								</div>
							</div>
						</div>
					</div>						
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-6">
						<div class="tiles white m-b-25">
							<div class="tiles-body">
								<div class="controller">								
									<a href="javascript:;" class="remove"></a>									
								</div>
								<div class="tiles-title">
									NEWS
								</div>							
								<br />
								<div class="row-fluid">
									<div class="slim-scroller" data-height="249px" data-always-visible="1">
										<?php echo $this->_tpl_vars['news']; ?>

									</div>
								</div>
							</div>
						</div>
					</div>		  			
			
					<div class="col-md-4 col-sm-6">
						<div class="form-row">
							<div class="tiles white m-b-25">
								<div class="tiles-body">
									<div class="controller"> <a href="javascript:;" class="remove"></a> </div>
									<div class="tiles-title text-black"> SERVER LOAD </div>
									<div class="heading"> <span class="text-black"><i class="fa fa-bar-chart-o p-r-10"></i></span><span class="<?php if ($this->_tpl_vars['load'][0] < 10): ?>text-green<?php elseif ($this->_tpl_vars['load'][0] < 15): ?>text-yellow<?php else: ?>text-red<?php endif; ?>"><?php echo $this->_tpl_vars['load'][0]; ?>
</span> </div>
									<div class="description text-black">
										Last 5 minutes avg: <span class="bold <?php if ($this->_tpl_vars['load'][1] < 10): ?>text-green<?php elseif ($this->_tpl_vars['load'][1] < 15): ?>text-yellow<?php else: ?>text-red<?php endif; ?>"><?php echo $this->_tpl_vars['load'][1]; ?>
</span><br />
										Last 15 minutes avg: <span class="bold <?php if ($this->_tpl_vars['load'][2] < 10): ?>text-green<?php elseif ($this->_tpl_vars['load'][2] < 15): ?>text-yellow<?php else: ?>text-red<?php endif; ?>"><?php echo $this->_tpl_vars['load'][2]; ?>
</span>
									</div>
								</div>
							</div>
						</div>
					<div class="form-row">			
						<div class="tiles white m-b-25">
							<div class="tiles-body">
								<div class="controller"> <a href="javascript:;" class="remove"></a> </div>
								<div class="tiles-title text-black"> VERSION INFO </div>
								<div class="heading"> <span class="text-black"><i class="fa fa-info p-r-10"></i></span><span <?php if ($this->_tpl_vars['version_lva'] > $this->_tpl_vars['version_c']): ?>class="text-red"<?php else: ?>class="text-green"<?php endif; ?>><?php echo $this->_tpl_vars['version_c']; ?>
</span> </div>
								<div class="description"><span class="text-black">Last version available: <?php echo $this->_tpl_vars['version_lva']; ?>
</span></div>
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