<h3>Post List</h3>
<div class="well">
	<a class="btn btn-primary" href="<?=site_url('admin/posts/add');?>">Add new Post</a>
</div>
<? if($this->session->flashdata('error')){?>
	<div class="alert alert-error">
		<?=$this->session->flashdata('error');?>
	</div>
<? } ?>
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Post Title</th>
			<th>Post Status</th>
			<th>Post Date</th>
			<th>Post Actions</th>
		</tr>
	</thead>
	<tbody>
		<? foreach($posts as $post){?>
			<tr>
				<td><?=$post->pos_id;?></td>
				<td><?=$post->pos_title;?></td>
				<td><?=$post->pos_status;?></td>
				<td><?=$post->pos_date;?></td>
				<td>Not implemented</td>
			</tr>
		<? } ?>
	</tbody>
</table>
