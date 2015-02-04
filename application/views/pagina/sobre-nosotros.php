<!DOCTYPE html>
<html lang="en-US" class="css3transitions">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <title>Sobre Nosotros - Lead Quest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php $this->load->view("pagina/commons/assets");  ?>
</head>

<body class="home page header_1_body fixed_slider with_slider_page wpb-js-composer vc_responsive">

    <!-- Start Top Navigation -->
    <div class="top_nav">
        <?php $this->load->view("pagina/commons/top-nav");  ?>
    </div>
    <!-- End of Top Navigation -->

    <!-- Page Background used for background images -->
    <div id="page-bg"></div>

    <!-- Header BEGIN -->
    <div class="header_wrapper header_1 no-transparent ">
        <header id="header" class="">
           <?php $this->load->view("pagina/commons/header");  ?>
        </header>
      
        <div class="header_shadow"><span class=""></span></div>

        <!-- Responsive Menu -->
        <div class="menu-small">
           <?php $this->load->view("pagina/commons/responsive-menu");  ?>
        </div>
        <!-- End Responsive Menu -->

    </div>
    <!-- Header END -->

    <!-- MAIN CONTENT -->
    <div class="top_wrapper no-transparent">
        <!-- breadcumbs -->
        <div class="header_page basic background_image colored_bg" style="background-image:url();background-repeat: no-repeat;background:#f6f6f6; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
            <div class="container">
                 <style>
                        .breadcrumbs_c {color:#7c7c7c; font-size:13px; }
                        h1.title {color:#7c7c7c !important; font-size: 40px}
                 </style>
                 <h1 class="title">Sobre Nosotros</h1>
                 <div class="breadcrumbss">
                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;Estas aquí</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url(); ?>">Inicio</a></li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url("sobre-nosotros"); ?>">Sobre Nosotros</a></li>
                    </ul>
                 </div>
            </div>
        </div>
        <!-- /breadcumbs -->

        <section id="content" style="" class="composer_content">

            <div class="container dark">
                <p>Somos una empresa enfocada en la difusión de información con contenido actual, práctico y de implementación inmediata para lograr resultados permanentes.</p>
                <p>Creemos que las personas mejor informadas son las que toman mejores decisiones, sin embargo, la información no es suficiente, es necesario dar dirección y apoyo para lograr la implementación de la misma.</p>
                <p>En Lead-Quest contamos con un equipo de profesionales que compartirán sus conocimientos, pero más importante, sus estrategias de desarrollo, ya que si bien el Conocimiento es Poder, el no aplicarlo hará que nunca liberemos ese Poder.</p>
                <p>Lead-Quest, también ofrece una oportunidad de desarrollo de negocio por medio de un sistema de asociación y un plan de compensación justo y muy lucrativo.</p>
                <p>Aprovecha ésta oportunidad de formar parte de éste grupo de hombres y mujeres de visión y propósito.  Te esperamos, en Lead-Quest hay un lugar para ti.</p>
            </div>

            <div id="fws_5481cb0e25172" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element dynamic_page_header style_1">
                                   <iframe width="100%" height="480" src="//www.youtube.com/embed/Phl7hz-UZW8" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container dark">
                <h2>MISIÓN</h2>
                <p>Contribuir con el desarrollo integral de las personas, ofreciendo una plataforma de información que provea soluciones viables de crecimiento en cuatro áreas relevantes en el tema de formación del ser humano: Tecnología,  Finanzas, Salud y Desarrollo Personal.</p>
                <h2>VISIÓN</h2>
                <p>Ser la plataforma informativa más importante y de mayor relevancia en el ámbito internacional, formando líderes comunitarios más efectivos y sobresalientes, del nivel que toda sociedad necesita y está buscando.</p>
            </div>
         
        </section>

        <a href="#" class="scrollup">Scroll</a> 

    </div>
    <!-- MAIN CONTENT -->

    <!-- Footer -->
    <div class="footer_wrapper">
        <footer id="footer" class="type_">
            <?php $this->load->view("pagina/commons/footer");  ?>
        </footer>
    </div>
    <!-- #footer -->

</body>
</html>