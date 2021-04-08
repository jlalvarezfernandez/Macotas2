<div class="col-md-6 col-xs-12 col-lg-4 ">
	<div class="mascota-adoptada-tmp">
	 	<div class="row">
	        <div class="col-md-5">
	            <!-- Image -->
	            <div class="adopt-image d-flex flex-wrap align-items-center">                
	                <?php the_post_thumbnail('full', array( 'class' => 'alignleft')); ?>
	            </div>
	        </div>
	        <div class="col-md-7 res-margin">
	            <!-- Name -->
	            <div class="caption-adoption">
	                <h5 class="adoption-header"><?php the_title(); ?></h5>
	                <!-- List -->
	                <ul class="list-unstyled">
	                    <li>
	                    	<strong><?= __('Sexo:'); ?></strong>
	                        <span class="info-adopt-center"><?php the_field('sexo'); ?></span>
	                    </li> 
	                    <li>
	                    	<strong><?= __('Edad:'); ?></strong>
	                        <span class="info-adopt-center"><?php the_field('edad'); ?></span>
	                    </li>
	                    <li><strong><?= __('Tipo:'); ?></strong>
	                        <span class="info-adopt-center"> <?php the_field('tipo'); ?></span>
	                    </li>
	                    <li><strong><?= __('Raza:'); ?></strong>
	                        <span class="info-adopt-center"><?php the_field('raza'); ?></span>
	                    </li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-12 mt-3">
	            <!-- Button -->
	            <div class="text-adopt">
	                <!-- button-->
	                <div class="text-center">
	                	<?php $fundacion = get_field('fundacion');?>
	                    <a href="<?= get_field('web', $fundacion[0]->ID);?>" target="_blank" class="btn btn-primary"><?= __('Más información'); ?></a>
	                </div>
	            </div>
	            <!-- /text-center -->
	        </div>
	        <!-- /col-md -->
	    </div>
    </div>
</div>