<div class="span3">
	<h3>Tags</h3>
	<ul>
	<? foreach($tags as $tag){?>
		<li><a href="<?=site_url('tag/'.$tag->tag_slug);?>"><?=$tag->tag_title;?></a></li>
	<? } ?>
	</ul>
</div>