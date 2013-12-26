<div class="bs-docs-section">   
    <?php if (!empty($_GET['tag'])): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-4">   
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                'template' => "{items}\n{pager}",
            ));
            ?>
        </div>
    </div>
</div>    