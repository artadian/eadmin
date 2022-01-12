<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		$data['title'] = 'User Management';
		$data['content'] = 'v_user';
		$this->load->view('v_main',$data);
	}
    
}
