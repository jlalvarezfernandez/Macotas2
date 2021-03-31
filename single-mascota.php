<?php

get_header();

//definicion de variables

// variables para mandar el correo de alerta si fuera necesario

$dueno = get_field('nombre_dueno');

$subject = "POSIBLE ALERTA DE MASCOTA ENCONTRADA";
$headers = 'From: QR MASCOTAS <contacto@qrmascotas.cl>/r/n';
$to = the_field('email');
$message = 'Este es un email de alerta, su mascota podría haber sido encontrada. /r/n';

// variables para mostrar el sexo de la mascota

$macho =  get_stylesheet_directory_uri() . "/assets/img/masculino.png";
$hembra =  get_stylesheet_directory_uri() . "/assets/img/femenino.png";
$sexo_mascota_formulario = get_field('sexo');

// variables para mostrar el tipo de mascota

$perro = get_stylesheet_directory_uri() . "/assets/img/perro.png";
$gato = get_stylesheet_directory_uri() . "/assets/img/cat.png";
$tipo_animal_formulario = get_field('tipo');

$qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . up_current_url() . "&amp;size=250x250";

// variabe para mostrar el mapa

$direccion = "calle%20Jose%20altolaguirre%204";

?>


<?php if (get_field('alerta_email') == true) : ?>
    <?php
    //$mail = mail($to, $subject, $message, $headers);
    $mail = false;
    if ($mail) {
        $message = __("Email enviado al propietario de la mascota");
        $class = 'success';
    } else {
        $message = __("El email no se ha podido mandar, consulte con su administrador");
        $class = 'error';
    }
    ?>
    <div class="alerta <?= $class; ?>">
        <?= $message; ?>
    </div>
<?php endif; ?>

<main class="principal single-mascotas.php">

    <section class="img-mascota single-mascotas.php">
        <div class="foto-mascota single-mascotas.php" style="background-image: url('<?php echo get_field('foto_mascota')['url']; ?>')">
            <div class="codigo single-mascotas.php">
                <img src="<?php echo $qr ?>" alt="qr-code" title="qr-code">
            </div>
        </div>
    </section>
    <section class="datos-mascota single-mascotas.php">

        <div class="info single-mascotas.php">
            <div class="nombre-sexo single-mascotas.php">
            <div class="nombre-raza single-mascotas.php">
                <h2>
                    <?php the_field('nombre_mascota');
                    echo " - ";
                    the_field('raza');
                    ?>
                </h2>
            </div>
            <div class="sexo-tipo-mascota single-mascotas.php">
                <?php
                if (strtolower($sexo_mascota_formulario) == 'macho') {
                    echo "<img src='$macho' alt='macho' title='macho'/>";
                } else {
                    echo "<img src='$hembra' alt='hembra' title='hembra'/>";
                }
                if ($tipo_animal_formulario == 'perro') {
                    echo "<img src='$perro' class='icon-tipo perro' alt='perro' title='perro'/>";
                } else {
                    echo "<img src='$gato' class='icon-tipo gato' alt='gato' title='gato'/>";
                }
                ?>
            </div>

            </div>
            
            <div class="descripcion-mascota single-mascotas.php">
                <p><?php the_content(); ?></p>
            </div>
            <hr>
            <div class="mas-datos single-mascotas.php">
                <div class="otra-info single-mascotas.php">
                    <h5>Información complementaria: </h5>
                    <div class="otra-informacion single-mascotas.php">
                        <p><?php the_field('otra_informacion'); ?></p>
                    </div>
                    <div class="chip">
                        <label>Chip: </label><span><?php the_field('chip'); ?></span>
                    </div>
                </div>
            </div>

        </div>


    </section>


    <section class="datos-dueño single-mascotas.php">
        <div class="nombre-propietario single-mascotas.php">
            <h2>Datos Propietario</h2>
        </div>
        <div class="apellidos-propietario single-mascotas.php">
            <label>Nombre y apellidos: </label><span><?php the_field('nombre_dueno');
                                                        echo ' ';
                                                        the_field('apellidos_dueno'); ?></span>
        </div>
        <div class="telefono-propietario single-mascotas.php">
            <label>Teléfono: </label>
            <span><?php the_field('telefono'); ?></span>
        </div>
        <div class="email-propietario single-mascotas.php">
            <label>EMAIL:</label>
            <span><?php the_field('email'); ?></span>
        </div>
    </section>
    <section class="mapa single-mascotas.php">
        <div class="localizacion-mapa" style="width: 100%">
            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $direccion ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe><a href="https://www.maps.ie/route-planner.htm"></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>