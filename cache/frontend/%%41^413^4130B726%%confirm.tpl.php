<?php /* Smarty version 2.6.20, created on 2018-07-01 04:19:04
         compiled from confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'confirm.tpl', 8, false),)), $this); ?>
<div class="container">
	
	<div class="row">
		<div class="col-md-6">
		<div class="well">
			<form class="form-horizontal" name="confirmEmailForm" id="confirmEmailForm" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/confirm">
			  <fieldset>
				<legend><?php echo smarty_function_t(array('c' => 'confirm.title'), $this);?>
</legend>
				<div class="m-b-20">
					<h4> <?php echo smarty_function_t(array('c' => 'confirm.expl'), $this);?>
.</h4>
				</div>
				<div class="form-group <?php if ($this->_tpl_vars['errors']): ?>has-error<?php endif; ?>">
					<label for="confirm_email" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
</label>
					<div class="col-lg-9">
						<input name="email" type="text" class="form-control" value="" id="confirm_email" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<input name="submit_confirm" type="submit" value="<?php echo smarty_function_t(array('c' => 'confirm.send'), $this);?>
" id="confirm_submit" class="btn btn-primary">
					</div>
				</div>					
			  </fieldset>
			</form>		
		</div>
		</div>
		<div class="col-md-6">
			<div class="well bs-component">
				<legend><?php echo smarty_function_t(array('c' => 'global.what_is','s' => $this->_tpl_vars['site_name']), $this);?>
</legend>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'static/whatis.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>
	</div>
</div>