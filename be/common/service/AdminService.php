<?php
namespace common\service;

use common\models\Admin;

class AdminService
{
    public static function validateLogin($username, $password) {
        $admin = Admin::find_admin($username);
        if (empty($admin)) {
            return false;
        }
        $sha1Password = sha1($password, false);
        if ($sha1Password != $admin['password']) {
            return false;
        }
        return $admin;
    }

    public static function isLogin() {
        $isLogin = \Yii::$app->session->get('login');
        return !empty($isLogin);
    }
}