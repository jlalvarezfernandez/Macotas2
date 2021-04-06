<?php

get_header();


?>

<div>
<label>Nombre Fundación: </label>
<?php the_field( 'fundacion' ); ?></div>
<div>
<labe>Dirección: </label>
<?php the_field( 'direccion' ); ?>
<div>
<labe>Página Web: </label>
<?php the_field( 'web' ); ?>
</div>


<?php get_footer(); ?>
