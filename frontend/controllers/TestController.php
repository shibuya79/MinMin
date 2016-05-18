<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;

class TestController extends controller {
public function actionIndex(){
return $this->render('index');
}
}