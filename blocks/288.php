<!-- ============================================ -->
<!--                   Hero                       -->
<!-- ============================================ -->

<?php
$header = get_field("header");
$text = get_field("text");
$cta = get_field("cta");
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

			<ul class="cs-stats-group">
				<li class="cs-item">
					<span class="cs-number">50+</span>
					<span class="cs-desc">Licensed Attorneys</span>
				</li>
				<li class="cs-item">
					<span class="cs-number">850+</span>
					<span class="cs-desc">Global Partners</span>
				</li>
				<li class="cs-item">
					<span class="cs-number">98%</span>
					<span class="cs-desc">Successful Judgements</span>
				</li>
			</ul>
		</div>
		<!--Hero Image-->
		<picture class="cs-picture">
			<source media="(max-width: 600px)" srcset="https://csimg.nyc3.digitaloceanspaces.com/Hero/lawyer-m.jpg">
			<source media="(min-width: 601px)" srcset="https://csimg.nyc3.digitaloceanspaces.com/Hero/lawyer-t.jpg">
			<source media="(min-width: 1024px)" srcset="https://csimg.nyc3.digitaloceanspaces.com/Hero/lawyer.jpg">
			<img aria-hidden="true" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Hero/lawyer.jpg" alt="lawyer" width="630" height="814">
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