<?php $form = $this->beginWidget('CActiveForm'); ?>
<div class="row">
    <div class="col-lg-4">                                    
        <div class="alert alert-dismissable alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>Fields with <span class="required">*</span> are required!</p>            
        </div>                                    
        <?php if (count($model->getErrors()) > 0) { ?>
            <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p><?php echo CHtml::errorSummary($model); ?></p> Change a few things up and try submitting again.
            </div>            
        <?php } ?>
    </div>     
</div>                        
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'title'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'title', array('size' => 80, 'maxlength' => 128, 'class' => 'form-control', 'placeholder' => 'Title')); ?>
    </div>
</div>        
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'content'); ?></label>
    <div class="col-lg-10">                                      
        <?php echo CHtml::activeTextArea($model, 'content', array('rows' => 10, 'cols' => 70, 'class' => 'form-control', 'placeholder' => 'Content')); ?>
    </div>
</div>  
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'tags'); ?></label>
    <div class="col-lg-10">
        <?php
        $this->widget('CAutoComplete', array(
            'model' => $model,
            'attribute' => 'tags',
            'url' => array('suggestTags'),
            'multiple' => true,
            'htmlOptions' => array('size' => 50, 'class' => 'form-control'),
        ));
        ?>
        <span class="help-block">Please separate different tags with commas.</span>
    </div>
</div> 
<div class="form-group">
    <label class="col-lg-2 control-label"><?php echo $form->labelEx($model, 'status'); ?></label>
    <div class="col-lg-10">
        <?php echo $form->dropDownList($model, 'status', Lookup::items('PostStatus'), array('class' => 'form-control')); ?>                    
    </div>
</div>  
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>                                
    </div>
</div>            
<?php $this->endWidget(); ?>