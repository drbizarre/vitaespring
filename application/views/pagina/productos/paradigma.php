<!DOCTYPE html>
<html lang="en-US" class="css3transitions">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <title>Paradigma - Lead Quest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php $this->load->view("pagina/commons/assets");  ?>
</head>

<body class="single single-product postid-221 woocommerce woocommerce-page header_1_body with_featured_img page_header_yes wpb-js-composer js-comp-ver-4.3.4 vc_responsive">

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



                        <div itemscope itemtype="http://schema.org/Product" id="product-221" class="post-221 product type-product status-publish has-post-thumbnail shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">

                            <div class="images">

                                <div class="with_thumbnails_container">
                                    <div class="slideshow_container flexslider with_thumbnails slide_layout_" id="contentflex">
                                        <ul class="slides slide_image_thumbnails">
                                            <li class=' slide_element slide1 frame1'>
                                                <img src='<?php echo base_url(); ?>assets/page/images/audio4.png' title='image1xxl (6)' alt='' />
                                            </li>
                                        </ul>
                                    </div>
                                   
                                </div>


                            </div>

                            <div class="summary entry-summary">

                                <h1 itemprop="name" class="product_title entry-title">Paradigma</h1>
                                <div class="price_rating">
                                

                                    <div class="price_square">
                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                                            <div class="price"><span class="amount">$20.00</span>
                                            </div>

            

                                        </div>
                                    </div>
                                </div>
                                <div itemprop="description" class="desc_shop">
                                    <p>Los paradigmas son sólidas estructuras mentales , espiritual y emocionales que limitan nuestro desempeño . Debemos estar comprometidos a derribar eso argumentos  y prejuicios en forma de paradigmas, para que entonces podamos dar lugar a las cosas nuevas en nuestra vida.</p>
                                </div>



                                <form class="cart" method="post" action="<?php echo site_url("carrito"); ?>" >
                                    <input type="hidden" id="price" name="price" value="20">
                                    <input type="hidden" id="name" name="name" value="Paradigma">
                                    <input type="hidden" id="image" name="image" value="<?php echo base_url(); ?>assets/page/images/audio4.png">
                                    <input type="hidden" id="id" name="id" value="2">
                                    <h2>Cant. </h2>
                                    <div class="quantity">
                                        <input type="number" step="1" min="1" name="qty" value="1" title="Qty" class="input-text qty text" size="4" />
                                    </div>
                                    
                                    <div class="add_buttons">
                                        <button type="submit" class="single_add_to_cart_button button alt">Agregar al carrito</button>
                                    </div>
                                </form>


                            </div>
                            <!-- .summary -->


                            <div class=" tabbable style_1 tabs-top">
                                <ul class="nav nav-tabs">

                                    <li class="description_tab active ">
                                        <a href="#tabdescription" data-toggle="tab" class="yes">Descripción</a>
                                    </li>


                                    <li class="reviews_tab  ">
                                        <a href="#tabreviews" data-toggle="tab" class="yes">Comentarios</a>
                                    </li>

                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane panel entry-content active" id="tabdescription">
                                    <p>Los paradigmas son sólidas estructuras mentales , espiritual y emocionales que limitan nuestro desempeño . Debemos estar comprometidos a derribar eso argumentos  y prejuicios en forma de paradigmas, para que entonces podamos dar lugar a las cosas nuevas en nuestra vida.</p>
                                    </div>


                                    <div class="tab-pane panel entry-content " id="tabreviews">
                                        <div id="reviews">
         


                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- #product-221 -->




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