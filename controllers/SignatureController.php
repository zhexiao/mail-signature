<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
/**
 * Controller for email template
 */
class SignatureController extends Controller{
    public $enableCsrfValidation = false;

    public function actionIndex(){
        $data = [
            'first-last-name' => 'Firstname Lastname',
            'job-position' => 'Job Position',
            'email' => 'email@email.com',
            'company-name' => 'Company Name',
            'company-site' => 'http://company.com',

        ];

        return \yii\helpers\Json::encode($data);
    }

    /**
     * upload image to Cloudinary
     * @return [type] [description]
     */
    public function actionUpload(){
        $tmpImage = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        \Cloudinary::config(array( 
            "cloud_name" => "zximageclound", 
            "api_key" => "773235588986114", 
            "api_secret" => "etTsunygMgZz-R_11iVlCn2lMms" 
        ));

        $res = \Cloudinary\Uploader::upload($tmpImage,
            [
               "crop" => "limit", 
               "width" => "48", 
               "height" => "48",
            ]
        );

        return \yii\helpers\Json::encode($res);
    }
}
