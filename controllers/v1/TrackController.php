<?php

namespace app\controllers\v1;

use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;

class TrackController extends ActiveController
{
    public $modelClass = 'app\modules\admin\models\Track';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            //'class' => HttpBasicAuth::class,
            'class' => HttpBearerAuth::class,
        ];
        return $behaviors;
    }
}
