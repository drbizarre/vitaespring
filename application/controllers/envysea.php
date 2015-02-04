<?php

class envysea extends CI_Controller {

	/***************************************
	* Envysea Authentication for Codeigniter 2.0.3
	* 
	* Version 1.0.8
	* 
	* @author Nicholas Cerminara | envysea.com
	***************************************/

	function index() {
	    if($this->session->userdata('user_level') == $this->config->item('admin_level')){
	    	redirect("admin");
	    }
	    if($this->session->userdata('user_level') == 6){
	    	redirect("capturista");
	    }
	

		$data['title'] = 'Envysea Codeigniter Authentication';
		$data['page_description'] = 'Envysea authentication offers rapid application development for membership, authentication, and login sites.';
		$data['page_keywords'] = 'Authentication, Membership, Login, Codeigniter 2.0.3';
		$data['module'] = 'envysea';
		$data['template'] = 'home_view';
		
		$this->load->view('template', $data);
	}
	


}