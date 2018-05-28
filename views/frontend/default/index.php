<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uyarılar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alert-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Uyarı Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'turu',
            'icerigi:ntext',
            'ismi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
