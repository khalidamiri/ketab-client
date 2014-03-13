<?php

require "ControllerInterface.php";

abstract class Controller implements ControllerInterface{
	
	abstract protected function createModel(Model $model);
	abstract protected function getModel($id, Params $params = null);
	abstract protected function getModels(Params $params = null);
	abstract protected function updateModel(Model $model);
	abstract protected function removeModel($id);

}

?>