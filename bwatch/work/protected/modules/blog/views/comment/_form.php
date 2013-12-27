<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>true,
)); ?>
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
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model,'author'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'author', array('size' => 80, 'maxlength' => 128, 'class' => 'form-control', 'placeholder' => 'Author')); ?>
    </div>
</div>   	
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model,'email'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control', 'placeholder' => 'Email')); ?>
    </div>
</div>  
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model,'url'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'url', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control', 'placeholder' => 'URL')); ?>
    </div>
</div> 
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'content'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo CHtml::activeTextArea($model, 'content', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'placeholder' => 'Content')); ?>
    </div>
</div> 
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class' => 'btn btn-primary')); ?>                                
    </div>
</div>    	
<?php $this->endWidget(); ?>