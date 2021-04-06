<?php

get_header();


?>

<div>
<label>Nombre Mascota: </label>
<?php the_field( 'nombre' ); ?></div>
<div>
<labe>Edad: </label>
<?php the_field( 'edad' ); ?>
<div>
<labe>Tipo: </label>
<?php the_field( 'tipo' ); ?>
<div>
<label>Raza: </label>
<?php the_field( 'raza' ); ?>

</div>
<label>Fundación: </label>
<?php $fundacion = get_field( 'fundacion' ); ?>
<?php if ( $fundacion ) : ?>
	<a href="<?php echo esc_url( $fundacion); ?>"><?php echo esc_html( $fundacion ); ?></a>
<?php endif; ?> ?>

</div>


<?php get_footer(); ?>