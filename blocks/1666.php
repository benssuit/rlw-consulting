<!-- ============================================ -->
<!--                  Services                    -->
<!-- ============================================ -->

<?php
$sub_header = get_field("sub_header");
$header = get_field("header");
$text = get_field("text");
$cta = get_field("cta");
$image = get_field('image');
?>
<section id="services-1666">
	<div class="cs-container">
		<div class="cs-image-group">
			<?php if (!empty($image)): ?>
				<picture class="cs-picture">
					<img loading="lazy" decoding="async" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" width="605" aria-hidden="true">
				</picture>
			<?php endif; ?>

			<!--SVG Graphic-->
			<img class="cs-floater" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/white-swirl.svg" alt="graphic" loading="lazy" decoding="async" height="710" aria-hidden="true" width="690">
		</div>
		<div class="cs-content">
			<span class="cs-topper"><?= $sub_header ?></span>
			<h2 class="cs-title"><?= $header ?></h2>
			<p class="cs-text">
				<?= $text ?>
			</p>

			<?php if (have_rows('faq')): ?>
				<ul class="cs-faq-group">
					<?php while (have_rows('faq')): the_row();
						$question = get_sub_field('question');
						$answer = get_sub_field('answer');
					?>
						<li class="cs-faq-item">
							<button class="cs-button">
								<img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/calendar-gold.svg" alt="icon" width="32" height="32">
								<span class="cs-button-text">
									<?= $question ?>
								</span>
								<span class="cs-indicator" aria-hidden="true"></span>
							</button>
							<p class="cs-item-p">
								<?= $answer ?>
							</p>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>

			<?php if ($cta):
				$link_url = $cta['url'];
				$link_title = $cta['title'];
				$link_target = $cta['target'] ? $cta['target'] : '_self';
			?>
				<a class="cs-button-solid" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>