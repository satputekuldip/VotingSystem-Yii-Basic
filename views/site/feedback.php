<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Feedback';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <div id="block-block-33" class="block block-block">


                <div class="content">
                    <div class="feedback_page_block">
                        <p>Thank You for visiting MyGov and becoming a stakeholder in the governance procedure of the
                            country. We would like to hear from you about your experience and get your valued feedback
                            on how we can make your participation in the governance process better.</p>
                        <p>In case you are facing any problem regarding the registration or login process, please do get
                            in touch with us through this form. We would be more than happy to get back to you and help
                            in solving issues you may be faced while browsing and/or participating through MyGov, as we
                            value your participation in MyGov.</p>
                        <p>Did not find your suggestions on the platform? Do not hesitate to get in touch with us with
                            the same we will address your issue at the earliest as we value your participation in the
                            MyGov Platform.</p>
                        <div><span>For details you can visit the <a href="/mygov-faq/" target="_blank"
                                                                    title="FAQ">FAQ</a> page.</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <div class="alert alert-success">
                    Thank you for contacting us. We will respond to you as soon as possible.
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    <?php if (Yii::$app->mailer->useFileTransport): ?>
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                            Please configure the
                        <code>useFileTransport</code> property of the <code>mail</code>
                        application component to be false to enable email sending.
                    <?php endif; ?>
                </p>

            <?php else: ?>

                <p>
                    If you have business inquiries or other questions, please fill out the following form to contact us.
                    Thank you.
                </p>

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>


            <?php endif; ?>
        </div>
    </div>
</div>
