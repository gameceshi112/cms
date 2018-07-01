<?php /* Smarty version 2.6.20, created on 2018-06-30 18:45:05
         compiled from player_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'clean', 'player_settings.tpl', 11, false),)), $this); ?>
<script type="text/javascript">
	var player_autoplay = "<?php echo $this->_tpl_vars['player']['autoplay']; ?>
";
	var player_resolution = "<?php echo $this->_tpl_vars['player']['resolution']; ?>
";	
	var player_timeline_preview = "<?php echo $this->_tpl_vars['player']['timeline_preview']; ?>
";		
	var player_sprite = "<?php echo $this->_tpl_vars['player']['sprite']; ?>
";
	var player_logo = "<?php echo $this->_tpl_vars['player']['logo']; ?>
";
	var player_logo_redirect = "<?php echo $this->_tpl_vars['player']['logo_redirect']; ?>
";
	var player_logo_position = "<?php echo $this->_tpl_vars['player']['logo_position']; ?>
";
	var player_logo_link = "<?php echo $this->_tpl_vars['player']['logo_link']; ?>
";	
	if (player_logo_link == '') <?php echo '{'; ?>

		player_logo_link = "<?php echo $this->_tpl_vars['baseurl']; ?>
/video/<?php echo $this->_tpl_vars['video']['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
";
	<?php echo '}'; ?>

	var player_logo_image = "<?php echo $this->_tpl_vars['baseurl']; ?>
/media/player/logo/logo.png";	
	var player_logo_opacity = "<?php echo $this->_tpl_vars['player']['logo_opacity']; ?>
";
	var player_pause_adv = "<?php echo $this->_tpl_vars['player']['pause_adv']; ?>
";
	var video_duration = "<?php echo $this->_tpl_vars['video']['duration']; ?>
";	
	var video_id = "<?php echo $this->_tpl_vars['video']['VID']; ?>
";
	var base_url = "<?php echo $this->_tpl_vars['baseurl']; ?>
";	
	var aid = "<?php echo $this->_tpl_vars['aid']; ?>
";
</script>