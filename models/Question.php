<?php
/*
 *		Class: Question
 *		
 */
 
 class Question extends Model
 {
	private $qId;
	private $qText;
	private $langId;
	
	public function __construct($qId, $qText, $langId){
		$this->setQId($qId);
		$this->setQText($qText);
		$this->setLangId($langId);
	}
	
	public function getQId()
	{
		return $this->qId;
	}
	
	public function setQId($qId)
	{
		$this->qId = $qId;
	}
	
	public function getQText()
	{
		return $this->qText;
	}
	
	public function setQText($qText)
	{
		$this->qText = $qText;
	}
	
	public function getLangId()
	{
		return $this->langId;
	}
	
	public function setLangId($langId)
	{
		$this->langId = $langId;
	}
	
	public function __toString()
	{
		return $this->qId . " " . $this->qText . " " . $this->langId;
	}

	// Returns Question object as Json.
	// This helps in solving the issue of json_encode() not being able to encode objects with private properties.
	public function toJson()
	{
		return json_encode(get_object_vars($this));
	}
 }
?>