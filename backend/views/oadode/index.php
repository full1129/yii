<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Oadodes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oadode-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Oadode'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'application_id',
            'customer_id',
            'user_id',
            'legal_name',
            //'business_name',
            //'business_address',
            //'business_mailing_address',
            //'business_phone',
            //'business_fax',
            //'business_email:email',
            //'application_type',
            //'business_title',
            //'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
