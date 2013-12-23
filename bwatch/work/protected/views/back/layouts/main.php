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
    <body>
        <div class="navbar navbar-default navbar-fixed-top">	  	
            <div class="container">
                <div class="navbar-header">
                    <a href="../" class="navbar-brand">Blog</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo $this->createUrl('/'); ?>">Home</a>
                        </li>                        
                        <li>
                            <a href="<?php echo $this->createUrl('/site/page/view/about'); ?>">About</a>
                        </li>
                        <li>
                            <a href="<?php echo $this->createUrl('/site/contact'); ?>">Contact</a>
                        </li>
                        <li>
                            <a href="<?php echo $this->createUrl('/blog/post/index'); ?>">Blog</a>
                        </li>
                        <?php if(Yii::app()->user->isGuest) { ?>
                        <li>
                            <a href="<?php echo $this->createUrl('/site/login'); ?>">Login</a>
                        </li>
                        <?php } else if(!Yii::app()->user->isGuest) { ?>
                        <li>
                            <a href="<?php echo $this->createUrl('/site/logout'); ?>">Logout (<?php echo Yii::app()->user->name ?>)</a>
                        </li>
                        <?php } ?>                                                                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="themes">
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/default'); ?>">Default</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/amelia'); ?>">Amelia</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/cerulean'); ?>">Cerulean</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/cosmo'); ?>">Cosmo</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/cyborg'); ?>">Cyborg</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/flatly'); ?>">Flatly</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/journal'); ?>">Journal</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/readable'); ?>">Readable</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/simplex'); ?>">Simplex</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/slate'); ?>">Slate</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/spacelab'); ?>">Spacelab</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/united'); ?>">United</a></li>
                                <li><a tabindex="-1" href="<?php echo $this->createUrl('/site/index/mytheme/yeti'); ?>">Yeti</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>   
       <div class="container">             
            <?php echo $content; ?>       
        </div>
        <div id="footer">
            <div class="container">
                <p class="muted credit">Example courtesy Martin Bean Ryan Fait.</p>
            </div>
        </div>     
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/jquery.min.js"></script>        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/assets/js/toggle.js"></script>         
    </body>
</html>