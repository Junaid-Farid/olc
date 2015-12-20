<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-text">
        <div class="col-md-12">
            <h4>Configure Account</h4>
            <p class="p5">Configure Account setting for all user accounts. </p>

        </div>
    </div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureprograms') ?>">Loud</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configaccount') ?>">Configure</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/userconfig') ?>">User</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/userapplication') ?>">Archive</a></li>

        </ul>
    </div>
</div>
<div class="users-index">

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            'user_id',
            'first_name',
            'last_name',
            'ssn',
            'city',
            'state',
            'zip',
            ['class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]);
    ?>

</div>
