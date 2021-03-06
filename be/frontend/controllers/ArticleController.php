<?php

namespace frontend\controllers;

use common\service\ArticleService;
use common\service\AttachmentService;

class ArticleController extends \yii\web\Controller
{
    public function actionIndex($articleId)
    {
        $article = ArticleService::getArticle($articleId);
        if (empty($article)) {
            \Yii::$app->response->redirect('/');
            return;
        }
        return $this->renderPartial('index', $article);
    }
}
