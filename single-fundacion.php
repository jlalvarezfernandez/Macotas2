<?php

get_header();


?>
<main>
    <section class="cabecera">
        <div class="logo">
            <img src="assets\img\galgosChile.png" alt="fundacion" title="fundacion">
        </div>

        <div class="info">
            <div>
                <h1> <?php the_field('fundacion'); ?></div></h1>
               
            <div> <label>Dirección: </label>
                <?php the_field('direccion'); ?></div>
            <div><label>Página Web: </label>
                <?php the_field('web'); ?></div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque atque iusto corporis,
                    nesciunt rerum dolorum obcaecati delectus perspiciatis,
                    cumque in assumenda quos esse exercitationem, nisi quibusdam ut! Magnam, odit architecto!.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque atque iusto corporis,
                    nesciunt rerum dolorum obcaecati delectus perspiciatis,
                    cumque in assumenda quos esse exercitationem, nisi quibusdam ut! Magnam, odit architecto!.</p>
            </div>

        </div>

    </section>
    <section class="general">
        <div class="datos-generales">
            <div class="info-mascotas">
                <div class="img-mascota">
                    <img src="assets\img\galgosChile.png" alt="fundacion" title="fundacion">
                </div>
                <div class="datos-mascota">
                    <h3>Mimi</h3>
                    <p>Gender: female</p>
                    <p>Age: 3 years</p>
                    <p>Breed: mixed</p>
                </div>

            </div>
            <div class="enlace-externo">

                <a class="enlace" href="">MORE INFO</a>

            </div>
        </div>
        
        <div class="datos-generales">
            <div class="info-mascotas">
                <div class="img-mascota">
                    <img src="assets\img\galgosChile.png" alt="fundacion" title="fundacion">
                </div>
                <div class="datos-mascota">
                    <h3>Mimi</h3>
                    <p>Gender: female</p>
                    <p>Age: 3 years</p>
                    <p>Breed: mixed</p>
                </div>

            </div>
            <div class="enlace-externo">

                <a class="enlace" href="">MORE INFO</a>

            </div>
        </div>
        
        <div class="datos-generales">
            <div class="info-mascotas">
                <div class="img-mascota">
                    <img src="assets\img\galgosChile.png" alt="fundacion" title="fundacion">
                </div>
                <div class="datos-mascota">
                    <h3>Mimi</h3>
                    <p>Gender: female</p>
                    <p>Age: 3 years</p>
                    <p>Breed: mixed</p>
                </div>

            </div>
            <div class="enlace-externo">

                <a class="enlace" href="">MORE INFO</a>

            </div>
        </div>
        



    </section>

</main>



<?php get_footer(); ?>