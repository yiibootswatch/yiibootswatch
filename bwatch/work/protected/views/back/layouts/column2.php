<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">   
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="well sidebar-nav">            
                <ul class="nav">
                    <?php if (!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

                    <?php
                    $this->widget('TagCloud', array(
                        'maxTags' => Yii::app()->params['tagCloudCount'],
                    ));

                    $this->widget('RecentComments', array(
                        'maxComments' => Yii::app()->params['recentCommentCount'],
                    ));
                    ?>
                </ul>
            </div><!--/.well -->
        </div><!--/span--> 
        <div class="col-xs-12 col-sm-9">                
            <div class="row">            
                <div class="col-12 col-sm-12 col-lg-8">                                                 
                    <div class="pull-left visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </div> 
                    <!--            <ul class="breadcrumb">                                        
                                    <li class="active">Taxonomies</li>
                                </ul> Breadcrumb                 
                                <div class="page-header" style="margin-top:0px;">                 
                                    <h1 id="forms">Taxonomies</h1>
                                </div>   Page Header  -->
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo $content; ?>
                        </div>                    
                    </div>
                </div><!--/span-->                     
            </div><!--/row-->
        </div><!--/span-->       
    </div><!--/row-->    
</div>
<?php /* <div class="span-5 last">
  <div id="sidebar">
  <?php
  $this->beginWidget('zii.widgets.CPortlet', array(
  'title' => 'Operations',
  ));
  $this->widget('zii.widgets.CMenu', array(
  'items' => $this->menu,
  'htmlOptions' => array('class' => 'operations'),
  ));
  $this->endWidget();
  ?>
  </div><!-- sidebar -->

  </div><?php */ ?>
<?php $this->endContent(); ?>