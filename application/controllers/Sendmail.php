<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Sendmail extends REST_Controller {

	function __construct()
	{
			// Construct the parent class
			parent::__construct();
	}


	function mailme_post(){

			$this->email->from('siska@kharisma.ac.id', 'SISKA');
			$this->email->to('sofyanthayf@gmail.com');
			$this->email->subject('Test email from CI and Gmail');
			$this->email->message('This is a test.');


			if ( ! $this->email->send() )	{

				$this->set_response($this->email->get_debugger_messages(), 409);
				$this->email->clear_debugger_messages();

			}	else {

				$this->set_response([ 'status' => TRUE,
															'message' => 'Email Sent'
														], 201 );

			}

	}

	// public function index()
	// {
	// 	$this->email->from('sofyan.thayf@kharisma.ac.id', 'Sofyan Thayf');
	// 	$this->email->to('sofyanthayf@gmail.com');
	// 	$this->email->subject('Test email from CI and Gmail');
	// 	$this->email->message('This is a test.');
  //
	// 	if ( ! $this->email->send() )	{
	// 		echo 'Failed';
  //
	// 		// Loop through the debugger messages.
	// 		foreach ( $this->email->get_debugger_messages() as $debugger_message )
	// 		echo $debugger_message;
  //
	// 		// Remove the debugger messages as they're not necessary for the next attempt.
	// 		$this->email->clear_debugger_messages();
	// 	}		else
	// 		echo 'Sent';
	// 	}

}
