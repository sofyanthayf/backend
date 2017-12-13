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

	function index_get(){
	}

	function mailme_post(){
var_dump($this->post());
			$email = $this->post('to_email');
			$message = $this->post('message');
			$subject = $this->post('subject');

			$this->email->from('siska@kharisma.ac.id', 'SISKA');
			$this->email->to('sofyan.thayf@yahoo.com');
			$this->email->subject('RESTful API Test');
			$this->email->message('RESTful API Testing');


			if ( ! $this->email->send() )	{

				$this->set_response($this->email->get_debugger_messages(), 409);
				$this->email->clear_debugger_messages();

			}	else {

				$this->set_response([ 'status' => TRUE,
															'message' => 'Email Sent',
															'email' => $email,
															'subject' => $subject
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
