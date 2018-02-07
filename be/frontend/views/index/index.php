<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta http-equiv=Content-type content="text/html; charset=utf-8"/>
    <title>鱼儿的博客</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="/css/fe-common.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <link href="/css/index.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <script type="text/javascript" src="/js/fe-common.<?= \Yii::$app->params['hash'] ?>.js"></script>
    <script type="text/javascript" src="/js/index.<?= \Yii::$app->params['hash'] ?>.js"></script>
</head>
<body>
<div id=page-container>
    <div id=left-sidebar>
        <div id=left-sidebar-content>
            <div id=author-info><img id=author-avator src=/image/avator.b3d4672f7ea5710b2f0681edf087eab3.jpeg>
                <div id=author-name><a href="">鱼儿的博客</a></div>
                <a href=https://github.com/owenliang>
                    <div id=author-github class=clear><img
                                src=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACbElEQVRYR72XgTEEQRBFvwgQASJABIgAEXARIAJEgAiQARFwESACdxEgAuptzWyNvp7Z2b2jq65ua2em+0/P7z+9S+pvW5KWJe2apc+SppImfVwuVU5el3Qi6UASzyUDwIOkmxowXQAIdi7puBKonXYn6bIEpASAoLcDA6fLPiWdSQLMjOUAMPloAcFTF9cByC+3HoC/CB6D4nuUIrAATiVdLXjn1h0A2uNIAVBWT2Y2kykvxuDETiW4cQjyGtbaTe0Fv0oBUD5rJkA7MbynDAGDY1vvVAwawVhKOG9jbArfLYAc41clweJ5zAOAv+YoYga83TPJZmAIkBwAMrUNAFL3nvG8HVI6JHBckwPA+AYAcsy/n0MBPUX0dOUMABDCY/dGjZZXpiaX5cccgLfA6Er/VdM8no0BAMu5XlOjju11WxWlMMnL9AQA386i/wLQ6IAHoCmRebds1uNz07yblki4CBGK8VYkfXiZBgDdy74zSCNxsaAs4IfGxtp9SQcgJ8fQq8dzglCCL5LIgrVRlxJybmg2/0OMy4muin/PGiXE0hJBA7BIGDJBN0OTWXsxsVuaWFTW2zn+H2lyI4D0NuQqpYfj6k17QoIDFImGN56xBslFQ3KB47rmokv7gTQLsQy9e6J0QZFqzrvLWp1JAVi9Pgw7hcEAQS05Bp5LlququOYrcKIht+0J06MgC6Sp9txjgFzJxfFsTxgnpGkHBA4hTK2VAPwK7mUgBsm1aDXilAMwE7wEgDGYTEWkjeoQAHywsiFIPmNd34aUEkcSSdgHAGRDP4py3gUgIgYINQ4nulSRUuTnfgvaFPwAAv2JvxRSi7gAAAAASUVORK5CYII=>
                        <span>owenliang</span></div>
                </a></div>
            <img id=left-gif src=/image/xiaoxin.749fc2d376939078680185c2cb9d5e91.gif></div>
    </div>
    <div id=right-container>
        <ul id=article-list>
            <?php foreach ($articles as $article) { ?>
            <li class=article-card>
                <div class=article-title><a href="/article/<?= Html::encode($article['id']) ?>"><?= Html::encode($article['title']) ?></a></div>
                <div class="article-info clear">
                    <div class=article-date><?= Html::encode(date('Y-m-d', strtotime($article['create_time']))) ?></div>
                </div>
            </li>
            <?php } ?>
        </ul>
        <div id=page-btn-group class=clear>
            <?php if (!empty($prev_page)) { ?>
            <div id="prev-page"><a href="/<?= Html::encode($prev_page) ?>"> <img src=/image/left.ff37e8645ff7769edaac2d8df962f0c5.png> </a></div>
            <?php } ?>
            <?php if (!empty($next_page)) { ?>
            <div id="next-page"><a href="/<?= Html::encode($next_page) ?>"> <img src=/image/right.bd29e80fb4a3812e52f4114f4aa6a19d.png> </a></div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>