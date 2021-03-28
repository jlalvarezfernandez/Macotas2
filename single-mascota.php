    <?php
    get_header();

    ?>
    <div class="principal">
        <div class="datos-mascota">
            <div class="alerta">
                <p>Se ha enviado un email al propietario de la mascota</p>
            </div>
            <div>
                <p>ALERTA:
                    <?php the_field('alerta'); ?>
                </p>
            </div>
            <div class="nombre-mascota">
                <h1>NOMBRE:
                    <?php the_field('nombre'); ?>
                </h1>
            </div>
            <div class="id-mascota">
                <p>ID:
                    <?php the_field('id'); ?>
                </p>
            </div>
            <div class="tipo-mascota">
                <p> TIPO:
                    <?php the_field('tipo'); ?>
                </p>
            </div>
            <div class="sexo-mascota">
                <p>SEXO:
                    <?php the_field('sexo'); ?>
                </p>
            </div>

            <div class="user-mascota">
                <p>USER:
                    <?php $user = get_field('user'); ?>
                    <?php if ($user) : ?>
                        <a href="<?php echo get_author_posts_url($user['ID']); ?>">
                            <?php echo esc_html($user['display_name']); ?>
                        </a>
                    <?php endif; ?>
                </p>

            </div>
            <div class="chip-mascota">
                <p>CHIP:
                    <?php the_field('chip'); ?>
                </p>
            </div>

            <div class="raza-mascota">
                <p>RAZA:
                    <?php the_field('raza'); ?>
                </p>
            </div>

            <div class="qr-mascota">
                <p>Qr:
                    <?php $qr = get_field('qr'); ?>

                    <?php if ($qr) : ?>
                        <img src="<?php echo esc_url($qr['url']); ?>" alt="<?php echo esc_attr($qr['alt']); ?>" />
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="img-mascota">
            <div class="foto-mascota">
                FOTO:
                <?php $foto = get_field('foto'); ?>
                <?php if ($foto) : ?>
                    <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt']); ?>" />
                <?php endif; ?>
            </div>

        </div>


        <div class="datos-dueño">
            <div class="nombre-propietario">
                <h2>NOMBRE DUEÑO:
                    <?php the_field('nombre_dueno'); ?>
                </h2>
            </div>
            <div class="apellidos-propietario">
                <p>APELLIDOS:
                    <?php the_field('apellidos'); ?>
                </p>
            </div>
            <div class="rut-propietario">
                <p>RUT:
                    <?php the_field('rut'); ?>
                </p>
            </div>
            <div class="telefono-propietario">
                <p>TELÉFONO:
                    <?php the_field('telefono'); ?>
                </p>
            </div>
            <div class="email-propietario">
                <p>EMAIL:
                    <?php the_field('email'); ?>
                </p>
            </div>
        </div>
        <div class="mapa">
            <div class="localizacion-mapa">
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




    </div>


    <?php

    get_footer();

    ?>
