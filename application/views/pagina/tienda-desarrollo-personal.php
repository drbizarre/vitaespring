<!DOCTYPE html>
<html lang="en-US" class="css3transitions">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <title>Tienda - Lead Quest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php $this->load->view("pagina/commons/assets");  ?>
</head>

<body class="home page header_1_body fixed_slider with_slider_page wpb-js-composer vc_responsive woocommerce woocommerce-page">
            
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
                 <h1 class="title">Tienda</h1>
                 <div class="breadcrumbss">
                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;Estas aquí</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url(); ?>">Inicio</a></li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url("tienda/desarrollo-personal"); ?>">Tienda</a></li>
                    </ul>
                 </div>
            </div>
        </div>
        <!-- /breadcumbs -->

        <section id="content" style="" class="composer_content">
 <div class="container " id="woocommerce">

                <div class="row">



                    <div class="span12">



                        <h1 class="page-title">Desarrollo Personal</h1>
                        <!--p class="woocommerce-result-count">mostrando 1&ndash;10 de 23 productos</p>
                        <form method="get" class="woocommerce-ordering">
                            <select class="orderby" name="orderby">
                                <option selected="selected" value="menu_order">Ordenar</option>
                                <option value="popularity">por popularidad</option>
                                <option value="rating">por votacion</option>
                                <option value="date">los recientes</option>
                                <option value="price">por precio: bajo - alto</option>
                                <option value="price-desc">por precio: alto - bajo</option>
                            </select>
                            <input type="hidden" value="product" name="post_type">
                        </form-->


                        <ul class="products">


                            <li class="post-225 product type-product status-publish has-post-thumbnail first tpl2 shipping-taxable purchasable product-type-simple product-cat-posters instock">


                                <a href="<?php echo site_url("producto/atrevete-a-ser-diferente"); ?>">

                                    <img width="254" height="254" src="<?php echo base_url(); ?>assets/page/images/audio1.png" class="attachment-shop_catalog wp-post-image" alt="image1xxl (4)" />

                                    <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    <span class="price"><span class="amount">$15.00</span></span>

                                </a>

                                <div class="bg-shop">
                                    <h4><a href="<?php echo site_url("producto/atrevete-a-ser-diferente"); ?>">Atrevete a ser diferente</a></h4>
                                    <div class="line_under">
                                        <div class="line_left"></div>
                                        <div class="line_center"></div>
                                        <div class="line_right"></div>
                                    </div>
                                    <p>Esta conferencia sostiene que las únicas personas que serán recordadas en las próximas generaciones serán las que vivan para ser y marcar una diferencia</p>
                                </div>

                            </li>

                            <li class="post-217 product type-product status-publish has-post-thumbnail tpl2 shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">


                                <a href="<?php echo site_url("producto/corazon-de-leon"); ?>">

                                    <img width="254" height="254" src="<?php echo base_url(); ?>assets/page/images/audio2.png" class="attachment-shop_catalog wp-post-image" alt="image1xxl (10)" />

                                    <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                    </div>
                                    <span class="price"><span class="amount">$18.00</span></span>

                                </a>

                                <div class="bg-shop">
                                    <h4><a href="<?php echo site_url("producto/corazon-de-leon"); ?>">Corazón de León</a></h4>
                                    <div class="line_under">
                                        <div class="line_left"></div>
                                        <div class="line_center"></div>
                                        <div class="line_right"></div>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies...</p>
                                </div>

                            </li>

                            <li class="post-221 product type-product status-publish has-post-thumbnail tpl2 shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">


                                <a href="<?php echo site_url("producto/habitos-de-los-lideres"); ?>">

                                    <img width="254" height="254" src="<?php echo base_url(); ?>assets/page/images/audio3.png" class="attachment-shop_catalog wp-post-image" alt="image1xxl (6)" />

                                    <div class="star-rating" title="Rated 3.00 out of 5"><span style="width:60%"><strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <span class="price"><span class="amount">$35.00</span></span>

                                </a>

                                <div class="bg-shop">
                                    <h4><a href="<?php echo site_url("producto/habitos-de-los-lideres"); ?>">Los habitos de los líderes altamente efectivos</a></h4>
                                    <div class="line_under">
                                        <div class="line_left"></div>
                                        <div class="line_center"></div>
                                        <div class="line_right"></div>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies...</p>
                                </div>

                            </li>

                            <li class="post-215 product type-product status-publish has-post-thumbnail last tpl2 shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">


                                <a href="<?php echo site_url("producto/paradigma"); ?>">

                                    <img width="254" height="254" src="<?php echo base_url(); ?>assets/page/images/audio4.png" class="attachment-shop_catalog wp-post-image" alt="image1xxl (1)" />

                                    <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                    </div>
                                    <span class="price"><span class="amount">$20.00</span></span>

                                </a>

                                <div class="bg-shop">
                                    <h4><a href="<?php echo site_url("producto/paradigma"); ?>">Paradigma</a></h4>
                                    <div class="line_under">
                                        <div class="line_left"></div>
                                        <div class="line_center"></div>
                                        <div class="line_right"></div>
                                    </div>
                                    <p>Los paradigmas son sólidas estructuras mentales , espiritual y emocionales que limitan nuestro desempeño</p>
                                </div>

                            </li>

                        </ul>
                        <!--nav class="woocommerce-pagination">
                            <ul class='page-numbers'>
                                <li><span class='page-numbers current'>1</span>
                                </li>
                                <li><a class='page-numbers' href='#'>2</a>
                                </li>
                                <li><a class='page-numbers' href='#'>3</a>
                                </li>
                                <li><a class="next page-numbers" href="#">&rarr;</a>
                                </li>
                            </ul>
                        </nav-->



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