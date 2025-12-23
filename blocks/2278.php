<!-- ============================================ -->
<!--                 Side By Side                 -->
<!-- ============================================ -->

<?php
$sub_header = get_field("sub_header");
$header = get_field("header");

$header_1 = get_field("header_1");
$text_1 = get_field("text_1");
$cta_1 = get_field("cta_1");

$header_2 = get_field("header_2");
$text_2 = get_field("text_2");
$cta_2 = get_field("cta_2");
?>

<section id="RPsbs-2278">
	<div class="cs-header">
		<span class="cs-topper"><?= $sub_header ?></span>
		<h2 class="cs-title"><?= $header ?></h2>
	</div>
	<div class="cs-container">
		<!-- Left Image Section -->
		<picture class="cs-picture">
			<source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/construction7.jpg">
			<source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/construction7.jpg">
			<img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/construction7.jpg" alt="construction" width="500" height="552" aria-hidden="true">
		</picture>
		<!-- Right Content Section-->
		<div class="cs-content">
			<h3 class="cs-h3"><?= $header_1 ?></h3>
			<p class="cs-text">
				<?= $text_1 ?>
			</p>
			<span class="cs-heading">Services Include:</span>

			<?php if (have_rows('bullets_1')): ?>
				<ul class="cs-ul">
					<?php while (have_rows('bullets_1')): the_row();
						$bullet = get_sub_field('bullet'); ?>
						<li class="cs-li">
							<?= $bullet ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>

			<?php if ($cta_1):
				$link_url = $cta_1['url'];
				$link_title = $cta_1['title'];
				$link_target = $cta_1['target'] ? $cta_1['target'] : '_self';
			?>
				<a class="cs-button-solid" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" aria-label="<?= esc_html($link_title); ?>"><?= esc_html($link_title); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- ============================================ -->
<!--             Side By Side Reverse             -->
<!-- ============================================ -->
 
<section id="RPsbsr-2278">
	<div class="cs-container">
		<!-- Left Image Section -->
		<picture class="cs-picture">
			<source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/construction8.jpg">
			<source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/construction8.jpg">
			<img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/construction8.jpg" alt="construction" width="500" height="552" aria-hidden="true">
		</picture>
		<!-- Right Content Section-->
		<div class="cs-content">
			<h3 class="cs-h3"><?= $header_2 ?></h3>
			<p class="cs-text">
				<?= $text_2 ?>
			</p>

			<span class="cs-heading">Services Include:</span>
			<?php if (have_rows('bullets_2')): ?>
				<ul class="cs-ul">
					<?php while (have_rows('bullets_2')): the_row();
						$bullet = get_sub_field('bullet'); ?>
						<li class="cs-li">
							<?= $bullet ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>

			<?php if ($cta_2):
				$link_url = $cta_2['url'];
				$link_title = $cta_2['title'];
				$link_target = $cta_2['target'] ? $cta_2['target'] : '_self';
			?>
				<a class="cs-button-solid" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" aria-label="<?= esc_html($link_title); ?>"><?= esc_html($link_title); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>