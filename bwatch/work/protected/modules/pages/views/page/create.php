<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs = array(
    'Pages' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Page', 'url' => array('index')),
    array('label' => 'Manage Page', 'url' => array('admin')),
);
?>
<div class="bs-docs-section">   
    <div class="row">                
        <div class="col-lg-6">
            <div class="page-header">
            <h1>Create Page</h1>    
            </div>
            <?php
            $this->widget(
                    'bootstrap.widgets.TbTabs', array(
                'type' => 'tabs', // 'tabs' or 'pills'
                'tabs' => array(
                    array(
                        'label' => 'Page Content',
                        'content' => '<div class="well"><fieldset>'.$this->renderPartial('application.modules.blog.views.post._form', 
                                     array('model' => $model),true).'</fieldset></div>',
                        'active' => true
                    ),
                    array('label' => 'Properties', 
                        'content' => '<div class="well"><fieldset>'.$this->renderPartial('_form', 
                                     array('model1' => $model1),true).'</fieldset></div>',
                        ),
                    //array('label' => 'Attachments', 'content' => 'Messages Content'),
                ),
                    )
            );
            ?>
        </div>
    </div><!-- form -->
</div>