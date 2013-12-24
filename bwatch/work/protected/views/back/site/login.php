<?php
$this->pageTitle = Yii::app()->name . ' - Login';
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableAjaxValidation' => true,
        ));
?>
<div class="bs-docs-section">    
    <div class="row">
        <div class="col-lg-6">
            <div class="well">
                <form class="bs-example form-horizontal">
                    <fieldset>                        
                        <legend>Login</legend>                        
                            <div class="row">
                                <div class="col-lg-4">                                    
                                    <div class="alert alert-dismissable alert-warning">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <p>Fields with <span class="required">*</span> are required!</p>            
                                    </div>                                    
                                    <?php if (count($model->getErrors()) > 0) { ?>
                                        <div class="alert alert-dismissable alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <p><?php echo $form->errorSummary($model); ?></p> Change a few things up and try submitting again.
                                        </div>            
                                    <?php } ?>
                                </div>     
                            </div>                        
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'username'); ?></label>
                            <div class="col-lg-10">
                                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'password'); ?></label>
                            <div class="col-lg-10">
                                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>                               
                                <div class="checkbox">
                                    <label>
                                        <?php echo $form->checkBox($model, 'rememberMe'); ?> Remember Me                                        
                                    </label>                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>                                
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>      
    </div>
</div>
<?php $this->endWidget(); ?>