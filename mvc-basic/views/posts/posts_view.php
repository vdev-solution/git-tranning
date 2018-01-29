<?php
	foreach ($post as $p) { ?>
		<h1><?php echo $p['title']; ?> </h1>
		<?php echo $p['text'];
	}
	?>
	<p/>
	<?php
	foreach ($cmt as $c): ?>
	<p>
	<?php echo $c['comment']; ?>
	</p>
	<?php 
	endforeach;?> 
<h3>Comment</h3>
<form id="Comment" method="post" action="">
  <div class="form-group">
    <div class="controls">
      <textarea type="text" cols="60" id="inputComment" name="comment"> </textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Post</button>
    </div>
  </div>
</form>


