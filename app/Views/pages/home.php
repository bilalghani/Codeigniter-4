<section>

	<?php $session = \Config\Services::session(); ?>
		<?php if(isset($session->success)): ?>

			<div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
				
				<?= $session->success ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span area-hidden="true">&time;</span>
				</button>
			</div>

		<?php endif; ?>

	<div class="jumbotron">
		<div class="container">
  <h1 class="display-4">CI4 Blog</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>
</div>
	
</section>

<section class="blog-section">
	<div class="container">
		<?php if ($news): ?>
			<?php foreach ($news as $newsItem ): ?>
			<h3><a href="/blog/<?= $newsItem['slug'] ?>"><?= $newsItem['title'] ?></a></h3>
		<?php endforeach; ?>
		<?php else: ?>
		<p class="text-center">No post found</p>
	<?php endif; ?>
						
	</div>
</section>