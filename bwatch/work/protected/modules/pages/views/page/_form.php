<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="row">
    <div class="col-lg-4">                                    
        <div class="alert alert-dismissable alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>Fields with <span class="required">*</span> are required!</p>            
        </div>                                    
        <?php if (count($model1->getErrors()) > 0) { ?>
            <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p><?php echo $form->errorSummary($model1); ?></p> Change a few things up and try submitting again.
            </div>            
        <?php } ?>
    </div>     
</div>  
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1,'display_title'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model1,'display_title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'Display Title')); ?>
    </div>
</div> 	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1,'slug'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model1,'slug', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'Slug')); ?>
    </div>
</div> 	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1,'lookup'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model1,'lookup', array('class' => 'form-control', 'placeholder' => 'Look Up')); ?>
    </div>
</div> 	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1,'link'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model1,'link', array('size'=>60, 'maxlength'=>255, 'class' => 'form-control', 'placeholder' => 'Link')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'meta_title'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo CHtml::activeTextArea($model1, 'meta_title', array('rows' => 3, 'cols' => 70, 'class' => 'form-control', 'placeholder' => 'Title')); ?>
    </div>
</div>  	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'meta_description'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo CHtml::activeTextArea($model1, 'meta_description', array('rows' => 3, 'cols' => 70, 'class' => 'form-control', 'placeholder' => 'Meta Description')); ?>
    </div>
</div> 
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'meta_keywords'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo CHtml::activeTextArea($model1, 'meta_keywords', array('rows' => 3, 'cols' => 70, 'class' => 'form-control', 'placeholder' => 'Meta Keywords')); ?>
    </div>
</div>	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'parent'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo $form->textField($model1, 'parent', array('class' => 'form-control', 'placeholder' => 'Parent')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'position'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo $form->textField($model1, 'position', array('class' => 'form-control', 'placeholder' => 'Position')); ?>
    </div>
</div>	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'target'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo $form->textField($model1, 'target', array('class' => 'form-control', 'placeholder' => 'Target')); ?>
    </div>
</div>	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'visible'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo $form->textField($model1, 'visible', array('class' => 'form-control', 'placeholder' => 'Visible')); ?>
    </div>
</div>		
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <?php echo CHtml::submitButton($model1->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>                                
    </div>
</div>  	
<?php $this->endWidget(); ?>