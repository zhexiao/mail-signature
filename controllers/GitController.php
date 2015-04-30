<?php
namespace app\controllers;
use Yii;

class GitController extends \yii\web\Controller{
    public $enableCsrfValidation = false;

    public function actionIndex(){
        if(Yii::$app->request->isPost){
            exec("git pull", $output);
            var_dump($output);
        }else{
            echo "Invalid request.";
        }
    }
}

