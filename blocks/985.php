<!-- ============================================ -->
<!--                    Blog                      -->
<!-- ============================================ -->

<?php
$header = get_field("header");
$sub_header = get_field("sub_header");
$cta = get_field("cta");
?>
<section id="blog-985">
	<div class="cs-container">
		<div class="cs-content">
			<div class="cs-flex">
				<span class="cs-topper"><?= $sub_header ?></span>
				<h2 class="cs-title"><?= $header ?></h2>
			</div>
			<?php if ($cta):
				$link_url = $cta['url'];
				$link_title = $cta['title'];
				$link_target = $cta['target'] ? $cta['target'] : '_self';
			?>
				<a class="cs-button-solid" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
			<?php endif; ?>
		</div>
		<ul class="cs-card-group">
			<li class="cs-item">
				<picture class="cs-picture">
					<!--Mobile Image-->
					<source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon10.jpg">
					<!--Tablet and above Image-->
					<source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon10.jpg">
					<img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon10.jpg" alt="stylist" width="413" height="480">
				</picture>
				<div class="cs-info">
					<span class="cs-date">
						<img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/calendar.svg" alt="stylist" width="20" height="20">
						07 Sep, 2022
					</span>
					<h3 class="cs-h3">Healthy hair tips: How to keep your locks looking luscious</h3>
					<span class="cs-desc">
						How to style without causing damage, and tips on maintaining a healthy diet for healt...
					</span>
					<a href="" class="cs-link">Read More</a>
				</div>
			</li>
			<li class="cs-item">
				<picture class="cs-picture">
					<!--Mobile Image-->
					<source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon11.jpg">
					<!--Tablet and above Image-->
					<source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon11.jpg">
					<img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon11.jpg" alt="stylist" width="413" height="480">
				</picture>
				<div class="cs-info">
					<span class="cs-date">
						<img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/calendar.svg" alt="stylist" width="20" height="20">
						07 Sep, 2022
					</span>
					<h3 class="cs-h3">Healthy hair tips: How to keep your locks looking luscious</h3>
					<span class="cs-desc">
						How to style without causing damage, and tips on maintaining a healthy diet for healt...
					</span>
					<a href="" class="cs-link">Read More</a>
				</div>
			</li>
			<li class="cs-item">
				<picture class="cs-picture">
					<!--Mobile Image-->
					<source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon12.jpg">
					<!--Tablet and above Image-->
					<source media="(min-width: 601px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon12.jpg">
					<img loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/salon12.jpg" alt="stylist" width="413" height="480">
				</picture>
				<div class="cs-info">
					<span class="cs-date">
						<img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/calendar.svg" alt="stylist" width="20" height="20">
						07 Sep, 2022
					</span>
					<h3 class="cs-h3">Healthy hair tips: How to keep your locks looking luscious</h3>
					<span class="cs-desc">
						How to style without causing damage, and tips on maintaining a healthy diet for healt...
					</span>
					<a href="" class="cs-link">Read More</a>
				</div>
			</li>
		</ul>
	</div>
</section>