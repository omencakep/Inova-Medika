<?php

class PatientTest extends WebTestCase
{
	public $fixtures=array(
		'patients'=>'Patient',
	);

	public function testShow()
	{
		$this->open('?r=patient/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=patient/create');
	}

	public function testUpdate()
	{
		$this->open('?r=patient/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=patient/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=patient/index');
	}

	public function testAdmin()
	{
		$this->open('?r=patient/admin');
	}
}
