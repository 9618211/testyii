<?php

class Decoration extends CActiveRecord 
{
	public $id;
	public $name;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function  tableName()
	{
		return '{{decoration}}';
	}


	public function rules()
	{
		return array(
			array('id,name', 'safe'),
			array('name', 'required'),
		);
	}
}