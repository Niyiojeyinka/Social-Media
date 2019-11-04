<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 *Package : Profile
	 *@Descriptions: A class to handle the App Profile
	 *@Author : @niyiojeyinka(twitter,fiverr,freelancer)
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
