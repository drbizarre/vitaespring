<?php

class Afiliados extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->auth->is_logged_in();
		
	}

	function index() {
		$data['title'] = '';
		$data['module'] = 'afiliados';
		$data['template'] = 'home_view';
		$this->load->model('user');
		$my_direct = $this->session->userdata('user_id');
		$data["afiliados_tmp"] = $this->user->getMisAfiliados($this->session->userdata('user_id'));
		foreach ($data["afiliados_tmp"] as $afiliado) {
			 $afiliado_info      = $this->user->getUserByAfiliado($afiliado->id);
			 $afiliado_main_info = $this->user->getUserById($afiliado_info->afiliado);
			 if ($my_direct!=$afiliado_main_info->directo && $afiliado_info->tipo!="passup") {
			 	$afiliado_main_info->tipo = "passedup";			 
			 }else{
			 	$afiliado_main_info->tipo = $afiliado_info->tipo;
			 }
			 $data["afiliados"][] = $afiliado_main_info;
		}
		$this->load->view('template', $data);		
	}
	function porid($id = NULL) {
		
		$this->load->model('clientes_model');
		$data["cliente"] = $this->clientes_model->getById($id);
		echo $data["cliente"]->email;
	}
	function nuevo() {
		$data['title'] = '';
		$data['module'] = 'afiliados';
		$data['template'] = 'new_view';
		$this->load->model('user');
		$this->load->view('template', $data);		
	}	

	function passup($patrocinador = NULL,$usuario = NULL, $afiliado = NULL){
		$this->load->model('user');
		$afiliados = $this->user->countMisAfiliados($patrocinador);
		$total_afiliados = count($afiliados);
		$passup_levels = array(2,6,10,12,16,20,22,26,30);
		if ($total_afiliados<=30) {
			if (in_array($total_afiliados, $passup_levels)){
				$this->user->setTipoUser($usuario,"passup");
				$this->user->setTipo($afiliado,"passup");

				$nuevo_patrocinador = $this->user->getUserById($patrocinador);
				if ($nuevo_patrocinador->tipo=="passup") {
					$nuevo_patrocinador = $this->user->getUserById($nuevo_patrocinador->directo);
				}
				$new_afiliado = array('user_id'  => $nuevo_patrocinador->directo,'afiliado' => $usuario);
				$nuevo_afiliado = $this->user->create_afiliado($new_afiliado);
				
				
				$this->passup($nuevo_patrocinador->directo,$usuario,$nuevo_afiliado["id"]);

			}else{
				 $this->user->setTipo($afiliado,"directo");
				 
			}
		}else{
			if ($total_afiliados % 6 == 0) {
				$this->user->setTipoUser($usuario,"passup");
				$this->user->setTipo($afiliado,"passup");
				
				$nuevo_patrocinador = $this->user->getUserById($patrocinador);
				if ($nuevo_patrocinador->tipo=="passup") {
					$nuevo_patrocinador = $this->user->getUserById($nuevo_patrocinador->directo);
				}				
				$new_afiliado = array('user_id'  => $nuevo_patrocinador->directo,'afiliado' => $usuario);
				$nuevo_afiliado = $this->user->create_afiliado($new_afiliado);
				$this->passup($nuevo_patrocinador->directo,$usuario,$nuevo_afiliado["id"]);
			}else{
			 	$this->user->setTipo($afiliado,"directo");	
			 	
			}
		}
	}	

	function save() {

		$this->load->model('user');

		$new_user = array(
			'directo'     => $this->input->post("no"),
			'username'    => $this->input->post("pagina"),
			'password'    => sha1("envysea_top_secret_salt".$this->input->post("password")),
			'first_name'  => $this->input->post("nombre"),
			'last_name'   => $this->input->post("apellidos"),
			'email'       => $this->input->post("correo"),
			'telefono'    => $this->input->post("telefono"),
			'status'      => $this->input->post("estado"),
			'user_level'  => 6,
			'direccion'   => $this->input->post("direccion"),
			'cp'          => $this->input->post("cp"),
			'pais'        => $this->input->post("pais"),
			'estado'      => $this->input->post("estado"),
			'ciudad'      => $this->input->post("ciduad"),
			'pregunta_s'  => $this->input->post("pregunta"),
			'respuesta_s' => $this->input->post("respuesta"),
			'member_since'=> @date("Y-m-d")
		);

		$nuevo_usuario = $this->user->create_user($new_user);

		if ($nuevo_usuario["is_true"]) {
			$new_afiliado = array(
				'user_id'  => $this->input->post("no"),
				'afiliado' => $nuevo_usuario["id"]
			);
			$nuevo_afiliado = $this->user->create_afiliado($new_afiliado);
		}
		$this->passup($this->input->post("no"),$nuevo_usuario["id"],$nuevo_afiliado["id"]);
		redirect("afiliados");
	}	
	function savea() {
		$this->load->model('user');
		for($i=1;$i<=1;$i++)
		{
			$new = array(
				'directo'     =>305,
				'actual'      =>305,
				'username'    =>'user'.$i,
				'password'    => sha1("envysea_top_secret_saltuser".$i),
				'first_name'  =>"user".$i,
				'last_name'   =>"user".$i,
				'email'       =>"user".$i."@lead-quest.com",
				'status'      =>"active",
				'user_level'  =>6,
				'member_since'=>@date("Y-m-d")
			);

		$actual = $this->passup(305);
		$new["actual"] = $actual;
		$this->user->create_user($new);
		}
	}	

	function delete($id = NULL) {
		$this->load->model('user');
		$this->user->delete_user($id);
		redirect("afiliados");
	}
	function edit($id = NULL) {
		$data['title'] = '';
		$data['module'] = 'empleados';
		$data['template'] = 'edit_view';
		$this->load->model('empleados_model');
		$data["empleado"] = $this->empleados_model->getById($id);
		$this->load->model('empresas_model');
		$data["empresas"] = $this->empresas_model->getAll();
		$this->load->view('template', $data);	
	}
	function update() {
		$id = $this->input->post("id");
		$update = array(
			'nombre'=>$this->input->post("nombre"),
			'apellidos'=>$this->input->post("apellidos"),
			'no'=>$this->input->post("no"),
			'empresa'=>$this->input->post("empresa"),
			'puesto'=>$this->input->post("puesto"),
			'region'=>$this->input->post("region"),
			'ciudad'=>$this->input->post("ciudad"),
			'salario'=>$this->input->post("salario")
		);
		$data['module'] = 'empleados';
		$data['template'] = 'edit_view';
		$this->load->model('empleados_model');
		$this->empleados_model->update($id,$update);
		$data["empleado"] =$this->empleados_model->getById($id);
		$data["mensaje"] = "Datos actualizados correctamente";
		$this->load->model('empresas_model');
		$data["empresas"] = $this->empresas_model->getAll();
		
		$this->load->view('template', $data);	
	}
	function status($id = NULL) {
		
		$update = array(
			'tipo'=>"cliente"
		);
		$this->load->model('clientes_model');
		$this->clientes_model->update($id,$update);
	}	
}