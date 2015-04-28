<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar extends CI_Controller {
        
        function __construct()
	{
		parent::__construct();
		
		/* Carrega o modelo */	
		$this->load->helper(array('form', 'url'));

	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('cadastro/editar');
		$this->load->view('footer');
	}
        
}