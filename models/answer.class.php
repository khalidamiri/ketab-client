<?php
/*
 *		Class: Answer
 *		
 */
 
 class answer{
	private $answid, $answtext, $answcorrect, $qid;
	
	function __construct($answid, $answtext, $answcorrect, $qid){
		$this->set_answid($answid);
		$this->set_answtext($answtext);
		$this->set_answcorrect($answcorrect);
		$this->set_qid($qid);
	}
	
	function get_answid(){
		return $this->answid;
	}
	
	function set_answid($answid){
		$this->answid = $answid;
	}
	
	function get_answtext(){
		return $this->answtext;
	}
	
	function set_answtext($answtext){
		$this->answtext = $answtext;
	}
	
	function get_answcorrect(){
		return $this->answcorrect;
	}
	
	function set_answcorrect($answcorrect){
		$this->answcorrect = $answcorrect;
	}
	
	function get_qid(){
		return $this->qid;
	}
	
	function set_qid($qid){
		$this->qid = $qid;
	}
	
	function to_string(){
		return $this->answid . " " . $this->answtext . " " . $this->answcorrect . " " . $this->qid;
	}
 }
?>