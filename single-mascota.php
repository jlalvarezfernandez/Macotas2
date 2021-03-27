<div>ID: <?php the_field('id');
            ?></div>

<div>NOMBRE:<?php the_field('nombre'); ?></div>
<div>TIPO:<?php the_field('tipo'); ?></div>
<div>SEXO:<?php the_field('sexo'); ?></div>
<div>MAPA: <?php $mapa = get_field('mapa'); ?>
    <?php if ($mapa) : ?>
        <?php echo $mapa['address']; ?>
        <?php echo $mapa['lat']; ?>
        <?php echo $mapa['lng']; ?>
        <?php echo $mapa['zoom']; ?>
        <?php $optional_data_keys = array('street_number', 'street_name', 'city', 'state', 'post_code', 'country'); ?>
        <?php foreach ($optional_data_keys as $key) : ?>
            <?php if (isset($mapa[$key])) : ?>
                <?php echo $mapa[$key]; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?></div>
<div>USER<?php $user = get_field('user'); ?>
    <?php if ($user) : ?>
        <a href="<?php echo get_author_posts_url($user['ID']); ?>"><?php echo esc_html($user['display_name']); ?></a>
    <?php endif; ?>
</div>
<div>CHIP: <?php the_field('chip'); ?></div>
<div>FOTO:<?php $foto = get_field('foto'); ?>
    <?php if ($foto) : ?>
        <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt']); ?>" />
    <?php endif; ?>
</div>
<div>RAZA:<?php the_field('raza'); ?></div>

<div>Qr<?php $qr = get_field('qr'); ?>

    <?php if ($qr) : ?>
        <img src="<?php echo esc_url($qr['url']); ?>" alt="<?php echo esc_attr($qr['alt']); ?>" />
    <?php endif; ?>
</div>
<div>NOMBRE DUEÑO<?php the_field('nombre_dueno'); ?></div>
<div>APELLIDOS:<?php the_field('apellidos'); ?></div>
<div>RUT:<?php the_field('rut'); ?></div>
<div>TELÉFONO<?php the_field('telefono'); ?></div>
<div>EMAIL:<?php the_field('email'); ?></div>
<?php
/* QRcode::png('PHP QR Code :)'); */
