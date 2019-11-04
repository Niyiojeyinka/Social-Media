<?php

class Profile_model extends CI_Model {

/**
	 *Package : Auth_model
	 *@Descriptions: A class to handle the page database operation
	 *@Author : @niyiojeyinka(twitter,fiverr,freelancer)
	 */

  public $table;

 public function __construct()
{
    parent::__construct();
    $this->load->database();
    $this->table = "users";

}


}