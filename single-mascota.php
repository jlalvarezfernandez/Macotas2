    <?php
    //definicion de variables

    // variables para mandar el correo de alerta si fuera necesario

    $dueno = get_field('nombre_dueno');
    $alerta_formulario = 'si';
    $subject = "mensaje de prueba";
    $headers = 'From: pagina mascotas <+cotas.@gmail.com>/r/n';
    $to = "joseluisalvarezfernandez@gmail.com/r/n";
    $message = 'Se ha enviado un email al propietario de la mascota/r/n';

    // variables para mostrar el sexo de la mascota

    $macho =  get_stylesheet_directory_uri() . "/assets/img/masculino.png";
    $hembra =  get_stylesheet_directory_uri() . "/assets/img/femenino.png";
    $sexo_mascota_formulario = get_field('sexo');

    // variables para mostrar el tipo de mascota

    $perro = get_stylesheet_directory_uri() . "/assets/img/perro.png";
    $gato = get_stylesheet_directory_uri() . "/assets/img/cat.png";
    $tipo_animal_formulario = get_field('tipo');

    // variables para mostrar el código qr y la imagen que le acompaña

    $foto = get_field('foto');
    $foto1 =  get_stylesheet_directory_uri() . "/assets/img/mandarina.png";
    $foto2 = "https://api.qrserver.com/v1/create-qr-code/?data=http://localhost/proyectoMascotas/mascota/fgfbgfd/&amp;size=100x100";

    // variabe para mostrar el mapa

    $direccion = "calle%20Jose%20altolaguirre%204";



    ?>
    <?php
    get_header();
    ?>
    <div class="alerta">
        <p>Se ha enviado un email al propietario de la mascota</p>
    </div>

    <p>

        <?php

        if (get_field('alerta') == true) {
        ?>
    <div class="alerta">
        <p>Se ha enviado un email al propietario de la mascota</p>
    </div>
    <?php
            if (mail($to, $subject, $message, $headers) == true) {
                echo "email enviado";
            } else {
                echo "El email no se ha podido mandar, consulte con su administrador";
            }
        }


        /*  the_field('alerta'); */ ?>
    </p>
    <main class="principal">
        <article class="datos-mascota">

            <div class="info">
                <h1>
                    <?php the_field('nombre');
                    echo " - " ?>

                    <?php the_field('raza'); ?>
                    <div class="chip-mascota">
                        <p>CHIP:
                            <?php
                            $chip = "12345";
                            the_field('chip');
                            echo $chip ?>
                        </p>
                    </div>
                </h1>

                <div class="sexo-mascota">
                    <p>
                        <?php
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
                        if ($tipo_animal_formulario == 'perro') {
                            echo "<img src='$perro'/ alt='perro' title='perro'/>";
                        } else {
                            echo "<img src='$gato' alt='gato' title='gato'/>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="mas-datos">
                <div class="otra-info">
                    <p>OTRA INFORMACIÓN:
                        <?php the_field('otra_informacion'); ?>
                    </p>
                    <p>Enfermedades en los ojos, diaspiasia de cadera. Vacunado contra la rabia</p>
                </div>
                <!--  <div class="id-mascota">
                    <p>ID:
                        <?php the_field('id'); ?>
                    </p>
                </div> -->
                <!-- <div class="user-mascota">
                    <p>USER:
                        <?php $user = get_field('user'); ?>
                        <?php if ($user) : ?>
                            <a href="<?php echo get_author_posts_url($user['ID']); ?>">
                                <?php echo esc_html($user['display_name']); ?>
                            </a>
                        <?php endif; ?>
                    </p>

                </div> -->
                <!--  <div class="qr-mascota">
                    <p>Qr:
                        <?php $qr = get_field('qr'); ?>

                        <?php if ($qr) : ?>
                        <img src="<?php echo esc_url($qr['url']); ?>" alt="<?php echo esc_attr($qr['alt']); ?>" />
                        <?php endif; ?>
                        
                    </p>
                </div> -->
            </div>


        </article>
        <article class="img-mascota">
            <div class="foto-mascota" style="background-image: url(<?php echo $foto1 ?>)">
                <div class="codigo">
                    <img src="<?php echo $foto2 ?>" alt="">
                </div>

            </div>
        </article>
        <article class="datos-dueño">
            <div class="nombre-propietario">
                <h2>Datos Propietario


                    <!--  <?php
                            $dueño = "Antonio";
                            $apellidos = "Quesada Cuadrado";
                            the_field('nombre_dueno');
                            echo $dueño . " " . $apellidos; ?> -->
                </h2>
            </div>
            <div class="apellidos-propietario">
                <p>
                    <?php
                    $dueño = "Antonio";
                    $apellidos = "Quesada Cuadrado";
                    the_field('nombre_dueno');
                    echo $dueño . " " . $apellidos; ?>
                </p>
            </div>
            <!--  <div class="rut-propietario">
                <p>RUT:
                    <?php
                    $rut = "12345";
                    the_field('rut');
                    echo $rut;  ?>
                </p>
            </div> -->
            <div class="telefono-propietario">
                <p>TELÉFONO:
                    <?php
                    $tel = "1234567890";
                    the_field('telefono');
                    echo $tel; ?>
                </p>
            </div>
            <div class="email-propietario">
                <p>EMAIL:
                    <?php
                    $email = "loquesea@gmail.com";
                    the_field('email');
                    echo $email; ?>
                </p>
            </div>
        </article>
        <article class="mapa">
            <div class="localizacion-mapa" style="width: 100%">
            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $direccion ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
           
        </article>
    </main>

    <?php
    get_footer();
    ?>