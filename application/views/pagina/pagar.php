<!DOCTYPE html>
<html lang="en-US" class="css3transitions">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <title>Pagar - Lead Quest</title>
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
                 <h1 class="title">Pagar</h1>
                 <div class="breadcrumbss">
                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;Estas aquí</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="index.php">Inicio</a></li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="pagar.php">Pagar</a></li>
                    </ul>
                 </div>
            </div>
        </div>
        <!-- /breadcumbs -->

        <section id="content" style="" class="composer_content">

            <div class="container dark">
<div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="header" style="">
                                    
                                </div>
                                <div class="wpb_accordion wpb_content_element not-column-inherit">
                                    <div class="accordion" id="accordion1" data-active-tab="">
                                        <div class="accordion-group wpb_accordion_section group">
                                            <div id="headtoggle22978" class="accordion-heading in_head">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#toggle22978">1. Registro ó Acceso</a>
                                            </div>
                                            <div id="toggle22978" class="accordion-body collapse in">
                                                <div class="accordion-inner">

                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="span6">
                                                                        <h3>Nuevo Cliente</h3>
                                                                        <hr>
                                                                        <p>Opciones de Pago:</p>
                                                                        <label><input checked type="radio" value="guest" name="pago"> Compra como Invitado</label>
                                                                        <label><input type="radio" value="account" name="pago"> Registrar Cuenta</label> <br>
                                                                        <p>Creando una Cuenta podrá comprar rápido, y con precios especiales.</p>
                                                                        <a class="btn btn-inverse" href="javascript:next_accordion_2()">continuar</a>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <h3>Cliente Registrado</h3>
                                                                        <hr>
                                                                        <p>Ya soy un cliente registrado</p>
                                                                          <?php 
                                                                            if($this->session->userdata('user_level') == 6){
                                                                                echo "<p>Bienvenido <strong>".ucfirst($this->session->userdata('first_name'))." ".ucfirst($this->session->userdata('last_name'))."</strong></p>";
                                                                                echo " <a class=\"btn btn-inverse\" href=\"javascript:next_accordion_2()\">continuar</a>";
                                                                            }else{
                                                                          ?>
                                                                          <?php echo form_open('members/login'); ?>
                                                                            <!-- Email -->
                                                                            <div class="control-group">
                                                                              <label class="control-label" for="inputEmail">Usuario</label>
                                                                              <div class="controls">
                                                                                <?php $username_input = array('name' => 'username', 'id' => 'username', 'value' => set_value('username')); ?>
                                                                                <?php echo form_input($username_input); ?>
                                                                              </div>
                                                                            </div>
                                                                            <!-- Password -->
                                                                            <div class="control-group">
                                                                              <label class="control-label" for="inputPassword">Contraseña</label>
                                                                              <div class="controls">
                                                                                    <?php $password_input = array('name' => 'password', 'id' => 'password', 'value' => set_value('password')); ?>
                                                                                    <?php echo form_password($password_input); ?>
                                                                              </div>
                                                                            </div>
                                                                            <!-- Remember me checkbox and sign in button -->
                                                                            <div class="control-group">
                                                                              <div class="controls">
                                                                                <button type="submit" class="btn btn-inverse">Entrar</button>
                                                                              </div>
                                                                            </div>
                                                                          </form>            
                                                                          <?php } ?>
                                                                    </div>
                                                                </div>                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group wpb_accordion_section group">
                                            <div id="headtoggle20477" class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#toggle20477">2. Direccion de Envío</a>
                                            </div>
                                            <div id="toggle20477" class="accordion-body collapse">
                                                <div class="accordion-inner">

                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="span12">
                                                                        <?php if($this->session->userdata('user_level') == 6){ ?>
                                                                        <table class="table">
                                                                            <tr>
                                                                                <td>País</td>
                                                                                <td><input type="text" id="pais" name="pais" value="<?php echo $this->session->userdata('pais'); ?>"></td>
                                                                                <td>Correo Electronico</td>
                                                                                <td><input type="text" id="email" name="email" value="<?php echo $this->session->userdata('email'); ?>"></td>                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Estado</td>
                                                                                <td><input type="text" id="estado" name="estado" value="<?php echo $this->session->userdata('estado'); ?>"></td>                                                                                
                                                                                <td>Teléfono</td>
                                                                                <td><input type="text" id="telefono" name="telefono" value="<?php echo $this->session->userdata('telefono'); ?>"></td>
                                                                            </tr>       
                                                                            <tr>
                                                                                <td>Ciudad</td>
                                                                                <td><input type="text" id="ciudad" name="ciudad" value="<?php echo $this->session->userdata('ciudad'); ?>"></td>                                                                                
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td>Dirección</td>
                                                                                <td><input type="text" id="direccion" name="direccion" value="<?php echo $this->session->userdata('direccion'); ?>"></td>                                                                                
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td>C.P</td>
                                                                                <td><input type="text" id="cp" name="cp" value="<?php echo $this->session->userdata('cp'); ?>"></td>                                                                                
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>   
                                                                            <tr>
                                                                                <td><a class="btn btn-inverse" href="javascript:javascript:next_accordion_3()">Continuar</a></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>                                                                               
                                                                        </table>
                                                                        <?php }else{ ?>
                                                                        <table class="table">
                                                                            <tr>
                                                                                <td>País</td>
                                                                                <td><input type="text" id="pais" name="pais" ></td>
                                                                                <td>Correo Electronico</td>
                                                                                <td><input type="text" id="email" name="email" ></td>                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Estado</td>
                                                                                <td><input type="text" id="estado" name="estado"></td>                                                                                
                                                                                <td>Teléfono</td>
                                                                                <td><input type="text" id="telefono" name="telefono" ></td>
                                                                            </tr>       
                                                                            <tr>
                                                                                <td>Ciudad</td>
                                                                                <td><input type="text" id="ciudad" name="ciudad" ></td>                                                                                
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td>Dirección</td>
                                                                                <td><input type="text" id="direccion" name="direccion"></td>                                                                                
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td>C.P</td>
                                                                                <td><input type="text" id="cp" name="cp" ></td>                                                                                
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>   
                                                                            <tr>
                                                                                <td><a class="btn btn-inverse" href="javascript:javascript:next_accordion_3()">Continuar</a></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>                                                                               
                                                                        </table>                                                                        
                                                                        <?php } ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-group wpb_accordion_section group">
                                            <div id="headtoggle60241" class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#toggle60241">3. Forma de Pago</a>
                                            </div>
                                            <div id="toggle60241" class="accordion-body collapse">
                                                <div class="accordion-inner">

                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <p>
                                                                <label><input checked type="radio" id="payment" name="payment" value="paypal"> <img src="<?php echo base_url(); ?>assets/page/img/imgEcheck.gif"></label>
                                                                <label><input type="radio" id="payment" name="payment" value="td"> VISA/AMEX</label>
                                                            </p>
                                                            <table>
                                                                <tr>
                                                                    <td><a class="btn btn-inverse" href="javascript:javascript:next_accordion_4()">Continuar</a></td>
                                                                </tr>
                                                            </table>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group wpb_accordion_section group">
                                            <div id="headtoggle6024" class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#toggle6024">4. Confirmar Pedido</a>
                                            </div>
                                            <div id="toggle6024" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="span12">
                                                                        <table class="table" style="width:94%;">

                                                                        <tr>
                                                                          <th>QTY</th>
                                                                          <th>Item Description</th>
                                                                          <th style="text-align:right">Item Price</th>
                                                                          <th style="text-align:right">Sub-Total</th>
                                                                        </tr>

                                                                        <?php $i = 1; ?>

                                                                        <?php foreach ($this->cart->contents() as $items): ?>

                                                                          <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                                                                          <tr>

                                                                            <td>
                                                                              <?php echo $items['qty']; //echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '1', 'size' => '1')); ?></td>
                                                                            <td>
                                                                            <?php echo $items['name']; ?>

                                                                              <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                                                                <p>
                                                                                  <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                                                                  <?php endforeach; ?>
                                                                                </p>

                                                                              <?php endif; ?>

                                                                            </td>
                                                                            <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                                                                            <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                                                          </tr>

                                                                        <?php $i++; ?>

                                                                        <?php endforeach; ?>
                                                                        <tr>
                                                                          <td colspan="2"> </td>
                                                                          <td class="right" style="text-align:right"><strong>Subtotal</strong></td>
                                                                          <td class="right" style="text-align:right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td colspan="2"> </td>
                                                                          <td class="right" style="text-align:right"><strong>Envio</strong></td>
                                                                          <td class="right" style="text-align:right">$10.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td colspan="2"> </td>
                                                                          <td class="right" style="text-align:right"><strong>Total</strong></td>
                                                                          <td class="right" style="text-align:right">$<?php echo number_format($this->cart->format_number($this->cart->total())+10,2); ?></td>
                                                                        </tr>
                                                                        </table>
                                                                        <table class="table" style="width:94%;">
                                                                          <tr>
                                                                            <td></td>
                                                                            <td><p style="text-align:right"><a class="btn btn-inverse" href="<?php echo site_url("confirmar"); ?>">Confirmar</a></p></td>
                                                                          </tr>
                                                                        </table>                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<script type="text/javascript">
function next_accordion_2(){
    jQuery("#toggle20477").addClass("in");
    jQuery("#headtoggle20477").addClass("in_head");
    jQuery("#toggle22978").removeClass("in");
    jQuery("#headtoggle22978").removeClass("in_head");
}
function next_accordion_3(){
    jQuery("#toggle60241").addClass("in");
    jQuery("#headtoggle60241").addClass("in_head");
    jQuery("#toggle20477").removeClass("in");
    jQuery("#headtoggle20477").removeClass("in_head");
}
function next_accordion_4(){
    jQuery("#toggle6024").addClass("in");
    jQuery("#headtoggle6024").addClass("in_head");
    jQuery("#toggle60241").removeClass("in");
    jQuery("#headtoggle60241").removeClass("in_head");
}

</script> 
</body>
</html>