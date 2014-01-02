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
            <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'link'); ?></label>
            <div class="col-lg-10">
                <?php echo $form->textField($model1, 'link', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'Link')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'parent'); ?></label>
            <div class="col-lg-10">                                      
                <?php 
                
                $model1->loadPages();
                echo $form->textField($model1, 'parent', array('class' => 'form-control', 'placeholder' => 'Parent')); ?>
            </div>
        </div>        
        <div class="form-group">
            <label class="col-lg-2 control-label"><?php echo $form->labelEx($model1, 'target'); ?></label>
            <div class="col-lg-10">                                      
                <?php echo $form->dropDownList($model1, 'target', array('0'=>'Same Window', '1'=>'New Window'), array('class' => 'form-control')); ?>                                   
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
    </fieldset>
</div>  