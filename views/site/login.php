<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'OLC Admin Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="img-login">
<img src="<?php echo Yii::$app->request->baseUrl;?>/images/dashboard_logo.png">
</div>
<div class="site-login">
    
    <h1>Login to your account</h1>


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

   
    <?= Html::activeTextInput($model, 'username', ['class' => 'form-control']); ?>
    <?= Html::activeTextInput($model, 'password', ['class' => 'form-control','type'=>'password']); ?>

    


    <div class="form-group">
        <div class="col-lg-12 login-btn">
            <?= Html::submitButton('Login', ['class' => 'btn btn-danger', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        
       
    </div>
</div>
