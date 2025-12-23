<?php include "partials/header.php"; ?>

<main id="main-content" class="search search-results" role="main">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Search Results for "<?= get_search_query(); ?>"</h1>
			</div>
		</div>

		<?php if (have_posts()) : ?>
			<div class="row">
				<?php while (have_posts()) : the_post();
					$search_image = get_the_post_thumbnail() ? get_the_post_thumbnail() : '';
					$id = get_the_ID();
				?>
					<div class="col-12 col-md-3">
						<article class="card mb-4">
							<?= $search_image ?>
							<div class="card-body">
								<h5 class="card-title"><?= the_title(); ?></h5>
								<?= the_excerpt(); ?>
								<a href="<?= the_permalink(); ?>" class="btn btn-primary stretched-link">Read more</a>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<p>No results found.</p>
		<?php endif; ?>

	</div>
</main>

<?php include "partials/footer.php"; ?>