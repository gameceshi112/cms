<?php /* Smarty version 2.6.20, created on 2018-06-30 18:45:05
         compiled from video_embed_vplayer.tpl */ ?>
<textarea name="video_embed_code" rows="4" id="video_embed_code" class="form-control">
<iframe width="<?php echo $this->_tpl_vars['embed_width']; ?>
" height="<?php echo $this->_tpl_vars['embed_auto_height']; ?>
" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/embed/<?php echo $this->_tpl_vars['video']['vkey']; ?>
" frameborder="0" allowfullscreen></iframe>
</textarea>