                        <ul class="side-nav">

                            <li <?php echo ($opcion_clientes=="reembolsos")?"class=\"current_page_item\"":""; ?>><a href="<?php echo site_url("reembolsos"); ?>">Politicas de Reembolso</a></li>

                            <li <?php echo ($opcion_clientes=="privacidad")?"class=\"current_page_item\"":""; ?>><a href="<?php echo site_url("privacidad"); ?>">Politicas de Privacidad</a></li>

                            <li <?php echo ($opcion_clientes=="pagos")?"class=\"current_page_item\"":""; ?>><a href="<?php echo site_url("pagos"); ?>">Formas de Pago</a></li>

                            <li <?php echo ($opcion_clientes=="envios")?"class=\"current_page_item\"":""; ?>><a href="<?php echo site_url("envios"); ?>">Método de Envío</a></li>

                        </ul>