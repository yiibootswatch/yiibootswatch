<?php
$this->breadcrumbs = array(
    'Comments' => array('index'),
    'Update Comment #' . $model->id,
);
?>
<div class="bs-docs-section">   
    <div class="row">
        <div class="col-lg-6">
            <div class="well">                   
                <fieldset>                        
                    <legend>Update Comment #<?php echo $model->id; ?></legend>  
                    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
                </fieldset>                    
            </div>
        </div>
    </div><!-- form -->
</div>