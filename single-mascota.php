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

    $qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . up_current_url() ."&amp;size=250x250";

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
                    <?php the_field('nombre_mascota');
                    echo " - ";
                    the_field('raza'); 
                ?>                    
                </h1>                
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
            <div class="descripcion-mascota">                
                <p><?php the_content(); ?></p>
            </div>
            <div class="mas-datos">
                <div class="otra-info">
                    <h5>Información complementaria: </h5>
                    <div class="chip">
                        <label>Chip: </label><span><?php the_field('chip'); ?></span>                       
                    </div>
                    <div class="otra-informacion">
                        <p><?php the_field('otra_informacion'); ?></p>
                    </div>                   
                </div> 
            </div>

        </section>
        <section class="img-mascota">
            <div class="foto-mascota" style="background-image: url('<?php echo get_field('foto_mascota')['url']; ?>')">
                <div class="codigo">
                    <img src="<?php echo $qr ?>" alt="qr-code" title="qr-code">
                </div>
            </div>
        </section>
        <section class="datos-dueño">
            <div class="nombre-propietario">
                <h2>Datos Propietario</h2>
            </div>
            <div class="apellidos-propietario">
                <?php                    
                    the_field('nombre_dueno');                     
                ?>
            </div>            
            <div class="telefono-propietario">
                <label>Teléfono: </label>
                <span><?php the_field('telefono'); ?></span>
            </div>
            <div class="email-propietario">
                <label>EMAIL:</label>
                <span><?php the_field('email'); ?></span>                
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
