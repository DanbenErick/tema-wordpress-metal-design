<?php if(get_the_title() == "Servicios"):require('servicios.php')?>
    
<?php else:?>

<?php get_header();?>
    <main>
        <section>
            <h1><?php $titulo = the_title();?></h1>
            <div class="productos">
            <?php 
                if ( have_posts() ) {
                    if(get_the_title() == 'Productos') {
                        query_posts('category_name=todos&posts_per_page=10' );
                    }else {
                        query_posts("category_name=".get_the_title()."&posts_per_page=10");
                    }
                    if(!have_posts()) {
                        echo "<h2>No encontramos productos</h2>";
                    }
                    while(have_posts()): 
                        the_post(); 
                     
            ?>
                        <div class="producto">
                            <div class="producto-imagen">
                                <img src=<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID())); ?> alt="">
                            </div>
                            <div class="producto-informacion">
                                <p class="nombre-producto"><?php the_title();?></p>
                                <p class="acabado-producto"><?php the_content(); ?></p>
                                <!-- <p class="precio-producto">S/. 100.00</p> -->
                            </div>
                            <div class="producto-hover">
                                <!-- <div class="contenedor">
                                    <a class="agregar-carrito" href="#">Añadir al Carrito</a>
                                    <a class="producto-informacion" href="pages/detalles-productos.php">Ver Informacion</a>
                                </div> -->
                            </div>
                        </div>
                        <?php endwhile;?>
                <?php }
                    else {
                        echo "<h2>No encontramos productos</h2>";
                    }
                ?>
            </div>
        </section>
        <aside></aside>
    </main>
    <?php get_footer();?>
    <?php endif;?>