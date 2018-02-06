<?php
/* @var $this yii\web\View */
$this->title = "index页面";

$this->registerCssFile("/css/main.css?ver=1");

?>
<h1>test/index</h1>

<?php
echo \yii\helpers\HtmlPurifier::process('<a></a>');
?>

<table>
    <?php foreach ($cars as $car) { ?>
        <tr>
            <td><?= $car['id'] ?></td>
            <td><?= $car['name'] ?></td>
        </tr>
    <?php } ?>
</table>