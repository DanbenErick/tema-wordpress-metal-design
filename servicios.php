
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal Design SA</title>
    <link rel="stylesheet" href=<?= bloginfo('stylesheet_directory') . '/assets/css/servicios.css'?>>
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
</header>
    <section>
        <main>
            <h1>Servicios para Empresas</h1>
            <div class="contenedor__servicios">
                <div class="servicio">
                    <div class="servicio__informacion">
                        <h2>Torno</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vel, fugit ducimus delectus pariatur obcaecati voluptatem maxime natus, beatae perferendis quibusdam exercitationem quas praesentium asperiores numquam. Rerum quaerat nostrum illum.</p>
                        <a href="#" class="contactar__whatsapp">Contactar al WhatsApp</a>
                        <a href="#" class="contactar__correo">Contactar al Correo</a>
                    </div>
                    <div class="servicio__imagen">
                        <img src="https://crm.ferrotall.com/media/heller/CMS/entradas/16/5ddb8b446c175-tornoconvencional-heller.jpeg" alt="">
                    </div>
                </div>
                <div class="servicio">
                    <div class="servicio__informacion">
                        <h2>Puente Grua</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vel, fugit ducimus delectus pariatur obcaecati voluptatem maxime natus, beatae perferendis quibusdam exercitationem quas praesentium asperiores numquam. Rerum quaerat nostrum illum.</p>
                        <a href="#" class="contactar__whatsapp">Contactar al WhatsApp</a>
                        <a href="#" class="contactar__correo">Contactar al Correo</a>
                    </div>
                    <div class="servicio__imagen">
                        <img src="http://www.industriaspalmira.com/wp-content/uploads/2017/03/P2020024.jpg" alt="">
                    </div>
                </div>
                <div class="servicio">
                    <div class="servicio__informacion">
                        <h2>Fresadora</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vel, fugit ducimus delectus pariatur obcaecati voluptatem maxime natus, beatae perferendis quibusdam exercitationem quas praesentium asperiores numquam. Rerum quaerat nostrum illum.</p>
                        <a href="#" class="contactar__whatsapp">Contactar al WhatsApp</a>
                        <a href="#" class="contactar__correo">Contactar al Correo</a>
                    </div>
                    <div class="servicio__imagen">
                        <img src="https://previews.123rf.com/images/cookelma/cookelma1505/cookelma150500268/40694237-metalmec%C3%A1nica-fresadora-cnc-cortar-metal-moderno-tecnolog%C3%ADa-de-procesamiento-peque%C3%B1a-profundidad-de-campo-a.jpg" alt="">
                    </div>
                </div>
                <div class="servicio">
                    <div class="servicio__informacion">
                        <h2>Cepillo</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vel, fugit ducimus delectus pariatur obcaecati voluptatem maxime natus, beatae perferendis quibusdam exercitationem quas praesentium asperiores numquam. Rerum quaerat nostrum illum.</p>
                        <a href="#" class="contactar__whatsapp">Contactar al WhatsApp</a>
                        <a href="#" class="contactar__correo">Contactar al Correo</a>
                    </div>
                    <div class="servicio__imagen">
                        <img src="https://cdn.pymesenlared.es/img/278/3568/91912/0x1200/01.09.0287-cepillo-wike-650-15.1500286568.jpg" alt="">
                    </div>
                </div>
                <div class="servicio">
                    <div class="servicio__informacion">
                        <h2>Prensa</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vel, fugit ducimus delectus pariatur obcaecati voluptatem maxime natus, beatae perferendis quibusdam exercitationem quas praesentium asperiores numquam. Rerum quaerat nostrum illum.</p>
                        <a href="#" class="contactar__whatsapp">Contactar al WhatsApp</a>
                        <a href="#" class="contactar__correo">Contactar al Correo</a>
                    </div>
                    <div class="servicio__imagen">
                        <img src="https://i0.wp.com/www.peruinforma.com/wp-content/uploads/2019/05/Metalmec%C3%A1nica-prensa-9.jpg?fit=800%2C600" alt="">
                    </div>
                </div>
                <div class="servicio">
                    <div class="servicio__informacion">
                        <h2>Taladro</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vel, fugit ducimus delectus pariatur obcaecati voluptatem maxime natus, beatae perferendis quibusdam exercitationem quas praesentium asperiores numquam. Rerum quaerat nostrum illum.</p>
                        <a href="#" class="contactar__whatsapp">Contactar al WhatsApp</a>
                        <a href="#" class="contactar__correo">Contactar al Correo</a>
                    </div>
                    <div class="servicio__imagen">
                        <img src="https://st2.depositphotos.com/2206616/8577/i/450/depositphotos_85772694-stock-photo-man-drilling-in-steel-plate.jpg" alt="">
                    </div>
                </div>
                <div class="servicio">
                    <div class="servicio__informacion">
                        <h2>Centro Mecanizado</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vel, fugit ducimus delectus pariatur obcaecati voluptatem maxime natus, beatae perferendis quibusdam exercitationem quas praesentium asperiores numquam. Rerum quaerat nostrum illum.</p>
                        <a href="#" class="contactar__whatsapp">Contactar al WhatsApp</a>
                        <a href="#" class="contactar__correo">Contactar al Correo</a>
                    </div>
                    <div class="servicio__imagen">
                        <img src="https://negocio.pe/sites/negocio.logicaldesign.pe/files/styles/maxima_imagen/public/fabricacion_de_engranajes.jpg?itok=OiFbwyJs" alt="">
                    </div>
                </div>
            </div>
        </main>
    </section>
    <footer>
        <div class="contenedor-footer">
            <h3>Sobre Nosotros</h3>
            <ul>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Mision</a></li>
            </ul>
        </div>
        <div class="contenedor-footer">
            <h3>Contacto</h3>
            <div class="elemento-footer">
                <h4>Correo</h4>
                <p>consultas@metaldesignsa.com</p>
            </div>
            <div class="elemento-footer">
                <h4>WhatsApp</h4>
                <p>999-999-999</p>
            </div>
            <div class="elemento-footer">
                <h4>Telefono</h4>
                <p>(01)666-666</p>
            </div>
        </div>
        <div class="contenedor-footer">
            <h3>Servicios para Empresas</h3>
            
        </div>
        <div class="contenedor-footer"></div>
    </footer>
</body>
</html>