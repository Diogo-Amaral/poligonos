<?php

namespace app\modules\v1\controllers;

use yii\web\Response;
use yii\rest\ActiveController;


class RetanguloController extends ActiveController
{

    public function behaviors()
	{
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
	            'class' => 'yii\filters\ContentNegotiator',
	            'formats' => [
	                'application/json' => Response::FORMAT_JSON,
	            ]
        ];
        return $behaviors;
	}	



    public $modelClass = 'app\modules\v1\models\Retangulo';



}
