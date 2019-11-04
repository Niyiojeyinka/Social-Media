<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {

	/**
	 *Package : Timeline
	 *@Descriptions: A class to handle the App Timeline
	 *@Author : @niyiojeyinka(twitter,fiverr,freelancer)
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
