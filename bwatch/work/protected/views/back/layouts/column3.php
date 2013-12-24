<?php
Yii::app()->clientScript->scriptMap = array(
    'bootstrap.css' => false,
    'bootstrap.min.css' => false,
    'jquery.js' => false,
    'bootstrap.min.js' => false,
        //'bootstrap-yii.css' => false,
        //'jquery-ui-bootstrap.css' => false,    
        //'jquery-ui.min.js' => false,
        //'jqui-tb-noconflict.js' => false,    
        //'bootbox.min.js' => false,
        //'notify.min.js' => false,
);

Yii::app()->clientscript
        ->registerCssFile(Yii::app()->request->baseUrl . '/themes/font-awesome/css/font-awesome.min.css')
        ->registerCssFile(Yii::app()->request->baseUrl . '/themes/assets/css/offcanvas.css')        
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootswatch: Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
          <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" media="screen" />
    </head>
    <body style="padding-top:20px;">          
       <div class="container">             
            <?php echo $content; ?>       
        </div>
        <div id="footer">
            <div class="container">
                <p class="muted credit"></p>
            </div>
        </div>     
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/jquery.min.js"></script>        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/toggle.js"></script>         
    </body>
</html>