<?php

get_header();

//definicion de variables

// variables para mandar el correo de alerta si fuera necesario

$dueno = get_field('nombre_dueno');

$subject = "POSIBLE ALERTA DE MASCOTA ENCONTRADA";
$headers = 'From: QR MASCOTAS <contacto@qrmascotas.cl>/r/n';
$to = get_field('email');

$message = file_get_contents(get_stylesheet_directory() .'/email/envio-email.html');
$message = "hola";

// variables para mostrar el sexo de la mascota

$macho =  get_stylesheet_directory_uri() . "/assets/img/masculino.png";
$hembra =  get_stylesheet_directory_uri() . "/assets/img/femenino.png";
$sexo_mascota_formulario = get_field('sexo');

// variables para mostrar el tipo de mascota

$perro = get_stylesheet_directory_uri() . "/assets/img/perro.png";
$gato = get_stylesheet_directory_uri() . "/assets/img/cat.png";
$tipo_animal_formulario = get_field('tipo');

$qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . up_current_url() . "&amp;size=250x250";


?>
<?php if (get_field('alerta_email') == true) : ?>
    <?php
    $mail = mail($to, $subject, $message, $headers);

    if ($mail) {
        $message = __("Email enviado al propietario de la mascota");
        $class = 'success';
    } else {
        $message = __("El email no se ha podido mandar, consulte con su administrador");
        $class = 'error';
    }

    ?>
    <div class="alerta <?= $class;  ?>">
        
        <?= $message; ?>
    </div>

<?php endif; ?>
<?php?>
<?php if (get_field('alerta_email') == true) : ?>
    <?php
    $mail = mail($to, $subject, $message, $headers);

    if ($mail) {
        $message = __("Email enviado al propietario de la mascota");
        $class = 'success';
    } else {
        $message = __("El email no se ha podido mandar, consulte con su administrador");
        $class = 'error';
    }

    ?>
    <div class="alerta <?= $class;  ?>">
        
        <?= $message; ?>
    </div>

<?php endif; ?>
<?php

if (get_field('nombre_mascota') == "") {
    ?>
    <main class="no-qr">
        <h1>El código qr No esta registrado</h1>
        <img src="<?php echo $qr ?>" alt="qr-code" title="qr-code">
    </main>
    <?php
} else {
    ?>
   
    <main class="principal">

    <section class="img-mascota">
        <div class="foto-mascota" style="background-image: url('<?php echo get_field('foto_mascota')['url']; ?>')">
            <div class="codigo">
                <img src="<?php echo $qr ?>" alt="qr-code" title="qr-code">
            </div>
        </div>
    </section>
    <section class="datos-mascota">

        <div class="info">
            <div class="nombre-sexo">
                <div class="nombre-raza">
                    <h2>
                        <?php the_field('nombre_mascota');
                        echo " - ";
                        the_field('raza');
                        ?>
                    </h2>
                </div>
                <div class="sexo-tipo-mascota">
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

            <div class="descripcion-mascota">
                <p><?php the_content(); ?></p>
            </div>
            <hr>
            <div class="mas-datos">
                <div class="otra-info">
                    <h5>Información complementaria: </h5>
                    <div class="otra-informacion">
                        <p><?php the_field('otra_informacion'); ?></p>
                    </div>
                    <div class="chip">
                        <label>Chip: </label><span><?php the_field('chip'); ?></span>
                    </div>
                </div>
            </div>

        </div>


    </section>


    <section class="datos-dueño">
        <div class="nombre-propietario">
            <h2>Datos Propietario</h2>
        </div>
        <div class="apellidos-propietario">
            <label>Nombre y apellidos: </label><span><?php the_field('nombre_dueno');
                                                        echo ' ';
                                                        the_field('apellidos_dueno'); ?></span>
        </div>
        <div class="telefono-propietario">
            <label>Teléfono: </label>
            <span><?php the_field('telefono'); ?></span>
        </div>
        <div>
            <label>Dirección: </label>
            <?php the_field('owner_address'); ?>
        </div>
        <div class="email-propietario">
            <label>EMAIL:</label>
            <span><?php the_field('email'); ?></span>
        </div>
    </section>
    <section class="mapa">
        <div class="localizacion-mapa" style="width: 100%">
            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo  the_field('owner_address'); ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe><a href="https://www.maps.ie/route-planner.htm"></a>
        </div>
    </section>
</main>

<?php
}
?>


<?php get_footer(); ?>