<?php

require 'QuestionController.php';

function parsePath(){
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $reqPath = explode('?', $_SERVER['REQUEST_URI']);

    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    $path['call_utf8'] = substr(urldecode($reqPath[0]), strlen($path['base']) + 1);
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);

  }
return $path;
}

$reqPath = $this->parsePath();
$model = $reqPath['call_parts'];
if(count($reqPath['call_parts']) > 0){
	 if($reqPath['call_parts'][0] == 'question'){
	 	$qId = $model[1];
		$qControl = new Question_Controller();
		$qControl->getQuestion($qId);
	 }
}
 


?>