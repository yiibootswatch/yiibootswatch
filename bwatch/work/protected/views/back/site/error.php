<?php
$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>
<div class="bs-docs-section">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h2>Error <?php echo $code; ?></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="alert alert-dismissable alert-danger">            
                <p><?php echo CHtml::encode($message); ?></p>
            </div>
        </div>          
    </div>
</div>