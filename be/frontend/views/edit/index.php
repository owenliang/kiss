<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta http-equiv=Content-type content="text/html; charset=utf-8"/>
    <title>编辑文章</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="/css/be-common.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <link href="/css/edit.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <script type="text/javascript" src="/js/be-common.<?= \Yii::$app->params['hash'] ?>.js"></script>
    <script type="text/javascript" src="/js/edit.<?= \Yii::$app->params['hash'] ?>.js"></script>
</head>
<body>
<div id=page-container>
    <div id=left-sidebar>
        <div id=left-sidebar-content><a href="">
                <div id=page-title>鱼儿的博客</div>
            </a>
            <ul id=page-menu><a href=/list>
                    <li>文章列表</li>
                </a> <a href=/edit>
                    <li class=active>编辑文章</li>
                </a></ul>
        </div>
    </div>
</div>
<div id=right-container>
    <div id=article-info class=clear>
        <input type=hidden id=article-id value="<?= empty($id) ? 0:Html::encode($id) ?>">
        <input type=text id=article-title value="<?= empty($id) ? '':Html::encode($title) ?>">
    </div>
    <div id=tinymce-container><?= empty($id) ? '':$content ?></div>
    <div id=article-btn-group class=clear>
        <button id=save-article>保存</button>
        <?php if (!empty($id)) { ?>
            <?php if ($status == 1)  { ?>
                <button id=pub-btn>发布</button>
            <?php } ?>
            <?php if ($status == 2) { ?>
                <button id=unpub-btn>撤回</button>
            <?php } ?>
        <?php } ?>
    </div>
</div>
</body>
</html>