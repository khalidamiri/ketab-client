<?php

include dirname(__DIR__) . '../models/Question.php';

class QuestionController extends Controller
{

	private $questions = array();
	private $query = 'SELECT * FROM question';
	private $mysql;
	private $rs;
	
	public function __construct()
	{
		$this->mysql = mysql_connect("localhost", "kankoruser", "kankor");
		mysql_select_db("kankor");
	}
	
	public function getQuestions($qNum)
	{
//		$this->query_get . $q_num;
		$this->setResultset();

		$question;
		while($row = mysql_fetch_assoc($this->getResultset())){
			$question = new question($row['qid'], $row['qtext'], $row['langid']);
			$questions[$question->getQId()] = $question;
		}
		header('Content-Type: Application/Json');
		echo $this->toJson($questions);
	}

	public function getQuestion($qId){
		$this->query .= ' WHERE qid=' . $qId;
		$this->setResultset();
		$row = mysql_fetch_row($this->getResultset());
		$question = new Question($row[0], $row[1], $row[2]);
		header('Content-Type: Application/Json');
		echo $question->toJson();
	}
	
	public function setResultset()
	{
		$this->rs = mysql_query($this->query, $this->mysql);
	}
	
	public function getResultset()
	{
		return $this->rs;
	}

	// Gets an associative array and returns it as a json string.
	public function toJson($assocArray)
	{
		$jsonText = '{' . PHP_EOL;
		$c = 0;
		foreach ($assocArray as $key => $value)
		{
			$jsonText .= '"' . $key . '":';
			$jsonText .= $value->toJson() . PHP_EOL;
		}
		$jsonText .= '}';
		return $jsonText;
	}

}


?>