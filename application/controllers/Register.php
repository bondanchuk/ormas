<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}

	public function index()
	{

			view('auth.Register');
	}


}
