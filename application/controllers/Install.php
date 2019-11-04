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

    $this->load->database();
    $queries = array(
"CREATE TABLE IF NOT EXISTS users (
        id int(11) NOT NULL AUTO_INCREMENT,
        firstname varchar(128) NOT NULL,
        lastname varchar(128) NOT NULL,
        username varchar(128) NOT NULL,
        password varchar(128) NOT NULL,
        `text` text,
        phone varchar(128) NOT NULL,
        email varchar(128) NOT NULL,
        profile_picture varchar(128),
        followers text NOT NULL,
        following text NOT NULL,
        lastlog varchar(128) NOT NULL,
        `time` varchar(128) NOT NULL,
        PRIMARY KEY (id)
);",
"CREATE TABLE IF NOT EXISTS media (
        id int(11) NOT NULL AUTO_INCREMENT,
        name varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        type varchar(128) NOT NULL,
        `time` varchar(128) NOT NULL,
        PRIMARY KEY (id)
);",
"CREATE TABLE IF NOT EXISTS posts (
        id int(11) NOT NULL AUTO_INCREMENT,
        text_contents text,
        type enum('textimg','imgonly','textonly') NOT NULL,
        user_id int(10),
        edit_status varchar(128) NOT NULL,
        media_id text,
        `time` varchar(128) NOT NULL,
        privacy enum('public','private'),
        isShared enum('false','true'),
        PRIMARY KEY (id)
);",
//media contains array of media id
//public ---> friends & Follower
//private ---> friends
"CREATE TABLE IF NOT EXISTS comments (
        id int(11) NOT NULL AUTO_INCREMENT,
        text_contents text,
        user_id int(10),
        edit_status varchar(128) NOT NULL,
        media_id text,
        `time` varchar(128) NOT NULL,
        privacy enum('public','private'),
        PRIMARY KEY (id)
);",

"CREATE TABLE IF NOT EXISTS object_action (
        id int(11) NOT NULL AUTO_INCREMENT,
        `text` text,
        receiver_id int(10),
        sender_id varchar(128) NOT NULL,
        action_type enum('like','share','comment','message') NOT NULL,
        `time` varchar(128) NOT NULL,
        notification_status enum('unread','read') NOT NULL,
        privacy enum('public','private'),
        `time` varchar(128) NOT NULL,
        PRIMARY KEY (id)
);",

"CREATE TABLE IF NOT EXISTS conversation (
        id int(11) NOT NULL AUTO_INCREMENT,
        last_updated varchar(128) NOT NULL,
         receiver_id int(10) NOT NULL,
        sender_id int(10) NOT NULL,
        status enum('active','inactive','blocked'),
        blocker_id 
        `time` varchar(128) NOT NULL,
        PRIMARY KEY (id)
);",
"CREATE TABLE IF NOT EXISTS messages (
        id int(11) NOT NULL AUTO_INCREMENT,
        `text` text,
        receiver_id int(10) NOT NULL,
        sender_id int(10) NOT NULL,
        conversation_id varchar(128) NOT NULL,
        status enum('sent','seen'),
        type enum('textonly','textobj') NOT NULL,
        `time` varchar(128) NOT NULL,
        PRIMARY KEY (id)
);"

    );		
	}



}
