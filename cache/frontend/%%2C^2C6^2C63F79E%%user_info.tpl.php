<?php /* Smarty version 2.6.20, created on 2018-07-01 04:05:09
         compiled from user_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_info.tpl', 2, false),array('insert', 'age', 'user_info.tpl', 76, false),array('insert', 'time_range', 'user_info.tpl', 81, false),array('insert', 'is_blocked', 'user_info.tpl', 149, false),array('insert', 'is_friend', 'user_info.tpl', 151, false),array('insert', 'is_subscribed', 'user_info.tpl', 165, false),array('modifier', 'truncate', 'user_info.tpl', 87, false),)), $this); ?>
<script type="text/javascript">
var lang_posting = "<?php echo smarty_function_t(array('c' => 'global.posting'), $this);?>
";
var lang_removing = "<?php echo smarty_function_t(array('c' => 'global.removing'), $this);?>
";
var lang_blocking = "<?php echo smarty_function_t(array('c' => 'global.blocking'), $this);?>
";
var lang_unblocking = "<?php echo smarty_function_t(array('c' => 'global.unblocking'), $this);?>
";
var lang_block = "<?php echo smarty_function_t(array('c' => 'user.block'), $this);?>
";
var lang_unblock = "<?php echo smarty_function_t(array('c' => 'user.unblock'), $this);?>
";
var lang_friend_msg = "<?php echo smarty_function_t(array('c' => 'ajax.invite_friend_msg_length'), $this);?>
";
var lang_friendship = "<?php echo smarty_function_t(array('c' => 'ajax.invite_friend_friendship'), $this);?>
";
var lang_remove_friend_ask = "<?php echo smarty_function_t(array('c' => 'ajax.remove_friend_ask'), $this);?>
";
var lang_remove_fav_game_ask = "<?php echo smarty_function_t(array('c' => 'ajax.remove_fav_game_ask'), $this);?>
";
var lang_remove_fav_video_ask = "<?php echo smarty_function_t(array('c' => 'ajax.remove_fav_video_ask'), $this);?>
";
var lang_remove_fav_photo_ask = "<?php echo smarty_function_t(array('c' => 'ajax.remove_fav_photo_ask'), $this);?>
";
var lang_remove_playlist_ask = "<?php echo smarty_function_t(array('c' => 'ajax.remove_playlist_ask'), $this);?>
";
var lang_report_user_msg_length = "<?php echo smarty_function_t(array('c' => 'ajax.report_user_msg_length'), $this);?>
";
var lang_subscribing = "<?php echo smarty_function_t(array('c' => 'global.subscribing'), $this);?>
";
var lang_unsubscribe = "<?php echo smarty_function_t(array('c' => 'user.unsubscribe'), $this);?>
";
var lang_unsubscribing = "<?php echo smarty_function_t(array('c' => 'global.unsubscribing'), $this);?>
";
var lang_subscribe = "<?php echo smarty_function_t(array('c' => 'user.subscribe'), $this);?>
";
var lang_wall_length = "<?php echo smarty_function_t(array('c' => 'ajax.wall_comment_length'), $this);?>
";
var lang_delete_video_ask = "<?php echo smarty_function_t(array('c' => 'video.delete_confirm'), $this);?>
";
var lang_delete_game_ask = "<?php echo smarty_function_t(array('c' => 'game.delete_confirm'), $this);?>
";

</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.profile-0.2.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.voting-user-0.1.js"></script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'quick_jumps.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="panel panel-default">
	<div class="panel-heading title-truncate">
		<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
"><?php echo $this->_tpl_vars['user']['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?> <?php echo smarty_function_t(array('c' => 'user.profile'), $this);?>
</a>
		<?php if ($this->_tpl_vars['online']): ?>
			<div class="online" alt="<?php echo smarty_function_t(array('c' => 'global.online'), $this);?>
" title="<?php echo smarty_function_t(array('c' => 'global.online'), $this);?>
"></div>
		<?php else: ?>
			<div class="offline" alt="<?php echo smarty_function_t(array('c' => 'global.offline'), $this);?>
" title="<?php echo smarty_function_t(array('c' => 'global.offline'), $this);?>
"></div>
		<?php endif; ?>		
	</div>
	<div class="panel-body">
		<?php if ($_SESSION['username'] == $this->_tpl_vars['username']): ?>
			<div class="m-b-15">
				<a href = "<?php echo $this->_tpl_vars['relative']; ?>
/user/edit"><?php echo smarty_function_t(array('c' => 'user.edit_profile'), $this);?>
</a> <strong>&middot;</strong> <a href = "<?php echo $this->_tpl_vars['relative']; ?>
/user/avatar"><?php echo smarty_function_t(array('c' => 'user.change_avatar'), $this);?>
</a>
			</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-sm-5 col-xs-6 m-b-15">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
">
                    <img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['user']['photo'] != ''): ?><?php echo $this->_tpl_vars['user']['photo']; ?>
<?php else: ?>nopic-<?php echo $this->_tpl_vars['user']['gender']; ?>
.gif<?php endif; ?>" title="<?php echo $this->_tpl_vars['user']['username']; ?>
's avatar" alt="<?php echo $this->_tpl_vars['user']['username']; ?>
's avatar" class="img-responsive" />
                </a>
				<div class="vote-box vote-box-user">
					<div class="user-dislikes <?php if ($this->_tpl_vars['user']['likes'] == 0 && $this->_tpl_vars['user']['dislikes'] == 0): ?>not-voted<?php endif; ?>">
						<div id="user_rate" class="likes" style="width: <?php echo $this->_tpl_vars['user']['rate']; ?>
%;"></div>
					</div>
					<div id="user_vote_msg" class="vote-msg">
						<div class="pull-left">
							<i class="glyphicon glyphicon-thumbs-up"></i> <span id="user_likes" class="text-white"><?php echo $this->_tpl_vars['user']['likes']; ?>
</span>
						</div>
						<div class="pull-right">
							<i class="glyphicon glyphicon-thumbs-down"></i> <span id="user_dislikes" class="text-white"><?php echo $this->_tpl_vars['user']['dislikes']; ?>
</span>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="">
					<div class="m-t-15">
						<a href="#" class="btn btn-primary" id="voteu_like_<?php echo $this->_tpl_vars['user']['UID']; ?>
" ><i class="glyphicon glyphicon-thumbs-up"></i></a>
						<a href="#" class="btn btn-primary" id="voteu_dislike_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><i class="glyphicon glyphicon-thumbs-down"></i></a>
					</div>
				</div>				
			</div>
			<div class="col-xs-12 col-sm-7 m-b-15">
				<ul class="list-unstyled m-b-0">
					<li><?php echo smarty_function_t(array('c' => 'user.popularity'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['popularity']; ?>
 <?php if ($this->_tpl_vars['user']['popularity'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.point'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.points'), $this);?>
<?php endif; ?></span></li>
					<li><?php echo smarty_function_t(array('c' => 'user.activity'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['points']; ?>
 <?php if ($this->_tpl_vars['user']['points'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.point'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.points'), $this);?>
<?php endif; ?></span></li>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'age', 'assign' => 'age', 'bdate' => $this->_tpl_vars['user']['bdate'])), $this); ?>

					<?php if ($this->_tpl_vars['age'] != ''): ?><li><?php echo smarty_function_t(array('c' => 'user.age'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['age']; ?>
</span></li><?php endif; ?>
					<li><?php echo smarty_function_t(array('c' => 'global.gender'), $this);?>
: <span class="text-white"><?php if ($this->_tpl_vars['user']['gender'] == 'Male'): ?><?php echo smarty_function_t(array('c' => 'global.male'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.female'), $this);?>
<?php endif; ?></span></li>
					<?php if ($this->_tpl_vars['user']['relation'] != ''): ?><li><?php echo smarty_function_t(array('c' => 'user.relation'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['relation']; ?>
</span></li><?php endif; ?>
					<?php if ($this->_tpl_vars['user']['interested'] != ''): ?><li><?php echo smarty_function_t(array('c' => 'global.interested'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['interested']; ?>
</span></li><?php endif; ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'joined', 'time' => $this->_tpl_vars['user']['addtime'])), $this); ?>

					<li><?php echo smarty_function_t(array('c' => 'user.joined'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['joined']; ?>
</span></li>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'last_login', 'time' => $this->_tpl_vars['user']['logintime'])), $this); ?>

					<li><?php echo smarty_function_t(array('c' => 'user.last_login'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['last_login']; ?>
</span></li>
					<li><?php echo smarty_function_t(array('c' => 'user.profile_viewed'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['profile_viewed']; ?>
 <?php if ($this->_tpl_vars['user']['profile_viewed'] == '1'): ?><?php echo smarty_function_t(array('c' => "global.time"), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.times'), $this);?>
<?php endif; ?></span></li>
					<li><?php echo smarty_function_t(array('c' => 'user.has_watched'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['watched_video']; ?>
 <?php if ($this->_tpl_vars['user']['watched_video'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.video'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'videos.videos'), $this);?>
<?php endif; ?></span></li>
					<li><?php echo smarty_function_t(array('c' => 'user.video_watch','s' => ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20))), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['video_viewed']; ?>
 <?php if ($this->_tpl_vars['user']['video_viewed'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.time'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.times'), $this);?>
<?php endif; ?></span></li>
				</ul>			
			</div>
		</div>
		<div class="clearfix"></div>
		<?php if (( isset ( $this->_tpl_vars['user']['aboutme'] ) && $this->_tpl_vars['user']['aboutme'] != '' ) || ( isset ( $this->_tpl_vars['user']['country'] ) && $this->_tpl_vars['user']['country'] != '' ) || ( isset ( $this->_tpl_vars['user']['town'] ) && $this->_tpl_vars['user']['town'] != '' ) || ( isset ( $this->_tpl_vars['user']['city'] ) && $this->_tpl_vars['user']['city'] != '' ) || ( isset ( $this->_tpl_vars['user']['school'] ) && $this->_tpl_vars['user']['school'] != '' ) || ( isset ( $this->_tpl_vars['user']['occupation'] ) && $this->_tpl_vars['user']['occupation'] != '' ) || ( isset ( $this->_tpl_vars['user']['interest_hobby'] ) && $this->_tpl_vars['user']['interest_hobby'] != '' ) || ( isset ( $this->_tpl_vars['user']['fav_movie_show'] ) && $this->_tpl_vars['user']['fav_movie_show'] != '' ) || ( isset ( $this->_tpl_vars['user']['fav_music'] ) && $this->_tpl_vars['user']['fav_music'] != '' ) || ( isset ( $this->_tpl_vars['user']['fav_book'] ) && $this->_tpl_vars['user']['fav_book'] != '' ) || ( isset ( $this->_tpl_vars['user']['turnon'] ) && $this->_tpl_vars['user']['turnon'] != '' ) || ( isset ( $this->_tpl_vars['user']['turnoff'] ) && $this->_tpl_vars['user']['turnoff'] != '' ) || ( isset ( $this->_tpl_vars['user']['interested'] ) && $this->_tpl_vars['user']['interested'] != '' )): ?>
		<div id="info-container" style="display: none;">
			<div class="separator"><?php echo smarty_function_t(array('c' => 'user.more_info'), $this);?>
</div>
			<ul class="list-unstyled m-b-15">
				<?php if (isset ( $this->_tpl_vars['user']['aboutme'] ) && $this->_tpl_vars['user']['aboutme'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.about_me'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['aboutme']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['country'] ) && $this->_tpl_vars['user']['country'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.country'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['country']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['town'] ) && $this->_tpl_vars['user']['town'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.hometown'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['town']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['city'] ) && $this->_tpl_vars['user']['city'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.city'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['city']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['school'] ) && $this->_tpl_vars['user']['school'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.school'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['school']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['occupation'] ) && $this->_tpl_vars['user']['occupation'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.job'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['occupation']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['interest_hobby'] ) && $this->_tpl_vars['user']['interest_hobby'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.here_for'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['interest_hobby']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['fav_movie_show'] ) && $this->_tpl_vars['user']['fav_movie_show'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'user.favorite_sex'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['fav_movie_show']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['fav_music'] ) && $this->_tpl_vars['user']['fav_music'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'user.favorite_sex_partner'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['fav_music']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['fav_book'] ) && $this->_tpl_vars['user']['fav_book'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'user.my_erogenic_zones'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['fav_book']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['turnon'] ) && $this->_tpl_vars['user']['turnon'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'user.turn_on'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['turnon']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['turnoff'] ) && $this->_tpl_vars['user']['turnoff'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'user.turn_off'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['turnoff']; ?>
</span></li>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['user']['interested'] ) && $this->_tpl_vars['user']['interested'] != ''): ?>
					<li><?php echo smarty_function_t(array('c' => 'global.interested'), $this);?>
: <span class="text-white"><?php echo $this->_tpl_vars['user']['interested']; ?>
</span></li>
				<?php endif; ?>
			</ul>
		</div>
		<ul class="pager m-t-0 m-b-0">
			<li><a href="#" id="info-showmore"><?php echo smarty_function_t(array('c' => 'global.show_more'), $this);?>
</a></li>
			<li><a href="#" id="info-hide" style="display: none"><?php echo smarty_function_t(array('c' => 'global.hide'), $this);?>
</a></li>
		</ul>		
		<?php endif; ?>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading title-truncate"><?php echo smarty_function_t(array('c' => 'user.CONTACT'), $this);?>
 <?php echo $this->_tpl_vars['username']; ?>
</div>
	<div class="panel-body">
        <div class="row">
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'is_blocked', 'assign' => 'is_blocked', 'UID' => $_SESSION['uid'], 'BID' => $this->_tpl_vars['user']['UID'])), $this); ?>

            <?php if (! $this->_tpl_vars['is_blocked']): ?>
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'is_friend', 'assign' => 'is_friend', 'UID' => $_SESSION['uid'], 'FID' => $this->_tpl_vars['user']['UID'])), $this); ?>

                <?php if ($this->_tpl_vars['is_friend']): ?>
					<div class="col-sm-6" id="remove_friend"><a href="#remove_friend" id="remove_from_friends_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'user.remove_friend'), $this);?>
</a></div>
					<?php if ($this->_tpl_vars['private_msgs'] == 'friends'): ?>
						<div class="col-sm-6"  id="send_message"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/mail/compose/<?php echo $this->_tpl_vars['user']['username']; ?>
"><?php echo smarty_function_t(array('c' => 'user.send_message'), $this);?>
</a></div>
					<?php endif; ?>
				<?php else: ?>
					<div class="col-sm-6"  id="add_friend"><a href="#invite_friend" id="invite_as_friend_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'user.add_friend'), $this);?>
</a></div>
                <?php endif; ?>
            <?php endif; ?>
			
			<?php if ($this->_tpl_vars['private_msgs'] == 'all'): ?>
				<div class="col-sm-6"  id="send_message"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/mail/compose/<?php echo $this->_tpl_vars['user']['username']; ?>
"><?php echo smarty_function_t(array('c' => 'user.send_message'), $this);?>
</a></div>
			<?php endif; ?>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'is_subscribed', 'assign' => 'is_subscribed', 'SUID' => $_SESSION['uid'], 'UID' => $this->_tpl_vars['user']['UID'])), $this); ?>

            <?php if ($this->_tpl_vars['is_subscribed']): ?>
                <div class="col-sm-6"  id="handle_subscription"><a href="#unsubscribe_user" id="unsubscribe_from_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'user.unsubscribe'), $this);?>
</a></div>
            <?php else: ?>
                <div class="col-sm-6"  id="handle_subscription"><a href="#subscribe_user" id="subscribe_to_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'user.subscribe'), $this);?>
</a></div>
            <?php endif; ?>
            <div class="col-sm-6"  id="report_user"><a href="#report_user" id="open_report_user"><?php echo smarty_function_t(array('c' => 'user.report'), $this);?>
</a></div>
            <?php if ($this->_tpl_vars['is_blocked']): ?>
                <div class="col-sm-6"  id="block_user"><a href="#unblock_user" id="remove_block_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'user.unblock'), $this);?>
</a></div>
            <?php else: ?>
                <div class="col-sm-6"  id="block_user"><a href="#block_user" id="add_block_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'user.block'), $this);?>
</a></div>
            <?php endif; ?>
        </div>

		<div id="invite_message" style="display: none;">
          	<input name="owner_id" type="hidden" value="<?php echo $this->_tpl_vars['user']['UID']; ?>
" id="user_id" />
			<a href="#close_invite_message" id="close_invite_message"  class="close" >&times;</a>
          	<div class="text-white m-t-15">
            	<?php echo smarty_function_t(array('c' => 'user.add_friend'), $this);?>

         	</div>
			<div class="form-group">
				<textarea class="form-control" name="invite_friend_message" id="invite_friend_message" rows="4" cols="10" placeholder="<?php echo smarty_function_t(array('c' => 'global.message_opt'), $this);?>
" ></textarea>
			</div>
       		<div id="invite_friend_error" class="invite_error" style="display: none;"></div>

           	<input name="send_friend_invite" type="button" value="<?php echo smarty_function_t(array('c' => 'user.send_invite'), $this);?>
" id="send_friend_invite" class="btn btn-primary" />

  		</div>
      	<div id="report_message" style="display: none;">
			<a href="#close_report_user" id="close_report_message"  class="close" >&times;</a>
          	<div class="text-white m-t-15">
            	<?php echo smarty_function_t(array('c' => 'user.report'), $this);?>

         	</div>		
			<div class="form-group">
				<div class="radio">
				  <label>
					<input name="report_reason" value="offensive" id="report_reason_1" type="radio" checked="checked" />
					<?php echo smarty_function_t(array('c' => 'flag.offensive'), $this);?>

				  </label>
				</div>
				<div class="radio">
				  <label>
					<input name="report_reason" value="underage" id="report_reason_2" type="radio"  />
					<?php echo smarty_function_t(array('c' => 'flag.underage'), $this);?>

				  </label>
				</div>
				<div class="radio">
				  <label>
					<input name="report_reason" value="spammer" id="report_reason_3" type="radio" />
					<?php echo smarty_function_t(array('c' => 'flag.spammer'), $this);?>

				  </label>
				</div>
				<div class="radio">
				  <label>
					<input name="report_reason" value="other" id="report_reason_4" type="radio" />
					<?php echo smarty_function_t(array('c' => 'flag.other'), $this);?>

				  </label>
				</div>				
			</div>
			<div id="other_message" style="display: none;">
				<div class="form-group">
					<textarea class="form-control" name="other_reason" id="other_reason" rows="4" placeholder="<?php echo smarty_function_t(array('c' => 'global.message_opt'), $this);?>
"></textarea>
				</div>
          	</div>

           	<input name="send_report_user" type="button" value="<?php echo smarty_function_t(array('c' => 'user.flag_user'), $this);?>
" id="send_flag_user_<?php echo $this->_tpl_vars['user']['UID']; ?>
" class="btn btn-primary" />

      	</div>
		<div id="user_message" style="display:none;"></div>		
	
	</div>
</div>