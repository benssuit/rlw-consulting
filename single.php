<?php include "partials/header.php"; ?>

<main id="main-content" class="single-main" role="main">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</main>

<?php include "partials/footer.php"; ?>