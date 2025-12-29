<!-- ============================================ -->
<!--                   Reviews                    -->
<!-- ============================================ -->

<?php
$sub_header = get_field("sub_header");
$header = get_field("header");
$text = get_field("text");
$cta = get_field("cta");
?>
<section id="reviews-65">
	<div class="cs-container">
		<div class="cs-content">
			<span class="cs-topper"><?= $sub_header ?></span>
			<h2 class="cs-title"><?= $header ?></h2>
			<p class="cs-text">
				<?= $text ?>
			</p>
		</div>
		<ul class="cs-card-group">
			<li class="cs-item">
				<img class="cs-img" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Reviews/blue-quote.svg" alt="blue quote" width="24" height="16">
				<span class="cs-name">John Doe</span>
				<span class="cs-desc">Texas</span>
				<p class="cs-item-text">
					Proin massa eros, quis fringilla sagittis. Euismod scelerisque varius sed nec consequat, turpis.
				</p>
			</li>
			<li class="cs-item">
				<img class="cs-img" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Reviews/blue-quote.svg" alt="blue quote" width="24" height="16">
				<span class="cs-name">Jane Smith</span>
				<span class="cs-desc">California</span>
				<p class="cs-item-text">
					Proin massa eros, quis fringilla sagittis. Euismod scelerisque varius sed nec consequat, turpis.
				</p>
			</li>
			<li class="cs-item">
				<img class="cs-img" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Reviews/blue-quote.svg" alt="blue quote" width="24" height="16">
				<span class="cs-name">Thomas Madden</span>
				<span class="cs-desc">Texas</span>
				<p class="cs-item-text">
					Proin massa eros, quis fringilla sagittis. Euismod scelerisque varius sed nec consequat, turpis.
				</p>
			</li>
		</ul>

		<?php if ($cta):
			$link_url = $cta['url'];
			$link_title = $cta['title'];
			$link_target = $cta['target'] ? $cta['target'] : '_self';
		?>
			<a class="cs-button-solid" aria-label="<?= esc_html($link_title); ?>" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
		<?php endif; ?>
	</div>
</section>