<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VoterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Voters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voter-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Voter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'UID',
            'first_name',
            'middle_name',
            // 'last_name',
            // 'contact_no',
            // 'email:email',
            // 'state_id',
            // 'dist_id',
            // 'city_id',
            // 'address1:ntext',
            // 'address2:ntext',
            // 'pincode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
