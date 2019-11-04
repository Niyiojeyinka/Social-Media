<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
  public function __construct()
  {
  	parent::__construct();
    $this->load->model(array('page_model'));


   $this->siteName = "Social Network";//$this->back_model->get_system_variable("site_name");
      $this->author = "Social Network";//$this->back_model->get_system_variable("author");
      $this->keywords = "Social Network";//$this->back_model->get_system_variable("keywords");
      $this->description="Social Network";//$this->back_model->get_system_variable("description");
      $this->tagLine= "Social Network";//$this->back_model->get_system_variable("tagline");
      $this->noindex = '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';


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
