 <div class="container">
                <div class="row-fluid">
                    <div class="span12">

                        <!-- Logo -->
                        <div id="logo" class="">
                            <a href='/'>
                                <img src="<?php echo base_url(); ?>assets/page/images/2014/09/logo22.png" alt='' />
                            </a>
                        </div>
                        <!-- #logo END -->

                        <div class="after_logo">


                            <!-- Search -->


                            <div class="header_search">
                                <div class="right_search">
                                    <i class="moon-search-3"></i>
                                </div>
                                <div class="right_search_container">
                                    <form action="#" id="search-form">
                                        <div class="input-append">
                                            <input type="text" size="16" placeholder="Search&hellip;" name="s" id="s">
                                            <button type="submit" class="more">Search</button>
                                            <a href="#" class="close_"><i class="moon-close"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Search-->
                        </div>


                        <!-- Show for all header expect header 4 -->


                        <div id="navigation" class="nav_top pull-right ">
                            <nav>
                                <ul id="menu-menu-1" class="menu themeple_megemenu sub-menu">
                                    <li <?php echo (isset($opcion) && $opcion == "index")?"class=\"current-menu-item current_page_item\"":""; ?>><a href="index">Inicio</a></li>
                                    <li <?php echo (isset($opcion) && $opcion == "sobre-nosotros")?"class=\"current-menu-item current_page_item\"":""; ?>><a href="sobre-nosotros">Sobre Nosotros</a></li>
                                    <li <?php echo (isset($opcion) && $opcion == "tienda")?"class=\"current-menu-item current_page_item\"":""; ?>><a href="#">Tienda</a>
                                     <ul class="sub-menu non_mega_menu">
                                            <li><a href="<?php echo site_url("tienda/desarrollo-personal"); ?>">Desarrollo Personal</a></li>
                                            <li><a href="<?php echo site_url("tienda/salud"); ?>">Salud</a></li>
                                     </ul>                                        
                                    </li>
                                    <li <?php echo (isset($opcion) && $opcion == "oportunidad")?"class=\"current-menu-item current_page_item\"":""; ?>><a href="oportunidad">Oportunidad</a></li>
                                    <li <?php echo (isset($opcion) && $opcion == "videos")?"class=\"current-menu-item current_page_item\"":""; ?>><a href="videos">Videos</a>
                                        <ul class="sub-menu non_mega_menu">
                                            <li><a href="videos">Desarrollo Personal</a></li>
                                            <li><a href="videos">Salud</a></li>
                                            <li><a href="videos">Finanzas</a></li>
                                        </ul>
                                    </li>                                        
                                    </li>
                                    <li <?php echo (isset($opcion) && $opcion == "noticias")?"class=\"current-menu-item current_page_item\"":""; ?>><a href="noticias">Noticias</a></li>
                                    <li <?php echo (isset($opcion) && $opcion == "contacto")?"class=\"current-menu-item current_page_item\"":""; ?>><a href="contacto">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- #navigation -->


                        <!-- End custom menu here -->
                        <a href="#" class="mobile_small_menu open"></a>
                    </div>
                </div>



            </div>

