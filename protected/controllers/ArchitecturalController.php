<?php


class ArchitecturalController extends Controller {
	
	public $layout='column2';
	public function actionIndex()
	{
        $architectural = new CDbCriteria();
		$count = Architectural::model()->count($architectural);
        $pager = new CPagination($count);    
        //$architectural->order = 'createtime desc';        
        $pager->pageSize = 2;             
        $pager->applyLimit($architectural);    
		$rows = Architectural::model()->findAll($architectural); 
		$this->render('index',array('pages'=>$pager,'rows'=>$rows));
	}

	public function actionAdd()
	{
		$this->render('add');
	}

	public function actionDelete()
	{
		$count = Architectural::model()->deleteAll('id=:id',array(':id'=>$_GET['id']));
		if($count >0)
		{
			$this->redirect('/architectural');
		}
	}

	public function actionCreate()
	{
		$model = new Architectural;
		if(isset($_POST['Architectural']))
		{
			$model->attributes = $_POST['Architectural'];
			if($model->save())
			{
				$this->redirect('/architectural');
			}
		}
	}

	public function actionEdit()
	{
		die('edit');
	}
}
