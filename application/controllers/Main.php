<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['content'] = 'v_dashboard';
		$this->load->view('v_main',$data);
	}
    public function logout()
	{
		$this->load->view('v_login');
	}
    
}
