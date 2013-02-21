<div class="span9">
	<span class="label label-inverse"><?=$post->pos_date;?></span>
	<h1><?=$post->pos_title;?></h1>
	
	<? if(strlen($post->pos_image)>0){?>
	<a href="#" class="thumbnail">
      <img src="<?=base_url('uploads/'.$post->pos_image);?>" alt="">
    </a>
    <? } ?>
	<p><?=$post->pos_summary;?></p>
	<p><?=$post->pos_text;?></p>
	<hr>
	<h3>Comments</h3>
	<div class="well">
		<? if(validation_errors()){?>
		<div class="alert alert-error">
			<?=validation_errors(); ?>
		</div>
		<? } ?>
		<form class="form-horizontal" method="POST" action="">
		  <div class="control-group">
		    <label class="control-label" for="inputName">Name</label>
		    <div class="controls">
		      <input type="text" id="inputName" name="com_name" class="span12">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputComment">Comment</label>
		    <div class="controls">
		      <textarea rows="5" id="inputComment" name="com_comment" class="span12"></textarea>
		    </div>
		  </div>
		<div class="control-group">
	    <div class="controls">
	      <button type="submit" class="btn" name="add_comment" value="1">Add Comment</button>
	    </div>
	  </div>

	</div>
	<? if(count($comments)>0){?>
		<? foreach($comments as $comment){?>
		<div>
			<p>Name:<?=$comment->com_name;?></p>
			<p>Comment:<br><?=$comment->com_comment;?></p>
			<hr>
		</div>
		<? } ?>
	<? }else{?>
		<p>Post has no comments</p>
	<? } ?>

</div>