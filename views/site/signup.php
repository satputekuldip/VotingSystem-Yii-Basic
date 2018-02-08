<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>



    <div class="jumbotron">
        <h1>Sign Up For!</h1>

        <p>
            <?= Html::button('Voter', ['value' => Url::to('index.php?r=voter/create'), 'class' => 'btn btn-raised btn-success', 'style'=>'width: 200px; height: 60px', 'id'=>'voterRegistration']) ?><span/>
            <?= Html::button('Candidate', ['value' => Url::to('index.php?r=candidate/create'), 'class' => 'btn btn-raised btn-success', 'style'=>'width: 200px; height: 60px', 'id'=>'candidateRegistration']) ?>
        </p>

        <?php
        Modal::begin([
            'header' => '<h4>Voter</h4>',
            'id' => 'modalVoter',
            'size' => 'modal-lg'
        ]);
        echo "<div id='modalVoterContent'></div>";
        Modal::end();
        ?>

        <?php
        Modal::begin([
            'header' => '<h4>Candidate</h4>',
            'id' => 'modalCandidate',
            'size' => 'modal-lg'
        ]);
        echo "<div id='modalCandidateContent'></div>";
        Modal::end();
        ?>


    </div>

</div>
