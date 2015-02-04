<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$parts = str_replace('.lead-quest.com','',$_SERVER['HTTP_HOST']);
		if (!empty($parts) && $parts!="www") {
			$this->load->model('user');
			$result = $this->user->check_username_exist($parts);
			if ($result == TRUE) {
				$data["afiliado"] = $this->user->getUserByUsername($parts);
			}			
		}
		$data["opcion"] = "index";
		$this->load->view('pagina/index', $data);					
	}
	public function nosotros()
	{
		$data["opcion"] = "sobre-nosotros";
		$this->load->view('pagina/sobre-nosotros', $data);					
	}	
	public function tienda($categoria = NULL)
	{
		$data["opcion"] = "tienda";
		$this->load->view('pagina/tienda-'.$categoria, $data);					
	}
	public function producto($producto = NULL)
	{
		$data["opcion"] = "tienda";
		$this->load->view('pagina/productos/'.$producto, $data);					
	}
	public function carrito()
	{	
		$data = array('id'=> $this->input->post('id'),'qty'=> $this->input->post('qty'),'price'=> $this->input->post('price'),'name'=> $this->input->post('name'));		
		if (!empty($data)) {
			$this->cart->insert($data);
		}
		$data["opcion"] = "tienda";
		$this->load->view('pagina/carrito', $data);
	}	
	public function pagar()
	{	
		$data["opcion"] = "tienda";
		$this->load->view('pagina/pagar', $data);
	}	
	public function carrito_update()
	{	
		$this->cart->update($_POST);
		redirect("carrito");
	}	
	public function oportunidad()
	{
		$data["opcion"] = "oportunidad";
		$this->load->view('pagina/oportunidad', $data);					
	}		
	public function videos()
	{
		$data["opcion"] = "videos";
		$this->load->view('pagina/videos', $data);					
	}		
	public function noticias()
	{
		$data["opcion"] = "noticias";
		$this->load->view('pagina/noticias', $data);					
	}	
	public function contacto()
	{
		$data["opcion"] = "contacto";
		$this->load->view('pagina/contacto', $data);					
	}	
	public function reembolsos()
	{
		$data["opcion"] = NULL;
		$this->load->view('pagina/reembolsos', $data);					
	}	
	public function privacidad()
	{
		$data["opcion"] = NULL;
		$this->load->view('pagina/privacidad', $data);					
	}	
	public function envios()
	{
		$data["opcion"] = NULL;
		$this->load->view('pagina/envios', $data);					
	}	
	public function pagos()
	{
		$data["opcion"] = NULL;
		$this->load->view('pagina/pagos', $data);					
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */