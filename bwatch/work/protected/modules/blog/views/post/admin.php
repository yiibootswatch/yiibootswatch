<?php
$this->breadcrumbs = array(
    'Manage Posts',
);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1 id="tables">Manage Posts</h1>
        </div>
        <div class="bs-example table-responsive">

            <?php
            //$this->widget('zii.widgets.grid.CGridView', array(
            $this->widget('bootstrap.widgets.TbExtendedGridView', array(
                //'itemsCssClass' => 'table table-striped table-bordered table-hover',
                'dataProvider' => $model->search(),
                'type'=>'striped bordered hover',
                //'filter'=>$model,
                'columns' => array(
                    array(
                        'name' => 'title',
                        'type' => 'raw',
                        'value' => 'CHtml::link(CHtml::encode($data->title), $data->url)',
                        'filter' => false,
                    ),
                    array(
                        'name' => 'status',
                        'value' => 'Lookup::item("PostStatus",$data->status)',
                    //'filter'=>Lookup::items('PostStatus'),
                    ),
                    array(
                        'name' => 'create_time',
                        'type' => 'datetime',
                        'filter' => false,
                    ),
                    array(
                        'header' => 'Actions&nbsp;&nbsp;&nbsp;&nbsp;',
                        'class' => 'CButtonColumn',
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</div>