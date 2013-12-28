<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'View Page', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>
<div class="bs-docs-section">   
    <div class="row">
        <div class="col-lg-6">
            <div class="well">                   
                <fieldset>                        
                    <legend>Update <i><?php echo CHtml::encode($model->display_title); ?></i></legend>            
                    <?php echo $this->renderPartial('_form', array('model' => $model, 'model1' => $model1)); ?>    
                </fieldset>                    
            </div>
        </div>
    </div><!-- form -->
</div>