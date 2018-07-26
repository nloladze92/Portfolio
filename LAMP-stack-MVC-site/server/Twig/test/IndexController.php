<?php

class Application_Form_Register extends Zend_Form {

	public function init()
	{

	}
	
	public function indexAction () {
		$form = new Application_Form_Register;
		$this->view->form = $form;
	}
	
	
	}