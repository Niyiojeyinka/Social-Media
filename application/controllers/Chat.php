<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	/**
	 *Package : Chat
	 *@Descriptions: A class to handle the App Chat
	 *@Author : @niyiojeyinka(twitter,fiverr,freelancer)
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
