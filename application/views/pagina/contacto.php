<!DOCTYPE html>
<html lang="en-US" class="css3transitions">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <title>Contacto - Lead Quest</title>
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
                        h1.title {color:#222 !important; font-size: 50px}
                 </style>
                 <h1 class="title">Contacto</h1>
                 <div class="breadcrumbss">
                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;Estas aquí</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url(); ?>">Inicio</a></li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url("contacto"); ?>">Contacto</a></li>
                    </ul>
                 </div>
            </div>
        </div>
        <!-- /breadcumbs -->

        <section id="content" style="" class="composer_content">

    <div id="fws_5486f96724f0b" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-8 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="contact_form wpb_content_element">
                                    <div class="row-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <form name="contactForm" class="standard-form row-fluid" action="#" method="post">
                                                    <input class="span6" name="themeple_name" placeholder="Nombre" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="themeple_e-mail" placeholder="E-Mail" type="text" id="themeple_e-mail" value="" />
                                                    <input class="span6" name="themeple_subject" placeholder="Asunto" type="text" id="themeple_subject" value="" />
                                                    <select class="span12" placeholder="Priority" name="themeple_priority" id="themeple_priority">
                                                        <option value='Low'>Low</option>
                                                        <option value='Medium'>Medium</option>
                                                        <option value='High'>High</option>
                                                        <option value='Urgent as Hell'>Urgent as Hell</option>
                                                        <option value='ASAP DUDE!!!'>ASAP DUDE!!!</option>
                                                    </select>
                                                    <textarea class="span12" placeholder="Comentarios" name="themeple_message" cols="40" rows="7" id="themeple_message"></textarea>
                                                    <p class="perspective">
                                                        <input type="submit" value="Enviar" class="btn-system normal default" />
                                                    </p>
                                                </form>
                                                <div id="ajaxresponse"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element contact_info">
                                    <h2>Información de contacto</h2>
                                    <?php  if($this->session->userdata('is_logged_in') == TRUE){ ?>
                                    
                                    <div class="content">
                                        <p><?php echo $this->session->userdata('direccion'); ?>                                           
                                            <br />Email : <?php echo $this->session->userdata('email'); ?>
                                            <br />Telephone: <?php echo $this->session->userdata('telefono'); ?></p>
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="icon-google_plus"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-linkedin"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-pinterest"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-facebook"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img src="<?php echo base_url(); ?>media/<?php echo $this->session->userdata('foto'); ?>">
                                    </div>
                                    <?php }else{ ?>
                                    <div class="content">
                                        <p>
                                            <br />Email : info@lead-quest.com
                                            <br />Telephone: (951)223-1623</p>
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="icon-google_plus"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-linkedin"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-pinterest"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-facebook"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>                                    
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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