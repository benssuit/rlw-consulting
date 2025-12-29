<!-- ============================================ -->
<!--                  Subscribe                   -->
<!-- ============================================ -->

<?php
$sub_header = get_field("sub_header");
$header = get_field("header");
$text = get_field("text");
$image = get_field('image');
?>
<section id="subscribe-1718">
	<div class="cs-container">
		<div class="cs-content">
			<span class="cs-topper"><?= $sub_header ?></span>
			<h2 class="cs-title"><?= $header ?></h2>
			<p class="cs-text">
				<?= $text ?>
			</p>
			<form class="cs-form" name="Contact Form" method="post">
				<input class="cs-input" type="email" id="cs-email-301-1718" name="find-us" placeholder="Email Address" required>
				<button class="cs-button-solid cs-submit" type="submit">Subscribe</button>
			</form>
			<!--Graphic-->
			<img class="cs-floater" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/white-spiral.svg" alt="graphic" width="1920" height="486" aria-hidden="true">
		</div>
	</div>
	<!--Background Image-->
	<?php if (!empty($image)): ?>
		<picture class="cs-background">
			<img loading="lazy" decoding="async" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" width="1920" aria-hidden="true">
		</picture>
	<?php endif; ?>
</section>