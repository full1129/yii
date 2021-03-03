<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oadode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oadode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'application_id')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'legal_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_mailing_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application_type')->textInput() ?>

    <?= $form->field($model, 'business_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang')->textInput() ?>

    <?= $form->field($modelDescription, 'description')->textInput() ?>

    <?= $form->field($modelDescription, 'ecl_group')->textInput() ?>

    <?= $form->field($modelDescription, 'ecl_item')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
