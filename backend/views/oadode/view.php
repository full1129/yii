<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Oadode */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Oadodes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="oadode-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        // 'modelDescription' => $modelDescription,
        'attributes' => [
            'id',
            'application_id',
            'customer_id',
            'user_id',
            'legal_name',
            'business_name',
            'business_address',
            'business_mailing_address',
            'business_phone',
            'business_fax',
            'business_email:email',
            'application_type',
            'business_title',
            'lang',
            [
                'attribute'=>'description',
                'value'=>$modelDescription->description,
            ],
            [
                'attribute'=>'ecl_group',
                'value'=>$modelDescription->ecl_group,
            ],
            [
                'attribute'=>'ecl_item',
                'value'=>$modelDescription->ecl_item,
            ],
        ],
    ]) ?>

</div>
