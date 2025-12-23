<?php include "partials/header.php"; ?>

<main id="main-content" role="main">
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</main>

<?php include "partials/footer.php"; ?>