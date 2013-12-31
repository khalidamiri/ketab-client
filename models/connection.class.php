<?php

/*
 *			Connection class
 *			Creates connetion object for connecting to MySQL.
 */

class connection{

	private $host, $user, $pw, $db;
	
	function __construct($host, $user, $pw, $db){
		$this->set_host($host);
		$this->set_user($user);
		$this->set_pw($pw);
		$this->set_db($db);
	}
	
	function get_host(){
		return $this->host;
	}
	
	function set_host($host){
		$this->host = $host;
	}
	
	function get_user(){
		return $this->user;
	}
	
	function set_user($user){
		$this->user = $user;
	}
	
	function get_pw(){
		return $this->pw;
	}
	
	function set_pw($pw){
		$this->pw = $pw;
	}
	
	function get_db(){
		return $this->db;
	}
	
	function set_db($db){
		$this->db = $db;
	}
	
	function get_connection(){
		return new mysqli($this->host, $this->user, $this->pw, $this->db)
			or die("Unable to connect to MySQL.");
	}
}
 
?>