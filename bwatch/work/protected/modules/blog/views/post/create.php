<?php
$this->breadcrumbs = array(
    'Create Post',
);
?>
<div class="bs-docs-section">   
    <div class="row">
        <div class="col-lg-6">
            <div class="well">                   
                <fieldset>                        
                    <legend>Create Post</legend>            
                    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>               
                </fieldset>                    
            </div>
        </div>
    </div><!-- form -->
</div>