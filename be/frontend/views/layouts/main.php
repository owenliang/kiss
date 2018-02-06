<?php $this->beginPage() ?>
<html>
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>

<?php $this->beginBody(); ?>
<?= $content ?>
<?php $this->endBody(); ?>

</html>
<?php $this->endPage() ?>
