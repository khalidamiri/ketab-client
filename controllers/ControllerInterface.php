<?php

interface ControllerInterface{

	public function createModel(Model $model);
	public function getModel($id, Params $params = null);
	public function getModels(Params $params = null);
	public function updateModel(Model $model);
	public function removeModel($id);
	public function setHeader($type = 'JSON');
}

?>