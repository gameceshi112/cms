{if $video.embed_code != ''}
	<div class="video-embedded">
		{$video.embed_code}
	</div>
{else}
<style>
.yytf_1 {ldelim}
	position: absolute;
	z-index: 100;
	height: 500px;
	width: 100%;
	left:0px;
	top:0px;
	background-color: #000;
{rdelim}
#daojs {ldelim}
	text-align: right;
	background-color: #000;
	padding-right: 20px;
	color: #FFF;
	padding-top: 20px;
	padding-bottom: 20px;
	height: 25px
{rdelim}
</style>
<script type="text/javascript" src="{$relative_tpl}/js/ckplayer/ckplayer.js"></script>
<div class="video-container">
	<div id="video" style="width: 100%; height: {$video_height}px;"></div>
	<div class="yytf_1">
		<div id="daojs">视频已加载，请稍等，离广告结束还有<span class="djs" style="color:#FFDD00">5</span>秒</div>
			<div class="lianmeng">
				<img src="{$relative_tpl}/img/advs.jpg" height="400" width=" 740" >
			</div>
	</div>
	<script type="text/javascript">
		var videoObject = {ldelim}
		container: '#video', //容器的ID或className
		variable: 'player',//播放函数名称
		flashplayer:true,
		poster:'material/poster.jpg',//封面图片
		video: [//视频地址列表形式
			{section name=i loop=$video.files}
				['{$video.files[i].file}', '', '{if $video.files[i].height == 1080}蓝光SD{/if}{if $video.files[i].height == 720}超清{/if}{if $video.files[i].height == 480}高清{/if}{if $video.files[i].height == 360}标清{/if}{if $video.files[i].height == 240}普清{/if}', 0],
			{/section}
				]
		{rdelim};
		
	</script>
	<script type="text/javascript" src="{$relative_tpl}/js/my_video.js"></script>
</div>
{/if}