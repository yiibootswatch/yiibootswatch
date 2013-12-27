<?php
$this->breadcrumbs = array(
    'Comments',
);
?>
<div class="bs-docs-section">   
    <div class="row">
        <div class="col-lg-4">  
            <div class="page-header">
                <h1>Comments</h1>
            </div>
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
            ));
            ?>
        </div>
    </div>
</div>   