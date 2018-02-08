<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Voter */

$this->title = 'Create Voter';
$this->params['breadcrumbs'][] = ['label' => 'Voters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
