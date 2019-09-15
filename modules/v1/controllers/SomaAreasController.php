<?php

namespace app\modules\v1\controllers;

use yii\web\Response;
use yii\web\Controller;
use app\modules\v1\models\Retangulo;
use app\modules\v1\models\Triangulo;


class SomaAreasController extends Controller
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

    public function actionIndex()
    {
        $area = json_decode('{"AreaTotal":0}');
        foreach(Retangulo::find()->all() as $retangulo) {
            $area->AreaTotal += $retangulo->base * $retangulo->altura;
        }
        foreach(Triangulo::find()->all() as $triangulo) {
            $area->AreaTotal += $triangulo->base * $triangulo->altura;
        }


        return $area;
    }

}
