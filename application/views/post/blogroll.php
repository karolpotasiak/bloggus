<div class="span9">
<? foreach($posts as $post){?>
	<span class="label label-inverse"><?=$post->pos_date;?></span>
	<?if($post->pos_status == 'draft'){?><span class="label label-info">DRAFT</span><?}?>
	<h2><?=$post->pos_title;?></h2>
	
	<? if(strlen($post->pos_image)>0){?>
	<a href="<?=site_url('view/'.$post->pos_id);?>" class="thumbnail">
      <img src="<?=base_url('uploads/'.$post->pos_image);?>" alt="">
    </a>
    <? } ?>
	<p><?=$post->pos_summary;?></p>
	<p style="text-align:right;"><a href="<?=site_url('view/'.$post->pos_id);?>">READ MORE</a></p>
	<hr/>
<? } ?>
</div>