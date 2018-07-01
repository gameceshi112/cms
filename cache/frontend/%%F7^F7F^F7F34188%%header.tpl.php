<?php /* Smarty version 2.6.20, created on 2018-06-30 18:43:43
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'header.tpl', 8, false),array('modifier', 'clean', 'header.tpl', 9, false),array('modifier', 'truncate', 'header.tpl', 178, false),array('insert', 'thumb_path', 'header.tpl', 11, false),array('insert', 'language', 'header.tpl', 169, false),array('function', 't', 'header.tpl', 39, false),array('function', 'translate', 'header.tpl', 121, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
<head<?php if ($this->_tpl_vars['view']): ?> prefix="og: http://ogp.me/ns#"<?php endif; ?>>
	<?php if ($this->_tpl_vars['view']): ?>
		<?php $this->assign('vtags', $this->_tpl_vars['video']['keyword']); ?>
	
		<meta property="og:site_name" content="<?php echo $this->_tpl_vars['site_name']; ?>
">
		<meta property="og:title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
		<meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/video/<?php echo $this->_tpl_vars['video']['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
		<meta property="og:type" content="video">
		<meta property="og:image" content="<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thumb_path', 'vid' => $this->_tpl_vars['video']['VID'])), $this); ?>
/<?php if ($this->_tpl_vars['video']['embed_code'] != ''): ?>1<?php else: ?>default<?php endif; ?>.jpg">
		<meta property="og:description" content="<?php if ($this->_tpl_vars['video']['description']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php endif; ?>">
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['vtags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<meta property="video:tag" content="<?php echo $this->_tpl_vars['vtags'][$this->_sections['i']['index']]; ?>
">
	<?php endfor; endif; ?>			
		<?php if (! $this->_tpl_vars['video']['embed_code']): ?>	
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'player_settings.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
		<?php endif; ?>
	<?php endif; ?>

    <title><?php if (isset ( $this->_tpl_vars['self_title'] ) && $this->_tpl_vars['self_title'] != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['self_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo $this->_tpl_vars['site_name']; ?>
<?php endif; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="keywords" content="<?php if (isset ( $this->_tpl_vars['self_keywords'] ) && $this->_tpl_vars['self_keywords'] != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['self_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_keywords']; ?>
<?php endif; ?>" />
    <meta name="description" content="<?php if (isset ( $this->_tpl_vars['self_description'] ) && $this->_tpl_vars['self_description'] != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['self_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_description']; ?>
<?php endif; ?>" />

	<link rel="Shortcut Icon" type="image/ico" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/img/webapp-icon.png">

    <script type="text/javascript">
    var base_url = "<?php echo $this->_tpl_vars['baseurl']; ?>
";
	var max_thumb_folders = "<?php echo $this->_tpl_vars['max_thumb_folders']; ?>
";
    var tpl_url = "<?php echo $this->_tpl_vars['relative_tpl']; ?>
";
	<?php if (isset ( $this->_tpl_vars['video']['VID'] )): ?>var video_id = "<?php echo $this->_tpl_vars['video']['VID']; ?>
";<?php endif; ?>
	var lang_deleting = "<?php echo smarty_function_t(array('c' => 'global.deleting'), $this);?>
";
	var lang_flaging = "<?php echo smarty_function_t(array('c' => 'global.flaging'), $this);?>
";
	var lang_loading = "<?php echo smarty_function_t(array('c' => 'global.loading'), $this);?>
";
	var lang_sending = "<?php echo smarty_function_t(array('c' => 'global.sending'), $this);?>
";
	var lang_share_name_empty = "<?php echo smarty_function_t(array('c' => 'share.name_empty'), $this);?>
";
	var lang_share_rec_empty = "<?php echo smarty_function_t(array('c' => 'share.recipient'), $this);?>
";
	var fb_signin = "<?php echo $this->_tpl_vars['fb_signin']; ?>
";
	var fb_appid = "<?php echo $this->_tpl_vars['fb_appid']; ?>
";
	var g_signin = "<?php echo $this->_tpl_vars['g_signin']; ?>
";
	var g_cid = "<?php echo $this->_tpl_vars['g_cid']; ?>
";
	var signup_section = false;
	var relative = "<?php echo $this->_tpl_vars['relative']; ?>
";
	</script>

	<script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery-1.11.1.min.js"></script>
	
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/style.css" rel="stylesheet">
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/responsive.css" rel="stylesheet">
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/font-awesome.min.css" rel="stylesheet">		
	<link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/colors.css" rel="stylesheet">
	
	<!-- Video Player -->
	<?php if ($this->_tpl_vars['view'] && ! $this->_tpl_vars['video']['embed_code']): ?>
		<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video-js.css" rel="stylesheet">	
		<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-resolution-switcher-master/lib/videojs-resolution-switcher.css" rel="stylesheet">		
		<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-logobrand-master/src/videojs.logobrand.css" rel="stylesheet">
		<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-thumbnails-master/videojs.thumbnails.css" rel="stylesheet">
		<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video-js-custom.css" rel="stylesheet">					
		
		<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/ie8/videojs-ie8.min.js"></script>
		<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video.js"></script>
		<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-resolution-switcher-master/lib/videojs-resolution-switcher.js"></script>
		<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-logobrand-master/src/videojs.logobrand.js"></script>
		<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-thumbnails-master/videojs.thumbnails.js"></script>
	<?php endif; ?>	
	<!-- End Video Player -->
	
</head>
<body>

<div class="modal fade in" id="login-modal">
	<div class="modal-dialog login-modal">
      <div class="modal-content">
        <form name="login_form" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/login">
		<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo smarty_function_t(array('c' => 'signup.login'), $this);?>
</h4>
        </div>
        <div class="modal-body">
			<center>
				<div class="m-b-5"></div>
				<?php if ($this->_tpl_vars['fb_signin'] == '1'): ?>
					<div>
						<button id="facebook-signin" class="btn btn-facebook" disabled><div></div><i class="fa fa-facebook"></i> <span><?php echo smarty_function_t(array('c' => 'socialsignup.login_with'), $this);?>
 Facebook</span></button>
					</div>
					<div class="hr">
						<div class="inner inner-login"><?php echo smarty_function_t(array('c' => 'socialsignup.or'), $this);?>
</div>
					</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['g_signin'] == '1'): ?>						
					<div>
						<button id="google-signin" class="btn btn-google" disabled><div></div><i class="fa fa-google-plus"></i> <span><?php echo smarty_function_t(array('c' => 'socialsignup.login_with'), $this);?>
 Google</span></button>
					</div>
					<div class="hr">
						<div class="inner inner-login"><?php echo smarty_function_t(array('c' => 'socialsignup.or'), $this);?>
</div>
					</div>
				<?php endif; ?>
			</center>	
			<div class="form-group">
				<label for="login_username" class="control-label"><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
:</label>
				<input name="username" type="text" value="" id="login_username" class="form-control" />
			</div>
			<div class="form-group">
				<label for="login_password" class="control-label"><?php echo smarty_function_t(array('c' => "global.password"), $this);?>
:</label>
				<input name="password" type="password" value="" id="login_password" class="form-control" />
			</div>
			<a href="<?php echo $this->_tpl_vars['relative']; ?>
/lost" id="lost_password"><?php echo smarty_function_t(array('c' => 'global.forgot'), $this);?>
</a><br />
			<a href="<?php echo $this->_tpl_vars['relative']; ?>
/confirm" id="confirmation_email"><?php echo smarty_function_t(array('c' => 'global.confirm'), $this);?>
</a>		
        </div>
        <div class="modal-footer">
          <button name="submit_login" id="login_submit" type="submit" class="btn btn-primary"><?php echo smarty_function_t(array('c' => 'global.login'), $this);?>
</button>
          <a href="<?php echo $this->_tpl_vars['relative']; ?>
/signup" class="btn btn-secondary"><?php echo smarty_function_translate(array('c' => 'global.sign_up'), $this);?>
</a>
        </div>
		</form>			
      </div>
    </div>
</div>

<?php if ($this->_tpl_vars['fb_signin'] == '1'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'fb_signup_modal.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['g_signin'] == '1'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'g_signup_modal.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div class="modal fade in" id="language-modal">
	<div class="modal-dialog language-modal">
      <div class="modal-content">
        
		<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo smarty_function_t(array('c' => 'global.select_language'), $this);?>
</h4>
        </div>
        <div class="modal-body">
			<div class="row">
				<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['language']):
?>
					<div class="col-xs-6 col-sm-4">
						<?php if ($_SESSION['language'] != $this->_tpl_vars['key']): ?>
							<a href="#" id="<?php echo $this->_tpl_vars['key']; ?>
" class="change-language"><?php echo $this->_tpl_vars['language']['name']; ?>
</a>
						<?php else: ?>
							<span class="change-language language-active"><?php echo $this->_tpl_vars['language']['name']; ?>
</span>
						<?php endif; ?>
					</div>
				<?php endforeach; endif; unset($_from); ?>
			</div>
			<form name="languageSelect" id="languageSelect" method="post" action="">
			<input name="language" id="language" type="hidden" value="" />
			</form>
        </div>

		
      </div>
    </div>
</div>
<div class="top-nav">
	<div class="container">
		<ul class="top-menu">
			<?php if ($this->_tpl_vars['multi_language']): ?>
				<div class="pull-left">
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'language', 'assign' => 'flag')), $this); ?>

					<li><a data-toggle="modal" href="#language-modal"><?php echo $this->_tpl_vars['flag']; ?>
 <span class="caret"></span></a></li>					
				</div>
			<?php endif; ?>
			<div class="pull-right">
			<?php if (isset ( $_SESSION['uid'] )): ?>
				<li class="dropdown">
					<a class="dropdown-toggle"  data-toggle="dropdown" href="#">
						<span class="visible-xs">
							<?php if ($this->_tpl_vars['requests_count'] > 0 || $this->_tpl_vars['mails_count'] > 0): ?><div class="badge"><?php echo $this->_tpl_vars['requests_count']+$this->_tpl_vars['mails_count']; ?>
</div><?php endif; ?> <?php echo ((is_array($_tmp=$_SESSION['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...") : smarty_modifier_truncate($_tmp, 15, "...")); ?>
 <span class="caret"></span>
						</span>
						<span class="hidden-xs">
							<?php if ($this->_tpl_vars['requests_count'] > 0 || $this->_tpl_vars['mails_count'] > 0): ?><div class="badge"><?php echo $this->_tpl_vars['requests_count']+$this->_tpl_vars['mails_count']; ?>
</div><?php endif; ?> <?php echo ((is_array($_tmp=$_SESSION['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...") : smarty_modifier_truncate($_tmp, 35, "...")); ?>
 <span class="caret"></span>
						</span>
					</a>
					<ul class="dropdown-menu pull-right m-t-0">
						<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user"><?php echo smarty_function_t(array('c' => 'topnav.my_profile'), $this);?>
</a></li>
						<?php if ($this->_tpl_vars['video_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $_SESSION['username']; ?>
/videos"><?php echo smarty_function_t(array('c' => 'topnav.my_videos'), $this);?>
</a></li><?php endif; ?>
						<?php if ($this->_tpl_vars['photo_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $_SESSION['username']; ?>
/albums"><?php echo smarty_function_t(array('c' => 'topnav.my_photos'), $this);?>
</a></li><?php endif; ?>
						<?php if ($this->_tpl_vars['game_module'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $_SESSION['username']; ?>
/games"><?php echo smarty_function_t(array('c' => 'topnav.my_games'), $this);?>
</a></li><?php endif; ?>
						<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $_SESSION['username']; ?>
/blog"><?php echo smarty_function_t(array('c' => 'topnav.my_blog'), $this);?>
</a></li>
						<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/feeds"><?php echo smarty_function_translate(array('c' => 'global.my_feeds'), $this);?>
</a></li>
						<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/requests"><span class="pull-left"><?php echo smarty_function_translate(array('c' => 'global.requests'), $this);?>
</span><?php if ($this->_tpl_vars['requests_count'] > 0): ?><div class="badge pull-right"><?php echo $this->_tpl_vars['requests_count']; ?>
</div><?php endif; ?><div class="clearfix"></div></a></li>
						<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/mail/inbox"><span class="pull-left"><?php echo smarty_function_translate(array('c' => 'global.inbox'), $this);?>
</span><?php if ($this->_tpl_vars['mails_count'] > 0): ?><div class="badge pull-right"><?php echo $this->_tpl_vars['mails_count']; ?>
</div><?php endif; ?><div class="clearfix"></div></a></li>
					</ul>
				</li>			
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/logout"><?php echo smarty_function_translate(array('c' => 'global.sign_out'), $this);?>
</a></li>
			<?php else: ?>
				<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/signup" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'global.sign_up'), $this);?>
</a></li>
				<li><a data-toggle="modal" href="#login-modal"><?php echo smarty_function_translate(array('c' => 'global.login'), $this);?>
</a></li>	
			<?php endif; ?>
			</div>
			<div class="clearfix"></div>
		</ul> 
	</div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $this->_tpl_vars['relative']; ?>
/"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/images/logo/logo.png"></a> 
		</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->_tpl_vars['video_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'videos'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/videos"><?php echo smarty_function_translate(array('c' => 'menu.videos'), $this);?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['photo_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'albums'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/albums"><?php echo smarty_function_translate(array('c' => 'menu.photos'), $this);?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['game_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'games'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/games"><?php echo smarty_function_translate(array('c' => 'menu.games'), $this);?>
</a></li><?php endif; ?>
				
				<li class="dropdown visible-sm hidden-xs hidden-md hidden-lg">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo smarty_function_translate(array('c' => 'menu.more'), $this);?>
 <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php if ($this->_tpl_vars['blog_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'blogs'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/blogs"><?php echo smarty_function_translate(array('c' => 'menu.blogs'), $this);?>
</a></li><?php endif; ?>
							<li<?php if ($this->_tpl_vars['menu'] == 'categories'): ?> class="active"<?php endif; ?>><?php if ($this->_tpl_vars['video_module'] == '1'): ?><a href="<?php echo $this->_tpl_vars['relative']; ?>
/categories"><?php elseif ($this->_tpl_vars['photo_module'] == '1'): ?><a href="<?php echo $this->_tpl_vars['relative']; ?>
/categories?s=a"><?php else: ?><a href="<?php echo $this->_tpl_vars['relative']; ?>
/categories?s=g"><?php endif; ?><?php echo smarty_function_translate(array('c' => 'menu.categories'), $this);?>
</a></li>
							<li<?php if ($this->_tpl_vars['menu'] == 'community'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/community"><?php echo smarty_function_translate(array('c' => 'menu.community'), $this);?>
</a></li>
						</ul>
				</li>
				
				<?php if ($this->_tpl_vars['blog_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'blogs'): ?> class="active hidden-sm"<?php else: ?> class="hidden-sm"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/blogs"><?php echo smarty_function_translate(array('c' => 'menu.blogs'), $this);?>
</a></li><?php endif; ?>
				<li<?php if ($this->_tpl_vars['menu'] == 'categories'): ?> class="active hidden-sm"<?php else: ?> class="hidden-sm"<?php endif; ?>><?php if ($this->_tpl_vars['video_module'] == '1'): ?><a href="<?php echo $this->_tpl_vars['relative']; ?>
/categories"><?php elseif ($this->_tpl_vars['photo_module'] == '1'): ?><a href="<?php echo $this->_tpl_vars['relative']; ?>
/categories?s=a"><?php else: ?><a href="<?php echo $this->_tpl_vars['relative']; ?>
/categories?s=g"><?php endif; ?><?php echo smarty_function_translate(array('c' => 'menu.categories'), $this);?>
</a></li>
				<li<?php if ($this->_tpl_vars['menu'] == 'community'): ?> class="active hidden-sm"<?php else: ?> class="hidden-sm"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/community"><?php echo smarty_function_translate(array('c' => 'menu.community'), $this);?>
</a></li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
				<ul class="dropdown-menu search-dropdown-menu">
					<form class="form-inline" name="search" id="search_form" method="get" action="<?php echo $this->_tpl_vars['relative']; ?>
/search/<?php if (! isset ( $this->_tpl_vars['search_type'] )): ?>videos<?php else: ?><?php echo $this->_tpl_vars['search_type']; ?>
<?php endif; ?>">
						<div class="input-group">
						<input type="text" class="form-control" placeholder="<?php echo smarty_function_t(array('c' => 'ajax.search'), $this);?>
" name="search_query" id="search_query" value="<?php if (isset ( $this->_tpl_vars['search_query'] )): ?><?php echo $this->_tpl_vars['search_query']; ?>
<?php endif; ?>">
						<span class="search-select input-group-addon">
							<select class="form-control" id="search_type">
								<option value="videos"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'videos'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.videos'), $this);?>
</option>
								<?php if ($this->_tpl_vars['photo_module'] == '1'): ?><option value="photos"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'photos'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.photos'), $this);?>
</option><?php endif; ?>
								<?php if ($this->_tpl_vars['game_module'] == '1'): ?><option value="games"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'games'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.games'), $this);?>
</option><?php endif; ?>
								<option value="users"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'users'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.users'), $this);?>
</option>
							</select>		
						</span>
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</span>
						</div>
					</form>
				</ul>
				</li>
				<li><button type="button" class="btn btn-primary navbar-btn m-l-15 m-r-15" onclick="location.href='<?php echo $this->_tpl_vars['relative']; ?>
/upload'"><?php echo smarty_function_translate(array('c' => 'menu.upload'), $this);?>
</button></li>						
			</ul>
			
		</div><!--/.nav-collapse -->
    </div>
</div>
<div id="wrapper">
