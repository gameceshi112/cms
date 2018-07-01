<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from header.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>AVS - Admin Dashboard</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
    <link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
	
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>	
	<?php if ($this->_tpl_vars['active_menu'] == 'dashboard'): ?>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-morris-chart/css/morris.css" type="text/css" media="screen">
	<?php endif; ?>
	<?php if (isset ( $this->_tpl_vars['editor'] )): ?>
		<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css">
	<?php endif; ?>	
	<?php if ($this->_tpl_vars['sub_menu'] == 'add-videos' || $this->_tpl_vars['sub_menu'] == 'add-albums' || $this->_tpl_vars['sub_menu'] == 'add-games' || $this->_tpl_vars['module'] == 'advmediaadd' || $this->_tpl_vars['module'] == 'advmediaedit' || $this->_tpl_vars['module'] == 'list' || $this->_tpl_vars['module'] == 'listalbum' || $this->_tpl_vars['module'] == 'listgame' || $this->_tpl_vars['module'] == 'list_images'): ?>
		<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/file-box.css" rel="stylesheet" type="text/css"/>		
	<?php elseif ($this->_tpl_vars['sub_menu'] == 'manage-albums'): ?>
		<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/file-box.css" rel="stylesheet" type="text/css"/>			
		<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/imageareaselect/imgareaselect-animated.css" rel="stylesheet" type="text/css"/>
	<?php elseif ($this->_tpl_vars['sub_menu'] == 'manage-games' || $this->_tpl_vars['sub_menu'] == 'manage-users' || $this->_tpl_vars['sub_menu'] == 'user-requests' || $this->_tpl_vars['sub_menu'] == 'add-users' || $this->_tpl_vars['module'] == 'logo' || $this->_tpl_vars['module'] == 'playerlogo'): ?>
		<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/css/file-box.css" rel="stylesheet" type="text/css"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['sub_menu'] == 'player-settings' || $this->_tpl_vars['sub_menu'] == 'add-videos'): ?>
		<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/boostrap-slider/css/slider.css" rel="stylesheet" type="text/css"/>	
	<?php endif; ?>
</head>
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="navbar-inner">
		<!-- BEGIN NAVIGATION HEADER -->
		<div class="header-seperation"> 
			<!-- BEGIN MOBILE HEADER -->
			<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
				<li class="dropdown">
					<a id="main-menu-toggle" href="#main-menu" class="">
						<div class="iconset top-menu-toggle-white"></div>
					</a>
				</li>		 
			</ul>
			<!-- END MOBILE HEADER -->
			<!-- BEGIN LOGO -->	
			<a href="index.php">
				<img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/img/logo.png" class="logo" alt="" data-src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/img/logo.png" data-src-retina="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/img/logo2x.png" width="117" height="24"/>
			</a>
			<!-- END LOGO --> 
			<!-- BEGIN LOGO NAV BUTTONS -->
			<ul class="nav pull-right notifcation-center">	
				<li class="dropdown" id="header_task_bar">
					<a href="index.php" class="dropdown-toggle active" data-toggle="">
						<div class="iconset top-home"></div>
					</a>
				</li>		        
			</ul>
			<!-- END LOGO NAV BUTTONS -->
		</div>
		<!-- END NAVIGATION HEADER -->
		<!-- BEGIN CONTENT HEADER -->
		<div class="header-quick-nav"> 
			<!-- BEGIN HEADER LEFT SIDE SECTION -->
			<div class="pull-left"> 
				<!-- BEGIN SLIM NAVIGATION TOGGLE -->
				<ul class="nav quick-section">
					<li class="quicklinks">
						<a href="#" class="" id="layout-condensed-toggle">
							<div class="iconset top-menu-toggle-dark"></div>
						</a>
					</li>
				</ul>
				<!-- END SLIM NAVIGATION TOGGLE -->			
			</div>
			<!-- END HEADER LEFT SIDE SECTION -->
			<!-- BEGIN HEADER RIGHT SIDE SECTION -->
			<div class="pull-right"> 
				<div class="chat-toggler">	
					<!-- BEGIN NOTIFICATION CENTER -->
					<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" data-content="" data-toggle="dropdown" data-original-title="Notifications">
						<div class="user-details"> 
							<div class="username">
								<?php if ($this->_tpl_vars['n_total'] > 0): ?><span class="badge badge-important"><?php echo $this->_tpl_vars['n_total']; ?>
</span>&nbsp;<?php endif; ?><?php echo $this->_tpl_vars['admin_name']; ?>

							</div>						
						</div> 
						<div class="iconset top-down-arrow"></div>
					</a>	
					<div id="notification-list" style="display:none">
						<div style="width:300px">						
							<!-- BEGIN NOTIFICATION MESSAGE -->
							<?php if ($this->_tpl_vars['n_total'] > 0): ?>
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['notifications']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<?php if ($this->_tpl_vars['notifications'][$this->_sections['i']['index']]['total'] > 0): ?>							
										<div class="notification-messages danger">										
											<div class="message-wrapper">
												<a href="<?php echo $this->_tpl_vars['notifications'][$this->_sections['i']['index']]['link']; ?>
">
													<div class="heading"><?php echo $this->_tpl_vars['notifications'][$this->_sections['i']['index']]['type1']; ?>
: <span class="normal"><?php echo $this->_tpl_vars['notifications'][$this->_sections['i']['index']]['type2']; ?>
</span></div>
													<div class="description"><?php echo $this->_tpl_vars['notifications'][$this->_sections['i']['index']]['total']; ?>
 <?php if ($this->_tpl_vars['notifications'][$this->_sections['i']['index']]['total'] != 1): ?>requests<?php else: ?>request<?php endif; ?></div>
													<div class="date pull-left">Check</div>										
												</a>
											</div>
											<div class="clearfix"></div>									
										</div>							
									<?php endif; ?>
								<?php endfor; endif; ?>							
							<?php else: ?>
								<div class="notification-messages">										
									<div class="message-wrapper">
											<div class="heading">You are lucky!</div>
											<div class="description">There are no warnings.</div>								
									</div>
									<div class="clearfix"></div>									
								</div>								
							<?php endif; ?>
							<!-- END NOTIFICATION MESSAGE -->	
						</div>				
					</div>
					<!-- END NOTIFICATION CENTER -->			
				</div>
				<!-- BEGIN HEADER NAV BUTTONS -->
				<ul class="nav quick-section">
					<!-- BEGIN SETTINGS -->
					<li class="quicklinks"> 
						<a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">						
							<div class="iconset top-settings-dark"></div> 	
						</a>
						<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
							<li><a href="index.php?m=admin">My Account</a></li>
							<li class="divider"></li>                
							<li><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
						</ul>
					</li>
					<!-- END SETTINGS -->
				</ul>
				<!-- END HEADER NAV BUTTONS -->
			</div>
			<!-- END HEADER RIGHT SIDE SECTION -->
		</div> 
		<!-- END CONTENT HEADER --> 
	</div>
	<!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->
	
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">