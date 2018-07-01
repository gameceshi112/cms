<?php /* Smarty version 2.6.20, created on 2018-06-30 18:43:43
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'footer.tpl', 6, false),array('function', 'translate', 'footer.tpl', 8, false),)), $this); ?>
<div class="footer-container">
	<div class="footer-links">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
						<h4><?php echo smarty_function_t(array('c' => 'footer.information'), $this);?>
</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/terms" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.terms'), $this);?>
</a></li>
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/privacy" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.privacy'), $this);?>
</a></li>
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/dmca" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.dmca'), $this);?>
</a></li>
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/_2257" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.2257'), $this);?>
</a></li>
						</ul>
				</div>
				<div class="col-sm-4">
						<h4><?php echo smarty_function_t(array('c' => 'footer.work_with_us'), $this);?>
</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/advertise" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.advertise'), $this);?>
</a></li>
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/webmasters" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.webmasters'), $this);?>
</a></li>
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/invite" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'global.invite_friends'), $this);?>
</a></li>						
						</ul>
				</div>
				<div class="col-sm-4">
						<h4><?php echo smarty_function_t(array('c' => 'footer.support_and_help'), $this);?>
</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/notices"><?php echo smarty_function_translate(array('c' => 'global.notice'), $this);?>
</a></li>					
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/faq" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.faq'), $this);?>
</a></li>
							<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/feedback" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'global.support_feedback'), $this);?>
</a></li>					
						</ul>
				</div>				
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="hidden-xs">
				<div class="pull-left">
					<span><?php echo smarty_function_t(array('c' => 'footer.copyright'), $this);?>
 &#169; 2008-2017</span> <?php echo $this->_tpl_vars['site_name']; ?>

				</div>
				<div class="pull-right">
					Powered by <a target="_blank" href="http://www.adultvideoscript.com">AVS</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="visible-xs"><span><?php echo smarty_function_t(array('c' => 'footer.copyright'), $this);?>
 &#169; 2008-2017</span> <?php echo $this->_tpl_vars['site_name']; ?>
<br />Powered by <a target="_blank" href="http://www.adultvideoscript.com">AVS</a></div>
		</div>
	</div>
</div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.rotator-0.2.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.avs-0.2.js"></script>	
	<?php if ($this->_tpl_vars['view'] && ! $this->_tpl_vars['video']['embed_code']): ?>
		<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video-js-events.js"></script>			
	<?php endif; ?>
	<?php if ($this->_tpl_vars['g_signin'] == '1' || $this->_tpl_vars['fb_signin'] == '1'): ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.load-apis.js"></script>	
	<?php endif; ?>	
	<script>
	<?php echo '
			if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
		  var msViewportStyle = document.createElement(\'style\')
		  msViewportStyle.appendChild(
			document.createTextNode(
			  \'@-ms-viewport{width:auto!important}\'
			)
		  )
		  document.querySelector(\'head\').appendChild(msViewportStyle)
		}
	'; ?>

	</script>	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../../../templates/backend/default/analytics/analytics.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
</body>
</html>