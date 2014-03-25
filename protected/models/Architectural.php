<?php

class Architectural extends CActiveRecord 
{
	public $id;
	public $name;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function  tableName()
	{
		return '{{building_structure}}';
	}


	public function rules()
	{
		return array(
			array('id,name', 'safe'),
			array('name', 'required'),
		);
	}
}