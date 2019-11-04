<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {

	/**
	 *Package : Install
	 *@Descriptions: A class to handle the App Database Preparation
	 *@Author : @niyiojeyinka(twitter,fiverr,freelancer)
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
