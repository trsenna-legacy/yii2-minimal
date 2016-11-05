<?php

namespace app\components\web;

use app\components\web\actions\SiteAboutAction;
use app\components\web\actions\SiteIndexAction;
use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Class SiteController
 *
 * @package app\components\web
 */
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'index' => [ 'class' => SiteIndexAction::className(), ],
            'about' => [ 'class' => SiteAboutAction::className(), ],
            'error' => [ 'class' => ErrorAction::className(), ],
        ];
    }
}