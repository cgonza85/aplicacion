<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Por favor ingresa tus datos:</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"> <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span> <?php echo Yii::t('AweCrud.app', 'are required') ?></p>

	<?php echo $form->textFieldRow($model,'username'); ?>

	<?php echo $form->passwordFieldRow($model,'password',array(
        'hint'=>'Datos: <kbd>admin</kbd>/<kbd>admin</kbd>',
    )); ?>

	<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Login',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
