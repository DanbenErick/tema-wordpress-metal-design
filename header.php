
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal Design SA</title>
    <link rel="stylesheet" href=<?php bloginfo('stylesheet_url')?>>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>
<header>
    <div class="bar__informacion">
        <ul>
            <li>
                <span class="telefono__informacion"><span class="icon-phone"></span>(01) 666-666</span>
                <span class="celular__informacion"><span class="icon-whatsapp"></span>999-999-999</span>
            </li>
            <?php
                wp_nav_menu(
                    array(
                        'container'=> '',
                        'menu' => 'Servicio',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'primary',
                    )
                );
            ?>
            <!-- <li><a href="" class="abrirModal" id="abrirModal">Servicios</a></li> -->
        </ul>
    </div>
    <nav>
        <ul>
            <li><a href="<?= bloginfo('url') ?>"><img src=<?php echo bloginfo('stylesheet_directory') . '/assets/images/logo.png';?> alt=""></a></li>
            <li><a href=<?php bloginfo('url')?>>Inicio</a></li>
        </ul>
    </nav>
    <div class="bar__categorias">
        <ul>
            <?php
                wp_nav_menu(
                    array(
                        'container'=> '',
                        'menu' => 'Categorias',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'primary',
                    )
                );
            ?>
        </ul>
    </div>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide"><img src=<?php echo bloginfo('stylesheet_directory') . "/assets/images/slides/slide1.jpg";?>></div>
        <div class="swiper-slide"><img src=<?php echo bloginfo('stylesheet_directory') . "/assets/images/slides/slide2.jpg";?>></div>
        <div class="swiper-slide"><img src=<?php echo bloginfo('stylesheet_directory') . "/assets/images/slides/slide1.jpg";?>></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</header>