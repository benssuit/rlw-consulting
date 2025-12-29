<!-- ============================================ -->
<!--                   Logos                      -->
<!-- ============================================ -->

<?php
$header = get_field("header");
?>
<section id="logos-1896">
	<div class="cs-container">
		<div class="cs-content">
			<h2 class="cs-title"><?= $header ?></h2>
		</div>

		<?php if (have_rows('logos')): ?>
			<div class="cs-logo-wrapper">
				<?php while (have_rows('logos')): the_row();
					$logo = get_sub_field('logo');
				?>
					<img class="cs-logo" src="<?= esc_url($logo['url']); ?>" alt="logo" width="150" loading="lazy" decoding="async">
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>