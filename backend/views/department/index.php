<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Department', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'company_id',
                'label' => 'Company Name',      // set label from 'Company ID' to 'Company Name'
                'value' => 'company.company_name',
            ],  //filter
            //'company.company_name',     //refer to company id
            //'department_id',
            'department_name',
            //'company_id',
            'department_created_date',
            //'department_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
