<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosMascotas.css">
    <title>Document</title>
</head>

<body>

    <?php
    get_header();

    ?>
    <div class="principal">
        <div class="datosMascota">
           

            <div>
                <h1>NOMBRE:
                    <?php the_field('nombre'); ?>
                </h1>
            </div>
            <div>
                <p>ID:
                    <?php the_field('id'); ?>
                </p>
            </div>
            <div>
                <p> TIPO:
                    <?php the_field('tipo'); ?>
                </p>
            </div>
            <div>
                <p>SEXO:
                    <?php the_field('sexo'); ?>
                </p>
            </div>

            <div>
                <p>USER:
                    <?php $user = get_field('user'); ?>
                    <?php if ($user) : ?>
                    <a href="<?php echo get_author_posts_url($user['ID']); ?>">
                        <?php echo esc_html($user['display_name']); ?>
                    </a>
                    <?php endif; ?>
                </p>

            </div>
            <div>
                <p>CHIP:
                    <?php the_field('chip'); ?>
                </p>
            </div>

            <div>
                <p>RAZA:
                    <?php the_field('raza'); ?>
                </p>
            </div>

            <div>
                <p>Qr:
                    <?php $qr = get_field('qr'); ?>

                    <?php if ($qr) : ?>
                    <img src="<?php echo esc_url($qr['url']); ?>" alt="<?php echo esc_attr($qr['alt']); ?>" />
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="imgMascota">
            <div>
                FOTO:
                <?php $foto = get_field('foto'); ?>
                <?php if ($foto) : ?>
                <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt']); ?>" />
                <?php endif; ?>
            </div>
            
        </div>
        

        <div class="datosDueño">
            <div>
                <h2>NOMBRE DUEÑO:
                    <?php the_field('nombre_dueno'); ?>
                </h2>
            </div>
            <div>
                <p>APELLIDOS:
                    <?php the_field('apellidos'); ?>
                </p>
            </div>
            <div>
                <p>RUT:
                    <?php the_field('rut'); ?>
                </p>
            </div>
            <div>
                <p>TELÉFONO:
                    <?php the_field('telefono'); ?>
                </p>
            </div>
            <div>
                <p>EMAIL:
                    <?php the_field('email'); ?>
                </p>
            </div>
        </div>
        <div class="mapa">
            <div>
                MAPA:
                <?php $mapa = get_field('mapa'); ?>
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
                <?php endif; ?>
            </div>
        </div>


        <!-- <div class="qr">Código qr:<?php QRcode::png('PHP QR Code :)'); ?></div> -->


    </div>


    <?php

    get_footer();

    ?>

</body>

</html>