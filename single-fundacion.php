<?php get_header(); ?>
<main>
    <div class="row">
        <div class="info col-md-9">
            <h2> <?php the_title(); ?></h2>
            <div> 
                <label>Dirección: </label>
                <span><?php the_field('direccion'); ?></span>
            </div>
            <div>
                <label>Página Web: </label>
                <span><a href="<?php the_field('web'); ?>" target="_blank"><?php the_field('web'); ?></a></span>
            </div>            
        </div>
         <div class="logo col-md-3">
            <?php the_post_thumbnail('full'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                <p><?php the_content(); ?></p>
        </div>
    </div>
    <?php $adoptados = (up_get_mascotas_fundacion(get_the_id())); ?>
    <?php if ( (is_array($adoptados)) && (count($adoptados)) > 0 ):?>
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4"><?= __('Algunas de las mascotas que tienen en adopción:'); ?></h2>        
        </div>
    </div>
    <div class="row">
        <?php foreach ($adoptados as $key => $post):            
            setup_postdata( $post );
                get_template_part('./templates/parts/single', 'adoptado'); 
            wp_reset_postdata();
        endforeach;
        ?>
    </div>
    <div class="text-center">
        <a href="<?php the_field('web'); ?>" target="_blank" class="btn btn-primary">VER TODAS</a>
    </div>
    <?php endif; ?>
</main>

<?php get_footer();
