<?php
/**
 * Created by PhpStorm.
 * User: G-emall
 * Date: 2018/4/13
 * Time: 17:00
 */

namespace app\controllers;

use yii;
use yii\filters\auth\HttpBearerAuth;

class ItemController extends BaseApiController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors(); // TODO: Change the autogenerated stub
        if (yii::$app->getRequest()->getMethod() !== 'OPTIONS'){
            $behaviors['authenticator'] = [
                'class' => HttpBearerAuth::class
            ];
        }
        return $behaviors;
    }

    public function actionIndex()
    {
        return ['success' => 1, 'msg'=> 'welcome !'];
    }
}