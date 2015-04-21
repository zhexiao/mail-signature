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
            'first-last-name' => 'Lastname Firstname',
            'job-position' => 'Job Position',
            'email' => 'email@email.com',
            'company-name' => 'Company Name',
            'website' => 'http://website.com',
            'phone' => '+1 203 999 2222',
            'intro' => 'Write yourself introduction.',
            'address' => '125 XXXXX Street Apt #xxx, Connecticut, USA'
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
               "crop" => "fit", 
               "width" => "60", 
               "height" => "60",
            ]
        );

        return \yii\helpers\Json::encode($res);
    }
}
