<div class="container-fundaciones-shortcode row">
<?php
foreach ($fundaciones as $fundacion): ?>
	<div class="image col-xs-4 col-md-3">
		<a href="<?php echo get_permalink($fundacion); ?>" class="logo-fundacion" alt="<?= get_the_title($fundacion); ?>">
			<?php echo get_the_post_thumbnail( $fundacion, 'medium'); ?>
		</a>
	</div>
<?php endforeach; ?>
</div>
