<?php get_header(); $fundacion = get_field('fundacion'); ?>
<main>
    <div class="row">
        <div class="info col-md-6">
            <h2> <?php the_title(); ?></h2>
            <h5><?php echo __('Fundación: ', 'united-pets') . $fundacion[0]->post_title; ?></h5>
            <div> 
                <label>Sexo: </label>
                <span><?php the_field('sexo'); ?></span>
            </div> 
            <div> 
                <label>Tipo: </label>
                <span><?php the_field('tipo'); ?></span>
            </div>
            <div> 
                <label>Tipo: </label>
                <span><?php the_field('edad'); ?></span>
            </div>  
            <div> 
                <label>Raza: </label>
                <span><?php the_field('raza'); ?></span>
            </div>                      
        </div>
        <div class="logo col-md-3">            
            <div>
				<?php echo get_the_post_thumbnail($fundacion[0], 'full'); ?>				
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
</main>
<?php get_footer();
