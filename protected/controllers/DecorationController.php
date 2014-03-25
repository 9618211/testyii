<?php

// Decoration Controller
class DecorationController extends Controller {
	public $layout='column2';

	// public function filters()
	// {
	// 	return array(
	// 		'accessControl', // perform access control for CRUD operations
	// 	);
	// }

	public function actionIndex() {
		header("Content-type:text/html;charset=utf-8");
		// $conn = Yii::app()->db;
		// $sql = "SELECT * FROM {{decoration}}";
		// $commond = $conn->createCommand($sql);
		// $rows = $commond->queryAll();
		//$this->renderPartial('//layouts/iframe');
		//$sql = "SELECT * FROM {{decoration}}";
		$rows = Decoration::model()->findAll(); 
		$this->render('index',array('rows'=>$rows));
	}

	public function actionDelete() {
		// $command = Yii::app()->db->createCommand();
		// $flag = $command->delete('cdfdc_decoration', 'id=:id', array(':id'=>$_GET['id']));
		// $url = Yii::app()->createUrl('decoration');                                    
		// $this->redirect($url);
		$count = Decoration::model()->deleteAll('id=:id', array(':id'=>$_GET['id']));
		if($count > 0) {
		  $this->redirect('/decoration');
		}
	}

	public function actionEdit() {
		$id = Yii::app()->request->getParam("id");
		//$id = $_GET['id'];
		// $sql = "SELECT * FROM {{decoration}} WHERE id =:id";
		// $conn = Yii::app()->db;
		// $command = $conn->createCommand($sql);
		// $command->bindParam(":id",$id,PDO::PARAM_STR);
		// $command->execute();
		// $row = $command->queryRow();
		$row = Decoration::model()->findByPk($id); 
		$this->render('edit',array('row'=>$row));
	}

	public function actionUpdate() {
		$id = Yii::app()->request->getParam("id");
		$id = $_POST['id'];
		$name = Yii::app()->request->getParam("name");
		$sql = "UPDATE {{decoration}} SET name =:name WHERE id =:id";
		$conn = Yii::app()->db;
		$command = $conn->createCommand($sql);
		$command->bindParam(":id",$id,PDO::PARAM_STR);
		$command->bindParam(":name",$name,PDO::PARAM_STR);
		$command->execute();
		//$count = Decoration::model->updateByPk($id,array('name'=>$name));
		$this->redirect('/decoration');
	}

	public function actionAdd() {
		$model = array();
		$this->render('/decoration/add',array('model'=>$model));
	}

	public function actionCreate() {
		// $name = Yii::app()->request->getParam("name");
		// //$name = $_POST['name'];
		// $sql = "INSERT INTO {{decoration}} (name) VALUES(:name)";
		// $conn = Yii::app()->db;
		// $transaction = $conn->beginTransaction();
		// $command = $conn->createCommand($sql);
		// $command->bindParam(":name",$name,PDO::PARAM_STR);
		// try
		// {
		// 	$command->execute();
		// 	$transaction->commit();
		// 	$this->redirect('/decoration');
		// } 
		// catch(Execption $e)
		// {
		// 	$transaction->rollBack();
		// }
		$model= new Decoration;
		if(isset($_POST['Decoration']))
		{
			$model->attributes =$_POST['Decoration'];
			$model->save();
			$this->redirect('/decoration');
		}
	}
}