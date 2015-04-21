<?php
namespace app\controllers;
use Yii;

class GitController extends \yii\web\Controller{
    public $enableCsrfValidation = false;

    public function actionIndex(){
        if(Yii::$app->request->isPost){
            $payload = Yii::$app->request->post('payload', '');
            var_dump($payload);
            if(!$payload){
                  var_dump('there');
                $data = json_decode($payload);

                if($data->ref == "refs/heads/master"){          
                    exec("git pull", $output);
                    var_dump($output);
                }else{
                    echo "This branch is not master branch.";
                }
            }  
        }else{
            echo "Invalid request.";
        }
    }
}

