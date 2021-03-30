<?php
    get_header();
    
    //definicion de variables

    // variables para mandar el correo de alerta si fuera necesario

    $dueno = get_field('nombre_dueno');
    
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

    
    <?php if (get_field('alerta_email') == true): ?>
        <?php   
            //$mail = mail($to, $subject, $message, $headers);
            $mail = false;
            if ($mail){
                $message = __("Email enviado al propietario de la mascota");
                $class = 'success';
            }
            else{
                $message = __("El email no se ha podido mandar, consulte con su administrador");
                $class = 'error';
            } 
        ?>
            <div class="alerta <?= $class; ?>">
                <?= $message ?>;
            </div>
    <?php endif; ?>       
    
    <main class="principal">
        <section class="datos-mascota">

            <div class="info">
                <h1>
                    <?php the_field('nombre');
                    echo " - " ?>

                    <?php the_field('raza'); ?>
                    
                </h1>
                <div class="chip-mascota">
                    <label>CHIP:</label>
                    <span><?php the_field('chip'); ?> </span>                       
                </div>
                <div class="sexo-mascota">
                    <?php
                        if ( strtolower($sexo_mascota_formulario) == 'macho' ) {
                            echo "<img src='$macho' alt='macho' title='macho'/>";
                        } else {
                            echo "<img src='$hembra' alt='hembra' title='hembra'/>";
                        }
                    ?>
                </div>
                <div class="tipo-mascota">
                    <?php
                        if ($tipo_animal_formulario == 'perro') {
                            echo "<img src='$perro' class='icon-tipo perro' alt='perro' title='perro'/>";
                        } else {
                            echo "<img src='$gato' class='icon-tipo gato' alt='gato' title='gato'/>";
                        }
                    ?>                    
                </div>
            </div>
            <div class="mas-datos">
                <div class="otra-info">
                    <h3>Información complementaria: </h3>
                    <p><?php the_field('otra_informacion'); ?></p>
                </div>
            </div>

        </section>
        <section class="img-mascota">
            <div class="foto-mascota" style="background-image: url(<?php echo $foto1 ?>)">
                <div class="codigo">
                    <img src="<?php echo $foto2 ?>" alt="">
                </div>

            </div>
        </section>
        <section class="datos-dueño">
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
        </section>
        <section class="mapa">
            <div class="localizacion-mapa" style="width: 100%">
            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $direccion ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
           
        </section>
    </main>

<?php get_footer(); ?>
