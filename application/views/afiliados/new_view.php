<!-- Main content starts -->

<div class="content">

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
	      <h2 class="pull-left">Solicitud de acuerdo para asociado 
          <!-- page meta -->
          
        </h2>


        <!-- Breadcrumb -->
        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">
          <?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
<?php echo $this->session->flashdata('message'); ?>
<?php if (!empty($message)) { echo $message; } ?>

        	 <div class="widget wlightblue">
<div class="widget-head">
                  <div class="pull-left">Nuevo</div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    <h3>Datos Personales</h3>
                    <hr>
  <?php $create_form = array('id'=>'prospectos-form','class' => 'form-horizontal'); ?>

<?php echo form_open('afiliados/save', $create_form); ?>
                      <input type="hidden" id="no" name="no" value="<?php echo $this->session->userdata('user_id'); ?>" >
                      <div class="row-fluid">
                        <div class="span12">
                          <div class="control-group">
                            <label class="control-label" for="no">Su directo</label>
                            <div class="controls">
                              <input type="text" id="no1" name="no1" value="00<?php echo $this->session->userdata('user_id'); ?>" readonly  >
                            </div>
                          </div>
                        </div>
                       
                      </div>

                      <div class="row-fluid">
                        <div class="span6">
                          <div class="control-group">
                            <label class="control-label" for="nombre">Nombre</label>
                            <div class="controls">
                              <input type="text" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>"  >
                            </div>
                          </div>
                        </div>
                        <div class="span6">
                          <div class="control-group">
                            <label class="control-label" for="codigo">Apellido</label>
                            <div class="controls">
                              <input type="text" id="apellidos" name="apellidos" value="<?php echo set_value('apellidos'); ?>" >
                            </div>
                          </div>
                        </div>
                      </div>
                        

                      <div class="row-fluid">
                        <div class="span6">
                          <div class="control-group">
                            <label class="control-label" for="no">Pagina de afiliado</label>
                            <div class="controls">
                              <input type="text" id="pagina" name="pagina" value="" > .lead-quest.com
                            </div>
                          </div>
                        </div> 
                        <div class="span6">
                          <div class="control-group">
                            <label class="control-label" for="contrasena">Contraseña</label>
                            <div class="controls">
                                <input type="password" id="password" name="password">
                            </div>
                          </div>
                        </div>
                      </div>              
                      <div class="row-fluid">
                        <div class="span6">
                          <div class="control-group">
                            <label class="control-label" for="no">Pregunta secreta</label>
                            <div class="controls">
                              <select id="pregunta" name="pregunta">
                                <option value="">Selecciona</option>
                                <option value="mascota">Nombre de mi primer mascota</option>
                                <option value="automovil">Modelo de mi primer automovil</option>
                                <option value="mama">Segundo apellido de mi máma</option>
                              </select>
                            </div>
                          </div>
                        </div> 
                        <div class="span6">
                          <div class="control-group">
                            <label class="control-label" for="respuesta">Respuesta</label>
                            <div class="controls">
                                <input type="password" id="respuesta" name="respuesta">
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="row-fluid">
                        <div class="span12">
                          <div class="control-group">
                            <label class="control-label" for="nss">Seguro social</label>
                            <div class="controls">
                                <input type="text" id="nss" name="nss">
                            </div>
                          </div>
                        </div> 
                        
                      </div>                       
                      <h3>Datos Personales</h3>
                      <hr>
                      <div class="row-fluid">
                        <div class="span8">
                          <div class="control-group">
                            <label class="control-label" for="direccion">Dirección</label>
                            <div class="controls">
                              <input class="span8" type="text" id="direccion" name="direccion" value="<?php echo set_value('direccion'); ?>"  >
                            </div>
                          </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                            <label class="control-label" for="cp">Codigo Postal</label>
                            <div class="controls">
                              <input  type="text" id="cp" name="cp" value="<?php echo set_value('cp'); ?>"  >
                            </div>
                          </div>
                        </div>                        
                      </div>
                      <div class="row-fluid">
                        <div class="span4">
                          <div class="control-group">
                            <label class="control-label" for="direccion">Pais</label>
                            <div class="controls">
                              <select id="pais" name="pais">
                                <option value="eua">E.U.A.</option>
                                <option value="mex">México</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                            <label class="control-label" for="estado">Estado</label>
                            <div class="controls">
                              <input type="text" id="estado" name="estado">
                            </div>
                          </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                            <label class="control-label" for="ciudad">Ciudad</label>
                            <div class="controls">
                              <input type="text" id="ciudad" name="ciudad">
                            </div>
                          </div>
                        </div>                        
                      </div>     
                      <div class="row-fluid">
                        <div class="span4">
                          <div class="control-group">
                            <label class="control-label" for="direccion">Correo</label>
                            <div class="controls">
                              <input  type="text" id="correo" name="correo" value="<?php echo set_value('correo'); ?>"  >
                            </div>
                          </div>
                        </div>
                        <div class="span4">
                          <div class="control-group">
                            <label class="control-label" for="telefono">Teléfono</label>
                            <div class="controls">
                              <input type="text" id="telefono" name="telefono" value="<?php echo set_value('telefono'); ?>"  >
                            </div>
                          </div>
                        </div>                        
                      </div>                      
                      <div class="row-fluid">
                        <div class="span4">
                          <div class="control-group">
                            <label class="control-label" for="status">Status</label>
                            <div class="controls">
                              <select id="status" name="status">
                                <option value="active">Activo</option>
                                <option value="inactive">Inactivo</option>
                              </select>
                            </div>
                          </div>
                        </div>                        
                      </div>                 
                      <hr>
<div class="form_button"><input type="submit" class="btn btn-inverse" value="Grabar"></div>



<?php echo form_close(); ?>
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




