<?php
/* @var $this Controller */
Yii::app()->clientScript->scriptMap = array(
    //'bootstrap.css' => false, 
    //'bootstrap.min.css' => false,  
    'bootstrap-yii.css' => false,
    'jquery-ui-bootstrap.css' => false,
    'jquery.js' => false,
    'jquery-ui.min.js' => false,
    'jqui-tb-noconflict.js' => false,
    'bootstrap.min.js' => false,
    'bootbox.min.js' => false,
    'notify.min.js' => false,
);
Yii::app()->clientscript        
        ->registerCssFile(Yii::app()->request->baseUrl . '/themes/font-awesome/css/font-awesome.min.css')
        ->registerCssFile(Yii::app()->request->baseUrl . '/themes/assets/css/style.css')                
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <!-- blueprint CSS framework -->                
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>        
<!--        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />-->
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><img src="/images/w3r.png" width="111" height="30" alt="w3resource logo" /></a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Frontend</li>
                            <li class="active"><a href="#">HTML 4.01</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">Twitter Bootstrap</a></li>
                            <li><a href="#">Firebug</a></li>
                            <li class="nav-header">Backend</li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">SQL</a></li>
                            <li><a href="#">MySQL</a></li>
                            <li><a href="#">PostgreSQL</a></li>
                            <li><a href="#">MongoDB</a></li>
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span9">
<?php echo $content; ?>
                    <hr>
                        <footer>
                            <p>&copy; Company 2012</p>
                        </footer>
                </div>
            </div>
        </div><!--/.fluid-container-->
<!--        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/jquery.min.js"></script>        -->
<!--	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/bootstrap.min.js"></script>        	-->
<!--	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/bootswatch.js"></script> -->
    </body>
</html>
