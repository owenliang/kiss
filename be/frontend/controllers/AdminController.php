<?php

namespace frontend\controllers;

use common\lib\helpers\HttpResponse;
use common\service\AdminService;

class AdminController extends \yii\web\Controller
{
    public function actionLogin()
    {
        $username = \Yii::$app->request->post('username');
        $password = \Yii::$app->request->post('password');

        $valid = AdminService::validateLogin($username, $password);
        if (!$valid) {
            return HttpResponse::packReturn(1, '验证失败');
        }

        \Yii::$app->session->set("login", true);    // 创建登录会话

        return HttpResponse::packReturn(0, 'success');
    }

    public function actionIndex()
    {
        echo $this->renderPartial('index');
    }
}
