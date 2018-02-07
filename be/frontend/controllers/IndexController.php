<?php

namespace frontend\controllers;

use common\service\ArticleService;

class IndexController extends \yii\web\Controller
{
    public function actionIndex($page = 1)
    {
        $viewdata = ArticleService::listArticles($page, 1);
        return $this->renderPartial('index', $viewdata);
    }

}
