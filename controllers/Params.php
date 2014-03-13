<?php

class Params implements ArrayAccess {
	private $params = array();

	public function __construct(){
		$this->params = array(
				"offset" => Null,
				"limit" => Null,
				"options" => array()
			);
	}

	public function offsetSet($offset, $value){
        $this->params[$offset] = $value;
//        echo $this->params["offset"];
	}

	public function offsetExists($offset){
		if( isset($this->params[$offset]) )
			return true;
		else
			return false;
	}

	public function offsetUnset($offset){
		unset( $this->params[$offset] );
	}

	public function offsetGet($offset){
		return isset( $this->$params[$offset] ) ? $this->$params[$offset] : Null;
	}

}

?>