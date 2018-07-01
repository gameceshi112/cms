<?php /* Smarty version 2.6.20, created on 2018-06-30 15:38:59
         compiled from footer.tpl */ ?>
</div>
<!-- END CONTENT --> 
<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS --> 	
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>

<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<?php if (isset ( $this->_tpl_vars['editor'] )): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
	<script> $('#page-content').wysihtml5(); </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['module'] == 'list'): ?>
	<script type="text/javascript">
		var category_section = "video";
	</script>
<?php elseif ($this->_tpl_vars['module'] == 'listalbum'): ?>
	<script type="text/javascript">
		var category_section = "album";
	</script>
<?php elseif ($this->_tpl_vars['module'] == 'listgame'): ?>
	<script type="text/javascript">
		var category_section = "game";
	</script>
<?php endif; ?>

<?php if ($this->_tpl_vars['sub_menu'] == 'general'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.general.js" type="text/javascript"></script>
	<?php if ($this->_tpl_vars['module'] == 'logo'): ?>
		<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>	
	<?php endif; ?>
	<?php if ($this->_tpl_vars['module'] == 'check'): ?>
		<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/tabs_accordian.js" type="text/javascript"></script>		
	<?php endif; ?>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'video-conversion'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.video-conversion.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'security'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.security.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['module'] == 'advgroups'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.ad-zones.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['module'] == 'advs'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.banner-ads.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['module'] == 'advadd' || $this->_tpl_vars['module'] == 'advedit'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.banner-add.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['module'] == 'advpause'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.pause-ads.js" type="text/javascript"></script>	
<?php elseif ($this->_tpl_vars['module'] == 'advpauseadd' || $this->_tpl_vars['module'] == 'advpauseedit'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.pause-add.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'email-templates'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.email-templates.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'player-settings'): ?>
	<?php if ($this->_tpl_vars['player']['profile']): ?>
		<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.player-settings.js" type="text/javascript"></script>
		<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/boostrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>		
	<?php elseif ($this->_tpl_vars['module'] == 'playerlogo'): ?>
		<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>	
	<?php endif; ?>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'manage-videos'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-videos.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.comments.js" type="text/javascript"></script>	
	<script type="text/javascript">
		var conf_remove_bb = "<?php echo $this->_tpl_vars['thumbnail_remove_bb']; ?>
";
		var conf_keep_ar   = "<?php echo $this->_tpl_vars['thumbnail_keep_ar']; ?>
";
	</script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'requests'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-videos.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.requests.js" type="text/javascript"></script>	
<?php elseif ($this->_tpl_vars['sub_menu'] == 'add-videos'): ?>
	<script type="text/javascript">
		var grabbing = "<?php echo $this->_tpl_vars['grabbing']; ?>
";
		var path = "<?php echo $this->_tpl_vars['path']; ?>
";
		var filesize = "<?php echo $this->_tpl_vars['filesize']; ?>
";
	</script>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.add-videos.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/boostrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'manage-albums'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-albums.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.comments.js" type="text/javascript"></script>		
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/imageareaselect/jquery.imgareaselect.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>		
<?php elseif ($this->_tpl_vars['sub_menu'] == 'album-requests'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-albums.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'add-albums'): ?>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.add-albums.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'manage-games'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-games.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.comments.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'game-requests'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-games.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'add-games'): ?>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.add-games.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'manage-blogs'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-blogs.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.comments.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'manage-users' || $this->_tpl_vars['sub_menu'] == 'user-requests'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/tabs_accordian.js" type="text/javascript"></script>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-users.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.comments.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'emails'): ?>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.emails.js" type="text/javascript"></script>
	<script> $('#email-content').wysihtml5(); </script>
<?php elseif ($this->_tpl_vars['sub_menu'] == 'add-users'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['active_menu'] == 'channels'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.categories.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>	
<?php elseif ($this->_tpl_vars['module'] == 'list_images'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.notice-images.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.file-box.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['module'] == 'list_categories'): ?>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.notice-categories.js" type="text/javascript"></script>
<?php elseif ($this->_tpl_vars['active_menu'] == 'notices' && $this->_tpl_vars['module'] == 'add'): ?>	
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.notice-add.js" type="text/javascript"></script>
	<script> $('#notice-content').wysihtml5(); </script>
<?php elseif ($this->_tpl_vars['active_menu'] == 'notices' && $this->_tpl_vars['module'] == 'list'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.manage-notices.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.comments.js" type="text/javascript"></script>
	<script> $('#edit-content').wysihtml5(); </script>
<?php elseif ($this->_tpl_vars['active_menu'] == 'servers' && $this->_tpl_vars['module'] == 'all'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/jquery.servers.js" type="text/javascript"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['plugin']): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/admin/<?php echo $this->_tpl_vars['plugin']; ?>
" type="text/javascript"></script>
<?php endif; ?>
<script type="text/javascript">
	var base_url = "<?php echo $this->_tpl_vars['baseurl']; ?>
";
	var relative_tpl = "<?php echo $this->_tpl_vars['relative_tpl']; ?>
";	
</script>
<?php if ($this->_tpl_vars['active_menu'] == 'dashboard'): ?>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script> 
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-morris-chart/js/morris.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 	
	<script type="text/javascript">
	<?php echo '
	$(document).ready(function() {	

		Morris.Area({
		  element: \'member-registration\',
		  data: [
			'; ?>
<?php echo $this->_tpl_vars['m_chart']; ?>
<?php echo '
		  ],
		  xkey: \'d\',
		  ykeys: [\'a\'],
		  labels: [\'Members\'],
		  lineColors:[\'#634086\'],
		  lineWidth:\'0\',
		   grid:\'false\',
		  fillOpacity:\'0.5\'
		});
		Morris.Line({
		  element: \'file-uploads\',
		  data: [
			'; ?>
<?php echo $this->_tpl_vars['f_chart']; ?>
<?php echo '
		  ],
		  xkey: \'d\',
		  ykeys: [\'v\', \'a\', \'g\'],
		  labels: [\'Videos\', \'Albums\', \'Games\'],
		  lineColors:[\'#0090d9\', \'#0aa699\', \'#f35958\'],
		  lineWidth:\'2\',
		});	
	});


	'; ?>

	</script>	
<?php endif; ?>
<!-- END PAGE LEVEL PLUGINS --> 	

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/assets/js/core.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS --> 

<!-- END NEED TO WORK ON -->
</body>
</html>