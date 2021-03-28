    <?php
    get_header();

    ?>
    <div class="alerta">
        <p>Se ha enviado un email al propietario de la mascota</p>
    </div>
    <p>ALERTA:
    <?php
        $alerta = 'alerta';
        $headers = 'email';
        $to;
        $message = 'Se ha enviado un email al propietario de la mascota';
        
      /*     if ($alerta == "si" ) {
            mail ($to , $subject , $message, $headers) true;

            } else {
                echo "nada";
            }   */



        the_field('alerta'); ?> 
            </p> */
    <div class="principal">
        <div class="datos-mascota">

            <div class="nombre-mascota">
                <div class="info">
                    <h1>NOMBRE:
                        <?php the_field('nombre'); ?>
                    </h1>
                    <div class="raza-mascota">
                        <p>RAZA:
                            <?php the_field('raza'); ?>
                        </p>
                    </div>
                    <div class="sexo-mascota">
                        <p>
                            <?php 

                            $macho =  get_stylesheet_directory_uri() . "/assets/img/masculino.png";
                            $hembra =  get_stylesheet_directory_uri() . "/assets/img/femenino.png";
                            $sexo_mascota_formulario = get_field('sexo');
                            if ($sexo_mascota_formulario ==  'Macho') {
                                echo "<img src='$macho' alt='macho' title='macho'/>";
                            } else {
                                echo "<img src='$hembra' alt='hembra' title='hembra'/>";
                            }
                            ?>
                        </p>
                    </div>
                    <div class="tipo-mascota">
                        <p> 
                            <?php 
                            $perro = get_stylesheet_directory_uri() . "/assets/img/perro.png";
                            $gato = get_stylesheet_directory_uri() . "/assets/img/gato.png";
                            $tipo_animal_formulario = get_field('tipo');
                            if ($tipo_animal_formulario == 'perro') {
                                echo "<img src='$perro'/ alt='perro' title='perro'/>";
                            } else {
                                echo "<img src='$gato' alt='gato' title='gato'/>";
                            }


                            ?>

                        </p>
                    </div>
                </div>

                <div class="chip-mascota">
                    <p>CHIP:
                        <?php the_field('chip'); ?>
                    </p>
                </div>
                <div>
                    <p>OTRA INFORMACIÓN:
                        <?php the_field('otra_informacion'); ?>
                    </p>
                </div>
                <div class="id-mascota">
                    <p>ID:
                        <?php the_field('id'); ?>
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




                <!--  <div class="qr-mascota">
                    <p>Qr:
                        <?php $qr = get_field('qr'); ?>

                        <?php if ($qr) : ?>
                        <img src="<?php echo esc_url($qr['url']); ?>" alt="<?php echo esc_attr($qr['alt']); ?>" />
                        <?php endif; ?>
                    </p>
                </div> -->
            </div>

        </div>

        <div class="img-mascota">
            <div class="foto-mascota">
                FOTO:
                <?php $foto = get_field('foto'); ?>
                <?php 
                    $foto1 =  get_stylesheet_directory_uri() . "/assets/img/gato.png";
                    $foto2 = "https://api.qrserver.com/v1/create-qr-code/?data=http://localhost/proyectoMascotas/mascota/fgfbgfd/&amp;size=100x100"; ?>
                    <img class="foto1" src="<?php echo ($foto1); ?>" />
                    <img class="foto2" src="<?php echo ($foto2); ?>" />
                

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