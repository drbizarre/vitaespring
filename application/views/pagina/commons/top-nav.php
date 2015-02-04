
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <div class="pull-left">
                        <div id="text-3" class="widget widget_text">
                            <?php if(isset($afiliado)){ ?>
                            <div class="textwidget"><?php echo ucwords($afiliado->first_name." ".$afiliado->last_name); ?> | Afiliado | <?php echo "00".$afiliado->user_id; ?> | <?php echo $afiliado->email; ?> | <?php echo $afiliado->telefono; ?></div>
                            <?php }else{ ?>
                            <div class="textwidget">Atención a Clientes +3 045 224 33 12</div>
                            <?php } ?>
                        </div>
                            <?php 
                               if($this->session->userdata('is_logged_in') == TRUE){
                                   echo "<div id=\"text-3\" class=\"widget widget_text\"><div class=\"textwidget\">Bienvenido: <strong><a href=\"".site_url("capturista")."\">".ucfirst($this->session->userdata('first_name'))." ".ucfirst($this->session->userdata('last_name'))."</a></strong></div></div>";
                                }else{
                            ?>        
                            <div id="text-3" class="widget widget_text">
                                <div class="textwidget"><a href="<?php echo site_url("backoffice"); ?>">Acceder</a> ó <a href="<?php echo site_url("members/create"); ?>">Crear Cuenta</a></div>
                            </div>
                            <?php } ?>
                              
                    </div>
                </div>
                <div class="span6">
                    <div class="pull-right">

                        <div class="widget widget_text" style="display:block;">
                            <div class="textwidget"><a href="<?php echo site_url("carrito"); ?>">Carrito de compras (<strong><?php echo $this->cart->total_items(); ?></strong>)</a></div>
                        </div>

                        
                        <div id="social_widget-3" class="widget social_widget">
                            <div class="row-fluid social_row">
                                <div class="span12">
                                    <ul class="footer_social_icons">
                                        <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCLypnjBjnPHv4LsjeUYXNCA"><i class="moon-youtube"></i></a>
                                        </li>
                                        <li class="twitter"><a target="_blank" href="https://twitter.com/LeadQuestinc"><i class="moon-twitter"></i></a>
                                        </li>
                                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/LeadQuestInc?ref=hl"><i class="moon-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_icl_lang_sel_widget" id="icl_lang_sel_widget-2" style="display:block;">
                            <div id="lang_sel">
                                <ul>
                                    <li>
                                        <a class="lang_sel_sel icl-en" href="#"><img title="English" alt="en" src="<?php echo base_url(); ?>assets/page/plugins/sitepress-multilingual-cms/res/flags/en.png" class="iclflag">&nbsp;English</a>
                                    </li>
                                </ul>    
                            </div>
                        </div>                        
                    </div>
                </div>

            </div>
        </div>
