<?php

class Perfil extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->auth->is_logged_in();
		
	}

	function index() {
		$data['title'] = '';
		$data['module'] = 'perfil';
		$data['template'] = 'home_view';
		$user_id = $this->session->userdata('user_id');
		$this->load->model('user');
		$data["usuario"] = $this->user->getUserById($user_id);
		$this->load->view('template', $data);		
	}

	function nuevo($id = NULL) {
		$data["id_cliente"] = $id;
		$data['title'] = '';
		$data['module'] = 'pendientes';
		$data['template'] = 'new_view';
		$this->load->model('prospectos_model');
		$data["clientes"] = $this->prospectos_model->getAll();
		$this->load->model('pendientes_model');
		$data["pendientes"] = $this->pendientes_model->getAll();		
		$this->load->view('template', $data);		
	}	
	function save() {
		$tmp = explode("/",$this->input->post("fecha"));
		$fecha = $tmp[2]."-".$tmp[0]."-".$tmp[1];
		$tmp2 = explode(" ",$this->input->post("hora"));
		$hora = $tmp2[0];		
		$new = array(
			'user_id'=>$this->session->userdata('user_id'),
			'cliente_id'=>$this->input->post("cliente"),
			'pendiente'=>$this->input->post("pendiente"),
			'oportunidad'=>$this->input->post("oportunidad"),
			'fecha'=>$fecha,
			'hora'=>$hora,
			'comentario'=>$this->input->post("comentario")
		);
		$this->load->model('pendientes_model');
		$this->pendientes_model->save($new);
		redirect("pendientes");
	}	
	function delete($id = NULL) {
		$this->load->model('pendientes_model');
		$this->pendientes_model->delete($id);
		redirect("pendientes");
	}
	function edit($id = NULL) {
		$data['title'] = '';
		$data['module'] = 'pendientes';
		$data['template'] = 'edit_view';
		$this->load->model('prospectos_model');
		$this->load->model('pendientes_model');
		$data["clientes"] = $this->prospectos_model->getAll();
		$data["pendiente"] = $this->pendientes_model->getById($id);
		$data["pendientes"] = $this->pendientes_model->getAll();		
		$this->load->view('template', $data);
	}

	function ver($id = NULL) {
		$data['module'] = 'pendientes';
		$data['template'] = 'view_view';
		$this->load->model('pendientes_model');
		$data["pendiente"] = $this->pendientes_model->getById($id);
		$data["pendientes"] = $this->pendientes_model->getAll();		
		$this->load->view('template', $data);
	}

	function por_prospecto($id = NULL) {
		$data['module'] = 'pendientes';
		$data['template'] = 'prospecto_view';
		$this->load->model('pendientes_model');
		$this->load->model('prospectos_model');
		$data["pendiente"] = $this->pendientes_model->getById($id);
		$data["pendientes"] = $this->pendientes_model->getAll();		
		$this->load->view('template', $data);
	}
	function update() {
		$data['module'] = 'perfil';
		$data['template'] = 'home_view';		
		$this->load->model('user');

		$directory = './media'; 
		$config['upload_path'] = $directory ; /* NB! create this dir! */
		$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$this->load->library('upload', $config);
		$upload = $this->upload->do_upload('foto');	

		if($upload){
			$data_image = $this->upload->data();
		}else{
			$data_image = NULL;
		}

		$update = array(
			'username'    => $this->input->post("username"),
			'first_name'  => $this->input->post("first_name"),
			'last_name'   => $this->input->post("last_name"),
			'email'       => $this->input->post("email"),
			'telefono'    => $this->input->post("telefono"),
			'direccion'   => $this->input->post("direccion"),
			'cp'          => $this->input->post("cp"),
			'pais'        => $this->input->post("pais"),
			'estado'      => $this->input->post("estado"),
			'ciudad'      => $this->input->post("ciudad"),
			'pregunta_s'  => $this->input->post("pregunta"),
			'respuesta_s' => $this->input->post("respuesta")
		);

		if ($data_image!=NULL) {
			$update["imagen"] = $data_image["file_name"];
		}

		$password =  $this->input->post("password");
		if ($password != NULL) {
			$update["password"] = sha1("envysea_top_secret_salt".$this->input->post("password"));
		}

		$this->user->update_user($this->input->post("user_id"),$update);
		$data["mensaje"] = "Datos actualizados correctamente";
		$data["class"] = "success";
		$data["usuario"] = $this->user->getUserById($this->input->post("user_id"));		
		$this->load->view('template', $data);	
	}
	function status($id = NULL) {
		$update = array(
			'status'=>"off"
		);
		$this->load->model('pendientes_model');
		$this->pendientes_model->update($id,$update);
		redirect("pendientes/ver/".$id);
	}	
}