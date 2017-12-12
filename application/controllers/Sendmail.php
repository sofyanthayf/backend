<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

	public function index()
	{
		$this->email->to('sofyanthayf@gmail.com');
		$this->email->subject('Test email from CI and Gmail');
		$this->email->message('This is a test.');
		$this->email->send();

		// $this->load->view('sendmail');
		if ( ! $this->email->send() )	{
			echo 'Failed';
			
			// Loop through the debugger messages.
			foreach ( $this->email->get_debugger_messages() as $debugger_message )
			echo $debugger_message;

			// Remove the debugger messages as they're not necessary for the next attempt.
			$this->email->clear_debugger_messages();
		}		else
			echo 'Sent';
		}

}
