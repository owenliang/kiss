<?php
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang=en>
<head>
    <meta http-equiv=Content-type content="text/html; charset=utf-8"/>
    <title><?= Html::encode($title) ?></title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="/css/fe-common.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <link href="/css/article.<?= \Yii::$app->params['hash'] ?>.css" rel="stylesheet">
    <script type="text/javascript" src="/js/fe-common.<?= \Yii::$app->params['hash'] ?>.js"></script>
    <script type="text/javascript" src="/js/article.<?= \Yii::$app->params['hash'] ?>.js"></script>
</head>
<body>
<div id=page-container>
    <div id=article-info>
        <div id=article-title><a href=""><?= Html::encode($title) ?></a></div>
        <div id=article-date><?= Html::encode(date('Y-m-d', strtotime($create_time))) ?></div>
    </div>
    <div id=content-container><?= $content ?></div>
    <a href="/">
        <div id=home-btn><img
                    src=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADw0lEQVR4Xu2b/XXVMAzFbyeADYAJChNAJ4BOAEwATABsABNAJ6BMAJ2AdgJggzIBnNsTP4yeHUmO7ZeE+J+e08Qf92dZVqX0CP3bXQAvADwCcH+Y/hLAVwDvAfzouaSjnpMBeA3gjTInn7/tta6eAD4AeGYU9hHAc+O7k17rBcAjPgjqAqEHgJT4XwBeAjgf1D4ZjsYdsZ3NIbQGkNt5mjfFxe324AiPe0JoCcAjPmjuDqEVgBLxB4HQAsAU8QECYwXGBrfEcWCcQN9RrdUGwGuOAGRLnXlNBIMkBkcSQslY2blqAqgpPiy4OYRaAHLiXwF4p2218rwphBoAcuLPHJGfxqgZhKkAeohvehymAOgpvhmEUgCHEN8EQgkAxu2fEoe25pnXfEJuA06Gq1Prv3vuBUBn9AUAQ9a49RQf5k1BuAZACAyiTM0DYE7iq0GwAsiJvxhSWybajV6aZAkWADnxV4N4mt2hWzEEDcASxE86DmMAliS+GEIOwBLFF0FIAeAV9z1x1c3pzGs+h+m2p+Il+qp7AP7xWRIAxfOeDwWLMMaSxIc1pyAwPmCcsIMQA1iTeDOEACAnnulrWkPXcpVm387no5YQADC2Z4wfN4pn/c4cVjoX1vP1FATWJE4JgCJ57tcqfuw4nBAASTyO1K9p56WV0ZrjwstnAuCVxzR0aKzMahXcnuZbcy7qYoU6tEsCkFS0CbXwWevf+vlvxwRXFJNyEGNjrAnAGcXkMq45CGsBcHPFx3EA8/eEIauzEsTSATCq5bFnie3aIkaeKUufGBqDLDqe+Jsg7ZiGb4bokL35Btd6LWJcAwplub8qNQDhuTvHB8C13tYA5BVrFR6/R2t44Og4GwC51LVDy+7V0+hzGq3/bADICNMTYMmAxZN2nw2AbyKvYDlu8e7GQjzHYDYAXAtJ2HVpf1c/y664BoyElPYLQ5T2d/XbAGgu1Xuvbhbwl4DLFDcfsE+gFKCr3+YDNh+gE3CZ1OYENye4I1BqOVsgNBAoBejqt90Cug/0ZVj+ByfIGrulWOoyxUqRIFNw/DM8bqNWbjkC/Gb/YTSi9QvwQwCQWSj1KzYLAJmdSX5pUWkHcwkR/l5bK7PP3H1XmU8blBNzQCY348YjwP/coHXkWk8LYHGXGyW/bFGPqwUABUorMPjOvVesc+XiAO+cphykZ1HeIqpcsGcu9vUUOeVcrP5Ia0gC9CyKZ4yF1PhbAs+ueOaaAoAZ5Juyl2Vx3kVxTJa46G35U/6r69ic3rk8FvBz8EfcoDG/tLe+P/j4G58kVqRCAAAAAElFTkSuQmCC>
            <div id=home-btn-tip>BACK HOME</div>
        </div>
    </a></div>
</body>
</html>