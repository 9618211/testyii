<?php
//The first yii hello world
class IndexController extends Controller {
	public $layout='column2';
	public function actionIndex() {
		$this->render('index');
	}

}
