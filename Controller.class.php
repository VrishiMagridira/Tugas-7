<?php
require_once('ModelData.class.php');
class Controller{
	public $model;
	public function __construct(){
		$this->model=new ModelData();
	}

	public function inputform(){		
		require_once('VisualViewForm.class.php');
	}

	public function inputed(){
		$this->model->set_data();
		$data = $this->model->get_data();
		require_once('VisualViewData.class.php');
	}
}
?>