<?php
$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>
<div class="bs-docs-section">   
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="forms">Contact Us</h1>
            </div>
        </div>
    </div>
    <?php if (Yii::app()->user->hasFlash('contact')): ?>
        <div class="row">
            <div class="col-lg-4">
                <div class="alert alert-dismissable alert-success">                   
                    <p><?php echo Yii::app()->user->getFlash('contact'); ?></p>
                </div>
            </div>
        </div>
    <?php else: ?>

        <?php $form = $this->beginWidget('CActiveForm'); ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="well">                   
                        <fieldset>                        
                            <legend>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</legend>                        
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
                                <label for="inputEmail" class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'name'); ?></label>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Name')); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'email'); ?></label>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => 'Email')); ?>                                
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'subject'); ?></label>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control', 'placeholder' => 'Subject')); ?>                              
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'body'); ?></label>
                                <div class="col-lg-10">
                                    <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'placeholder' => 'Content')); ?>                        
                                </div>
                            </div>
                            <?php if (CCaptcha::checkRequirements()): ?>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'verifyCode'); ?></label>
                                    <div class="col-lg-10">
                                        <?php $this->widget('CCaptcha'); ?>                                        
                                        <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>      
                                        <span class="help-block">
                                                Please enter the letters as they are shown in the image above.
                                                <br/>Letters are not case-sensitive.   
                                        </span>                                                                                                                            
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>                                
                                </div>
                            </div>
                        </fieldset>                    
                </div>
            </div>      
        </div>
        <?php $this->endWidget(); ?>
    <?php endif; ?>
</div>