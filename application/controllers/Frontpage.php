<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

	public function index()
	{
		$this->load->template('frontpage');
	}
}
