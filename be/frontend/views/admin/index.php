<!DOCTYPE html>
<html lang=en>
<head>
    <meta http-equiv=Content-type content="text/html; charset=utf-8"/>
    <title>登录-鱼儿的博客</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="/css/be-common.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <link href="/css/login.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <script type="text/javascript" src="/js/be-common.<?= \Yii::$app->params['hash'] ?>.js"></script>
    <script type="text/javascript" src="/js/login.<?= \Yii::$app->params['hash'] ?>.js"></script>
</head>
<body>
<div id=login-form>
    <table>
        <tr>
            <td>账号</td>
            <td><input type=text id=username></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type=password id=password></td>
        </tr>
        <tr>
            <td id=login-btn-td colspan=2>
                <button id=login-btn>登录</button>
            </td>
        </tr>
    </table>
</div>
</body>
</html>