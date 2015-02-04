<!DOCTYPE html>
<html lang="en-US" class="css3transitions">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <title>Carrito - Lead Quest</title>
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
                 <h1 class="title">Carrito de compras</h1>
                 <div class="breadcrumbss">
                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;Estas aquí</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url(); ?>">Inicio</a></li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="<?php echo site_url("carrito"); ?>">Carrito de compras</a></li>
                    </ul>
                 </div>
            </div>
        </div>
        <!-- /breadcumbs -->

        <section id="content" style="" class="composer_content">

            <div class="container dark">
<!--table cellpadding="6" cellspacing="1" style="width:100%" border="0" class="table">

<tr>
  <th>Cant.</th>
  <th>Producto</th>
  <th style="text-align:right">Precio</th>
  <th style="text-align:right">Sub-Total</th>
</tr>


    <tr>
      <td><input type="text" style="with:30px;!important" value="1"></td>
      <td>Audiolibro: Atrevete a ser diferente</td>
      <td style="text-align:right">$15.00</td>
      <td style="text-align:right">$15.00</td>
    </tr>

<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td style="text-align:right"><strong>Total</strong></td>
  <td style="text-align:right">$15.00</td>
</tr>

<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td style="text-align:right"><a href="carrito.php">actualizar carrito</a></td>
  <td style="text-align:right"><form action="pagar.php"><input type="submit" value="Pagar"></form></td>
</tr>
</table-->
<?php echo form_open('carrito/update'); ?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0" class="table">

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
                                    
      <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '1', 'size' => '1')); ?></td>
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
  <td class="right" style="text-align:right"><strong>Total</strong></td>
  <td class="right" style="text-align:right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>
<table class="table">
  <tr>
    <td><p><?php echo form_submit('', 'Actualizar'); ?></p></td>
    <td><p style="text-align:right"><a class="btn btn-inverse" href="<?php echo site_url("pagar"); ?>">Pagar</a></p></td>
  </tr>
</table>


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