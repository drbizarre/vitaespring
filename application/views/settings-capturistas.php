        <!-- Links -->
        <ul class="nav pull-right">
          <li class="dropdown pull-right">  

            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <?php 
              $foto = $this->session->userdata('foto');
              if ($foto!=NULL) { ?>
              <img class="nav-user-pic img-responsive" alt="" src="<?php echo base_url("media/".$foto); ?>">          
              <?php }else{ ?>
              <img class="nav-user-pic img-responsive" alt="" src="<?php echo base_url("assets/img/user.jpg"); ?>">          
              <?php } ?>
              <?php echo ($this->session->userdata('user_level') == $this->config->item('admin_level')) ? "Administrador": "Afiliado: <strong>00".$this->session->userdata('user_id')."</strong> - ". $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?> <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url("secure/logout"); ?>"><i class="icon-off"></i> Salir</a></li>
            </ul>
          </li>
          
        </ul>