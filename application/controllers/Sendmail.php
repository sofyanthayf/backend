<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

	public function index()
	{
		$this->email->to('sofyanthayf@gmail.com');
		$this->email->subject('Test email from CI and Gmail');
		$this->email->message('This is a test.');
		$this->email->send();
	}
}
