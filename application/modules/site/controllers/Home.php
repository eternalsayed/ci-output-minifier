<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index($type='')
	{
		$this->load->view('layouts/home', $data='somerandomdata');
	}

}
