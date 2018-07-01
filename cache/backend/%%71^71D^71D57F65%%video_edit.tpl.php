<?php /* Smarty version 2.6.20, created on 2018-06-30 15:39:12
         compiled from video_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'video_edit.tpl', 30, false),)), $this); ?>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true" style="display: none;">
<div id="editModalDialog" class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 id="editModalLabel" class="semi-bold">Video <span id="edit-id-span"></span>: Edit</h4>
		</div>
		<div class="modal-body">		
			<div class="row form-row">									
				<input id="edit-id" name="edit-id" type="hidden" value=""/>
				<label class="col-lg-3 control-label">Title</label>
				<div class="col-lg-9">
					<input id="edit-title" name="edit-title" type="text" value="" class="form-control">
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Description</label>
				<div class="col-lg-9">
					<textarea id="edit-description" name="edit-description" rows="2" class="form-control" style="resize: vertical"></textarea>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Tags</label>
				<div class="col-lg-9">
					<textarea id="edit-tags" name="edit-tags" rows="2" class="form-control" style="resize: vertical"></textarea>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Category</label>
				<div class="col-lg-9">
					<select id="edit-category" name="edit-category" style="width:100%">
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['channels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value="<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
"<?php if ($this->_tpl_vars['video'][0]['channel'] == $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['channels'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
						<?php endfor; endif; ?>
					</select>
				</div>
				<div class="clearfix"></div>
				<div class="m-t-10"></div>				
				<label class="col-lg-3 control-label">Type</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-type_public" type="radio" name="edit-type" value="public" class="radio-enabled">
						<label for="edit-type_public">Public</label>
						<input id="edit-type_private" type="radio" name="edit-type" value="private" class="radio-disabled">
						<label for="edit-type_private">Private</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Status</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-active_a" type="radio" name="edit-active" value="1" class="radio-enabled">
						<label for="edit-active_a">Active</label>
						<input id="edit-active_i" type="radio" name="edit-active" value="0" class="radio-disabled">
						<label for="edit-active_i">Inactive</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Featured</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-featured_y" type="radio" name="edit-featured" value="yes" class="radio-enabled">
						<label for="edit-featured_y">Yes</label>
						<input id="edit-featured_n" type="radio" name="edit-featured" value="no" class="radio-disabled">
						<label for="edit-featured_n">No</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Can be commented?</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-be_comment_y" type="radio" name="edit-be_comment" value="yes" class="radio-enabled">
						<label for="edit-be_comment_y">Yes</label>
						<input id="edit-be_comment_n" type="radio" name="edit-be_comment" value="no" class="radio-disabled">
						<label for="edit-be_comment_n">No</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Can be rated?</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-be-rated-y" type="radio" name="edit-be_rated" value="yes" class="radio-enabled">
						<label for="edit-be-rated-y">Yes</label>
						<input id="edit-be-rated-n" type="radio" name="edit-be_rated" value="no" class="radio-disabled">
						<label for="edit-be-rated-n">No</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Can be embeded?</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-embed_y" type="radio" name="edit-embed" value="enabled" class="radio-enabled">
						<label for="edit-embed_y">Yes</label>
						<input id="edit-embed_n" type="radio" name="edit-embed" value="disabled" class="radio-disabled">
						<label for="edit-embed_n">No</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<?php if ($this->_tpl_vars['multi_server'] == '1'): ?>										
					<label class="col-lg-3 control-label">Server</label>
						<div class="col-lg-9">
							<input id="edit-server" name="edit-server" type="text" value="" class="form-control">
						</div>
					<div class="clearfix"></div>
				<?php endif; ?>
				<label class="col-lg-3 control-label">Likes</label>
				<div class="col-lg-9">
					<input id="edit-likes" name="edit-likes" type="text" value="" class="form-control <?php if ($this->_tpl_vars['err']['likes']): ?>error<?php endif; ?>">
				</div>
				<div class="clearfix"></div>

				<label class="col-lg-3 control-label">Dislikes</label>
				<div class="col-lg-9">
					<input id="edit-dislikes" name="edit-dislikes" type="text" value="" class="form-control <?php if ($this->_tpl_vars['err']['dislikes']): ?>error<?php endif; ?>">
				</div>
				<div class="clearfix"></div>

				<label class="col-lg-3 control-label">Views</label>
				<div class="col-lg-9">
					<input id="edit-viewnumber" name="edit-viewnumber" type="text" value="" class="form-control <?php if ($this->_tpl_vars['err']['viewnumber']): ?>error<?php endif; ?>">
				</div>
				<div class="clearfix"></div>
			
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
			<button type="button" id="edit-reset" class="btn btn-white btn-icon">Reset</button>
			<button type="button" id="edit-save" class="btn btn-success">Save</button>
		</div>
	</div>
 
</div>
 
</div>	