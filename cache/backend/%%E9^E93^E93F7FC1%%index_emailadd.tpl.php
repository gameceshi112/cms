<?php /* Smarty version 2.6.20, created on 2018-06-30 15:45:42
         compiled from index_emailadd.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Email Templates</span></h3>
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
						<h4>New <span class="semi-bold">Email Template</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="add_email" method="POST" action="index.php?m=emailadd">
							<div class="row">
								<div class="col-md-5 col-lg-4 col-xs-12">
									<h3>Variables: <span class="semi-bold">Email Subject</span></h3>
									<p>Click on any variable to insert it into your template.</p>
									<div class="row">
										<div class="col-lg-6">
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('subject','<?php echo '{$sender_name}'; ?>
')" class="btn btn-white btn-sm btn-small">Sender Name: <?php echo '{$sender_name}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('subject','<?php echo '{$username}'; ?>
')" class="btn btn-white btn-sm btn-small">Sender Username: <?php echo '{$username}'; ?>
</button>
											</div>											
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('subject','<?php echo '{$site_name}'; ?>
')" class="btn btn-white btn-sm btn-small">Website Name: <?php echo '{$site_name}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('subject','<?php echo '{$site_title}'; ?>
')" class="btn btn-white btn-sm btn-small">Website Title: <?php echo '{$site_title}'; ?>
</button>
											</div>
										</div>										
									</div>
								</div>
								<div class="col-md-7 col-lg-8 col-xs-12">
									<h3>Variables: <span class="semi-bold">Email Details</span></h3>
									<p>Click on any variable to insert it into your template.</p>
									<div class="row">
										<div class="col-lg-6">
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$sender_name}'; ?>
')" class="btn btn-white btn-sm btn-small">Sender Name: <?php echo '{$sender_name}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$message}'; ?>
')"  class="btn btn-white btn-sm btn-small">Sender Message: <?php echo '{$message}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$username}'; ?>
')"  class="btn btn-white btn-sm btn-small">Sender Username: <?php echo '{$username}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$site_name}'; ?>
')" class="btn btn-white btn-sm btn-small">Website Name: <?php echo '{$site_name}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$site_title}'; ?>
')" class="btn btn-white btn-sm btn-small">Website Title: <?php echo '{$site_title}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$receiver_name}'; ?>
')" class="btn btn-white btn-sm btn-small">Receiver Name: <?php echo '{$receiver_name}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$receiver}'; ?>
')"  class="btn btn-white btn-sm btn-small">Receiver Username: <?php echo '{$receiver}'; ?>
</button>
											</div>																					
										</div>
										<div class="col-lg-6">
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$video_link}'; ?>
')" class="btn btn-white btn-sm btn-small">Video Link: <?php echo '{$video_link}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$album_link}'; ?>
')" class="btn btn-white btn-sm btn-small">Album Link: <?php echo '{$album_link}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$game_link}'; ?>
')" class="btn btn-white btn-sm btn-small">Game Link: <?php echo '{$game_link}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$uid}'; ?>
')"  class="btn btn-white btn-sm btn-small">User Id: <?php echo '{$uid}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$code}'; ?>
')"  class="btn btn-white btn-sm btn-small">Code: <?php echo '{$code}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$baseurl}'; ?>
')"  class="btn btn-white btn-sm btn-small">Base URL: <?php echo '{$baseurl}'; ?>
</button>
											</div>
											<div class="p-b-5">
												<button type="button" onClick="insertAtCaret('content','<?php echo '{$password}'; ?>
')"  class="btn btn-white btn-sm btn-small">Password: <?php echo '{$password}'; ?>
</button>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-x-12 m-t-20">
									<div class="form-group">
										<label class="col-lg-3 control-label">Email Id</label>
										<div class="col-lg-9">
											<input type="text" name="email_id" value="<?php echo $this->_tpl_vars['email']['email_id']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['email_id']): ?>error<?php endif; ?>">
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Email File</label>
										<div class="col-lg-9">
											<input type="text" name="email_file" value="<?php echo $this->_tpl_vars['email']['email_file']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['email_file']): ?>error<?php endif; ?>">
											<span class="help">Extension must be <b>.tpl</b></span>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Subject</label>
										<div class="col-lg-9">
											<input type="text" id="subject" name="subject" value="<?php echo $this->_tpl_vars['email']['email_subject']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['email_subject']): ?>error<?php endif; ?>">
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Content</label>
										<div class="col-lg-9">
											<textarea id="content" name="content" rows="12" class="form-control <?php if ($this->_tpl_vars['err']['content']): ?>error<?php endif; ?>" style="resize: vertical"><?php echo $this->_tpl_vars['email']['content']; ?>
</textarea>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Comments</label>
										<div class="col-lg-9">
											<input type="text" name="comment" value="<?php echo $this->_tpl_vars['email']['comment']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['comment']): ?>error<?php endif; ?>">
											<span class="help">For <b>Admin</b></span>
										</div>
										<div class="clearfix"></div>
									</div>									
								</div>								
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="add_email" value="Add Email" class="btn btn-success btn-cons">
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