<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
//$this->registerCssFile('Login_CSS/vendor/bootstrap/css/bootstrap.min.css');
$this->registerCssFile('Login_CSS/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
$this->registerCssFile('Login_CSS/fonts/iconic/css/material-design-iconic-font.min.css');
$this->registerCssFile('Login_CSS/vendor/animate/animate.css');
$this->registerCssFile('Login_CSS/vendor/css-hamburgers/hamburgers.min.css');
$this->registerCssFile('Login_CSS/vendor/animsition/css/animsition.min.css');
$this->registerCssFile('Login_CSS/vendor/select2/select2.min.css');
$this->registerCssFile('Login_CSS/vendor/daterangepicker/daterangepicker.css');
$this->registerCssFile('Login_CSS/css/util.css');
$this->registerCssFile('Login_CSS/css/main.css');

$this->registerJsFile('Login_CSS/vendor/jquery/jquery-3.2.1.min.js');
$this->registerJsFile('Login_CSS/vendor/animsition/js/animsition.min.js');
$this->registerJsFile('Login_CSS/vendor/bootstrap/js/popper.js');
//$this->registerJsFile('Login_CSS/vendor/bootstrap/js/bootstrap.min.js');
$this->registerJsFile('Login_CSS/vendor/select2/select2.min.js');
$this->registerJsFile('Login_CSS/vendor/daterangepicker/moment.min.js');
$this->registerJsFile('Login_CSS/vendor/daterangepicker/daterangepicker.js');
$this->registerJsFile('Login_CSS/vendor/countdowntime/countdowntime.js');
$this->registerJsFile('Login_CSS/js/main.js');

?>
<div class="site-login" style="background-image: url('Login_CSS/images/bg-01.jpg');">
    <div class="limiter">
        <div class="container-login100">
            <div align="center">
                <div class="wrap-login100">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                    <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                    <p style="color: #fff;">Please fill out the following fields to login:</p>
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "<div  data-validate=\"Enter username\">{input}</div>",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],

                        ],
                        'class' => 'login100-form validate-form',

                    ]); ?>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <?= $form->field($model, 'username')->textInput(['class' => 'input100', 'placeholder' => 'Username']) ?>


                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <?= $form->field($model, 'password')->passwordInput(['class' => 'input100', 'placeholder' => 'Password']) ?>
                    </div>

                    <div class="contact100-form-checkbox">
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"input-checkbox100\" id=\"ckb1\">{input} {label}</div><div id=\"ckb1\" class=\"input-checkbox100\">{error}</div>",
                        ]) ?>
                    </div>


                    <div class="form-group">
                        <div class="container-login100-form-btn">
                            <?= Html::submitButton('Login', ['class' => 'login100-form-btn', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
