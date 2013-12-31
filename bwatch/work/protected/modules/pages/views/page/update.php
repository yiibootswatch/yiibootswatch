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
            <div class="page-header">
                <h1>Update <i><?php echo CHtml::encode($model1->display_title); ?></i></h1>    
            </div>
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'page-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
                'htmlOptions'=>array('enctype'=>'multipart/form-data'),
            ));
            ?>
            <div class="row">
                <div class="col-lg-4">                                    
                    <div class="alert alert-dismissable alert-warning">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>Fields with <span class="required">*</span> are required!</p>            
                    </div>                                    
                    <?php if (count($model->getErrors()) > 0 || count($model1->getErrors()) > 0) { ?>
                        <div class="alert alert-dismissable alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p><?php echo $form->errorSummary(array($model, $model1)); ?></p> Change a few things up and try submitting again.
                        </div>            
                    <?php } ?>
                </div>     
            </div>             
                    <?php
                    $this->widget(
                            'bootstrap.widgets.TbTabs', array(
                        'type' => 'tabs', // 'tabs' or 'pills'
                        'tabs' => array(
                            array(
                                'label' => 'Page Content',
                                'content' => $this->renderPartial('_postform', array('model' => $model, 'form' => $form), true),
                                'active' => true
                            ),
                            array('label' => 'Properties',
                                'content' => $this->renderPartial('_form', array('model1' => $model1, 'form' => $form), true),
                            ),
                            array('label' => 'Attachments', 
                                'content' => $this->renderPartial('_attachmentform', array('model2' => $model2, 'form' => $form), true),
                            ),
                        ),
                            )
                    );
                    ?>                      
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>                                
                </div>
            </div> 
            <?php $this->endWidget(); ?>
        </div>
    </div><!-- form -->
</div>