<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta http-equiv=Content-type content="text/html; charset=utf-8"/>
    <title>文章列表</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="/css/be-common.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <link href="/css/list.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <script type="text/javascript" src="/js/be-common.<?= \Yii::$app->params['hash'] ?>.js"></script>
    <script type="text/javascript" src="/js/list.<?= \Yii::$app->params['hash'] ?>.js"></script>
</head>
<body>
<div id=page-container>
    <div id=left-sidebar>
        <div id=left-sidebar-content><a href="">
                <div id=page-title>鱼儿的博客</div>
            </a>
            <ul id=page-menu><a href="/list">
                    <li class=active>文章列表</li>
                </a> <a href="/edit">
                    <li>编辑文章</li>
                </a></ul>
        </div>
    </div>
</div>
<div id=right-container>
    <table id=article-list>
        <thead>
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>状态</th>
            <th>创建时间</th>
            <th>更新时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article) { ?>
        <tr>
            <td class=article-id><?= Html::encode($article['id']) ?></td>
            <td class=article-title><?= Html::encode($article['title']) ?></td>
            <td class=article-status><?= Html::encode($article['status'] == 1 ? '未发布':'已发布') ?></td>
            <td class=article-create-time><?= Html::encode($article['create_time']) ?></td>
            <td class=article-update-time><?= Html::encode($article['update_time']) ?></td>
            <td class=article-btn-group>
                <button class=edit-btn>编辑</button>
                <button class=del-btn>删除</button>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <div id=page-btn-group class=clear>
        <?php if (!empty($prev_page)) { ?>
        <div id=prev-page><a href="<?= Html::encode('?page=' . $prev_page) ?>"> <img src=/image/left.ff37e8645ff7769edaac2d8df962f0c5.png> </a></div>
        <?php }?>
        <?php if (!empty($next_page)) { ?>
        <div id=next-page><a href="<?= Html::encode('?page=' . $next_page) ?>"> <img src=/image/right.bd29e80fb4a3812e52f4114f4aa6a19d.png> </a></div>
        <?php } ?>
    </div>
</div>
</body>
</html>