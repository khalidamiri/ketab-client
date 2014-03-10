<?php
/*
 *		Class: User
 *		Abstract User class contains shared functions and properties of all user types.
 */
 
 class user extends Model{
	private $userid, $fname, $lname, $email, $usertype;
	
	function __construct($userid, $fname, $lname, $email, $usertype){
		$this->set_userid($userid);
		$this->set_lname($lname);
		$this->set_fname($fname);
		$this->set_email($email);
		$this->set_usertype($usertype);
	}
	
	function get_userid(){
		return $this->userid;
	}
	
	function set_userid($userid){
		$this->userid = $userid;
	}
	
	function get_fname(){
		return $this->fname;
	}
	
	function set_fname($fname){
		$this->fname = $fname;
	}
	
	function get_lname(){
		return $this->lname;
	}
	
	function set_lname($lname){
		$this->lname = $lname;
	}
	
	function get_email(){
		return $this->email;
	}
	
	function set_email($email){
		$this->email = $email;
	}
 }
?>