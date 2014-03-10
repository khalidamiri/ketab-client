<?php
/*
 *		Class: Answer
 *		
 */
 
 class Answer extends Model{
	private $ansId, $ansTxt, $ansCorrect, $qId;
	
/*	function __construct($ansId, $ansTxt, $ansCorrect, $qId){
		$this->setAnsId($ansId);
		$this->setAnsTxt($ansTxt);
		$this->setAnsCorrect($ansCorrect);
		$this->setqId($qId);
	}

*/	function __construct(){
		echo 'Its Answer';
	}
	
	function getAnsId(){
		return $this->ansId;
	}
	
	function setAnsId($ansId){
		$this->ansId = $ansId;
	}
	
	function getAnsTxt(){
		return $this->ansTxt;
	}
	
	function setAnsTxt($ansTxt){
		$this->ansTxt = $ansTxt;
	}
	
	function isAnsCorrect(){
		return $this->ansCorrect;
	}
	
	function setAnsCorrect($ansCorrect){
		$this->ansCorrect = $ansCorrect;
	}
	
	function getQId(){
		return $this->qId;
	}
	
	function setQId($qId){
		$this->qId = $qId;
	}
	
	function toString(){
		return $this->ansId . " " . $this->ansTxt . " " . $this->ansCorrect . " " . $this->qId;
	}
 }
?>