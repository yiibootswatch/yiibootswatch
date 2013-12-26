<?php
$this->breadcrumbs = array(
    $model->title => $model->url,
    'Update',
);
?>
<div class="bs-docs-section">   
    <div class="row">
        <div class="col-lg-6">
            <div class="well">                   
                <fieldset>                        
                    <legend>Update <i><?php echo CHtml::encode($model->title); ?></i></legend>            
                    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>    
                </fieldset>                    
            </div>
        </div>
    </div><!-- form -->
</div>