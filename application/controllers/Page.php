<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
  public function __construct()
  {
  	parent::__construct();
    $this->load->model(array('page_model'))

  }/**
	 *Package : Page
	 *@Descriptions: A class to handle the App Pages
	 *@Author : @niyiojeyinka(twitter,fiverr,freelancer)
	 */

	public function index()
	{
		$this->load->view('common/headermeta_view');
		$this->load->view('public/common/header_view');
		$this->load->view('public/common/home_view');
	    $this->load->view('common/footer_view');

	}


}
