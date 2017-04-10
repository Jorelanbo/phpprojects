<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\data\Employee */

$this->title = Yii::t('backend', 'Create Employee');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Employee'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>