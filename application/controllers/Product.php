<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        if(!$this->session->has_userdata('email'))
		{
			redirect('welcome/index');  
		}
		$this->load->model('Model');
    }
    public function index()
	{
		$data = array();
		$data['listeObjet'] = $this->Model->listeObjet();
		$data['listeCategorie'] = $this->Model->listeCategorie();
		$data['email'] = $this->session->userdata('email');
		// $data['mdp'] = $this->session->userdata('mdp');
		$data['idUtil'] = $this->session->userdata('idUtil');
        $data['content'] = 'page/home';
		$this->load->view('index',$data);
	}
    
}