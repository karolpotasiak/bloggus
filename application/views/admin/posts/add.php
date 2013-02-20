<h3>Add new post</h3>
<div class="well">
	<? if(validation_errors()){?>
	<div class="alert alert-error">
		<?=validation_errors(); ?>
	</div>
	<? } ?>
	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
	  <div class="control-group">
	    <label class="control-label" for="inputTitle">Title</label>
	    <div class="controls">
	      <input type="text" id="inputTitle" name="pos_title" class="span6">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputPDate">Post date</label>
	    <div class="controls">
	      <input type="text" id="inputPDate" name="pos_date" value="<?=date("d/m/Y");?>" class="datepicker">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputSummary">Summary</label>
	    <div class="controls">
	      <textarea rows="4" class="span6" id="inputSummary" name="pos_summary"></textarea>
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputText">Post Text</label>
	    <div class="controls">
	      <textarea rows="10" class="span6" id="inputText" name="pos_text"></textarea>
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputTags">Tags</label>
	    <div class="controls">
	      <input type="text" id="inputTags" name="pos_tags" placeholder="Password">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputIMG">Images</label>
	    <div class="controls">
	      <input type="file" id="inputIMG" name="userfile">
	    </div>
	  </div>
	  <div class="control-group">
	    <div class="controls">
	      <button type="submit" class="btn" name="pos_status" value="published">Publish</button>
	      <button type="submit" class="btn" name="pos_status" value="draft">Save as draft</button>
	      <button type="submit" class="btn">Cancel</button>
	    </div>
	  </div>
	</form>
</div>

