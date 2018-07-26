<?php 

	class Application_Form_Register extends Zend_Form {

	public function init()
	{
	$this->setMethod('post');
		$this->setAttrib('action', 'save');
		$this->addElement('text', 'email', array(
			'label' => 'Email'
			'required' => true,
			'filter' => array('StringTrim'),
			'validators' => array('EmailAddress')
		));
		$this->addElement('text', 'login');
		$this->addElement('password', 'password');
		$this->addElement('submit', 'save');
	}
	
	}