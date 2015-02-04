<!-- Main content starts -->

<div class="content">
<div id="myModal" class="modal hide">
    <div class="modal-header">
        <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true" class="close">×</a>
         <h3>Eliminar</h3>
    </div>
    <div class="modal-body">
        <p>Eliminando Prospecto del sistema.</p>
        <p>Estas seguro?</p>
    </div>
    <div class="modal-footer">
      <a href="javascript:void(0);" id="btnYes" class="btn danger">Si</a>
      <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
    </div>
</div>
  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Opciones del Sistema</a></div>

        <div class="sidebar-inner">
          <?php $data["current"] = "perfil"; $this->load->view("perfil/includes/menu",$data); ?>
        </div>

    </div>

    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left">Mi Perfil 
          <!-- page meta -->
          
        </h2>


        <!-- Breadcrumb -->
        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">

   <div class="widget wlightblue">
                <form method="post" action="<?php echo site_url("perfil/update"); ?>" enctype="multipart/form-data">
                  <input type="hidden" id="user_id" name="user_id" value="<?php echo $usuario->user_id; ?>" />
                
                <div class="widget-head">
                  <div class="pull-left">Datos Generales</div>
                       <div class="pull-right">
                        <input type="submit" value="Grabar">
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
                      <tr>
                        <td>mi patrocinador es</td>
                       <td>00<strong><?php echo $usuario->directo; ?></strong></td>
                      </tr>                      
                      <tr>
                        <td>Foto</td>
                        <td>
                          <?php if (!empty($usuario->imagen)) { ?>
                          <img src="<?php echo base_url("media/".$usuario->imagen); ?>"> <br> <br>
                          <?php } ?>
                          <input type="file" id="foto" name="foto">
                        </td>
                      </tr>                      
                      <tr>
                        <td>Nombre</td>
                        <td><input type="text" id="first_name" name="first_name" value="<?php echo $usuario->first_name; ?>"></td>
                      </tr>
                      <tr>
                        <td>Apellidos</td>
                        <td><input type="text" id="last_name" name="last_name" value="<?php echo $usuario->last_name; ?>"></td>
                      </tr>

                      <tr>
                        <td>Número de patrocinador</td>
                        <td><strong>00<?php echo $usuario->user_id; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Nombre de usuario</td>
                        <td><input type="text" id="username" name="username" value="<?php echo $usuario->username; ?>"></td>
                      </tr>
                      <tr>
                        <td>Nueva Contraseña</td>
                        <td><input type="text" id="password" name="password"></td>
                      </tr>
                      <tr>
                        <td>Pregunta Secreta</td>
                        <td>
                              <select id="pregunta" name="pregunta">
                                <option value="">Selecciona</option>
                                <option value="mascota" <?php echo ($usuario->pregunta_s=="mascota")?"selected":""; ?>>Nombre de mi primer mascota</option>
                                <option value="automovil" <?php echo ($usuario->pregunta_s=="automovil")?"selected":""; ?>>Modelo de mi primer automovil</option>
                                <option value="mama" <?php echo ($usuario->pregunta_s=="mama")?"selected":""; ?>>Segundo apellido de mi máma</option>
                              </select>                          
                        </td>
                      </tr>                     
                      <tr>
                        <td>Respuesta Secreta</td>
                        <td><input type="text" id="respuesta" name="respuesta" value="<?php echo $usuario->respuesta_s; ?>"></td>
                      </tr>      
                      <tr>
                        <td>Correo Electrónico</td>
                        <td><input type="text" id="email" name="email" value="<?php echo $usuario->email; ?>"></td>
                      </tr>
                      <tr>
                        <td>Teléfono</td>
                        <td><input type="text" id="telefono" name="telefono" value="<?php echo $usuario->telefono; ?>"></td>
                      </tr>                      
                      <tr>
                        <td>Registrado desde</td>
                        <td><strong><?php echo $usuario->member_since; ?></strong></td>
                      </tr>


                    </table>

                  </div>

                <div class="widget-head">
                  <div class="pull-left">Datos de ubicación</div>
                       <div class="pull-right">
                        <input type="submit" value="Grabar">
                      </div>                  
                  <div class="clearfix"></div>
                </div>
                 <div class="widget-content">
                   <table class="table table-bordered">
                    <tr>
                      <td>Direccion</td>
                      <td><input type="text" id="direccion" name="direccion" value="<?php echo $usuario->direccion; ?>"></td>
                    </tr>
                    <tr>
                      <td>Codigo Postal</td>
                      <td><input type="text" id="cp" name="cp" value="<?php echo $usuario->cp; ?>"></td>
                    </tr>
                    <tr>
                      <td>País</td>
                      <td><input type="text" id="pais" name="pais" value="<?php echo $usuario->pais; ?>"></td>
                    </tr>
                    <tr>
                      <td>Estado</td>
                      <td><input type="text" id="estado" name="estado" value="<?php echo $usuario->estado; ?>"></td>
                    </tr>
                    <tr>
                      <td>Ciudad</td>
                      <td><input type="text" id="ciudad" name="ciudad" value="<?php echo $usuario->ciudad; ?>"></td>
                    </tr>                    
                   </table>
                </div>
                </div>
                  </form>

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