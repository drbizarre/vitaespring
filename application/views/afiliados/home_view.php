<!-- Main content starts -->

<div class="content">
<div id="myModal" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
         <h3>Eliminar</h3>
    </div>
    <div class="modal-body">
        <p>Eliminando empleado del sistema.</p>
        <p>Estas seguro?</p>
    </div>
    <div class="modal-footer">
      <a href="#" id="btnYes" class="btn danger">Si</a>
      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
    </div>
</div>
  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Opciones del Sistema</a></div>

        <div class="sidebar-inner">
          <?php $data["current"] = "afiliados"; $this->load->view("afiliados/includes/menu",$data); ?>
        </div>

    </div>

    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left"><?php echo @count($afiliados); ?> Afiliados 
          <!-- page meta -->
          <span class="page-meta"></span>
        </h2>

        <!-- Breadcrumb -->
        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">

   <div class="widget wlightblue">

                <div class="widget-head">
                  <div class="pull-left">Mis Afiliados</div>
                       <div class="pull-right">
                        <p><a href="<?php echo site_url("afiliados/nuevo"); ?>" class="btn btn-primary">Nuevo</a></p>
                      </div>
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">
					<?php
					if(isset($mensaje) && !empty($mensaje)){
						echo "<div class=\"alert alert-".$class."\">".$mensaje."</div>";
					}
                    ?>
                    <table class="table table-bordered" id="estudios-listing">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Afiliado</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th>Estado</th>
                          <th>Fecha de afiliación</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                  <?php 
                    if (isset($afiliados) && !empty($afiliados)) {
                      foreach ($afiliados as $afiliado) {
                        $user_se = $this->session->userdata('user_id');
                        $icon = ($afiliado->tipo=="directo" || $user_se == 142)?"directo":"passedup";

                        echo "<tr id=\"".$afiliado->user_id."\">";
                        if ($user_se == 142) {
                          echo "<td><img src=\"".base_url()."assets/img/passup.png\"></td>";
                        }else{
                          echo "<td><img src=\"".base_url()."assets/img/".$afiliado->tipo.".png\"></td>";
                        }
                        
                        echo "<td>00".$afiliado->user_id."</td>
                        <td>".$afiliado->first_name."</td>
                        <td>".$afiliado->last_name."</td>
                        <td>".$afiliado->email."</td>
                        <td>".$afiliado->status."</td>
                        <td>".$afiliado->member_since."</td>
                        <td>
                              <a class=\"btn btn-mini btn-warning\" href=\"".site_url("afiliados/edit/".$afiliado->user_id)."\"><i class=\"icon-pencil\"></i> </a>
                              <!--a class=\"btn btn-mini btn-danger\" data-id=\"".$afiliado->user_id."\" href=\"".site_url("afiliados/delete/".$afiliado->user_id)."\"><i class=\"icon-remove\"></i> </a-->                        
                        </td>
                        </tr>";
                      }
                    }else{
                      echo "<tr>";
                      echo "<td colspan=\"8\">No se encontraron registros grabados.</td>";
                      echo "</tr>";
                    }
                    ?>
                      </tbody>
                    </table>

                  </div>

                </div>


              </div>

          </div>       

        </div>
		  </div>

		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
<!-- Content ends -->


 

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 