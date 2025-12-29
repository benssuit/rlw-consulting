<!-- ============================================ -->
<!--                   Hero                       -->
<!-- ============================================ -->

<?php
$header = get_field("header");
$text = get_field("text");
$cta = get_field("cta");

$desktop = get_field('desktop');
$mobile = get_field('mobile');
?>
<section id="hero-288">
	<div class="cs-container">
		<div class="cs-content">
			<h1 class="cs-title"><?= $header ?></h1>
			<p class="cs-text"><?= $text ?></p>

			<?php if ($cta):
				$link_url = $cta['url'];
				$link_title = $cta['title'];
				$link_target = $cta['target'] ? $cta['target'] : '_self';
			?>
				<a class="cs-button-solid" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
			<?php endif; ?>

			<?php if (have_rows('stats')): ?>
				<ul class="cs-stats-group">
					<?php while (have_rows('stats')): the_row();
						$figure = get_sub_field('figure');
						$description = get_sub_field('description');
					?>
						<li class="cs-item">
							<span class="cs-number"><?= $figure ?></span>
							<span class="cs-desc"><?= $description ?></span>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>

		<!--Hero Image-->
		<picture class="cs-picture">
			<?php if (!empty($mobile)): ?>
				<source media="(max-width: 600px)" srcset="<?= esc_url($mobile['url']); ?>">
			<?php endif; ?>
			<!-- <source media="(min-width: 601px)" srcset="https://csimg.nyc3.digitaloceanspaces.com/Hero/lawyer-t.jpg"> -->
			<?php if (!empty($desktop)): ?>
				<source media="(min-width: 1024px)" srcset="<?= esc_url($desktop['url']); ?>">
				<img aria-hidden="true" decoding="async" src="<?= esc_url($desktop['url']); ?>" alt="<?= esc_attr($desktop['alt']); ?>" width="630" height="814">
			<?php endif; ?>
		</picture>

		<!--Green Waves-->
		<picture class="cs-waves">
			<source media="(min-width: 1024px)" srcset="https://csimg.nyc3.digitaloceanspaces.com/Hero/waves.svg">
			<source media="(min-width: 601px)" srcset="https://csimg.nyc3.digitaloceanspaces.com/Hero/waves-t.svg">
			<source media="(max-width: 600px)" srcset="https://csimg.nyc3.digitaloceanspaces.com/Hero/waves-m.svg">
			<img decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Hero/waves.svg" alt="waves" width="645" height="1080" aria-hidden="true">
		</picture>
	</div>
</section>