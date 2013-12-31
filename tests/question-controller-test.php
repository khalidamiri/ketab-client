<?php

//		Unit tests for question_controller.class

require '../controllers/question_controller.class.php';

class question_controller_test extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->q_controller = new question_controller();
	}

	public function test_get_questions()
	{
		$this->assertNotNull($this->q_controller->get_questions(10));
		var_dump($this->q_controller->get_questions(10));
//		$this->$q_array[] = $this->q_controller->get_questions(10);
//		$this->$q_obj = $this->q_array[0];
//		echo $this->q_obj.to_string();
	}
}

?>