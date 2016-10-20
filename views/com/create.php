<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\com */

$this->title = 'Create Com';
$this->params['breadcrumbs'][] = ['label' => 'Coms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
