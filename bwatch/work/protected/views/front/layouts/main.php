<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <?php /* ?><link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
          <!--[if lt IE 8]>
          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
          <![endif]-->

          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
          <?php */ ?>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .nav li {
                padding-top: 5px;
            }

            .sidebar-nav {
                padding: 9px 0;
            }
            .leaderboard {
                padding: 60px;
                margin-bottom: 30px;
                background-image: url('/twitter-bootstrap/images/gridbg.gif');
                background-repeat:repeat;
                -webkit-border-radius: 6px;
                -moz-border-radius: 6px;
                border-radius: 6px;
            }
            .leaderboard h1 {
                font-size: 40px;
                margin-bottom: 5px;
                line-height: 1;
                letter-spacing: -1px;
                color:#FF6600;
            }
            .leaderboard p {
                font-size: 18px;
                font-weight: 200;
                line-height: 27px;
            }

            .well {
                background-image: url('/twitter-bootstrap/images/gridbg.gif');
                background-repeat:repeat;
                -webkit-border-radius: 6px;
                -moz-border-radius: 6px;
                border-radius: 6px;
            }

            .nav .nav-header {
                font-size: 18px;
                color:#FF9900;
            }

        </style>
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
                    <div class="leaderboard">
                        <h1>Learn. Practice. Develop.</h1>
                        <p>w3resource offers web development tutorials. We believe in Open Source. Love standards. And prioritize simplicity 				             and readability while serving content.</p>
                        <p><a class="btn btn-success btn-large">Join w3resource now</a></p>
                    </div>
                    <div class="row-fluid">
                        <div class="span4">
                            <h2>Learn</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class="btn btn-success btn-large" href="#">Start Learning now</a></p>
                        </div><!--/span-->
                        <div class="span4">
                            <h2>Practice</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class="btn btn-success btn-large" href="#">Start percticing now</a></p>
                        </div><!--/span-->
                        <div class="span4">
                            <h2>Develop</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class="btn btn-success btn-large" href="#">Start developing now</a></p>
                        </div><!--/span-->
                    </div><!--/row-->
                    <hr>
                        <footer>
                            <p>&copy; Company 2012</p>
                        </footer>

                </div>
            </div>
        </div><!--/.fluid-container-->

                </body>
                </html>
