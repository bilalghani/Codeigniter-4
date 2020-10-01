<div class="container">
	<h1>create new post</h1>
	<?php if($_POST): ?>
		<?= \Config\Services::validation()->listErrors(); ?>
	<?php endif; ?>
	<form action="/blog/create" method="post">
		<div class="form-group">
			<label for="change">
				<strong>Title</strong>
			</label>
			<input type="text" name="title"  class="form-control" id="title" value="" placeholder="">
		</div>
		<div class="form-group">
			<label for="body">
			<strong>body</strong>	
			</label>
			<textarea class="form-control" name="body" id="body"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">create</button>
		</div>
		
	</form>
</div>