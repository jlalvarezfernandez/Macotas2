<?php get_header(); ?>
<div class="row-adopciones">
	<?php 
		if(have_posts()) : while(have_posts()) : the_post(); ?>
			<!-- <div class="col-xs-12 col-md-4 col-lg-4"> -->
				<div class="logo">
					
					<a href="<?= the_permalink();?>"><?php the_post_thumbnail('full', array( 'class' => 'alignleft')); ?></a>
				</div>
				<!-- <div class="title">
					<h3><?php the_title(); ?></h3>
				</div> -->
				<!-- <div class="excerpt">
					<?php echo substr(get_the_content(), 0, 250) . '...'; ?>
				</div> -->
				<!-- <div class="mas-info">
					<a href="<?= the_permalink();?>" class="btn btn-primary"><?= __('Más información'); ?></a>
				</div> -->
			<!-- </div> --><?php
	endwhile; endif;
	?>
</div>
<?php get_footer();


