<?php

//		Unit tests for question_controller.class

require '../controllers/QuestionController.php';

class QuestionControllerTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->qController = new QuestionController();
	}

	public function testGetQuestions()
	{
		$this->assertNotNull($this->qController->getQuestions(10));
		var_dump($this->qController->getQuestions(10));
//		$this->$q_array[] = $this->qController->get_questions(10);
//		$this->$q_obj = $this->q_array[0];
//		echo $this->q_obj.to_string();
	}
}

?>