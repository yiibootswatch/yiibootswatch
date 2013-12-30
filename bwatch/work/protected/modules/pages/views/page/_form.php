<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?> 
<div class="well">
    <fieldset>
        <div class="form-group">
            <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'display_title'); ?></label>
            <div class="col-lg-10">
                <?php echo $form->textField($model1, 'display_title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'Display Title')); ?>
            </div>
        </div> 	
        <div class="form-group">
            <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'slug'); ?></label>
            <div class="col-lg-10">
                <?php echo $form->textField($model1, 'slug', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'Slug')); ?>
            </div>
        </div> 	
        <div class="form-group">
            <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'lookup'); ?></label>
            <div class="col-lg-10">
                <?php echo $form->textField($model1, 'lookup', array('class' => 'form-control', 'placeholder' => 'Look Up')); ?>
            </div>
        </div> 	
        <div class="form-group">
            <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'link'); ?></label>
            <div class="col-lg-10">
                <?php echo $form->textField($model1, 'link', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'Link')); ?>
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
    </fieldset>
</div>  